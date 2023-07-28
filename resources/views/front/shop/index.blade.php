
@extends('front.layout.master')

@section('title', 'Shop')

@section('body')


    <!--Breadcrumb Section-->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="{{route('home')}}">
                            <i class="fa fa-home"></i> Home
                        </a>
                        <span> Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Product Shop Section-->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">

                    @include('front.shop.components.sidebar-filter')

                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <form action="">
                                    <div class="select-option">
                                   <select name="sort_by" onchange="this.form.submit()" class="sorting">
                                       <option {{request('sort_by') == 'latest' ? 'selected' : ''}} value="latest">Sorting: Latest</option>
                                       <option {{request('sort_by') == 'oldest' ? 'selected' : ''}} value="oldest">Sorting: Oldest</option>
                                       <option {{request('sort_by') == 'name-asc' ? 'selected' : ''}} value="name-asc">Sorting: Name A-Z</option>
                                       <option {{request('sort_by') == 'name-desc' ? 'selected' : ''}} value="name-desc">Sorting: Name Z-A</option>
                                       <option {{request('sort_by') == 'price-asc' ? 'selected' : ''}} value="price-asc">Sorting: Price Ascending</option>
                                       <option {{request('sort_by') == 'price-desc' ? 'selected' : ''}} value="price-desc">Sorting: Price Descending</option>
                                   </select>
                                   <select name="show" onchange="this.form.submit()" class="p-show">
                                       <option {{request('show') == '6' ? 'selected' : ''}} value="6">Show: 6</option>
                                       <option {{request('show') == '9' ? 'selected' : ''}} value="9">Show: 9</option>
                                       <option {{request('show') == '15' ? 'selected' : ''}} value="15">Show: 15</option>
                                   </select>
                               </div>
                                </form>
                            </div>
                            <div class="col-lg-5 col-md-5 text-right">

                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-lg-4 col-sm-6">
                                    @include('front.components.product-item')
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mt-5">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
