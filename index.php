<?php 



ob_start();

$controller = !empty($_GET['controller']) ? $_GET['controller'] : 'home';

$fileCheck = $controller . 'Controller.php';

if(file_exists('controllers/'.$fileCheck)){

    require 'controllers/'.$controller.'Controller.php';

    $action = !empty($_GET['action']) ? $_GET['action'] : 'index';

    if(function_exists($action)){

        $action();
    } else { 
        echo ' La fonction '.$action.' n\'éxiste pas ! ';
    }


} else {
    echo 'Controller <b>'.$controller.'</b> not found';
}


$body = ob_get_clean();
require 'views/base.php';
