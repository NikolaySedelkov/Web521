<?php 

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
            country_id AS id,
            country AS name
        FROM country
    "
);

echo json_encode($result->fetch_all(MYSQLI_ASSOC));