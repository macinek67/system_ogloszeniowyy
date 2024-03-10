<?php
    require_once("parameters.php");

    class announcementModel
    {
        public $connection = null;

        public function __construct()
        {
            $this->connection = new mysqli("localhost", "root", "", "system_ogloszeniowy");
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

        public function getAnnouncementsByFilters($filters)
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

                //if($type != "page")
                $query = $query . $type . " LIKE '%" . $choosed . "%' AND ";
            }

            $query = substr($query, 0, -4);
            //$query = $query . "LIMIT " . ANN_PER_PAGE . " OFFSET " . ($filters["page"] * ANN_PER_PAGE) - ANN_PER_PAGE;

            $result = $this->connection->query($query);
            $matchingAnnouncements = [];

            while($row = $result->fetch_assoc()) {
                array_push($matchingAnnouncements, $row);
            }

            return $matchingAnnouncements;
        }
    }

?>