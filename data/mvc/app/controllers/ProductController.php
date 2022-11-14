<?php
require "../Product.php";

class ProductController
{
    function __construct()
    {
        //echo "<br>Constructor clase PRODUCTCONTROLLER";
    }

    function index()
    {
        //echo "<br>Dentro de index de PRODUCTCONTROLLER";
        $products = Product::all();
        require "../views/home.php";
    }

    function show()
    {
        //echo "<br>Dentro de show de PRODUCTCONTROLLER";
        $id = $_GET["id"];
        $product = Product::find($id);
        require "../views/show.php";
    }
}
