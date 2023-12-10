<!--DO NOT TOUCH-->
<?php
    class loader
    {
        public static function loadController($className, $parameters = null)
        {
            $className = $className . "Controller";
            
            require_once("controllers/" . $className . ".php");
            
            if ($parameters == null)
            {
                $controller = new $className();
            }
            else 
            {
                $controller = new $controllerName($parameters);
            }

            return $controller;
        }

        public static function loadView($folderName, $viewName, $data = null, $returnHTML = false)
        {
            if ($returnHTML == true)
            {
                ob_start();
            }

            require_once("parameters.php");
            include("views/" . $folderName . "/" . $viewName . ".php");

            if ($returnHTML == true) 
            {

                $content = ob_get_contents();
                ob_end_clean();
                return $content;
            };
        }

        public static function loadModel($modelName, $parameters = null)
        {
            $modelName = $modelName . "Model";
            require_once("models/" . $modelName . ".php");
            if ($parameters == null) 
            {
                $model = new $modelName();
            } 
            else 
            {
                $model = new $modelName($parameters);
            }

            return $model;
        }
    }
?>
