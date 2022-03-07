<?php
    include_once(__DIR__ . "/Db.php");

    class User {
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
        public function setPassword( $password )
        {
                if(strlen($password) < 5){
                    throw new Exception("Passwords must be longer than 5 characters.");
                }

                $this->password = $password;
                return $this;
        }

        public function canLogin() {
            // this function should check if a user can login with the password and user provided
            // use password_verify() to verify your user
            // this function should return true or false and nothing else
        }

        public function register() {
            $options = [
                'cost' => 15
            ];
            $password = password_hash($this->password, PASSWORD_DEFAULT, $options);

            $conn = Db::getInstance();
            $statement = $conn->prepare("insert into users (email, password) values (:email, :password);");
            $statement->bindValue(':email', $this->email);
            $statement->bindValue(':password', $password);
            return $statement->execute();
        }
    }