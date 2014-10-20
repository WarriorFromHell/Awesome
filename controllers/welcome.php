<?php

class welcome extends Controller{

	function index(){
		$this->discounts = get_all("SELECT * FROM product WHERE product_discount=1");
	}

    function index_ajax(){
		echo "\$_POST:<br>";
        var_dump($_POST);
    }

	function index_post(){
		echo "\$_POST:<br>";
		var_dump($_POST);
	}
}