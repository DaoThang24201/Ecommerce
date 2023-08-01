<?php


namespace App\Repositories\User;


use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    function getModel()
    {
        return User::class;
    }


}
