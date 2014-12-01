<?php
/**
 * Created by PhpStorm.
 * User: Kaiser
 * Date: 19.11.14
 * Time: 12:09
 */
class orders extends Controller {
    public $requires_auth = true;
    function index()
    {
        $this->orders = get_all("SELECT * FROM `order`");
    }
}
