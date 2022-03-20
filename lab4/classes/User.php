<?php
include_once(__DIR__ . "/Db.php");

class User
{
    private $email;
    private $password;

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        if (strlen($password) < 5) {
            throw new Exception("Passwords must be longer than 5 characters.");
        }

        $this->password = $password;
        return $this;
    }

    public function canLogin()
    {

        // this function should check if a user can login with the password and user provided
        // use password_verify() to verify your user
        // this function should return true or false and nothing else
        $conn = Db::getInstance();
        $statement = $conn->prepare("select email, password from users where email = :email");
        $statement->bindValue("email", $this->email);
        $statement->execute();
        $user = $statement->fetch(PDO::FETCH_ASSOC);
        if ($user) {
            $hash = $user['password'];
            if (password_verify($this->password, $hash)) {
                return true;
            } else {
                return false;
            }
        } else {

            throw new Exception("user does not exist");
        }


    }

    public static function getUsernamebyId(int $vidId)
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("select email from users where id = (select user_id from videos where id = :vidId)");
        $statement->bindValue("vidId", $vidId);
        $statement->execute();
        $email = $statement->fetch(PDO::FETCH_OBJ);
        $username = explode("@", $email->email, 2);
        return htmlspecialchars($username[0]);

    }

    public function register()
    {
        $options = [
            'cost' => 13
        ];
        $password = password_hash($this->password, PASSWORD_DEFAULT, $options);

        $conn = Db::getInstance();
        $statement = $conn->prepare("insert into users (email, password) values (:email, :password);");
        $statement->bindValue(':email', $this->email);
        $statement->bindValue(':password', $password);
        return $statement->execute();
    }
}