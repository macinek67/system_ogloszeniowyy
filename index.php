<!--DO NOT TOUCH-->
<?php
    require_once("core.php");
    $url = explode("/", $_SERVER['REDIRECT_URL']);
    $controllerName = $url[2];
    $functionName = $url[3];
    $parameters = [];
    for ($i = 4; $i < count($url); $i++)
    {
        if($url[$i] != null)
        {
            array_push($parameters, $url[$i]);
        }
    }

    if(isset($_POST))
    {
        foreach ($_POST as $parameter)
        {
            array_push($parameters, $parameter);
        }
    }

    if(count(($parameters)) == 0)
    {
        array_push($parameters, null);
        array_push($parameters, null);
    } 
    else if(count(($parameters)) == 1)
        array_push($parameters, null);
    

    $controller = loader::loadController($controllerName);
    $data = $controller->$functionName($parameters);

    return;
?>