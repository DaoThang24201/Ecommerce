<?php


namespace App\Repositories\OrderDetail;


use App\Models\OrderDetail;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class OrderDetailRepository extends BaseRepository implements OrderDetailRepositoryInterface
{

    function getModel()
    {
        return OrderDetail::class;
    }


}
