<?php
//Include database configuration file
include('config.php');

$conn->select_db($dbname);
$conn->query("SET NAMES 'utf8'"); 

if(isset($_POST["region_id"]) && !empty($_POST["region_id"])){
    //Get all state data
    $query = $conn->query("SELECT * FROM comunas WHERE region_id = ".$_POST['region_id']." ORDER BY ID ASC");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Seleccione Comuna</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
        }
    }else{
        echo '<option value="">Comunas No Disponibles</option>';
    }
}

if(isset($_POST["data_enviada"]) && !empty($_POST["data_enviada"])){
    //Get all state data
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $nombre = filter_var($_POST["nombre"], FILTER_SANITIZE_STRING);
    $motivo = filter_var($_POST["motivo"], FILTER_SANITIZE_STRING);
    $query = $conn->query("INSERT INTO postulaciones (email, nombre, descripcion, fecha_postulacion) VALUES ('".$email ."', '".$nombre."','".$motivo ."', NOW())");
    
 
    if($query){
        echo '<div class="alert alert-primary" role="alert">Tus datos fueron registrados correctamente</div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">No se pudo registrar la solicitud</div>';
    }
}




?>