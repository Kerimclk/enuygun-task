<?php

namespace App\Helpers;
use App\Price;

class JsonHelper
{
    public function __construct($url="")
    {
        if(!empty($url))
        {
            $jsonData = file_get_contents($url);
            $obj = json_decode($jsonData);
            
            $this->itemEach($obj);

        }else
        {
            echo 'Lütfen bir url girişi yapınız';
        }
    }

    public function itemEach($array)
    {
        $items = [];

        if(isset($array->result))
        {
            foreach($array->result as $a)
            {
                array_push($items, $a->amount);
            }
        }else
        {
            foreach($array as $a){
                array_push($items, $a->oran);
            }
        }

        $min = min($items);

        $get = Price::where('price','=',$min)->first();
        if(!isset($get))
        {
            $price = new Price();
            $price->price = $min;
            $price->save();
        }
    }
}


