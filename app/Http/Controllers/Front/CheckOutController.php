<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Order\OrderServiceInterface;
use App\Services\OrderDetail\OrderDetailServiceInterface;
use App\Utilities\Constant;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckOutController extends Controller
{
    private $orderService;
    private $orderDetailService;

    public function __construct(OrderServiceInterface $orderService,
                                OrderDetailServiceInterface $orderDetailService)
    {
        $this->orderService = $orderService;
        $this->orderDetailService = $orderDetailService;
    }

    public function index()
    {
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();

        return view('front.checkout.index', [
            'carts' => $carts,
            'total' => $total,
            'subtotal' => $subtotal,
        ]);
    }

    public function addOrder(Request $request)
    {
        // 1. Thêm đơn hàng
        $data = $request->all();
        $data['status'] = Constant::order_status_ReceiveOrders;
        $order = $this->orderService->create($data);

        // 2. Thêm chi tiết đơn hàng
        $carts = Cart::content();
        foreach ($carts as $cart) {
            $data = [
                'order_id' => $order->id,
                'product_id' => $cart->id,
                'qty' => $cart->qty,
                'amount' => $cart->price,
                'total' => $cart->price * $cart->qty,
            ];

            $this->orderDetailService->create($data);
        }

        // 3. Xóa giỏ hàng
        Cart::destroy();

        // 4. Trả kết quả thông báo
        return redirect(route('checkout.result'))->with('notification', 'Success! You will pay on delivery. Please check your email.');
    }

    public function result()
    {
        $notification = session('notification');

        return view('front.checkout.result',[
            'notification' => $notification,
        ]);
    }
}
