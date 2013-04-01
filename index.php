<?php
    $_GET['key'] = (isset($_GET['key']) ? $_GET['key'].'/' : 'index/index');
    $key = $_GET['key'];
    $separator = explode('/', $key);
    $controller = $separator[0];
    $action = ($separator[1] == NULL ? 'index' : $separator[1]);
    
    require_once ('system/controller.php');
    require_once ('config/config.php');
    // require_once ('system/model.php');
    
    require_once ('src/application/controller/'.$controller.'Controller.php');
    $application = new $controller();
    $application->$action();
    
    
?>
