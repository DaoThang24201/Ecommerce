
@extends('front.layout.master')

@section('title', 'Result')

@section('body')

    <!--SHopping Cart Section-->
    <div class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>{{$notification}}</h4>
                    <a href="{{route('shop.index')}}" class="primary-btn mt-5">Continue Shopping</a>
                </div>
            </div>
        </div>
    </div>

@endsection
