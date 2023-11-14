<?php
    require_once("models/userModel.php");

    class pracaController
    {
        public function oferta($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $mainPanel_data["mainPanel_header"] = loader::loadView("announcement", "mainPanel_headerView", null, true);
            $mainPanel_data["mainPanel_coreInfo"] = loader::loadView("announcement", "mainPanel_coreInfoView", null, true);
            $mainPanel_data["mainPanel_localization"] = loader::loadView("announcement", "mainPanel_localizationView", null, true);
            $data["mainPanel"] = loader::loadView("announcement", "mainPanelView", $mainPanel_data, true);
            $data["sidePanel"] = loader::loadView("announcement", "sidePanelView", null, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("announcement", "announcementView", $data);
        }

        public function glowna($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);

            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("mainPage", "mainPageView", $data);
        }

    }
?>