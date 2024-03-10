<!--GLOBAL VARIABLES-->
<!--DO NOT TOUCH-->
<?php
    define("ROOT", "http://localhost/");
    define("FOLDER_SOLUTION_NAME", explode("/", $_SERVER['REDIRECT_URL'])[1]);
    define("ROOT_URL", ROOT . FOLDER_SOLUTION_NAME . "/");
    define("IMAGE_URL", ROOT . FOLDER_SOLUTION_NAME . "/application_images/");
    define("ANN_PER_PAGE", 20);
?>
