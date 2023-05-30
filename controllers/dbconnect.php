<?php



class DbConnect
{

    public static function connect($sqlString)
    {
        $config =  require "config/bd.php";
        $dhc = new PDO("mysql:host=" . $config['host'] . ";dbname=" . $config["dbname"], $config["user"], $config["password"]);
        $result = $dhc->prepare($sqlString);
        $result->execute();
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
