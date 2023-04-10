<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conexion
$servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "vacunacion";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);


// Consultar 
if (isset($_GET["consultar"])){
    $sqlCampana = mysqli_query($conexionBD,"SELECT * FROM campanas WHERE id=".$_GET["consultar"]);
    if(mysqli_num_rows($sqlCampana) > 0){
        $campana = mysqli_fetch_all($sqlCampana,MYSQLI_ASSOC);
        echo json_encode($campana); 
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}

// Consultar todo
$sqlCampana = mysqli_query($conexionBD,"SELECT * FROM campanas ");
if(mysqli_num_rows($sqlCampana) > 0){
    $campana = mysqli_fetch_all($sqlCampana,MYSQLI_ASSOC);
    echo json_encode($campana);
}
else{ echo json_encode([["success"=>0]]); }


?>
