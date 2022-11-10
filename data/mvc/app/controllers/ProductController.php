<?php
class ProductController {
    function __construct()
    {
        echo "<br>Constructor clase PRODUCTCONTROLLER";
    }
    
    function index() {
        echo "<br>Dentro de index de PRODUCTCONTROLLER";
    }

    function show() {
        echo "<br>Dentro de show de PRODUCTCONTROLLER";
    }
}

/*
<?php

require_once "Product.php";

class Controller
{
    function __construct()
    {
    }
    /* Función que:
     - recoge todos los productos
     - llama a vista de inventario 
    public function home()
    {
        $products = Product::all();
        require "views/home.php";
    }

    /* Función que:
     - recuperar un producto en particular, el id como parametro.
     - llamar a una vista de un producto en concreto. 
    public function show()
    {
        $id = $_GET["id"];
        $product = Product::find($id);
        require "views/show.php";
    }
} 
?> */
