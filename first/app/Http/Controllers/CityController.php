<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;

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

    public function showCity(int $id) {
        $city = $this->getCity($id);
        if($city != null) {
            return view("city.index", ["city" => $city]);
        }
        
        return "Oops";
    }

    public function statisticsShow() {
        $statisticsAll = City::query()->selectRaw("
            count(city_id) AS `count_city`,
            min(length(city)) AS `min_length_name`,
            max(length(city)) AS `max_length_name`
        ")->get()->first();

        $statisticsGroups = City::query()
            ->join(
                'country', // Таблица с которой связываемся 
                        // ON table1.primaty_key = table2.foregen_key
                    "city.country_id",
                "=",
                        "country.country_id" 
                )
            ->select('country.country')
            ->selectRaw("COUNT(city_id) AS `count_city`")
            ->groupBy('country.country')->get();

        return view('city.statistics', [
            'count' => $statisticsAll->count_city, 
            'min_length_name' => $statisticsAll->min_length_name, 
            'max_length_name' => $statisticsAll->max_length_name,
            'statistics_groups' => $statisticsGroups
        ]);
    }

    public function getCities(string $searchValue = '', string $orderBy = 'ASC') {
        return City::query()
                ->where(
                    "city", // Название столбца, для которого прописываем критерий
                    "LIKE", // Оператор
                    "%$searchValue%",  // Значение   
                )->orderBy(
                    "city", // Название столбца, для которого прописываем сортировку
                    $orderBy // Направление
                )->get();
    }

    public function getCity($id) {
        return City::find($id);
    }

    public function deleteCity(Request $request) {
        $id = $request->input("id");
        return City::query()->whereRaw("city_id = ?", [$id])->delete();
    }
}