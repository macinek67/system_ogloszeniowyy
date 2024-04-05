<?php
    require_once("models/announcementModel.php");
    require_once("models/companyModel.php");

    class pracaController
    {
        public function oferta($parameters)
        {
            $am = new announcementModel();
            $cm = new companyModel();

            $announcement = $am->getAnnouncementById($parameters[0]);
            if(count($announcement) == 0)
            {
                header("Location: " . ROOT_URL . "praca/glowna");
                return;
            }

            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);


            $companyData = $cm->getCompanyData($announcement[0]["company_id"]);
            $mainPanelHeaderData["position_name"] = $announcement[0]["position_name"];
            $mainPanelHeaderData["earnings"] = $announcement[0]["earnings"];
            $mainPanelHeaderData["company_name"] = $companyData["short_name"];
            $mainPanelHeaderData["company_logo"] = $companyData["logo"];
            $mainPanel_data["mainPanel_header"] = loader::loadView("announcement", "mainPanel_headerView", $mainPanelHeaderData, true);


            $mainPanelCoreInfoData["city"] = $announcement[0]["city"];
            $daysToEnd = round((strtotime($announcement[0]["end_date"]) - strtotime(date('Y-m-d G:i:s'))) / 86400); 
            $mainPanelCoreInfoData["daysToEnd"] = $daysToEnd;
            $mainPanelCoreInfoData["endDate"] = $announcement[0]["end_date"];
            $mainPanelCoreInfoData["contractType"] = $am->getAnnouncementContractType($announcement[0]["contract_type_id"]);
            $mainPanelCoreInfoData["workType"] = $am->getAnnouncementWorkType($announcement[0]["work_type_id"]);
            $mainPanelCoreInfoData["workingTime"] = $am->getAnnouncementWorkingTime($announcement[0]["working_time_id"]);
            $mainPanelCoreInfoData["positionLevel"] = $am->getAnnouncementPositionLevel($announcement[0]["position_level_id"]);
            $mainPanel_data["mainPanel_coreInfo"] = loader::loadView("announcement", "mainPanel_coreInfoView", $mainPanelCoreInfoData, true);


            $localizationData["localization"] = $announcement[0]["localization_link"];
            $mainPanel_data["mainPanel_localization"] = loader::loadView("announcement", "mainPanel_localizationView", $localizationData, true);


            $responsibilities = $am->getAnnouncementResponsibilities($announcement[0]["announcement_id"]);
            $responsibilitiesData["list"] = [];
            foreach($responsibilities as $responsibility)
            {
                $responsibilityData["content"] = $responsibility["description"];
                array_push($responsibilitiesData["list"], loader::loadView("announcement", "singleResponsibilityView", $responsibilityData, true));
            }
            $mainPanel_data["mainPanel_responsibilities"] = loader::loadView("announcement", "mainPanel_responsibilitiesView", $responsibilitiesData, true);


            $requirements = $am->getAnnouncementRequirements($announcement[0]["announcement_id"]);
            $requirementsData["list"] = [];
            foreach($requirements as $requirement)
            {
                $requirementData["content"] = $requirement["description"];
                array_push($requirementsData["list"], loader::loadView("announcement", "singleRquirementView", $requirementData, true));
            }
            $mainPanel_data["mainPanel_requirements"] = loader::loadView("announcement", "mainPanel_requirementsView", $requirementsData, true);


            $benefits = $am->getAnnouncementBenefits($announcement[0]["announcement_id"]);
            $benefitsData["list"] = [];
            foreach($benefits as $benefit)
            {
                $benefitData["content"] = $benefit["description"];
                array_push($benefitsData["list"], loader::loadView("announcement", "singleBenefitView", $benefitData, true));
            }
            $mainPanel_data["mainPanel_benefits"] = loader::loadView("announcement", "mainPanel_benefitsView", $benefitsData, true);


            $mainPanelFooterData["city"] = $announcement[0]["city"];
            $mainPanelFooterData["category"] = $am->getAnnouncementCategoryName($announcement[0]["category_id"]);
            $mainPanelFooterData["subcategory"] = $am->getAnnouncementSubcategoryName($announcement[0]["subcategory_id"]);
            $mainPanel_data["mainPanel_footer"] = loader::loadView("announcement", "mainPanel_footerView", $mainPanelFooterData, true);


            $sidePanelData["announcement_id"] = $announcement[0]["announcement_id"];
            $mainPanel_data["sidePanel"] = loader::loadView("announcement", "sidePanelView", $sidePanelData, true);


            $data["mainPanel"] = loader::loadView("announcement", "mainPanelView", $mainPanel_data, true);


            $data["sidePanel"] = loader::loadView("announcement", "sidePanelView", $sidePanelData, true);


            $data["footer"] = loader::loadView("footer", "footerView", null, true);


            loader::loadView("announcement", "announcementView", $data);
        }

        public function applyToAnnouncement($parameters)
        {
            session_start();

            $am = new announcementModel();
            $am->insertAppliedAnnouncement($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        public function saveAnnouncement($parameters)
        {
            session_start();

            $am = new announcementModel();
            $am->insertSavedAnnouncement($parameters[0]);

            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }

        // private function tak($message)
        // {
        //     $data["messageContent"] = $message;
        //     loader::loadView("messages", "successfulMessageView", $data);
        // }

        public function glowna($parameters)
        {
            $am = new announcementModel();

            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);


            $headerInfoData["countAnnouncements"] = count($am->countAnnouncements());
            $data["headerInfo"] = loader::loadView("mainPage", "headerInfoView", $headerInfoData, true);


            $data["searchSection"] = loader::loadView("mainPage", "searchSectionView", null, true);


            $newestAnnouncements = $am->getNewestAnnouncements();
            $newestAnnouncementsViewsList = [];
            $cm = new companyModel();
            foreach($newestAnnouncements as $announcement)
            {
                $companyData = $cm->getCompanyData($announcement["company_id"]);
                $announcement["company_shortName"] = $companyData["short_name"];
                $announcement["company_logo"] = $companyData["logo"];
                array_push($newestAnnouncementsViewsList, loader::loadView("mainPage", "singleOfferView", $announcement, true));
            }
            $offers_data["searchedOffersList"] = $newestAnnouncementsViewsList;
            $data["offers"] = loader::loadView("mainPage", "offersView", $offers_data, true);


            $popularCompanies = $cm->getCompaniesByPopularity();
            $popularCompaniesViewsList = [];
            foreach($popularCompanies as $company)
            {
                array_push($popularCompaniesViewsList, loader::loadView("mainPage", "singleCompanyView", $company, true));
            }
            $companies_data["companiesList"] = $popularCompaniesViewsList;
            $data["companies"] = loader::loadView("mainPage", "bestCompaniesListView", $companies_data, true);


            $categories_data["categoryList"] = loader::loadView("mainPage", "singleCategoryView", null, true);
            $data["categories"] = loader::loadView("mainPage", "bestCategoriesView", $categories_data, true);

            
            $data["footer"] = loader::loadView("footer", "footerView", null, true);


            loader::loadView("mainPage", "mainPageView", $data);
        }

        public $filters = [
            "position_name" => "",
            "city" => "",
            "category_id" => [],
            "subcategory_id" => [],
            "position_level_id" => [],
            "contract_type_id" => [],
            "working_time_id" => [],
            "work_type_id" => [],
            "page" => 1
        ];

        public function szukaj($parameters)
        {
            $this->setFilters();

            $am = new announcementModel();

            // echo "<pre>";
            // print_r($this->filters);
            // echo "</pre>";

            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);


            $filters_data["position_levels_list"] = $am->getPositionLevels();
            $filters_data["contract_types_list"] = $am->getContractTypes();
            $filters_data["working_times_list"] = $am->getWorking_times();
            $filters_data["work_types_list"] = $am->getWork_types();
            $filters_data["checked-position_levels"] = $this->filters["position_level_id"];
            $filters_data["checked-contract_type"] = $this->filters["contract_type_id"];
            $filters_data["checked-working_time"] = $this->filters["working_time_id"];
            $filters_data["checked-work_type"] = $this->filters["work_type_id"];
            $data["filters"] = loader::loadView("searchPage", "filtersView", $filters_data, true);


            $searchedAnnouncements = $am->getAnnouncementsByFilters($this->filters, true);
            $allAnnouncements = $am->getAnnouncementsByFilters($this->filters, false);

            $sortPanelData["searchedAnnouncementsCount"] = count($allAnnouncements);
            $sortPanelData["pages"] = ceil(count($allAnnouncements) / ANN_PER_PAGE);
            $sortPanelData["currentPage"] = $this->filters["page"];
            $data["sortPanel"] = loader::loadView("searchPage", "sortPanelView", $sortPanelData, true);

            $searchedAnnouncementsViewsList = [];
            $cm = new companyModel();
            foreach($searchedAnnouncements as $announcement)
            {
                $companyData = $cm->getCompanyData($announcement["company_id"]);
                $announcement["company_shortName"] = $companyData["short_name"];
                $announcement["company_logo"] = $companyData["logo"];
                $announcement["start_date"] = substr($announcement["start_date"], 0, 10);
                array_push($searchedAnnouncementsViewsList, loader::loadView("searchPage", "singleSearchedOfferView", $announcement, true));
            }
            $data["searchedOffersList"] = $searchedAnnouncementsViewsList;

            $paginationData["pages"] = ceil(count($allAnnouncements) / ANN_PER_PAGE);
            $paginationData["currentPage"] = $this->filters["page"];
            $data["searchPagination"] = loader::loadView("searchPage", "searchPaginationView", $paginationData, true);

            $data["footer"] = loader::loadView("footer", "footerView", null, true);

            loader::loadView("searchPage", "searchPageView", $data);
        }

        public function setFilters()
        {
            foreach ($_POST as $type => $value_arr)
            {
                $values = [];
                if(is_array($value_arr))
                {
                    foreach($value_arr as $value)
                    {
                        array_push($values, $value);
                    }
                }
                else
                {
                    $values = $value_arr;
                }
                $this->filters[$type] = $values;
            }
        }

    }
?>