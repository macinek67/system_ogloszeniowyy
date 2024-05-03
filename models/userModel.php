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
                array_push($gotUser, $row);
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

        public function getUserData($user_id)
        {
            $result = $this->connection->query("SELECT * FROM user_data WHERE user_id='$user_id'");
            if ($row = $result->fetch_assoc()) {
                return $row;
            }
            
            $result = $this->connection->query("INSERT INTO user_data(user_id) VALUES('$user_id')");
            
            $result = $this->connection->query("SELECT * FROM user_data WHERE user_id='$user_id'");
            if ($row = $result->fetch_assoc()) {
                return $row;
            }
        }

        public function saveUserPersonalData($user_id)
        {
            $path = $_SERVER["DOCUMENT_ROOT"] . "/" . explode("/", $_SERVER['REDIRECT_URL'])[1] . "/application_images/";

            if($_FILES["pfp"]["size"] != 0)
            {
                $uploadfile = $path . basename($_FILES['pfp']['name']);
                move_uploaded_file($_FILES['pfp']['tmp_name'], $uploadfile);
    
                $fileName = basename($_FILES['pfp']['name']);
    
                $result = $this->connection->query("UPDATE user_data SET name='$_POST[name]', surname='$_POST[surname]', currnent_occupation='$_POST[currentOccupation]', city='$_POST[city]', pfp='$fileName' WHERE user_id='$user_id'");
            }
            else
            {
                $result = $this->connection->query("UPDATE user_data SET name='$_POST[name]', surname='$_POST[surname]', currnent_occupation='$_POST[currentOccupation]', city='$_POST[city]' WHERE user_id='$user_id'");
            }
        }

        public function getUserEmail($user_id)
        {
            $result = $this->connection->query("SELECT email FROM user WHERE user_id='$user_id'");
            if ($row = $result->fetch_assoc()) {
                return $row;
            }
        }

        public function saveUserContactData($data, $user_id)
        {
            $result = $this->connection->query("UPDATE user_data SET telephone_number='$data[telephone_number]', birth_date='$data[birth_date]' WHERE user_id='$user_id'");
        }

        public function saveUserOccupationSummaryData($data, $user_id)
        {
            $result = $this->connection->query("UPDATE user_data SET summary='$data[summary]' WHERE user_id='$user_id'");
        }

        public function saveUserSkill($data, $user_id)
        {
            $result = $this->connection->query("INSERT INTO user_skill(user_id, name) VALUES('$user_id', '$data[name]')");
        }

        public function getUserSkills($user_id)
        {
            $result = $this->connection->query("SELECT skill_id, name FROM user_skill WHERE user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function removeUserSkill($data)
        {
            $result = $this->connection->query("DELETE FROM user_skill WHERE skill_id='$data'");
        }

        public function saveUserLink($user_id)
        {
            $result = $this->connection->query("INSERT INTO user_link(user_id, name, url) VALUES('$user_id', '$_POST[name]', '$_POST[url]')");
        }

        public function getUserLinks($user_id)
        {
            $result = $this->connection->query("SELECT * FROM user_link WHERE user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function removeUserLink($data)
        {
            $result = $this->connection->query("DELETE FROM user_link WHERE link_id='$data'");
        }

        public function getUserLanguages($user_id)
        {
            $result = $this->connection->query("SELECT * FROM user_language WHERE user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function saveUserLanguage($user_id)
        {
            $result = $this->connection->query("INSERT INTO user_language(user_id, language, level) VALUES('$user_id', '$_POST[language]', '$_POST[level]')");
        }

        public function removeUserLanguage($data)
        {
            $result = $this->connection->query("DELETE FROM user_language WHERE language_id='$data'");
        }

        public function saveUserCourse($user_id)
        {
            $result = $this->connection->query("INSERT INTO user_course(user_id, name, organizer, period_start, period_end) VALUES('$user_id', '$_POST[name]', '$_POST[organizer]', '$_POST[period_start]', '$_POST[period_end]')");
        }

        public function getUserCourses($user_id)
        {
            $result = $this->connection->query("SELECT * FROM user_course WHERE user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function removeUserCourse($data)
        {
            $result = $this->connection->query("DELETE FROM user_course WHERE course_id='$data'");
        }

        public function saveUserEducation($user_id)
        {
            $result = $this->connection->query("INSERT INTO user_education(user_id, school_name, level, direction, specialization, period_start, period_end) VALUES('$user_id', '$_POST[school_name]', '$_POST[level]', '$_POST[direction]', '$_POST[specialization]', '$_POST[period_start]', '$_POST[period_end]')");
        }

        public function getUserEducation($user_id)
        {
            $result = $this->connection->query("SELECT * FROM user_education WHERE user_id='$user_id' ORDER BY education_id DESC");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function removeUserEducation($data)
        {
            $result = $this->connection->query("DELETE FROM user_education WHERE education_id='$data'");
        }

        public function saveUserOccupationExperience($user_id)
        {
            $result = $this->connection->query("INSERT INTO user_experience(user_id, position, city, company, duties, period_start, period_end) VALUES('$user_id', '$_POST[position]', '$_POST[city]', '$_POST[company]', '$_POST[duties]', '$_POST[period_start]', '$_POST[period_end]')");
        }

        public function getUserOccupationExperience($user_id)
        {
            $result = $this->connection->query("SELECT * FROM user_experience WHERE user_id='$user_id' ORDER BY experience_id DESC");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function removeUserOccupationExperience($data)
        {
            $result = $this->connection->query("DELETE FROM user_experience WHERE experience_id='$data'");
        }

        public function removeUserSaved($data)
        {
            $result = $this->connection->query("DELETE FROM user_saved WHERE saved_id='$data'");
        }

        public function getUserPermission()
        {
            if(!isset($_SESSION))
            {
                session_start();
            }

            $headerData = [];

            if(isset($_SESSION["user_role"]) && $_SESSION["user_role"] == 1)
            {
                $headerData["titlePC"] = "Panel admina";
                $headerData["titlePhone"] = "Admin";
                $headerData["href"] = "konto/panel_administratora";
                $headerData["icon"] = "bi-gear";
            }
            else
            {
                $headerData["titlePC"] = "Moje konto";
                $headerData["titlePhone"] = "Konto";
                $headerData["href"] = "konto/profil";
                $headerData["icon"] = "bi-person";
            }

            return $headerData;
        }
    }

?>