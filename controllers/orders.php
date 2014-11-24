<?php
/**
 * Created by PhpStorm.
 * User: Kaiser
 * Date: 19.11.14
 * Time: 12:09
 */
class orders extends Controller {
    function index()
    {
        $this->orders = get_all("SELECT * FROM `order`");
    }
}