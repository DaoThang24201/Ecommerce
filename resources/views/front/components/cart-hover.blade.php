<li class="cart-icon">
    <a href="{{route('cart.index')}}">
        <i class="icon_bag_alt"></i>
        <span class="cart-count">{{\Gloudemans\Shoppingcart\Facades\Cart::count()}}</span>
    </a>
    <div class="cart-hover">
        <div class="select-items">
            <table>
                <tbody>
                @foreach(\Gloudemans\Shoppingcart\Facades\Cart::content() as $cart)
                    <tr data-rowId="{{$cart->rowId}}">
                        <td class="si-pic">
                            <img style="height: 70px" src="front/img/products/{{$cart->options->images[0]->path}}" alt="">
                        </td>
                        <td class="si-text">
                            <div class="product-selected">
                                <p>${{number_format($cart->price, 2)}} x {{$cart->qty}}</p>
                                <h6>{{$cart->name}}</h6>
                            </div>
                        </td>
                        <td class="si-close">
                            <i onclick="removeCart('{{$cart->rowId}}')" class="ti-close"></i>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="select-total">
            <span>Total:</span>
            <h5>${{\Gloudemans\Shoppingcart\Facades\Cart::total()}}</h5>
        </div>
        <div class="select-button">
            <a href="{{route('cart.index')}}" class="primary-btn view-card">VIEW CARD</a>
            <a href="{{route('checkout.index')}}" class="primary-btn checkout-btn">CHECK OUT</a>
        </div>
    </div>
</li>

<li class="cart-price">${{\Gloudemans\Shoppingcart\Facades\Cart::total()}}</li>
