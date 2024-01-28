<?php
    require_once("models/userModel.php");

    class kontoController
    {
        public function profil($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["switchView"] = loader::loadView("profile", "switchContentView", null, true);
            $data["personalData"] = loader::loadView("profile", "personalDataView", null, true);
            $data["contactData"] = loader::loadView("profile", "contactDataView", null, true);
            $data["occupationSummary"] = loader::loadView("profile", "occupationSummaryView", $parameters, true);
            $data["occupationExperience"] = loader::loadView("profile", "occupationExperienceView", $parameters, true);
            $data["educationView"] = loader::loadView("profile", "educationView", $parameters, true);
            $data["coursesView"] = loader::loadView("profile", "coursesView", $parameters, true);
            $data["skillsView"] = loader::loadView("profile", "skillsView", $parameters, true);
            $data["leanguagesLevelView"] = loader::loadView("profile", "leanguagesLevelView", $parameters, true);
            $data["linksView"] = loader::loadView("profile", "linksView", $parameters, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("profile", "profileView", $data);
        }

        public function zapisane($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["switchView"] = loader::loadView("profile", "switchContentView", null, true);
            $data["offersList"] = loader::loadView("saved", "singleSavedView", null, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("saved", "savedView", $data);
        }

        public function zaaplikowane($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["switchView"] = loader::loadView("profile", "switchContentView", null, true);
            $data["offersList"] = loader::loadView("applied", "singleAppliedView", null, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);
            loader::loadView("applied", "appliedView", $data);
        }
    }
?>