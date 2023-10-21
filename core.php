<?php
    class loader
    {
        public static function loadController($className, $parameters = null)
        {
            $className = $className . "Controller";
            require_once("controllers/" . $className . ".php");
            if ($parameters == null)
                $controller = new $className();
            else {
                include("controllers/" . $className . '.php');
                $controller = new $controllerName($parameters);
            }

            return $controller;
        }

        public static function loadView($viewName, $data = null, $returnHTML = false)
        {


            if ($returnHTML == true) {
                ob_start();
            }

            include("views/" . $viewName . ".php");

            if ($returnHTML == true) {

                $content = ob_get_contents();
                ob_end_clean();
                return $content;
            };
        }

        public static function loadModel($className, $parameters = null)
        {
            $className = $className . "Model";
            require_once("models/" . $className . ".php");
            if ($parameters == null) {
                $model = new $className();
            } else {
                include("controllers/" . $className . '.php');
                $model = new $className($parameters);
            }

            return $model;
        }
    }
?>
