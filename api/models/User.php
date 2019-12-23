<?php

include "./BaseModel.php";

class User
{
    private int $user_id;
    private string $username;
    private string $password;
    private string $mail;
    /**
     * @var BaseModel
     */
    private static $baseModel = null;

    /**
     * @return BaseModel
     */
    public static function getBaseModel(): BaseModel
    {
        if (is_null(self::$baseModel))
        {
            self::$baseModel = new BaseModel("User","users");
        }
        return self::$baseModel;
    }



    /**
     * @param mixed $mail
     */
    public function setMail($mail): void
    {
        $this->mail = $mail;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }


    /**
     * @return mixed
     */
    public function getMail() : ?string
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPassword() : ?string
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getUserId() : ?int
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getUsername() : ?string
    {
        return $this->username;
    }

    public static function getUser(int $id) : ?User
    {
        $arrs = self::getBaseModel()->getModels(["user_id" => $id]);
        if (sizeof($arrs) > 0){
            return $arrs[0];
        }
        else{
            return null;
        }
    }
    public static function getAllUsers(){
        return self::getBaseModel()->getModels();
    }
}
/*
$u = User::getUser(1);

echo !is_null($u) ? $u->getUserId() : "Null geliyor babacım";


$kisiler = User::getAllUsers();
foreach ($kisiler as $kisi){
    if ($kisi instanceof  User){
        $usernm = $kisi->getUsername();
        echo "$usernm";
    }

}*/