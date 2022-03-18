<?php
namespace TechStore\Classes\models;
use  TechStore\Classes\Db;
require_once('classes/db.php');
class Order extends Db{
    public function __construct()
    {
        $this->table="orders";
        $this->connect();
    }
}