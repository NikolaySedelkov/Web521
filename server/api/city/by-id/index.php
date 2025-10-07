<?php
$id = $_GET['id'];

$mysql = new mysqli(
    "localhost",
    "root",
    "qw12",
    "sakila",
    3306
);

$mysql->begin_transaction();

$stmt = $mysql->prepare(
    "
        SELECT 
            city_id AS id,
            city,
            country
        FROM city INNER JOIN country on city.city_id = country.country_id
        WHERE city_id = ?
    "
);

$stmt->bind_param('d', $id);

$stmt->execute();

$result = $stmt->get_result();

$stmt = $mysql->prepare(
    "
        SELECT 
            address_id AS id,
            address,
            district
        FROM address
        WHERE city_id = ?
    "
);

$stmt->bind_param('d', $id);

$stmt->execute();

$mainResult = $result->fetch_assoc();
$mainResult['address'] = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

$mysql->commit();

echo json_encode($mainResult);
