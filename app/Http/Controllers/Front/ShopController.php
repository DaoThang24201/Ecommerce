<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $productService;
    private $productCommentService;
    private $productCategoryService;
    private $brandService;

    public function __construct(ProductServiceInterface $productService,
                                ProductCommentServiceInterface $productCommentService,
                                ProductCategoryServiceInterface $productCategoryService,
                                BrandServiceInterface $brandService)
    {
        $this->productService = $productService;
        $this->productCommentService = $productCommentService;
        $this->productCategoryService = $productCategoryService;
        $this->brandService = $brandService;
    }

    public function index(Request $request)
    {
        $products = $this->productService->getProductOnIndex($request);
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $tags = array_unique(array_column($this->productService->all()->toArray(), 'tag' ));

        return view('front.shop.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'tags' => $tags,
        ]);
    }

    public function category($categoryName, Request $request)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $products = $this->productService->getProductByCategory($categoryName, $request);
        $tags = array_unique(array_column($this->productService->all()->toArray(), 'tag' ));

        return view('front.shop.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'tags' => $tags,
        ]);
    }

    public function tag($tagName, Request $request)
    {
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $products = $this->productService->getProductByTag($tagName, $request);
        $tags = array_unique(array_column($this->productService->all()->toArray(), 'tag' ));

        return view('front.shop.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'tags' => $tags,
        ]);
    }

    public function show($id)
    {
        $product = $this->productService->find($id);
        $relatedProducts = $this->productService->getRelatedProducts($product);
        $categories = $this->productCategoryService->all();
        $brands = $this->brandService->all();
        $tags = array_unique(array_column($this->productService->all()->toArray(), 'tag' ));

        return view('front.shop.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
            'categories' => $categories,
            'brands' => $brands,
            'tags' => $tags,
        ]);
    }

    public function postComment(Request $request)
    {
        $this->productCommentService->create($request->all());

        return redirect()->back();
    }
}
