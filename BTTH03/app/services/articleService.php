<?php
require_once APP_ROOT.'/app/models/article.php';

class patientService{
    public function getAllarticles(){
        //Buoc1: ket noi database
        //try{
            //$conn = new PDO('mysql:host = localhost;dbname = HMS', 'root','123');
            $dbConnection = new DBConnecton();
            $conn = $dbConnection->getConnection();
        if($conn != null){
        //buoc2: truy van du lieu
            $sql = "SELECT * FROM articles ORDER BY id DESC";
            $stmt = $conn->query($sql);
        //buoc3: xu ly ket qua tra ve
            $articles = [];
            while($row = $stmt->fetch()){
                $article = new article($row['id'],$row['tittle'],$row['summary'],$row['content']);
                $articles[] = $article;
            }return $articles;
            }    
        }
        //catch(PDOException $e){
            //return $patients = [];
            //echo $e->getMessage();
            //echo "ko ket noi dc";
        //}
    }
//}
?>