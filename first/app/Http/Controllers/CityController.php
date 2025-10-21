<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;

class CityController extends Controller {
    static $cities = [
        1 => [
            "name" => "Вологда",
            "populare" => 300_000
        ],
        2 => [
            "name" => "Кингисепп",
            "populare" => 20_000
        ],
    ];

    public function showList() {
        return view('city.list', ["cities" => $this->getCities()]);
    }

    public function showCity($id) {
        $city = $this->getCity($id);
        if($city != null) {
            return view("city.index", ["city" => $city]);
        }
        
        return "Oops";
    }

    public function getCities() {
        return City::all();
    }

    public function getCity($id) {
        return City::find($id);
    }
}