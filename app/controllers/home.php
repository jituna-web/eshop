<?php

class Home extends Controller
{
    function index()
    {

        $data['page_title'] = "Vítejte";


        $this->view("index",$data);
    }
    
}