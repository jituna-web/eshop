<?php

class Checkout extends Controller
{
    function index()
    {
        $data['page_title'] = "Pokladna";
        $this->view("checkout", $data);
    }
    
}