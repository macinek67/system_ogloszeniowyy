<?php
    require_once("models/accountModel.php");

    class kontoController
    {
        public function profil($p)
        {
            echo $p[0];
            $data["header"] = loader::loadView("headerView", null, true);
            $data["footer"] = loader::loadView("footerView", null, true);
            loader::loadView("pageView", $data);
        }
    }
?>