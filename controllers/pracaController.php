<?php
    require_once("models/userModel.php");

    class pracaController
    {
        public function oferta($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["sidePanel"] = loader::loadView("announcement", "sidePanelView", null, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("announcement", "announcementView", $data);
        }

    }
?>