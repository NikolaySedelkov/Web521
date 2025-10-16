<?php

Route::get("/", function() {
    return view("start");
});

Route::get("/actor", function() {
    return view("actor.list");
});