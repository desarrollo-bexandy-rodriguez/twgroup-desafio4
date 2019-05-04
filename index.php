<!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="desafio4.js"></script>
 	<title>Formulario Bakan</title>
 </head>
 <body>
 	<?php 
 		include('config.php');
 		include('opendb.php');
 	?>
 	<div class="container">

 		<form class="form-postula" id="desafio4">
	      <div class="text-center mb-4 mt-4">
	        <img class="mb-4" src="https://twgroup.cl/wp-content/uploads/2018/02/logo-copy.png" alt="" >
	        <h1 class="h3 mb-3 font-weight-normal">Postula a un trabajo bakan</h1>
	      </div>

	      <div class="form-group">
		  <label for="regiones">Región </label>
	      	<select name="regiones" id="regiones" class="form-control" required>
				<option value="" selected >Seleccione Región</option>
				<?php
				if($rowCount > 0){
				    while($row = $query->fetch_assoc()){ 
				        echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
				    }
				}else{
				    echo '<option value="">Regiones No Disponibles</option>';
				}
				?>
			</select>	        
	      </div>

	      <div class="form-group">
		  <label for="comunas">Comuna </label>	      	
			<select name="comunas" id="comunas" class="form-control" placeholder="Comuna" required>
				<option value="">Seleccione una región primero</option>
			</select>	        
	      </div>
		  <div id="notificaciones"></div>
		  <input type="hidden" name="data_enviada" value="enviado">

	      <button class="btn btn-lg btn-primary btn-block" type="submit" id="postula" disabled>Postula</button>
	      <p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>
	    </form>
 	</div>
 </body>
 </html>