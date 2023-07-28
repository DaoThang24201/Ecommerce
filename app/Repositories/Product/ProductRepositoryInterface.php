<?php


namespace App\Repositories\Product;

use App\Repositories\RepositoryInterface;

interface ProductRepositoryInterface extends RepositoryInterface
{
    public function getRelatedProducts($product, $limit = 4);

    public function getFeaturedProductsByCategory($categoryId);

    public function getProductOnIndex($request);

    public function getProductByCategory($categoryName, $request);

    public function getProductByTag($tagName, $request);

}
