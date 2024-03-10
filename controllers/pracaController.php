<?php
    require_once("models/announcementModel.php");
    require_once("models/companyModel.php");

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

            $data["filters"] = loader::loadView("searchPage", "filtersView", $filters_data, true);

            $searchedAnnouncements = $am->getAnnouncementsByFilters($this->filters);
            
            $sortPanelData["searchedAnnouncementsCount"] = count($searchedAnnouncements);
            $sortPanelData["pages"] = ceil(count($searchedAnnouncements) / ANN_PER_PAGE);
            $sortPanelData["filters"] = $parameters[0];
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

            $data["searchPagination"] = loader::loadView("searchPage", "searchPaginationView", null, true);

            $data["footer"] = loader::loadView("footer", "footerView", null, true);

            loader::loadView("searchPage", "searchPageView", $data);
        }

        public function setFilters()
        {
            //$_POST["position_name"] = "Programista";
            //$_POST["city"] = "Kraków";

            //$string = "";
            foreach ($_POST as $type => $value_arr)
            {
                //$string = $string . $type . "=";
                $values = [];
                if(is_array($value_arr))
                {
                    foreach($value_arr as $value)
                    {
                        array_push($values, $value);
                        //$string = $string . $value;
                        //if(next($value_arr))
                            //$string = $string . ",";
                    }
                    //$string = $string . ";";
                }
                else
                {
                    //$string = $string . $value_arr . ";";
                    $values = $value_arr;
                }
                $this->filters[$type] = $values;
            }
            //header("Location:" . ROOT_URL . "praca/szukaj/" . $string);
        }

        // public function changePage()
        // {
        //     $filterLink = $_POST["filters"];

        //     if(str_contains($filterLink, ";page") == true)
        //     {
        //         $explodedLink = explode(";", $filterLink);

        //         unset($explodedLink[count($explodedLink)-2]);
        //         $explodedLink = implode(";", $explodedLink);

        //         $filterLink = $explodedLink . "page=" . $_POST["page"] . ";";

        //         header("Location:" . ROOT_URL . "praca/szukaj/" . $filterLink);
        //         return;
        //     }

        //     $filterLink = $filterLink . "page=" . $_POST["page"] . ";";
        //     header("Location:" . ROOT_URL . "praca/szukaj/" . $filterLink);
        // }

        // public function getFilters($filter)
        // {

        //     foreach(explode(";", $filter) as $types)
        //     {
        //         $values = [];
        //         //echo $types . " ";
        //         foreach(explode("=", $types) as $valueArray)
        //         {
        //             echo $valueArray . " ";
        //         }
        //     }
        // }

    }
?>