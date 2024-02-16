<?php
    require_once("models/userModel.php");

    class loginController
    {
        public function zarejestruj($parameters)
        {
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $data["content"] = loader::loadView("loginPage", "signUpEmailView", null, true);

            loader::loadView("loginPage", "loginView", $data);
        }

        public function zaloz_konto($parameters)
        {
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);

            $data["content"] = loader::loadView("loginPage", "signUpPasswordView", null, true);

            loader::loadView("loginPage", "loginView", $data);
        }

    }
?>