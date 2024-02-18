<?php
    require_once("parameters.php");
    require_once("models/userModel.php");

    class loginController
    {
        public function email()
        {
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $data["content"] = loader::loadView("loginPage", "detectEmailView", null, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function zarejestruj($parameters)
        {
            if(!isset($_POST["email"]))
            {
                $this->email();
                return;
            }

            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $content_data["email"] = $_POST["email"];
            $data["content"] = loader::loadView("loginPage", "signUpView", $content_data, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function zaloguj($parameters)
        {
            if(!isset($_POST["email"]))
            {
                $this->email();
                return;
            }

            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $data["content"] = loader::loadView("loginPage", "signInView", null, true);

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
                $this->zarejestruj($_POST["email"]);
                return;
            }

            if(count($user) > 0)
            {
                $this->zaloguj($_POST["email"]);
                return;
            }
        }

        public function utworz_konto($parameters)
        {
            if(!isset($_POST["email"]) || !isset($_POST["password"]))
            {
                $this->email();
                return;
            }

            $um = new userModel();
            $um->insertUser($_POST["email"], $_POST["password"]);
        }

    }
?>