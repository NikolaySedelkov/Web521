<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// GET: www://APP_URL/ -> function () {  return view('welcome'); }
Route::get('/', function (Request $request) {
    /**
     * Функция view - Берет файл из PROJECT/resources/views/
     * 
     * view("TEST") -> PROJECT/resources/views/TEST.blade.php
     * 
     * view(
     *      NAME_VIEW,
     *      PARAMS      Набор переменных, которые можно передать во view
     * )
     * 
     * Пример PARAMS = [
     *      "name"      => "Anton",
     *      "login"     => "Anton01",
     *      "age"       => 111,
     *      "settings"  => [
     *          "x" => 1,
     *          "y" => 2
     *      ]
     * ];
     * 
     * Внутри view будут доступны переменные $name, $login, $age, $settings, но $settings выступает в роли ассоциативного массива
     */
    $keys = $request->input("keys");
    return view("welcome", ["values" => $keys]);
});

/**
 * Route::get - Создать обработчик для запросов на определенный путь
 * 
 * Route::get(
 *      PATH,       Путь, на который пользователь кидает запрос
 *      HANDLER     Обработчик, который данный запрос обработает
 * )
 */
Route::get('/test-path', function() {
    return "Hello world!";
});

Route::get('/hello', function(Request $request) {
    $name = $request->input("name");
    return view("hello", ["name" => $name]);
});