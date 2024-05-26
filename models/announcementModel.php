<?php
    require_once("parameters.php");

    class announcementModel
    {
        public $connection = null;

        public function __construct()
        {
            $this->connection = new mysqli("localhost", "root", "", "system_ogloszeniowy");
        }

        public function getAnnouncementById($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement WHERE announcement_id='$id'");
            $positionsList = [];
            if($row = $result->fetch_assoc()) {
                array_push($positionsList, $row);
            }
            return $positionsList;
        }

        public function getNewestAnnouncements()
        {
            $result = $this->connection->query("SELECT * FROM announcement ORDER BY start_date DESC LIMIT 12");
            $announcementsList = [];
            while($row = $result->fetch_assoc()) {
                array_push($announcementsList, $row);
            }
            return $announcementsList;
        }

        public function countAnnouncements()
        {
            $result = $this->connection->query("SELECT * FROM announcement");
            $announcementsList = [];
            while($row = $result->fetch_assoc()) {
                array_push($announcementsList, $row);
            }
            return $announcementsList;
        }

        public function getPositionLevels()
        {
            $result = $this->connection->query("SELECT * FROM announcement_position_level");
            $positionsList = [];
            while($row = $result->fetch_assoc()) {
                array_push($positionsList, ["id" => $row["position_level_id"], "name" => $row["name"]]);
            }
            return $positionsList;
        }

        public function getContractTypes()
        {
            $result = $this->connection->query("SELECT * FROM announcement_contract_type");
            $contractsList = [];
            while($row = $result->fetch_assoc()) {
                array_push($contractsList, ["id" => $row["contract_type_id"], "name" => $row["name"]]);
            }
            return $contractsList;
        }

        public function getWorking_times()
        {
            $result = $this->connection->query("SELECT * FROM announcement_working_time");
            $timeList = [];
            while($row = $result->fetch_assoc()) {
                array_push($timeList, ["id" => $row["working_time_id"], "name" => $row["name"]]);
            }
            return $timeList;
        }

        public function getWork_types()
        {
            $result = $this->connection->query("SELECT * FROM announcement_work_type");
            $typeList = [];
            while($row = $result->fetch_assoc()) {
                array_push($typeList, ["id" => $row["work_type_id"], "name" => $row["name"]]);
            }
            return $typeList;
        }

        public function getAnnouncementsByFilters($filters, $includePages)
        {
            $query = "SELECT * FROM announcement WHERE ";

            foreach($filters as $type => $choosed)
            {
                if(is_array($choosed))
                {
                    if(count($choosed) == 0) 
                        continue;
                    
                    $query = $query . "(";

                    foreach($choosed as $value)
                        $query = $query . $type . "='" . $value . "' OR ";

                    $query = substr($query, 0, -3);
                    $query = $query . ") AND ";

                    continue;
                }

                if($type != "page")
                    $query = $query . $type . " LIKE '%" . $choosed . "%' AND ";
            }

            $query = substr($query, 0, -4);

            if($includePages == true)
                $query = $query . " LIMIT " . ANN_PER_PAGE . " OFFSET " . ($filters["page"] * ANN_PER_PAGE) - ANN_PER_PAGE;
                
            $result = $this->connection->query($query);
            $matchingAnnouncements = [];

            while($row = $result->fetch_assoc()) {
                array_push($matchingAnnouncements, $row);
            }

            return $matchingAnnouncements;
        }

        public function getAnnouncementBenefits($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_benefit WHERE announcement_id='$id'");
            $benefitsList = [];
            while($row = $result->fetch_assoc()) {
                array_push($benefitsList, $row);
            }
            return $benefitsList;
        }

        public function getAnnouncementRequirements($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_requirement WHERE announcement_id='$id'");
            $requirementsList = [];
            while($row = $result->fetch_assoc()) {
                array_push($requirementsList, $row);
            }
            return $requirementsList;
        }

        public function getAnnouncementResponsibilities($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_responsibility WHERE announcement_id='$id'");
            $ResponsibilitiesList = [];
            while($row = $result->fetch_assoc()) {
                array_push($ResponsibilitiesList, $row);
            }
            return $ResponsibilitiesList;
        }

        public function getAnnouncementCategoryName($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_category WHERE category_id='$id'");
            if($row = $result->fetch_assoc()) {
                return $row["name"];
            }
        }

        public function getAnnouncementSubcategoryName($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_subcategory WHERE subcategory_id='$id'");
            if($row = $result->fetch_assoc()) {
                return $row["name"];
            }
        }

        public function insertAppliedAnnouncement($announcementId)
        {
            $user_id = $_SESSION["user_id"];
            $result = $this->connection->query("SELECT * FROM user_application WHERE user_id='$user_id' AND announcement_id='$announcementId'");
            if($row = $result->fetch_assoc()) {
                return;
            }
            $result = $this->connection->query("INSERT INTO user_application(announcement_id, user_id) VALUES('$announcementId', '$user_id')");
        }

        public function insertSavedAnnouncement($announcementId)
        {
            $user_id = $_SESSION["user_id"];
            $result = $this->connection->query("SELECT * FROM user_saved WHERE user_id='$user_id' AND announcement_id='$announcementId'");
            if($row = $result->fetch_assoc()) {
                return;
            }
            $result = $this->connection->query("INSERT INTO user_saved(announcement_id, user_id) VALUES('$announcementId', '$user_id')");
        }

        public function getAnnouncementContractType($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_contract_type WHERE contract_type_id='$id'");
            if($row = $result->fetch_assoc()) {
                return $row["name"];
            }
        }

        public function getAnnouncementWorkType($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_work_type WHERE work_type_id='$id'");
            if($row = $result->fetch_assoc()) {
                return $row["name"];
            }
        }

        public function getAnnouncementWorkingTime($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_working_time WHERE working_time_id='$id'");
            if($row = $result->fetch_assoc()) {
                return $row["name"];
            }
        }

        public function getAnnouncementPositionLevel($id)
        {
            $result = $this->connection->query("SELECT * FROM announcement_position_level WHERE position_level_id='$id'");
            if($row = $result->fetch_assoc()) {
                return $row["name"];
            }
        }

        public function getAnnouncementCategoriesByPopularity()
        {
            $result = $this->connection->query("SELECT category_id, name, image, COUNT(*) as count FROM announcement_category JOIN announcement USING(category_id) GROUP BY category_id ORDER BY count DESC LIMIT 50");
            $categoryData = [];
            while($row = $result->fetch_assoc()) {
                array_push($categoryData, $row);
            }
            return $categoryData;
        }

        public function getCategories()
        {
            $result = $this->connection->query("SELECT * FROM announcement_category");
            $categoryData = [];
            while($row = $result->fetch_assoc()) {
                array_push($categoryData, $row);
            }
            return $categoryData;
        }

        public function getSubcategories()
        {
            $result = $this->connection->query("SELECT * FROM announcement_subcategory");
            $categoryData = [];
            while($row = $result->fetch_assoc()) {
                array_push($categoryData, $row);
            }
            return $categoryData;
        }

        public function getSavedActiveAnnouncements($user_id)
        {
            $now = date('Y-m-d H:i:s');
            $result = $this->connection->query("SELECT * FROM user_saved JOIN announcement USING(announcement_id) JOIN company USING(company_id) WHERE end_date>'$now' AND user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function getSavedExpiredAnnouncements($user_id)
        {
            $now = date('Y-m-d H:i:s');
            $result = $this->connection->query("SELECT * FROM user_saved JOIN announcement USING(announcement_id) JOIN company USING(company_id) WHERE end_date<'$now' AND user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function getAppliedActiveAnnouncements($user_id)
        {
            $now = date('Y-m-d H:i:s');
            $result = $this->connection->query("SELECT * FROM user_application JOIN announcement USING(announcement_id) JOIN company USING(company_id) WHERE end_date>'$now' AND user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function getAppliedExpiredAnnouncements($user_id)
        {
            $now = date('Y-m-d H:i:s');
            $result = $this->connection->query("SELECT * FROM user_application JOIN announcement USING(announcement_id) JOIN company USING(company_id) WHERE end_date<'$now' AND user_id='$user_id'");
            $tmp = [];
            while($row = $result->fetch_assoc()) {
                array_push($tmp, $row);
            }
            return $tmp;
        }

        public function insertNewCategory()
        {
            $path = $_SERVER["DOCUMENT_ROOT"] . "/" . explode("/", $_SERVER['REDIRECT_URL'])[1] . "/application_images/";

            $uploadfile = $path . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
            $fileName = basename($_FILES['image']['name']);

            $result = $this->connection->query("INSERT INTO announcement_category(name, image) VALUES('$_POST[name]', '$fileName')");
        }

        public function insertNewSubcategory()
        {
            $result = $this->connection->query("INSERT INTO announcement_subcategory(category_id, name) VALUES('$_POST[category_id]', '$_POST[name]')");
        }

        public function insertNewAnnouncement()
        {
            $category_id = null;

            $result = $this->connection->query("SELECT * FROM announcement_subcategory WHERE subcategory_id='$_POST[subcategory_id]'");
            if($row = $result->fetch_assoc()) {
                $category_id = $row["category_id"];
            }

            $start_date = date("Y-m-d H:i:s");
            $_POST["end_date"] = $_POST["end_date"] . " 23:59:00";

            $result = $this->connection->query("INSERT INTO announcement(`announcement_id`, `company_id`, `localization_link`, `category_id`, `subcategory_id`, `position_name`, `earnings`, `position_level_id`, `city`, `contract_type_id`, `working_time_id`, `work_type_id`, `start_date`, `end_date`, `theme_color`) VALUES(NULL, '$_POST[company_id]', 
            '$_POST[localization_link]', '$category_id', '$_POST[subcategory_id]', '$_POST[position_name]', '$_POST[earnings]', '$_POST[position_level_id]',
            '$_POST[city]', '$_POST[contract_type_id]', '$_POST[working_time_id]', '$_POST[work_type_id]', '$start_date', '$_POST[end_date]', '$_POST[theme_color]')");
        }
    }

?>