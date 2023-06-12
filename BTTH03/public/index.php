<?php
    require_once('../app/config/config.php');
    //echo APP_ROOT;
    //require_once APP_ROOT.'/app/services/patientService.php';
    //$patientService = new patientService();
    //$patients = $patientService->getAllpatients();
    //require_once APP_ROOT.'/app/controllers/HomeController.php';
    //$homeController = new HomeController();
    //$homeController->index();
    $controller = isset($_GET['controller'])?$_GET['controller']:'home';
    $action = isset($_GET['action'])?$_GET['action']:'index';

    if($controller=='home'){
        require_once APP_ROOT.'/app/controllers/HomeController.php';
        $homeController = new HomeController();
        $homeController->index();
    }else if($controller == 'article'){
        require_once APP_ROOT.'/app/controllers/ArticleController.php';
        $ArticleController = new ArticleController();
        $ArticleController->index();
    }else{
        echo"không tồn tại url";
    }
    //echo "<pre>";
    //print_r($patients);
    //echo "</pre>";
?>