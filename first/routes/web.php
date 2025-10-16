<?php


/**
 * Route->name - Функция присваивает название(якорь) для роута, для дальнейшнего обращение(получение)
 * к ссылку по наименованию
 */
Route::get("/", function() {
    return view("start");
})->name("home");

// GLOBAL_NAME
Route::name("actor.")->prefix("actor")->group(function() {
    Route::get("/", function() {
        return view("actor.list");
    })->name("list"); // name=actor.list <-> GLOBAL_NAME + LOCAL_NAME

    /**
     * Path-paramert(variable) - параметры, которые передаются в запросах в виде части пути
     */
    Route::get("/{id}", function(int $id) {
        $response = Http::get(route("api.actor.index", ["id" => $id]));

        if($response->ok()) {
            return view("actor.index", ["user" => $response->json()]);
        }

        return "Oops";
    })->name("index"); // name=actor.index <-> prefix + name
});

Route::name("city.")->prefix("city")->group(function() {
    Route::get("/", function() {
        return view("city.list");
    })->name("list");

    Route::get("/{id}", function(int $id) {
        $response = Http::get(route("api.city.index", ["id" => $id]));

        if($response->ok()) {
            return json_encode($response->json());
        }

        return "Oops";
    })->name("index");
});


Route::name("api.")->prefix("api")->group(function () {
    Route::name("actor.")->prefix("actor")->group(function() {
        Route::get("/{id}", function(int $id) {
            $users = [
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

            if(array_key_exists($id, $users)) {
                return json_encode($users[$id]);
            }

            abort(403);
        });
    });

    Route::name("city.")->prefix("city")->group(function() {
        Route::get("/{id}", function(int $id) {
            $cities = [
                1 => [
                    "name" => "Вологда",
                    "populare" => 300_000
                ],
                2 => [
                    "name" => "Кингисепп",
                    "populare" => 20_000
                ],
            ];

            if(array_key_exists($id, $cities)) {
                return json_encode($cities[$id]);
            }

            abort(403);
        })->name("index");
    });
});