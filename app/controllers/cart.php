<?php

class Cart extends Controller
{
    function index()
    {
        $data['page_title'] = "Košík";
        $this->view("cart", $data);
    }
    
}