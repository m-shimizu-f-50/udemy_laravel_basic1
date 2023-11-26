<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index()
    {
        // 1対多 親->子
        $shop = Area::find(1)->shops;

        $routes = Shop::find(1)->routes()->get();

        dd($routes);
    }
}
