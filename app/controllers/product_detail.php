<?php

class Product_detail extends Controller
{
    function index()
    {
        $data['page_title'] = "Seznam produktů";
        $this->view("product_detail", $data);
    }
    
}