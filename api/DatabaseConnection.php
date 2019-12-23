<?php


class DatabaseConnection
{
    private static ?PDO $instance = null;
    private static string $connection1 = "mysql:host=localhost:3308;dbname=fobizm;charset=utf8";

    private static string $connection2 = "mysql:host=localhost:3308;dbname=fobizm;charset=utf8";

    private static string $username = "root";
    private static string $password = "";

    /**
     * @return mixed
     */
    public static function getInstance() : ?PDO
    {
        if (is_null(self::$instance))
        {
            $connectionFail = false;
            try{
                self::$instance = new PDO(self::$connection1,self::$username,self::$password);
                $connectionFail = false;
            }catch (Exception $ex){
                $connectionFail = true;

            }
            if ($connectionFail){
                try{
                    self::$instance = new PDO(self::$connection2,self::$username,self::$password);
                    $connectionFail = false;
                }catch (Exception $ex){
                    $connectionFail = true;

                }
            }
            if ($connectionFail) die();
        }
        return self::$instance;
    }
}