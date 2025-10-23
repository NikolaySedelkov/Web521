<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use Illuminate\Http\Request;

/**
 * Route->name - Функция присваивает название(якорь) для роута, для дальнейшнего обращение(получение)
 * к ссылку по наименованию
 */
Route::get("/", function() {
    return view("start");
})->name("home");

// GLOBAL_NAME
Route::name("actor.")->prefix("actor")->group(function() {
    Route::get("/", [ActorController::class, 'showList'])->name("list"); // name=actor.list <-> GLOBAL_NAME + LOCAL_NAME

    /**
     * Path-paramert(variable) - параметры, которые передаются в запросах в виде части пути
     */
    Route::get("/{id}", [ActorController::class, 'showActor'])->name("index"); // name=actor.index <-> prefix + name
});

Route::name('country.')->prefix("country")->group(function() {
    Route::get("/", [CountryController::class, 'showList'])->name('list');
    Route::get("/add", [CountryController::class, 'showAddCountry'])->name('add');
    Route::get("/{id}", [CountryController::class, 'showCountry'])->name('index');
});

Route::name("city.")->prefix("city")->group(function() {
    Route::get("/", [CityController::class, 'showList'])->name("list");

    Route::get('/statistics', [CityController::class, 'statisticsShow'])->name('statistics');

    Route::get("/{id}", [CityController::class, 'showCity'])->name("index");
});


Route::name("api.")->prefix("api")->group(function () {
    Route::name("actor.")->prefix("actor")->group(function() {
        Route::get("/{id}", function(int $id) {
            $controller = new ActorController();
            $actor = $controller->getActor($id);
            
            if($actor != null) {
                return json_encode($actor);
            }

            abort(403);
        });
    });

    Route::name('country.')->prefix('country')->group(function () {
        Route::post('/add', [CountryController::class, 'addCountry'])->name('add');
    });

    Route::name("city.")->prefix("city")->group(function() {
        Route::get("/", function(Request $request) {
            $controller = new CityController();
            $cities = $controller->getCities(
                $request->query("searchValue", ''), 
                $request->query("orderBy", 'ASC')
            );
            
            return json_encode($cities);      
           })->name("list");

        Route::get("/{id}", function(int $id) {
            $controller = new CityController();
            $city = $controller->getCity($id);
            
            if($city != null) {
                return json_encode($city);
            }
            
            abort(403);
        })->name("index");
    });
});