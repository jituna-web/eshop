<?php

class My_account extends Controller
{
    function index()
    {
        $data['page_title'] = "Můj účet";
        $this->view("my_account", $data);
    }
    
}