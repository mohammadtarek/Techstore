<?php
namespace TechStore\Classes;
abstract class Db
{
    protected $conn;
    protected $table;


    public function connect()
    {
        $this->conn = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }

    public function select_all(string $fields = "*"): array
    {
        $sql = "SELECT $fields  FROM $this->table";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    public function selectid($id, string $fields = "*")
    {
        $sql = "SELECT $fields  FROM $this->table where id=$id";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_assoc($result);
    }
    public function selectwhere($cond ,$fields="*"){

        $sql = "SELECT $fields  FROM $this->table where $cond";
        $result = mysqli_query($this->conn, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    public function get_count(){
        $sql ="SELECT count(*) as cnt from $this->table";
        $result =mysqli_query($this->conn ,$sql);
        return mysqli_fetch_assoc( $result)['cnt'];
    }
    public function insert ($fields,$value):bool{
        $sql="INSERT INTO $this->table ($fields) values ($value)";
        return mysqli_query($this->conn,$sql);

    }
public function update(string $set,$fields){
    $sql="UPDATE  $this->table SET $set where id =$fields";
    return mysqli_query($this->conn,$sql);

}
public function delete ($id):bool{
    $sql="DELETE FROM $this->table where id =$id";
    return mysqli_query($this->conn,$sql);
}

}
