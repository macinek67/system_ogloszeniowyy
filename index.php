<!--DO NOT TOUCH-->
<?php
    require_once("core.php");
    // if(!isset($_SERVER['REDIRECT_URL']))
    // {
    //     $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
    //     $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
    //     $data["footer"] = loader::loadView("footer", "footerView", null, true);
    //     loader::loadView("invalidPage", "invalidPageView", $data);
    //     return;
    // }
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
    {
        array_push($parameters, null);
    }
    
    try
    {
        $controller = loader::loadController($controllerName);
    }
    catch(Error $e)
    {
        $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
        $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
        $data["footer"] = loader::loadView("footer", "footerView", null, true);
        loader::loadView("invalidPage", "invalidPageView", $data);
        return;
    }

    try
    {
        $data = $controller->$functionName($parameters);
    }
    catch(Error $e)
    {
        $data["headerDesktop"] = loader::loadView("headerDesktop", "headerDesktopView", null, true);
        $data["headerMobile"] = loader::loadView("headerMobile", "headerMobileView", null, true);
        $data["footer"] = loader::loadView("footer", "footerView", null, true);
        loader::loadView("invalidPage", "invalidPageView", $data);
        return;
    }

    return;
?>