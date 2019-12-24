<?php

require $_SERVER['DOCUMENT_ROOT']."/fobizm/api/models/BaseModel.php";
require $_SERVER['DOCUMENT_ROOT']."/fobizm/api/Utils.php";

class User extends Model
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
        if (is_null(self::$baseModel)) {
            self::$baseModel = new BaseModel("User", "users");
        }
        return self::$baseModel;
    }

    private static function encodePassword(string $password)
    {
        return md5($password);
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
    public function getMail(): ?string
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return mixed
     */
    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    /**
     * @return mixed
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public static function getUser(int $id): ?User
    {
        $arrs = self::getBaseModel()->getModels(["user_id" => $id]);
        if (sizeof($arrs) > 0) {
            return $arrs[0];
        } else {
            return null;
        }
    }

    public static function getAllUsers()
    {
        return self::getBaseModel()->getModels();
    }

    public static function login(string $username, string $password)
    {

        if (empty($_SESSION["id"])) {
            $users = self::getBaseModel()->getModels(array("username" => $username, "password" => self::encodePassword($password)));
            // echo json_encode($users);
            if (sizeof($users) == 1) {
                include $_SERVER['DOCUMENT_ROOT']."/fobizm/api/InitSession.php";
                $_SESSION["user_id"] = $users[0]->getUserId();
                $_SESSION["signed"] = true;
                return Utils::messageState(true, "Başarıyla giriş yapıldı");
            } else {
                return Utils::messageState(false, "Kullanıcı ismi bulunamadı ya da parola uyuşmuyor");
            }
        }else{
            return Utils::messageState(false,"Giriş zaten yapılmış");
        }
    }

    public static function logout()
    {
        include $_SERVER['DOCUMENT_ROOT']."/fobizm/api/InitSession.php";
        $_SESSION["signed"] = false;
        session_unset();
    }

    public static function userSigned(){
        include $_SERVER['DOCUMENT_ROOT']."/fobizm/api/InitSession.php";
        return isset($_SESSION["signed"]) && $_SESSION["signed"] == true;
    }

    public static  function getSignedUser(){
        require_once $_SERVER['DOCUMENT_ROOT']."/fobizm/api/InitSession.php";
        if (!self::userSigned()){
            return null;
        }
        else{
            return self::getUser($_SESSION["user_id"]);
        }
    }

    public static function createNewUser(string $username, string $password, string $password2, string $mail)
    {
        if ($password == $password2) {
            $usersSameUserNm = self::getBaseModel()->getModels(array("username" => $username));
            if (sizeof($usersSameUserNm) > 0) {
                return Utils::messageState(false, "Bu kullanıcı adı alınmış");
            }
            $usersSameMail = self::getBaseModel()->getModels(array("mail" => $mail));
            if (sizeof($usersSameMail) > 0) {
                return Utils::messageState(false, "Bu kullanıcı adı alınmış");
            }
            $u = new User();
            $u->setMail($mail);
            $u->setUsername($username);
            $u->setPassword(self::encodePassword($password));

            $users = self::getBaseModel()->insertModel(array(
                "username" => $username,
                "mail" => $mail,
                "password" => self::encodePassword($password)
            ));
            if (!is_null($users)) {
                self::login($username,$password);
                return Utils::messageState(true, "Kullanıcı oluşturuldu");

            } else {
                return Utils::messageState(false, "Bilinmeyen hata");
            }
        } else {
            return Utils::messageState(false, "Şifreler uyuşmuyor");
        }

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



//User::createNewUser("mabel",1231,1231,"gasdas@gmail.com")["message"];