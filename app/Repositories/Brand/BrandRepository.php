<?php


namespace App\Repositories\Brand;


use App\Models\Brand;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class BrandRepository extends BaseRepository implements BrandRepositoryInterface
{

    function getModel()
    {
        return Brand::class;
    }


}
