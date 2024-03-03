<?php
    require_once("parameters.php");

    class companyModel
    {
        public $connection = null;

        public function __construct()
        {
            $this->connection = new mysqli("localhost", "root", "", "system_ogloszeniowy");
        }

        public function getCompanyData($id)
        {
            $result = $this->connection->query("SELECT * FROM company WHERE company_id='$id' LIMIT 1");
            $companyData = [];
            if($row = $result->fetch_assoc()) {
                $companyData = $row;
            }
            return $companyData;
        }
    }
    
?>