<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function showList() {
        return view("actor.list", ["actors" => $this->getActors()]);
    }

    public function showActor($id) {
        $actor = $this->getActor($id);
        if($actor != null) {
            return view("actor.index", ["user" => $actor]);
        }

        return "Oops";
    }

    public function getActors() {
        return Actor::all();
    }

    public function getActor($id) {
        if(array_key_exists($id, ActorController::$users)) {
            return ActorController::$users[$id];
        }

        return null;
    }

    static $users = [
        1 => [
        "name" => "Данила",
        "surname" => "Козловский",
        "patronymic" => "Сергеевич",
        "age" => 40,
        "email" => "danila.kozlovsky@example.com",
        "phone" => "+7 900 111-22-33",
        "roles" => ["user", "editor"],
        "active" => true,
        "registered_at" => "2020-05-12",
        "address" => [
            "city" => "Москва",
            "street" => "Тверская",
            "house" => "1",
            "zip" => "125009"
        ],
        "social" => [
            "telegram" => "@danila_k",
            "vk" => "vk.com/danila_k"
        ]
    ],
    2 => [
        "name" => "Джони",
        "surname" => "Депп",
        "patronymic" => null,
        "age" => 61,
        "email" => "johnny.depp@example.com",
        "phone" => "+1 310 555-12-34",
        "roles" => ["user", "vip"],
        "active" => false,
        "registered_at" => "2018-11-03",
        "address" => [
            "city" => "Лос‑Анджелес",
            "street" => "Sunset Blvd",
            "house" => "100",
            "zip" => "90028"
        ],
        "social" => [
            "instagram" => "@j_depp_official",
            "x" => "@j_depp"
        ]
    ],
];
}
