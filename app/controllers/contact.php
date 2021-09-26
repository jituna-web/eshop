<?php

Class Contact extends Controller 
{
	function index()
	{
 	 	
 	 	$data['page_title'] = "Kontakt";
		$this->view("contact",$data);
	}

}