<?php

include 'PdoConnect.php';

$PDO = PdoConnect::getInstance();

// Создание БД для товаров
/* $sql = "
CREATE TABLE IF NOT EXISTS goods
(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    price varchar(55) NOT NULL,
    image varchar(255) NOT NULL,
    PRIMARY KEY(id)
)
";
$res = $PDO->PDO->query($sql);

var_dump($res);

die();
*/

// Добавление товаров в таблицу
/*
$sql = "
INSERT INTO goods (name, price, image)
VALUES 
    ('Медицинские маски (100 шт.)', '520 руб.', 'static/img/product-1.jpg'),
    ('Аптечка FirstAid (5 шт.)', '450 руб.', 'static/img/product-2.jpg'),
    ('Медицинский костюм (жен., 10 шт.)', '7300 руб.', 'static/img/product-3.jpg'),
    ('Медицинский костюм (муж., 10 шт.)', '7800 руб.', 'static/img/product-4.jpg')
";

$res = $PDO->PDO->query($sql);

var_dump($res);

die();
*/

$result = $PDO->PDO->query("SELECT * FROM goods");

$products = array();

while ($productInfo = $result->fetch())
{
    $products[] = $productInfo;
};