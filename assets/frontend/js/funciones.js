function agregaCotizacion() {
	id_producto = $("#id_producto").val();
	cantidad = $("#cantidad").val();
	nombre = $("#nombre").val();
	imagen = $("#imagen").val();
	precio = $("#precio").val();


	if( (cantidad=="") || (cantidad=="0") || (cantidad==" ") || (cantidad==0) )
	{	
		alert('Debe ingresar la Cantidad');
		$("#cantidad").focus();
		return false;
	}
	else
	{
		parametros = id_producto + '|' + cantidad  + '|' + nombre + '|' + imagen + '|' + precio;
		//sw="3";	
	//alert('entrando a la funcion agrega item');
		agregaItem(parametros);
	}
}

function salta(url) {
	window.location = url;	
	document.location.href = url;
}

function del_item_cotizacion(indice) {
	input_box=confirm("Esta a punto de eliminar este Item de su pedido.\nEsta seguro que quiere eliminarlo?");
	if (input_box==true)
	{ 
		cantidad = $("#cantidad_"+indice).val();
		nombre = $("#nombre_"+indice).val();
		imagen = $("#imagen_"+indice).val();
		id_producto = $("#id_producto_"+indice).val();
		parametros = id_producto + '|' + cantidad + '|' + nombre + '|' + imagen;
		eliminaItem(parametros);
	}
	else
	{
		//return false;
	}	
}

function clearCotizacion() {
	input_box=confirm("Esta a punto de borrar TODOS los Items de su cotizacion.\nEsta seguro?");
	if (input_box==true)
	{ 
		eliminaCarro();
	}
	else
	{
		//return false;
	}	
}

function updateCotizacion(indice) {
	id_producto = $("#id_producto_"+indice).val();
	cantidad = $("#cantidad_"+indice).val();
	nombre = $("#nombre_"+indice).val();
	imagen = $("#imagen_"+indice).val();

	if( (cantidad=="") || (cantidad=="0") || (cantidad==0) )
	{	
		alert('Debe ingresar la Cantidad');
		$("#cantidad_"+indice).focus();
		return false;
	}
	parametros = id_producto + '|' + cantidad + '|' + nombre + '|' + imagen;

	actualizarCotizacion(parametros);
}

function continua() {
	continuaCotizacion();	
}

function validar_registro(form){

	nombres			= $("#nombresRegistro2").val();
	apellidos 		= $("#apellidosRegistro2").val();
	razon_social 	= $("#razonSocialRegistro2").val();
	telefono 		= $("#telefonoRegistro2").val();
	direccion		= $("#direccionRegistro2").val();
	email 			= $("#emailRegistro2").val();
	clave 			= $("#claveRegistro2").val();
	clave2 			= $("#claveRegistro2b").val();
	origen 			= $("#origen").val();
	codigo_captcha	= $("#codigoRegistro2").val();

	if(nombres=="")
		{
			alert('Debe ingresar su nombre');
			form.nombresRegistro2.focus();
			return false;
		}
		else if(apellidos=="")
		{
			alert('Debe ingresar sus apellidos');
			form.apellidosRegistro2.focus();
			return false;
		}
		else if(razon_social=="")
		{
			alert('Debe ingresar su razon social');	
			form.razonSocialRegistro2.focus();
			return false;
		}	
		else if(telefono=="")
		{
			alert('Debe ingresar su telefono');	
			form.telefonoRegistro2.focus();
			return false;
		}
		else if(direccion=="")
		{
			alert('Debe ingresar su direccion');	
			form.direccionRegistro2.focus();
			return false;
		}
		else if(email=="")
		{
			alert('Debe ingresar su email');
			form.emailRegistro2.focus();	
			return false;
		}
		else if(clave=="")
		{
			alert('Debe ingresar una clave');
			form.claveRegistro2.focus();
			return false;	
		}
		else if(clave2=="")
		{
			alert('Debe reingresar su clave');
			form.claveRegistro2b.focus();
			return false;
		}
		else if (clave!=clave2)
		{
			alert('Las claves no coinciden');
			form.claveRegistro2b.focus();
			return false;
		}
		else if(origen=="0")
		{
			alert('Indique como se entero de nosotros');
			form.origen.focus();
			return false;
		}
		else if(codigo_captcha=="")
		{
			alert('Ingrese el codigo de la imagen');
			form.codigoRegistro2.focus();
			return false;
		}
		
		return true;
}

	$(document).ready(function(){
	$('#email').focus();
	$('#email').blur(function(){        
	     var email = $(this).val();
	      
	      if(email==''){
	           
	        $('#msg_email').html('El Email es requerido').css('color','red');
	           
	        }else{
	                       
	        var info = { email: email };
	       
	            $.ajax({               
	                url: 'login/valid_login_ajax', 
	                type: 'POST',             
	                data: info,
	                success: function(msg){  // alert(msg);       
	                          if(msg!=1){
	                             
	                              $('#msg_email').html('El Email es Incorrecto').css('color','red');
	                          }else {                     
	                          $('#msg_email').html('El Email es correcto').css('color','green');                             
	                             
	                          }                         
	                }
	                             
	            });                  
	        }

	      });     
	});   

	$(document).ready(function(){
	$('#clave').blur(function(){       
	     var clave = $(this).val();
	       
	      if(clave==''){
	           
	        $('#msg_clave').html('La Clave es requerida').css('color','red');
	           
	        }else{
	                       
	           $('#msg_clave').empty();
	        }

	    });     
	});

function recuperar(){

	alert("Le hemos enviado un email con la clave solicitada.");

}

function validaSearch(form)
{
	criterio = form.criterio.value;

	if(criterio=="")
	{
		alert("Ingrese el nombre del producto que desea buscar");
		form.criterio.focus();
		return false;
	}

	return true;
}