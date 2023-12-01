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
    header("HTTP/1.1 200 OK");
    exit();

}

if($_POST['METHOD']=='POST'){
    unset($_POST['METHOD']);
    $nombre_estudiante = $_POST['nombre_estudiante'];
    $apellido_estudiante = $_POST['apellido_estudiante'];
    $correo_estudiante = $_POST['correo_estudiante'];
    $tipo_estudiante = $_POST['tipo_estudiante'];
    $fecha_de_ingreso = $_POST['fecha_de_ingreso'];

    $query = "insert into estudiantes(nombre_estudiante, apellido_estudiante, correo_estudiante, tipo_estudiante, fecha_de_ingreso) values ('$nombre_estudiante', '$apellido_estudiante', '$correo_estudiante', '$tipo_estudiante', '$fecha_de_ingreso')";
    $queryAutoIncrement = "select MAX(id_estudiante) as id_estudiante from estudiantes";
    $result = metodoPost($query, $queryAutoIncrement);
    echo json_encode($result);
    header('HTTP/1.1 200 0K');
    exit();
}

if($_POST['METHOD']=='PUT'){
    unset($_POST['METHOD']);
    $id_estudiante=$_GET['id_estudiante'];
    $nombre_estudiante = $_POST['nombre_estudiante'];
    $apellido_estudiante = $_POST['apellido_estudiante'];
    $correo_estudiante = $_POST['correo_estudiante'];
    $tipo_estudiante = $_POST['tipo_estudiante'];
    $fecha_de_ingreso = $_POST['fecha_de_ingreso'];

    $query="update estudiantes set nombre_estudiante='$nombre_estudiante', apellido_estudiante='$apellido_estudiante', correo_estudiante='$correo_estudiante', tipo_estudiante='$tipo_estudiante', fecha_de_ingreso='$fecha_de_ingreso' where id_estudiante='$id_estudiante'";
    $result = metodoPut($query);
    echo json_encode($result);
    header('HTTP/1.1 200 0K');
    exit();
}

if ($_POST['METHOD'] =='DELETE') {
    unset($_POST['METHOD']);
    $id_estudiante = $_GET['id_estudiante'];
    $query="delete from estudiantes where id_estudiante='$id_estudiante'";
    $result=metodoDelete($query);
    echo json_encode($result);
    header('HTTP/1.1 200 0K');
    exit();
}

?>