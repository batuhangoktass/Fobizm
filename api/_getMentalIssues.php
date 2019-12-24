<?php
require_once("DatabaseConnection.php");

class MentalIssuesHelper
{
    public static function getMentalIssues(int $type = 0)
    {
        $db = DatabaseConnection::getInstance();
        $a = array();
        $data = array();
        if ($type > 0) {
            $query = $db->prepare("    SELECT * FROM mental_issue 
                                        JOIN mental_issue_type on mental_issue_type_id = issue_type_id 
                                        where issue_type_id = :mental_issue_type_id;");
            $a = array(":mental_issue_type_id" => $type);
        } else {
            $query = $db->prepare("    SELECT * FROM mental_issue 
                                        JOIN mental_issue_type on mental_issue_type_id = issue_type_id;");
        }

        if ($query->execute($a)) {
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
}
}