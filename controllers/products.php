<?php

/**
 * Created by PhpStorm.
 * User: Kaiser
 * Date: 13.10.14
 * Time: 11:03
 */
class products extends Controller
{
    function index()
    {
        $this->products = get_all("SELECT * FROM product");

    }
}