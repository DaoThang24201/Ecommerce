<?php

namespace App\Providers;

use App\Repositories\Blog\BlogRepository;
use App\Repositories\Blog\BlogRepositoryInterface;
use App\Repositories\Brand\BrandRepository;
use App\Repositories\Brand\BrandRepositoryInterface;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderDetail\OrderDetailRepository;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use App\Repositories\ProductCategory\ProductCategoryRepository;
use App\Repositories\ProductCategory\ProductCategoryRepositoryInterface;
use App\Repositories\ProductComment\ProductCommentRepository;
use App\Repositories\ProductComment\ProductCommentRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Blog\BlogService;
use App\Services\Blog\BlogServiceInterface;
use App\Services\Brand\BrandService;
use App\Services\Brand\BrandServiceInterface;
use App\Services\Order\OrderService;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailService;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
use App\Services\ProductCategory\ProductCategoryService;
use App\Services\ProductCategory\ProductCategoryServiceInterface;
use App\Services\ProductComment\ProductCommentService;
use App\Services\ProductComment\ProductCommentServiceInterface;
use App\Services\User\UserService;
use App\Services\User\UserServiceInterface;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //Product
        $this->app->bind(
            ProductRepositoryInterface::class,
            ProductRepository::class
        );
        $this->app->bind(
            ProductServiceInterface::class,
            ProductService::class
        );

        //Product Comment
        $this->app->bind(
        ProductCommentRepositoryInterface::class,
        ProductCommentRepository::class
        );
        $this->app->bind(
            ProductCommentServiceInterface::class,
            ProductCommentService::class
        );

        //Blog
        $this->app->bind(
            BlogRepositoryInterface::class,
            BlogRepository::class
        );
        $this->app->bind(
            BlogServiceInterface::class,
            BlogService::class
        );

        //Product Category
        $this->app->bind(
            ProductCategoryRepositoryInterface::class,
            ProductCategoryRepository::class
        );
        $this->app->bind(
            ProductCategoryServiceInterface::class,
            ProductCategoryService::class
        );

        //Brand
        $this->app->bind(
            BrandRepositoryInterface::class,
            BrandRepository::class
        );
        $this->app->bind(
            BrandServiceInterface::class,
            BrandService::class
        );

        //Order
        $this->app->bind(
            OrderRepositoryInterface::class,
            OrderRepository::class
        );
        $this->app->bind(
            OrderServiceInterface::class,
            OrderService::class
        );

        //OrderDetail
        $this->app->bind(
            OrderDetailRepositoryInterface::class,
            OrderDetailRepository::class
        );
        $this->app->bind(
            OrderDetailServiceInterface::class,
            OrderDetailService::class
        );

        //User
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->bind(
            UserServiceInterface::class,
            UserService::class
        );


    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

    }
}
