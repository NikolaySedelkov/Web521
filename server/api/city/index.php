<?php 

// Можно отключить CORS под определенный запрос
// Отключить для определенных доменов и определенных типов запросов GET, POST, DELETE, ...

// Полное отключение для любого домена и любого типа запроса
// header('Access-Control-Allow-Origin: *');

$mysql = new mysqli(
    "localhost",
    "root",
    "qw12",
    "sakila",
    3306
);

$result = $mysql->query(
    "
        SELECT
            city_id AS id,
            city AS name
        FROM city
    "
);

echo json_encode($result->fetch_all(MYSQLI_ASSOC));