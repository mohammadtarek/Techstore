<?php
namespace TechStore\Classes\models;
use  TechStore\Classes\Db;
require_once('classes/db.php');
class Product extends Db
{

    
    public function __construct()
    {
        $this->table = 'products';
        $this->connect();
    }

    public function selectid($id, string $fields = "product.*")
    {
        $sql = "SELECT $fields  FROM $this->table JOIN cats 
        ON $this->table.cat_id=cats.id 
        where $this->table.id =$id";

        $result = mysqli_query($this->conn, $sql);

        return mysqli_fetch_assoc($result);
    }
}
