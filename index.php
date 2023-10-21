<?php
    require_once("core.php");
    $url = explode("/", $_SERVER['REDIRECT_URL']);
    $controllerName = $url[3];
    $functionName = $url[4];
    $parameters = [];
    for ($i = 5; $i < count($url); $i++)
        if($url[$i] != "")
            array_push($parameters, $url[$i]);

    if(isset($_POST))
    {
        foreach ($_POST as $parameter)
        {
            array_push($parameters, $parameter);
        }
    }

    if(count(($parameters)) == 0)
    {
        array_push($parameters, "");
        array_push($parameters, "");
    } 
    else if(count(($parameters)) == 1)
        array_push($parameters, "");
    

    $controller = loader::loadController($controllerName);
    $data = $controller->$functionName($parameters);

    return;
?>