<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\JsonHelper;
use App\Factory\ConfigFactory;
use App\Price;

class ItemController extends Controller
{
    public function home()
    {
        ConfigFactory::create("http://www.mocky.io/v2/5a74519d2d0000430bfe0fa0");
        ConfigFactory::create("http://www.mocky.io/v2/5a74524e2d0000430bfe0fa3");

        foreach (Price::all() as $item) {
            echo '<h1>'.$item->price.'</h1>';
        }

    }
}
