<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use Illuminate\Http\Request;

/**
 * Route->name - Функция присваивает название(якорь) для роута, для дальнейшнего обращение(получение)
 * к ссылку по наименованию
 */

Route::middleware('auth')->group(function() {
    Route::get("/", function() {
        return view("start");
    })->name("home");
});

Route::get('auth/login', [AuthController::class, 'showLogin'])->name('login');

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
    Route::get("/{id}/update", [CountryController::class, 'showUpdateCountry'])->name('update');
});

Route::name("city.")->prefix("city")->group(function() {
    Route::get("/", [CityController::class, 'showList'])->name("list");

    Route::get('/statistics', [CityController::class, 'statisticsShow'])->name('statistics');

    Route::get("/{id}", [CityController::class, 'showCity'])->name("index");
});

Route::name("auth.")->prefix("auth")->group(function() {
    Route::get("/register", [AuthController::class, 'showRegister'])->name('register');
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

    Route::name("auth.")->prefix("auth")->group(function() {
        Route::get("/register", [AuthController::class, 'register'])->name('register');
        Route::get("/login", [AuthController::class, 'login'])->name('login');
        Route::get("/logout", [AuthController::class, 'logout'])->name('logout');
    });

    Route::name('country.')->prefix('country')->group(function () {
        Route::post('/add', [CountryController::class, 'addCountry'])->name('add');
        Route::put('/{id}', [CountryController::class, 'updateCountry'])->name('update');
        Route::delete('/{id}', [CountryController::class, 'deleteCountry'])->name('delete');
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

        Route::delete("/", [CityController::class, 'deleteCity'])->name('delete');

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