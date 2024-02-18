<?php
    require_once("parameters.php");

    class userModel
    {
        public $connection = null;

        public function __construct()
        {
            $this->connection = new mysqli("localhost", "root", "", "system_ogloszeniowy");
        }

        public function getUserByEmail($email)
        {
            $result = $this->connection->query("SELECT * FROM user WHERE email='$email'");

            $gotUser = [];
            if ($row = $result->fetch_assoc()) {
                $gotUser = $row;
            }

            return $gotUser;
        }

        public function insertUser($email, $password)
        {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $this->connection->query("INSERT INTO user(email, password, role_id) VALUES('$email', '$hashedPassword', '2')");
            
            header("Location: " . ROOT_URL . "login/email");
        }
    }

?>