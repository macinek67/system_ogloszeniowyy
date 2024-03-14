<?php
    require_once("models/announcementModel.php");
    require_once("models/companyModel.php");

    class pracaController
    {
        public function oferta($parameters)
        {
            $am = new announcementModel();

            $announcement = $am->getAnnouncementById($parameters[0]);
            if(count($announcement) == 0)
            {
                header("Location: " . ROOT_URL . "praca/glowna");
                return;
            }

            //$this->tak("Utworzono nowego uzytkownika.");
            //$this->tak("Zesralem sie!");
            // $this->tak("Wow!");

            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);


            $mainPanel_data["mainPanel_header"] = loader::loadView("announcement", "mainPanel_headerView", null, true);
            $mainPanel_data["mainPanel_coreInfo"] = loader::loadView("announcement", "mainPanel_coreInfoView", null, true);
            $mainPanel_data["mainPanel_localization"] = loader::loadView("announcement", "mainPanel_localizationView", null, true);


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


            $mainPanel_data["mainPanel_footer"] = loader::loadView("announcement", "mainPanel_footerView", null, true);
            $mainPanel_data["sidePanel"] = loader::loadView("announcement", "sidePanelView", null, true);


            $data["mainPanel"] = loader::loadView("announcement", "mainPanelView", $mainPanel_data, true);
            $data["sidePanel"] = loader::loadView("announcement", "sidePanelView", null, true);
            $data["footer"] = loader::loadView("footer", "footerView", null, true);


            loader::loadView("announcement", "announcementView", $data);
        }

        // private function tak($message)
        // {
        //     $data["messageContent"] = $message;
        //     loader::loadView("messages", "successfulMessageView", $data);
        // }

        public function glowna($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
            $data["headerInfo"] = loader::loadView("mainPage", "headerInfoView", null, true);


            $data["searchSection"] = loader::loadView("mainPage", "searchSectionView", null, true);


            $offers_data["offersList"] = loader::loadView("mainPage", "singleOfferView", null, true);
            $data["offers"] = loader::loadView("mainPage", "offersView", $offers_data, true);


            $companies_data["companiesList"] = loader::loadView("mainPage", "singleCompanyView", null, true);
            $data["companies"] = loader::loadView("mainPage", "bestCompaniesListView", $companies_data, true);


            $categories_data["categoryList"] = loader::loadView("mainPage", "singleCategoryView", null, true);
            $data["categories"] = loader::loadView("mainPage", "bestCategoriesView", $categories_data, true);

            
            $data["footer"] = loader::loadView("footer", "footerView", null, true);


            loader::loadView("mainPage", "mainPageView", $data);
        }

        public $filters = [
            //"position_name" => "Programista",
            //"city" => "Kraków",
            // "category_id" => [1, 5, 9, 10],
            // "subcategory_id" => [1, 6, 9],
            // "position_level_id" => [1, 3, 4],
            // "contract_type_id" => [1, 5, 7],
            // "working_time_id" => [1, 3],
            //"work_type_id" => [],
            //"page" => 1
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
            //$this->getFilters($parameters[0]);
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