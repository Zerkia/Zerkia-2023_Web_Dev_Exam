<?php

require_once __DIR__ . '/../_.php';
require_once __DIR__ . '/Faker/src/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

$q = 'INSERT INTO roles 
VALUES (null,"Customer"),(null,"Partner"),(null,"Admin")';

echo 'roles seeded, ';
$db = _db();
$sql = $db->prepare($q);
$sql->execute();