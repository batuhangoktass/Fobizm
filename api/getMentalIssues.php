<?php
    include "DatabaseConnection.php";

    $db = DatabaseConnection::getInstance();
    $a = array();
    $data  = array();
    if (!empty($_GET["sorun_id"])){
        $query = $db->prepare("    SELECT * FROM mental_issue 
                                        JOIN mental_issue_type on mental_issue_type_id = issue_type_id 
                                        where issue_type_id = :mental_issue_type_id;");
$a = array(":mental_issue_type_id"=> $_GET["sorun_id"]);
    }
    else {
        $query = $db->prepare("    SELECT * FROM mental_issue 
                                        JOIN mental_issue_type on mental_issue_type_id = issue_type_id;");
    }

    if ($query->execute($a)){
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    echo json_encode($data);