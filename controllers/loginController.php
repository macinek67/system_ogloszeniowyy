<?php
    require_once("models/userModel.php");

    class loginController
    {
        public function email($parameters)
        {
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $data["content"] = loader::loadView("loginPage", "detectEmailView", null, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function zarejestruj($parameters)
        {
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $data["content"] = loader::loadView("loginPage", "signUpView", null, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function zaloguj($parameters)
        {
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $data["content"] = loader::loadView("loginPage", "signInView", null, true);

            loader::loadView("loginPage", "loginView", $data);
        }

    }
?>