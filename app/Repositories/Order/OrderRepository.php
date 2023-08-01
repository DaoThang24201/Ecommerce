<?php


namespace App\Repositories\Order;


use App\Models\Order;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{

    function getModel()
    {
        return Order::class;
    }


    public function getOrderByUserId($userId)
    {
        return $this->model->where('user_id', $userId)->get();
    }
}
