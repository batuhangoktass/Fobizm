<?php


class User
{
    private int $user_id;
    private string $username;
    private string $password;
    private string $mail;


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
    public function setUserİd($user_id): void
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
        try {
            $dbConnect = new PDO("mysql:host=localhost:3308;dbname=fobizm;charset=utf8", "root", "");

        } catch ( PDOException $e ){
            print $e->getMessage();
        }
        $query = $dbConnect->prepare("SELECT * FROM users WHERE user_id = :id;");
        if ($query->execute(array(":id"=>$id))){
            $allData = $query->fetchAll(PDO::FETCH_CLASS, "User");
            if ($allData[0]){
                return $allData[0];
            }
        }
        else {
            echo  json_encode($query->errorInfo());
            return null;
        }

    }
}

$u = User::getUser(1);

echo !is_null($u) ? $u->getUserId() : "Null geliyor babacım";