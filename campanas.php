<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET,POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Conexion
$servidor = "localhost"; $usuario = "root"; $contrasenia = ""; $nombreBaseDatos = "vacunacion";
$conexionBD = new mysqli($servidor, $usuario, $contrasenia, $nombreBaseDatos);


// Consultar por id
if (isset($_GET["consultar"])){
    $sqlCampana = mysqli_query($conexionBD,"SELECT * FROM campanas WHERE id=".$_GET["consultar"]);
    if(mysqli_num_rows($sqlCampana) > 0){
        $campana = mysqli_fetch_all($sqlCampana,MYSQLI_ASSOC);
        echo json_encode($campana); 
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//borrar
if (isset($_GET["borrar"])){
    $sqlCampana = mysqli_query($conexionBD,"DELETE FROM campanas WHERE id=".$_GET["borrar"]);
    if($sqlCampana){
        echo json_encode(["success"=>1]);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//Insertar
if(isset($_GET["insertar"])){
    $data = json_decode(file_get_contents("php://input"));
    $edades=$data->edades;
    $dosis=$data->dosis;
    $marca=$data->marca;
    $dateDosis=$data->dateDosis;
    $dateAplic=$data->dateAplic;
    $modulo=$data->modulo;
    $domicilio=$data->domicilio;
    $municipio=$data->municipio;
        if(($edades!="")&&($dosis!="")&&($modulo!="")&&($domicilio!="")&&($municipio!="")){
            
    $sqlCampana = mysqli_query($conexionBD,"INSERT INTO campanas(edades,dosis,marca,dateDosis,dateAplic,modulo,domicilio,municipio) VALUES('$edades','$dosis','$marca','$dateDosis','$dateAplic','$modulo','$domicilio','$municipio') ");
    echo json_encode(["success"=>1]);
        }
    exit();
}
// Actualizar
if(isset($_GET["actualizar"])){
    
    $data = json_decode(file_get_contents("php://input"));

    $id=(isset($data->id))?$data->id:$_GET["actualizar"];
    $edades=$data->edades;
    $dosis=$data->dosis;
    $marca=$data->marca;
    $dateDosis=$data->dateDosis;
    $dateAplic=$data->dateAplic;
    $modulo=$data->modulo;
    $domicilio=$data->domicilio;
    $municipio=$data->municipio;
    
    $sqlCampana = mysqli_query($conexionBD,"UPDATE campanas SET edades='$edades',dosis='$dosis',
    marca='$marca',dateDosis='$dateDosis',dateAplic='$dateAplic',modulo='$modulo',domicilio='$domicilio',
    municipio='$municipio' WHERE id='$id'");
    echo json_encode(["success"=>1]);
    exit();
}
// Consultar todo
$sqlCampana = mysqli_query($conexionBD,"SELECT * FROM campanas ");
if(mysqli_num_rows($sqlCampana) > 0){
    $campana = mysqli_fetch_all($sqlCampana,MYSQLI_ASSOC);
    echo json_encode($campana);
}
else{ echo json_encode([["success"=>0]]); }


?>
