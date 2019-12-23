<?php
require $_SERVER['DOCUMENT_ROOT'] . "/fobizm/api/DatabaseConnection.php";

abstract class Model
{
    /**
     * @var BaseModel
     */
    private static $baseModel = null;

}

class BaseModel
{
    private string $className;
    private string $tableName;

    public function __construct($clsname, $tblname)
    {
        $this->tableName = $tblname;
        $this->className = $clsname;
    }

    public function insertModel(array $fields = []): array
    {
        $query_str = 'INSERT INTO ' . $this->tableName . " (";

        $db = DatabaseConnection::getInstance();
        $val_apply = [];

        $keys = array_keys($fields);
        foreach ($keys as $key) {
            $query_str .= " $key ,";
            $val_apply[":$key"] = $fields[$key];

        }

        $query_str = substr($query_str, 0, strlen($query_str) - 1) . ") VALUES (";
        foreach ($keys as $key) {
            $query_str .= " :$key ,";
        }
        $query_str = substr($query_str, 0, strlen($query_str) - 1) . ")";
        $query_str .= ";";
        $query = $db->prepare($query_str);
        /// echo $query_str;
        if ($query->execute($val_apply)) {
            return $query->fetchAll(PDO::FETCH_CLASS, $this->className);

        } else {
            echo "error";
            echo json_encode($query->errorInfo());
            return [];
        }
        //return[];
    }


    public function getModels(?array $where = []): array
    {
        $query_str = 'SELECT * FROM ' . $this->tableName;

        $db = DatabaseConnection::getInstance();
        $val_apply = [];
        if (!is_null($where) && sizeof($where) > 0) {
            $query_str .= " WHERE ";
            $keys = array_keys($where);

            foreach ($keys as $key) {
                $query_str .= "$key = :$key AND ";
                $val_apply[":$key"] = $where[$key];

            }

            $query_str = substr($query_str, 0, strlen($query_str) - 5);


        }
        $query_str .= ";";
        $query = $db->prepare($query_str);
        if ($query->execute($val_apply)) {
            return $query->fetchAll(PDO::FETCH_CLASS, $this->className);

        } else {
            echo "error";
            echo json_encode($query->errorInfo());
            return [];
        }
        //return[];
    }

    public function addModel(Model $u)
    {

    }

    /*public function driveSQL(string $query, array $dataFill){

    }*/


}