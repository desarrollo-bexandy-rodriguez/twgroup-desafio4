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

echo "Errorrr";


?>