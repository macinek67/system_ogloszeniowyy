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

        public function getCompaniesByPopularity()
        {
            $result = $this->connection->query("SELECT company_id, short_name, logo, COUNT(*) as count FROM company JOIN announcement USING(company_id) GROUP BY company_id ORDER BY count DESC LIMIT 50");
            $companyData = [];
            while($row = $result->fetch_assoc()) {
                array_push($companyData, $row);
            }
            return $companyData;
        }

        public function insertNewCompany()
        {
            $path = $_SERVER["DOCUMENT_ROOT"] . "/" . explode("/", $_SERVER['REDIRECT_URL'])[1] . "/application_images/";

            $uploadfile = $path . basename($_FILES['logo']['name']);
            move_uploaded_file($_FILES['logo']['tmp_name'], $uploadfile);
            $fileName = basename($_FILES['logo']['name']);

            $result = $this->connection->query("INSERT INTO company(name, short_name, logo, localization_link) VALUES('$_POST[name]', '$_POST[short_name]', '$fileName', '$_POST[localization_link]')");
        }
    }
    
?>