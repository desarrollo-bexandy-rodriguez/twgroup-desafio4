$(document).ready(function(){
		    $('#regiones').on('change',function(){
		        var regionID = $(this).val();
		        var baseUrl = document.baseURI;
		        var data = {region_id:regionID};
		        if(regionID){
		        	$('#notificaciones').html('');
		        	$('#postula').attr("disabled", true);
		           var jqxhr = $.post( baseUrl+'ajax.php',data , function(html) {
					  $('#comunas').html(html);
					})
					  .fail(function(xhr, textStatus, error) {
					    alert( "error" );
					    console.log(xhr.statusText);
		                console.log(textStatus);
		                console.log(error);
					  });
		        }else{
					$('#comunas').html('<option value="">Seleccione una región primero</option>');
					$('#notificaciones').html('');
					$('#postula').attr("disabled", true);
		        }
		    });
		    
		    $('#comunas').on('change',function(){
		        var comunasId = $(this).val();
		        if(comunasId == 81){
					$('#notificaciones').html('<div class="alert alert-success" role="alert">"Bakan" </br>hay práctica disponible, ingresa tus datos y postula:</div>');
					$('#postula').attr("disabled", false);
					$('#notificaciones').append('<div class="form-group">'+
    					'<label for="nombre">Nombre</label>'+
    					'<input type="text" class="form-control" id="nombre" placeholder="Nombre">'+
  						'</div>');
					$('#notificaciones').append('<div class="form-group">'+
    					'<label for="email">Email</label>'+
    					'<input type="text" class="form-control" id="email" placeholder="Email">'+
  						'</div>');
					$('#notificaciones').append('<div class="form-group">'+
    					'<label for="motivo">Porqué debo elegirte?</label>'+
    					'<textarea class="form-control" id="motivo" placeholder="Porqué debo elegirte?"></textarea>'+
  						'</div>');
				}else{
					$('#notificaciones').html('<div class="alert alert-danger" role="alert">"ups...no hay nada"</div>');
					$('#postula').attr("disabled", true);
		        }
		    });

		    $('#postula').on('click',function(event){
		    	event.preventDefault();
		    });

});