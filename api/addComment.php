<?php

$instance = null;
$connection1 = "mysql:host=localhost;dbname=fobizm;charset=utf8";

$connection2 = "mysql:host=localhost:3308;dbname=fobizm;charset=utf8";
$username = "root";
$password = "";
$connectionFail = false;
try{
    $instance = new PDO($connection1,$username,$password);
    $connectionFail = false;
}catch (Exception $ex){
    $connectionFail = true;

}
if ($connectionFail){
    try{
        $instance = new PDO($connection2,$username,$password);
        $connectionFail = false;
    }catch (Exception $ex){
        $connectionFail = true;

    }
}
include_once ("../api/models/User.php");
$db = $instance;
$signedUser = User::getSignedUser();
if (!empty($_GET["comment"]) && !empty($_GET["mental_issue_id"] && User::userSigned())){
    $q = $db->prepare("INSERT INTO comment (user_id, mental_issue_id,comment_text)
                                    VALUES (:id, :mental, :comment)");
    if ($q->execute(array(":id" => $signedUser->getUserId(), ":mental" => $_GET["mental_issue_id"], ":comment" => $_GET["comment"])))
    {
        echo true;
    }
    else {
        echo false;
    }
}
else
    echo false;