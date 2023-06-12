<?php
require_once APP_ROOT.'/app/services/articleService.php';

class HomeController{
    public function index(){
        //goi du lieu tu patientService
        $articleService = new articleService();
        $articles = $articleService->getAllarticles();

        //render du lieu lay duoc ra homepage
        include APP_ROOT.'/app/views/home/index.php';
    }
}