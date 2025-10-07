<?php

$name = $_POST['name'];
$countryId = $_POST['country_id'];

$mysql = new mysqli(
    "localhost",
    "root",
    "qw12",
    "sakila",
    3306
);

$stmt = $mysql->prepare(
    "
        INSERT INTO city(city, country_id) VALUE(?, ?)
    "
);

$stmt->bind_param('sd', $name, $countryId);

$stmt->execute();