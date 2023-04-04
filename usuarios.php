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
    $sqlUsuario = mysqli_query($conexionBD,"SELECT * FROM usuarios WHERE id=".$_GET["consultar"]);
    if(mysqli_num_rows($sqlUsuario) > 0){
        $usuario = mysqli_fetch_all($sqlUsuario,MYSQLI_ASSOC);
        echo json_encode($usuario);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//borrar pero se le debe de enviar una clave ( para borrado )
if (isset($_GET["borrar"])){
    $sqlUsuario = mysqli_query($conexionBD,"DELETE FROM usuarios WHERE id=".$_GET["borrar"]);
    if($sqlUsuario){
        echo json_encode(["success"=>1]);
        exit();
    }
    else{  echo json_encode(["success"=>0]); }
}
//Insertar

if($_SERVER['REQUEST_METHOD']  == 'POST'){
    // echo (" datos 2");
    $data = json_decode(file_get_contents("php://input"));

    // print_r($data);

    $curp=$data->curp;
    $nombre=$data->nombre;
    $priApe=$data->priApe;
    $segApe=$data->segApe;
    $fecNac=$data->fecNac;
    $edad=$data->edad;
    $entNac=$data->entNac;
    $sexo=$data->sexo;
    $telCon1=$data->telCon1;
    $telCon2=$data->telCon2;
    $email=$data->email;
    $calle=$data->calle;
    $numExt=$data->numExt;
    $numInt=$data->numInt;
    $entFed=$data->entFed;
    $codPos=$data->codPos;
    $munic=$data->munic;
    $colonia=$data->colonia;
    $folio=$data->folio;
    $fecCit=$data->fecCit;
    $pNombre=$data->pNombre;
    $pPriApe=$data->pPriApe;
    $pSegApe=$data->pSegApe;
    $camp_id=$data->camp_id;
            
    $insert = "INSERT INTO usuarios(curp,nombre,priApe,segApe,fecNac,edad,entNac,sexo,telCon1,telCon2,email,calle,numExt,numInt,entFed,codPos,munic,colonia,folio,fecCit,pNombre,pPriApe,pSegApe,camp_id) VALUES('$curp','$nombre','$priApe','$segApe','$fecNac',$edad,'$entNac','$sexo',$telCon1,$telCon2,'$email','$calle',$numExt,'$numInt','$entFed',$codPos,'$munic','$colonia','$folio','$fecCit','$pNombre','$pPriApe','$pSegApe',$camp_id); ";
    $sqlResult = mysqli_query($conexionBD,$insert);
    echo json_encode(["success"=>$sqlResult]); 
    exit();
}
// Actualizar
if(isset($_GET["actualizar"])){
    
    $data = json_decode(file_get_contents("php://input"));

    $id=(isset($data->id))?$data->id:$_GET["actualizar"];
    $curp=$data->curp;
    $nombre=$data->nombre;
    $priApe=$data->priApe;
    $segApe=$data->segApe;
    $fecNac=$data->fecNac;
    $edad=$data->edad;
    $entNac=$data->entNac;
    $sexo=$data->sexo;
    $telCon1=$data->telCon1;
    $telCon2=$data->telCon2;
    $email=$data->email;
    $calle=$data->calle;
    $numExt=$data->numExt;
    $numInt=$data->numInt;
    $entFed=$data->entFed;
    $codPos=$data->codPos;
    $munic=$data->munic;
    $colonia=$data->colonia;
    $folio=$data->folio;
    $fecCit=$data->fecCit;
    $pNombre=$data->pNombre;
    $pPriApe=$data->pPriApe;
    $pSegAPe=$data->pSegAPe;
    $camp_id=$data->camp_id;
    
    $sqlUsuario = mysqli_query($conexionBD,"UPDATE usuarios SET curp='$curp',nombre='$nombre',priApe='$priApe',segApe='$segApe',fecNac='$fecNac',edad='$edad',entNac='$entNac',sexo='$sexo',telCon1='$telCon1',telCon2='$telCon2',email='$email',calle='$calle',numExt='$numExt',numInt='$numInt',ebtFed='$ebtFed',codPos='$codPos',munic='$munic',colonia='$colonia',folio='$folio',fecCit='$fecCit',pNombre='$pNombre',pPriApe='$pPriApe',pSegApe='$pSegApe',camp_id='$camp_id' WHERE id='$id'");
    echo json_encode(["success"=>1]);
    exit();
}
// Consultar todo
$sqlUsuario = mysqli_query($conexionBD,"SELECT * FROM usuarios ");
if(mysqli_num_rows($sqlUsuario) > 0){
    $usuario = mysqli_fetch_all($sqlUsuario,MYSQLI_ASSOC);
    echo json_encode($usuario);
}
else{ echo json_encode([["success"=>0]]); }


?>
