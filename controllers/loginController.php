<?php
    require_once("parameters.php");
    require_once("models/userModel.php");

    class loginController
    {
        public function email()
        {
            $um = new userModel();

            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", $um->getUserPermission(), true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", $um->getUserPermission(), true);

            $data["content"] = loader::loadView("loginPage", "detectEmailView", null, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function zarejestruj($parameters)
        {
            $um = new userModel();

            if($parameters[0] == "" || !($um->verifySessionCode($parameters[0], "Up")))
            {
                header("Location: " . ROOT_URL . "login/email");
                return;
            }

            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", $um->getUserPermission(), true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", $um->getUserPermission(), true);

            $content_data["email"] = $um->getSessionEmail($parameters[0], "Up");
            $content_data["code"] = $parameters[0];
            $data["content"] = loader::loadView("loginPage", "signUpView", $content_data, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function zaloguj($parameters)
        {
            $um = new userModel();

            if($parameters[0] == "" || !($um->verifySessionCode($parameters[0], "In")))
            {
                header("Location: " . ROOT_URL . "login/email");
                return;
            }

            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", $um->getUserPermission(), true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", $um->getUserPermission(), true);

            $content_data["email"] = $um->getSessionEmail($parameters[0], "In");
            $content_data["code"] = $parameters[0];
            $data["content"] = loader::loadView("loginPage", "signInView", $content_data, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function dalej($parameters)
        {
            if(!isset($_POST["email"]))
            {
                $this->email();
                return;
            }

            $um = new userModel();
            $user = $um->getUserByEmail($_POST["email"]);

            if(count($user) == 0)
            {
                $um->createLoginSession($_POST["email"], "Up");
                $session_code = $um->getSessionCode($_POST["email"]);
                header("Location: " . ROOT_URL . "login/zarejestruj/" . $session_code);
                return;
            }

            if(count($user) == 1)
            {
                $um->createLoginSession($_POST["email"], "In");
                $session_code = $um->getSessionCode($_POST["email"]);
                header("Location: " . ROOT_URL . "login/zaloguj/" . $session_code);
                return;
            }
        }

        public function utworz_konto($parameters)
        {
            $um = new userModel();

            if(!isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["code"]) || !($um->verifySessionCode($_POST["code"], "Up")))
            {
                header("Location: " . ROOT_URL . "login/email");
                return;
            }

            $um->signUpUserAndDeleteSession($_POST["email"], $_POST["password"], $_POST["code"]);
        }

        public function zaloguj_konto($parameters)
        {
            $um = new userModel();

            if(!isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["code"]) || !($um->verifySessionCode($_POST["code"], "In")))
            {
                header("Location: " . ROOT_URL . "login/email");
                return;
            }

            $um->signInUserAndDeleteSession($_POST["email"], $_POST["password"], $_POST["code"]);
        }

    }
?>