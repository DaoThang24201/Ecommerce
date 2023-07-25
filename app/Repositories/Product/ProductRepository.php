<?php


namespace App\Repositories\Product;


use App\Models\Product;
use App\Repositories\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{

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
}
