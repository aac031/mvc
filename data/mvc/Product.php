<?php
class Product
{
    const PRODUCTS = [
        array(1, 'Cortacesped'),
        array(2, 'Pizarra'),
        array(3, 'Billar'),
        array(4, 'Dardos'),
    ];

    //Constructor vacío
    function __construct()
    {
    }

    //Devuelve todos los productos.
    public static function all()
    {
        return Product::PRODUCTS;
    }

    //Devolver un producto en particular.
    public static function find($id)
    {
        return Product::PRODUCTS[$id-1];
    }
}
