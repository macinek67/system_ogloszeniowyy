<?php
    require_once("models/userModel.php");
    require_once("models/announcementModel.php");
    require_once("models/companyModel.php");

    class kontoController
    {
        public function profil($parameters)
        {
            $um = new userModel();
            session_start();

            if(!isset($_SESSION["user_id"]))
            {
                header("Location: " . ROOT_URL . "login/email");
            }
            else if($_SESSION["user_role"] == 1)
            {
                header("Location: " . ROOT_URL . "konto/panel_administratora");
            }

            $userData = $um->getUserData($_SESSION["user_id"]);


            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", $um->getUserPermission(), true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", $um->getUserPermission(), true);


            $data["switchView"] = loader::loadView("profile", "switchContentView", null, true);


            $data["personalData"] = loader::loadView("profile", "personalDataView", $userData, true);

            $userData["email"] = ($um->getUserEmail($_SESSION["user_id"]))["email"];
            $data["contactData"] = loader::loadView("profile", "contactDataView", $userData, true);


            $data["occupationSummary"] = loader::loadView("profile", "occupationSummaryView", $userData, true);


            $experience = $um->getUserOccupationExperience($_SESSION["user_id"]);
            $experienceData = [];
            foreach($experience as $singleExperience)
            {
                array_push($experienceData, loader::loadView("profile", "singleOccupationExperienceView", $singleExperience, true));
            }
            $data["occupationExperience"] = loader::loadView("profile", "occupationExperienceView", $experienceData, true);


            $education = $um->getUserEducation($_SESSION["user_id"]);
            $educationData = [];
            foreach($education as $singleEducation)
            {
                array_push($educationData, loader::loadView("profile", "singleEducationView", $singleEducation, true));
            }
            $data["educationView"] = loader::loadView("profile", "educationView", $educationData, true);


            $courses = $um->getUserCourses($_SESSION["user_id"]);
            $coursesData = [];
            foreach($courses as $course)
            {
                array_push($coursesData, loader::loadView("profile", "singleCourseView", $course, true));
            }
            $data["coursesView"] = loader::loadView("profile", "coursesView", $coursesData, true);

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
            $am = new announcementModel();
            $um = new userModel();
            session_start();

            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", $um->getUserPermission(), true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", $um->getUserPermission(), true);


            $data["switchView"] = loader::loadView("profile", "switchContentView", null, true);


            $announcementList = $am->getSavedActiveAnnouncements($_SESSION["user_id"]);
            $announcementData = [];
            foreach($announcementList as $announcement)
            {
                array_push($announcementData, loader::loadView("saved", "singleSavedView", $announcement, true));
            }
            $data["activeList"] = $announcementData;

            $announcementList = $am->getSavedExpiredAnnouncements($_SESSION["user_id"]);
            $announcementData = [];
            foreach($announcementList as $announcement)
            {
                array_push($announcementData, loader::loadView("saved", "singleSavedView", $announcement, true));
            }
            $data["expiredList"] = $announcementData;


            $data["footer"] = loader::loadView("footer", "footerView", null, true);


            loader::loadView("saved", "savedView", $data);
        }

        public function removeSaved($parameters)
        {
            $um = new userModel();
            session_start();

            $um->removeUserSaved($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function zaaplikowane($parameters)
        {
            $am = new announcementModel();
            $um = new userModel();
            session_start();


            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", $um->getUserPermission(), true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", $um->getUserPermission(), true);


            $data["switchView"] = loader::loadView("profile", "switchContentView", null, true);


            $announcementList = $am->getAppliedActiveAnnouncements($_SESSION["user_id"]);
            $announcementData = [];
            foreach($announcementList as $announcement)
            {
                array_push($announcementData, loader::loadView("applied", "singleAppliedView", $announcement, true));
            }
            $data["activeList"] = $announcementData;

            $announcementList = $am->getAppliedExpiredAnnouncements($_SESSION["user_id"]);
            $announcementData = [];
            foreach($announcementList as $announcement)
            {
                array_push($announcementData, loader::loadView("applied", "singleAppliedView", $announcement, true));
            }
            $data["expiredList"] = $announcementData;


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

        public function saveCourse($parameters)
        {
            $um = new userModel();
            session_start();

            $um->saveUserCourse($_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function removeCourse($parameters)
        {
            $um = new userModel();
            session_start();

            $um->removeUserCourse($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveEducation($parameters)
        {
            $um = new userModel();
            session_start();

            $um->saveUserEducation($_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function removeEducation($parameters)
        {
            $um = new userModel();
            session_start();

            $um->removeUserEducation($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveOccupationExperience($parameters)
        {
            $um = new userModel();
            session_start();

            $um->saveUserOccupationExperience($_SESSION["user_id"]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function removeOccupationExperience($parameters)
        {
            $um = new userModel();
            session_start();

            $um->removeUserOccupationExperience($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function panel_administratora($parameters)
        {
            $um = new userModel();
            session_start();

            
            if(!isset($_SESSION["user_id"]))
            {
                header("Location: " . ROOT_URL . "login/email");
            }
            else if($_SESSION["user_role"] == 2)
            {
                header("Location: " . ROOT_URL . "konto/profil");
            }


            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", $um->getUserPermission(), true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", $um->getUserPermission(), true);


            $contentContainerData["navigation"] = loader::loadView("adminPanel", "navigationElementView", null, true);

            if($parameters[0] == "firmy" || $parameters[0] == "")
            {
                $contentContainerData["content"] = loader::loadView("adminPanel", "copmanyView", null, true);
            }
            else if($parameters[0] == "kategorie")
            {
                $am = new announcementModel();
                $contentContainerData["content"] = loader::loadView("adminPanel", "categoryView", $am->getCategories(), true);
            }
            else if($parameters[0] == "ogloszenia")
            {
                $cm = new companyModel();
                $am = new announcementModel();
                $addAnnouncementData["company"] = $cm->getCompaniesByPopularity();
                $addAnnouncementData["category"] = $am->getSubcategories();
                $addAnnouncementData["positionLevel"] = $am->getPositionLevels();
                $addAnnouncementData["concractType"] = $am->getContractTypes();
                $addAnnouncementData["workingTime"] = $am->getWorking_times();
                $addAnnouncementData["workType"] = $am->getWork_types();
                $contentContainerData["content"] = loader::loadView("adminPanel", "announcementView", $addAnnouncementData, true);
            }

            $data["contentContainer"] = loader::loadView("adminPanel", "ContentContainerView", $contentContainerData, true);


            $data["footer"] = loader::loadView("footer", "footerView", null, true);


            loader::loadView("adminPanel", "adminPanelView", $data);
        }

        public function addCompany()
        {
            $cm = new companyModel();

            $cm->insertNewCompany();

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function addCategory()
        {
            $am = new announcementModel();

            $am->insertNewCategory();

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function addSubcategory()
        {
            $am = new announcementModel();

            $am->insertNewSubcategory();

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function addAnnouncement()
        {
            $am = new announcementModel();

            $am->insertNewAnnouncement();

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
?>