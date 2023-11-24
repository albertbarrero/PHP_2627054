<?php

include_once './bd/bd.php';

header('Access-Control-Allow-Origin: *');

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id_estudiante'])){
        $query="select * from estudiantes where id_estudiante=".$_GET['id_estudiante'];
        $result=metodoGet($query);
        echo json_encode($result->fetch(PDO::FETCH_ASSOC));
    }else{
        $query="select * from estudiantes";
        $result=metodoGet($query);
        echo json_encode($result->fetchAll());
    }

}

?>