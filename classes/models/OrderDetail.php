<?php
namespace TechStore\Classes\models;
use  TechStore\Classes\Db;
class OrderDetail extends Db{
    public function __construct()
    {
        $this->table="order_details";
        $this->connect();
    }
}