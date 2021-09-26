<?php

class Wishlist extends Controller
{
    function index()
    {
        $data['page_title'] = "Seznam přání";
        $this->view("wishlist", $data);
    }
    
}