<?php
    require_once("models/userModel.php");

    class kontoController
    {
        public function profil($parameters)
        {
            $um = new userModel();
            session_start();

            if(!isset($_SESSION["user_id"]))
            {
                header("Location: " . ROOT_URL . "praca/glowna");
            }

            $userData = $um->getUserData($_SESSION["user_id"]);

            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);


            $data["switchView"] = loader::loadView("profile", "switchContentView", null, true);


            $data["personalData"] = loader::loadView("profile", "personalDataView", $userData, true);

            $userData["email"] = ($um->getUserEmail($_SESSION["user_id"]))["email"];
            $data["contactData"] = loader::loadView("profile", "contactDataView", $userData, true);


            $data["occupationSummary"] = loader::loadView("profile", "occupationSummaryView", $userData, true);


            $data["occupationExperience"] = loader::loadView("profile", "occupationExperienceView", $parameters, true);


            $data["educationView"] = loader::loadView("profile", "educationView", $parameters, true);


            $data["coursesView"] = loader::loadView("profile", "coursesView", $parameters, true);

            $skillsData = $um->getUserSkills($_SESSION["user_id"]);
            $data["skillsView"] = loader::loadView("profile", "skillsView", $skillsData, true);

            $languages = $um->getUserLanguages($_SESSION["user_id"]);
            $languagesData = [];
            foreach($languages as $language)
            {
                array_push($languagesData, loader::loadView("profile", "singleLanguageView", $language, true));
            }
            $data["leanguagesLevelView"] = loader::loadView("profile", "leanguagesLevelView", $languagesData, true);


            $links = $um->getUserLinks($_SESSION["user_id"]);
            $linksData = [];
            foreach($links as $link)
            {
                array_push($linksData, loader::loadView("profile", "singleLinkView", $link, true));
            }
            $data["linksView"] = loader::loadView("profile", "linksView", $linksData, true);


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

        public function savePersonalData()
        {
            $um = new userModel();
            session_start();

            $um->saveUserPersonalData($_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveContactData()
        {
            $um = new userModel();
            session_start();

            $um->saveUserContactData($_POST, $_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveOccupationSummaryData()
        {
            $um = new userModel();
            session_start();

            $um->saveUserOccupationSummaryData($_POST, $_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveSkill()
        {
            $um = new userModel();
            session_start();

            $um->saveUserSkill($_POST, $_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function removeSkill($parameters)
        {
            $um = new userModel();
            session_start();

            $um->removeUserSkill($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveLink($parameters)
        {
            $um = new userModel();
            session_start();

            $um->saveUserLink($_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function removeLink($parameters)
        {
            $um = new userModel();
            session_start();

            $um->removeUserLink($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveLanguage($parameters)
        {
            $um = new userModel();
            session_start();

            $um->saveUserLanguage($_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function removeLanguage($parameters)
        {
            $um = new userModel();
            session_start();

            $um->removeUserLanguage($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
?>