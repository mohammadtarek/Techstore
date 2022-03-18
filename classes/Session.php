<?php


namespace TechStore\Classes;



class Session
{
    function __construct()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    public function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public function get($key)
    {
        return $_SESSION[$key];
    }
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }
    public function remove($key)
    {
        unset($_SESSION[$key]);
    }
    public function destory()
    {
        $_SESSION = [];
        session_destroy();
    }
}
