<?php
class Env
{
    public static $host = "http://localhost:3000/api/";
    public static $user = "user";
    public static $user_signin = "user/signin";
    public static $user_signup = "user/signup";

    public static function getConfig()
    {
        return array(
            "host"=>self::$host,
            "user"=>self::$user,
            "userLogin"=>self::$user_signin,
            "userRegist"=>self::$user_signup,
        );
    }
}