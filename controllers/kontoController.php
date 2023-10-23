<?php
    require_once("models/accountModel.php");

    class kontoController
    {
        public function profil()
        {
            $data["headerDesktop"] = loader::loadView("headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobileView", null, true);
            $data["footer"] = loader::loadView("footerView", null, true);
            loader::loadView("pageView", $data);
        }
    }
?>