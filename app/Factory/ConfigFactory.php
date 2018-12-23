<?php

namespace App\Factory;

use App\Helpers\JsonHelper;

class ConfigFactory{

    public static function create($url=""){

        $jsonHelper = new JsonHelper($url);
    }

}