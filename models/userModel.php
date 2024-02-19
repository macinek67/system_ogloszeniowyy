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

        public function createLoginSession($email, $signType)
        {
            $result = $this->connection->query("SELECT code FROM login_session WHERE email='$email' LIMIT 1");
            if ($row = $result->fetch_assoc()) {
                return;
            }

            $code = bin2hex(random_bytes(22));
            $currentTime = date("Y-m-d G:i:s");
            $this->connection->query("INSERT INTO login_session(code, email, sign_type, start_date) VALUES('$code', '$email', '$signType', '$currentTime')");
        }

        public function getSessionCode($email)
        {
            $result = $this->connection->query("SELECT code FROM login_session WHERE email='$email' LIMIT 1");
            if ($row = $result->fetch_assoc()) {
                return $row["code"];
            }
        }

        public function getSessionEmail($code, $sign_type)
        {
            $result = $this->connection->query("SELECT * FROM login_session WHERE code='$code' AND sign_type='$sign_type' LIMIT 1");
            if ($row = $result->fetch_assoc()) {
                return $row["email"];
            }
        }

        public function verifySessionCode($code, $sign_type)
        {
            $result = $this->connection->query("SELECT * FROM login_session WHERE code='$code' AND sign_type='$sign_type' LIMIT 1");
            if ($row = $result->fetch_assoc()) {
                return true;
            }
            return false;
        }

        public function signUpUserAndDeleteSession($email, $password, $code)
        {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $this->connection->query("INSERT INTO user(email, password, role_id) VALUES('$email', '$hashedPassword', '2')");
            $this->connection->query("DELETE FROM login_session WHERE code='$code' AND email='$email'");
            
            header("Location: " . ROOT_URL . "login/email");
        }

        public function signInUserAndDeleteSession($email, $password, $code)
        {
            $result = $this->connection->query("SELECT * FROM user WHERE email='$email' LIMIT 1");
            if ($row = $result->fetch_assoc()) {
                if(password_verify($password, $row["password"]))
                {
                    session_start();
                    $_SESSION["user_id"] = $row["user_id"];
                    $_SESSION["user_role"] = $row["role_id"];
                    $this->connection->query("DELETE FROM login_session WHERE code='$code' AND email='$email'");
                    header("Location: " . ROOT_URL . "praca/glowna");
                    return;
                }
            }
            header("Location: " . ROOT_URL . "login/zaloguj/" . $code);
        }
    }

?>