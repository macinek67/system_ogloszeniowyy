<?php
    require_once("models/userModel.php");

    class pracaController
    {
        public function oferta($parameters)
        {
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $mainPanel_data["mainPanel_header"] = loader::loadView("announcement", "mainPanel_headerView", null, true);
            $mainPanel_data["mainPanel_coreInfo"] = loader::loadView("announcement", "mainPanel_coreInfoView", null, true);
            $mainPanel_data["mainPanel_localization"] = loader::loadView("announcement", "mainPanel_localizationView", null, true);
            $mainPanel_data["mainPanel_responsibilities"] = loader::loadView("announcement", "mainPanel_responsibilitiesView", null, true);
            $mainPanel_data["mainPanel_requirements"] = loader::loadView("announcement", "mainPanel_requirementsView", null, true);
            $mainPanel_data["mainPanel_benefits"] = loader::loadView("announcement", "mainPanel_benefitsView", null, true);
            $mainPanel_data["mainPanel_footer"] = loader::loadView("announcement", "mainPanel_footerView", null, true);
            $mainPanel_data["sidePanel"] = loader::loadView("announcement", "sidePanelView", null, true);
            $data["mainPanel"] = loader::loadView("announcement", "mainPanelView", $mainPanel_data, true);
            $data["sidePanel"] = loader::loadView("announcement", "sidePanelView", null, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("announcement", "announcementView", $data);
        }

        public function glowna($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerInfo"] = loader::loadView("mainPage", "headerInfoView", null, true);
            $data["searchSection"] = loader::loadView("mainPage", "searchSectionView", null, true);
            $offers_data["offersList"] = loader::loadView("mainPage", "offersListView", null, true);
            $data["offers"] = loader::loadView("mainPage", "offersView", $offers_data, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("mainPage", "mainPageView", $data);
        }

    }
?>