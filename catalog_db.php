<?php
function get_products()
{
    return [
        "1" => [
            "title" => "Астрофитум",
            "img_product" => "img/1/1.jpg",
            "opis" => "Неприхотлив, но создает уют.",
            "ssil" => "1",
            "cost" => "899.99 ₽",
            "sale" => "15"
        ],
        "2" => [
            "title" => "Цереус",
            "img_product" => "img/1/2.png",
            "opis" => "Классический кактус. Красиво цветет.",
            "ssil" => "2",
            "cost" => "599.99 ₽",
            "sale" => "15"
        ],
        "3" => [
            "title" => "Эхиноцереус",
            "img_product" => "img/1/3.jpg",
            "opis" => "Радует глаз яркими цветами.",
            "ssil" => "3",
            "cost" => "289.99 ₽",
            "sale" => "15"
        ],
        "4" => [
            "title" => "Маммиллярия",
            "img_product" => "img/1/4.jpg",
            "opis" => "Хорошо впишется в офис",
            "ssil" => "4",
            "cost" => "199.99 ₽",
            "sale" => "15"
        ],
        "5" => [
            "title" => "Нотокактус отто",
            "img_product" => "img/1/5.png",
            "opis" => "Требует немного ухода.",
            "ssil" => "5",
            "cost" => "79.99 ₽",
            "sale" => "15"
        ],
        "6" => [
            "title" => "Опунция",
            "img_product" => "img/1/6.png",
            "opis" => "Экзотический кактус из самого чили.",
            "ssil" => "6",
            "cost" => "39.99 ₽",
            "sale" => "15"
        ],
        "7" => [
            "title" => "Ребуция",
            "img_product" => "img/1/7.jpg",
            "opis" => "Невысокий кактус со стволом.",
            "ssil" => "7",
            "cost" => "59.99 ₽",
            "sale" => "15"
        ],
        "8" => [
            "title" => "Трио",
            "img_product" => "img/1/8.png",
            "opis" => "Трио украсит любой интерьер.",
            "ssil" => "8",
            "cost" => "199.99 ₽",
            "sale" => "15"
        ],
        "9" => [
            "title" => "Переския",
            "img_product" => "img/1/9.png",
            "opis" => "Раскидистый кактус во двора.",
            "ssil" => "9",
            "cost" => "99.99 ₽",
            "sale" => "15",
        ],
    ];
}
function get_product_attribute($id, $attr)
{
    $products = get_products();
    $result = $products[$id][$attr] ?? null;
    return $result;
}

function get_product_title($id)
{
    return get_product_attribute($id, "title");
}
function get_product_img_product($id)
{
    return get_product_attribute($id, "img_product");
}
function get_product_opis($id)
{
    return get_product_attribute($id, "opis");
}
function get_product_ssil($id)
{
    return get_product_attribute($id, "ssil");
}
