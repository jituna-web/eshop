<?php

class Product_list extends Controller
{
    function index()
    {
        $data['page_title'] = "Produkty";
        $this->view("product_list", $data);
    }
    
}