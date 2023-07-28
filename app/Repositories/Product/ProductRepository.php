<?php


namespace App\Repositories\Product;


use App\Models\Product;
use App\Models\ProductCategory;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    private function sortAndPagination($products, Request $request)
    {
        $perPage = $request->show ?? 6;
        $sortBy = $request->sort_by ?? 'latest';

        switch ($sortBy) {
            case 'latest':
                $products = $products->orderBy('id');
                break;
            case 'oldest':
                $products = $products->orderByDesc('id');
                break;
            case 'name-asc':
                $products = $products->orderBy('name');
                break;
            case 'name-desc':
                $products = $products->orderByDesc('name');
                break;
            case 'price-asc':
                $products = $products->orderBy('price');
                break;
            case 'price-desc':
                $products = $products->orderByDesc('price');
                break;
            default:
                $products = $products->orderBy('id');
                break;
        }

        $products = $products->paginate($perPage);

        $products->appends(['sort_by' => $sortBy, 'show' => $perPage]);

        return $products;
    }

    function getModel()
    {
        return Product::class;
    }

    public function getRelatedProducts($product, $limit = 4)
    {
        return $this->model->where('product_category_id', $product->product_category_id)
            ->where('tag', $product->tag)
            ->limit($limit)
            ->get();
    }

    public function getFeaturedProductsByCategory($categoryId)
    {
        return $this->model->where('featured' , true)
            ->where('product_category_id', $categoryId)
            ->get();
    }

    public function getProductOnIndex($request)
    {
        $search = $request->search ?? '';

        $products = $this->model->where('name', 'like', '%' .$search. '%');

        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($products, $request);

        return $products;
    }

    public function getProductByCategory($categoryName, $request)
    {
        $products = ProductCategory::where('name', $categoryName)->first()->products->toQuery();

        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($products, $request);

        return $products;
    }

    public function getProductByTag($tagName, $request)
    {
        $products = Product::where('tag', $tagName);

        $products = $this->filter($products, $request);
        $products = $this->sortAndPagination($products, $request);

        return $products;
    }

    public function filter($products, Request $request)
    {
        $brands = $request->brand ?? [];
        $brandIds = array_keys($brands);
        $products = $brandIds != null ? $products->whereIn('brand_id', $brandIds) : $products;


        $priceMin = str_replace('$', '', request('price-min'));
        $priceMax = str_replace('$', '', request('price-max'));
        $products = ($priceMin != null && $priceMax != null)
            ? $products->whereBetween('price', [$priceMin, $priceMax])
            : $products;


        $color = $request->color;
        $products = $color != null ? $products->whereHas('productDetails', function ($query) use ($color) {
            return $query->where('color', $color)
                ->where('qty', '>', 0);
        }) : $products;

        $size = $request->size;
        $products = $size != null ? $products->whereHas('productDetails', function ($query) use ($size) {
            return $query->where('size', $size)
                ->where('qty', '>', 0);
        }) : $products;

        return $products;
    }
}
