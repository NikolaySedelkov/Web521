<?php

Route::get("/", function() {
    return view("start");
})->name("home");

Route::get("/actor", function() {
    return view("actor.list");
})->name("list-actors");