<?php
namespace TechStore\Classes;
class Request{
    public function get( string $key) {
        return $_GET[$key];
    }
    public function post($key){
        return $_POST[$key];
    }
    public function post_clean (string $key){
        return trim(htmlspecialchars($_POST[$key])); 
    }
    public function get_has(string $key):bool{
        return isset($_GET[$key]);
    }
    public function post_has(string $key):bool{
        return isset($_POST[$key]);
    }
}