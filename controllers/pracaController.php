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


            $offers_data["offersList"] = loader::loadView("mainPage", "singleOfferView", null, true);
            $data["offers"] = loader::loadView("mainPage", "offersView", $offers_data, true);


            $companies_data["companiesList"] = loader::loadView("mainPage", "singleCompanyView", null, true);
            $data["companies"] = loader::loadView("mainPage", "bestCompaniesListView", $companies_data, true);


            $categories_data["categoryList"] = loader::loadView("mainPage", "singleCategoryView", null, true);
            $data["categories"] = loader::loadView("mainPage", "bestCategoriesView", $categories_data, true);

            
            $data["footer"] = loader::loadView("footer", "footerView", null, true);


            loader::loadView("mainPage", "mainPageView", $data);
        }

        public function szukaj($parameters)
        {
            $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
            $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);

            $data["filters"] = loader::loadView("searchPage", "filtersView", null, true);

            $data["sortPanel"] = loader::loadView("searchPage", "sortPanelView", null, true);

            $data["searchedOffersList"] = loader::loadView("searchPage", "singleSearchedOfferView", null, true);

            $data["searchPagination"] = loader::loadView("searchPage", "searchPaginationView", null, true);

            $data["footer"] = loader::loadView("footer", "footerView", null, true);

            loader::loadView("searchPage", "searchPageView", $data);
        }

    }
?>