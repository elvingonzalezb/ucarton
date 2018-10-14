function CreateObjetoAjax() {
	var Objeto;
		var browser = navigator.appName;
		if(browser == "Microsoft Internet Explorer"){
			Objeto = new ActiveXObject("Microsoft.XMLHTTP");
		}else{
			Objeto = new XMLHttpRequest();
		}
			return Objeto
 }

 function agregaItem(parametros) {
    //alert('ingresó a agregaItem');
    $.ajax({
        type: 'POST',
        url: 'frontend/ajax/agregarProducto',
        data: {parametros : parametros},
        dataType : 'text',
        error: function (request, error) {
            console.log(arguments);
            alert(" No se puede seguir, ocurrió un error: " + error);
        },
        success: function(text) {            
            salta(text);
        }
    });       
}

 function eliminaItem(parametros) {
    $.ajax({
        type: 'POST',
        url: 'frontend/ajax/eliminaItemCarro',
        data: {parametros : parametros},
        dataType : 'text',
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        },
        success: function(text) {            
            salta(text);
        }
    });       
}

 function eliminaCarro() {
    $.ajax({
    	type: 'POST',
        url: 'frontend/ajax/eliminaCarro',
        data: { },
        dataType : 'text',
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        },
        success: function(text) {            
            salta(text);
        }
    });       
}

 function actualizarCotizacion(parametros) {
    $.ajax({
        type: 'POST',
        url: 'frontend/ajax/actualizarCotizacion',
        data: {parametros : parametros},
        dataType : 'text',
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        },
        success: function(text) {            
            salta(text);
        }
    });       
}

function procesarRegistro(parametros){
    $.ajax({
        type: 'POST',
        url: 'frontend/registro/grabar',
        data: {parametros : parametros},
        dataType : 'text',
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        },
        success: function(text) {            
            salta(text);
        }
    }); 	
}