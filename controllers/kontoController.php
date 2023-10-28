<?php
    require_once("models/userModel.php");

    class kontoController
    {
        public function profil($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["personalData"] = loader::loadView("profile", "personalDataView", null, true);
            $data["contactData"] = loader::loadView("profile", "contactDataView", null, true);
            $data["occupationSummary"] = loader::loadView("profile", "occupationSummaryView", $parameters, true);
            $data["occupationExperience"] = loader::loadView("profile", "occupationExperienceView", $parameters, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("profile", "profileView", $data);
        }
    }
?>