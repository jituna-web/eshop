<?php

class About extends Controller
{
    function index()
    {
        $data['page_title'] = "O mně";
        $this->view("about-us", $data);
    }
    
}