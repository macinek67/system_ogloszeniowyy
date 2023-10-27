<?php
    require_once("models/userModel.php");

    class kontoController
    {
        public function profil()
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["personalData"] = loader::loadView("profile", "personalDataView", null, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("profile", "profileView", $data);
        }
    }
?>