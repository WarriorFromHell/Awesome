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

    function view()
    {
        $product_id = $this->params[0];
        $this->product = get_first("SELECT * FROM product WHERE product_id = $product_id");
    }

    function view_post()
    {
        $data = $_POST['data'];
        $message = '<pre>' . print_r($data, 1) . '<pre>';
        $message .= $data['customer_message'];
        echo "<pre>";
        print_r($data);insert ('order',$data);
        send_mail(EMAIL_EMAIL, EMAIL_NAME, $data['customer_email'], $data['customer_name'], "Uus sõnum veebilehelt", $message);
        echo "</pre>";
    }
}