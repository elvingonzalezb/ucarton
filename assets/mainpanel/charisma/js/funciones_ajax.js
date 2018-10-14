function ordProductos(orden) {
    $.ajax({
        type: 'POST',
        url: 'mainpanel/controller_ajax/ordProd',
        data: {orden: orden},
        dataType : 'json',
        success: function(json) {
            result=json.result;
            alert(result);            
        }
    });
}

function cargaOrdenProducto(id_categoria_padre) {
    if(id_categoria_padre==="0")
    {
        alert('Elija una subcategoria');
        return false;
    }
    $.ajax({
        type: 'POST',
        url: 'mainpanel/controller_ajax/cargaOrdenProducto',
        data: { id_categoria_padre: id_categoria_padre },
        dataType : 'json',
        cache:    false,
        error: function (request, error) {
            console.log(arguments);
            alert(" Aun no hay productos en esta categoria ");
            sgte =1;
            $("#orden").val(sgte);
            alert("Orden es: "+sgte);
        },
        success: function(json) {            
            sgte = json.sgte;
            $("#orden").val(sgte);
        }
    });
}

function update_misdatos() {
    nombres=$("#nombres").val();
    if(nombres===""){
        alert("El campo nombres no puede estar vacio");
        $("#nombres").focus();        
        return false;
    }
   
    usuario=$("#usuario").val();
    if(usuario===""){
        alert("El campo usuario no puede estar vacio");
        $("#usuario").focus();
        return false;
    }
    
    password=$("#password").val();
    if(password===""){
        alert("Ingrese el password actual");
        $("#password").focus();
        return false;
    }
    
    repnewpasw=$("#repnewpasw").val();
    newpasw=$("#newpasw").val();
    if(repnewpasw !== newpasw){
        alert("Confirme bien su password, no coindicen");
        $("#newpasw").focus();
        return false;        
    }    

    $.ajax({
        type: 'POST',
        url: 'mainpanel/controller_ajax/updateusuario',
        data: {nombres: nombres,newpasw:newpasw,password:password},
        dataType : 'json',
        success: function(json) {
            result=json.result;
            switch (result){
                case true:
                    alert("Se modificó con exito !!");
                    location.reload();
                    break;
                case '':
                    alert("El password actual es Incorrecto");
                    break;
            }
        }
    });
}

function carga_subcategoria(padre) {
    if(padre==="0")
    {
        str='<option value="0">------------------</option>';
        $("#subcategoria").html(str);
        alert('Elija una categoria');
        return false;
    }
    //alert(padre);
    $.ajax({
        type: 'POST',
        url: 'mainpanel/controller_ajax/cargaSubcategorias',
        data: { padre: padre },
        dataType : 'json',
        cache:    false,
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        },
        success: function(json) {            
            resultado = json.result;
            switch (resultado)
            {
                case 1:
                    str     = '';
                    str+='<option value="0">Seleccione...</option>';
                    lista       = json.lista;
                    var lista   = JSON.stringify(lista);
                    var lista   = $.parseJSON(lista);  
                    $.each( lista, function( key, val ) {
                        str+='<option value="'+val.id_categoria+'">'+val.nombre_categoria+'</option>';
                    });                    
                    $("#subcategoria").html(str);
                break;

                case 0:
                    alert("El password actual es Incorrecto");
                break;
            }
        }
    });
}

function cargaSubcategorias(padre) {
    if(padre==="0")
    {
        str = '<select name="subcategoria" id="subcategoria">';
        str +='<option value="0">---------------</option>';
        str +='</select>';
        $("#subcategorias").html(str);
        alert('Elija una categoria');
    }
    else
    {
        //alert(padre);
        $.ajax({
            type: 'POST',
            url: 'mainpanel/controller_ajax/cargaSubcategorias',
            data: { padre: padre },
            dataType : 'json',
            success: function(data) {            
                resultado = data.result;
                str = '<select name="subcategoria" id="subcategoria">';
                str += '<option value="0">Seleccione...</option>';
                lista = data.lista;
                $.each( lista, function( key, value ) {
                    str += '<option value="'+value.id+'">'+value.titulo+'</option>';
                });
                str +='</select>';
                $("#subcategorias").html(str);
            }
        });        
    }
}

function cargaSubcategoriasImpresion(padre) {
    if(padre==="0")
    {
        str = '<select name="subcategoria" id="subcategoria">';
        str +='<option value="0">---------------</option>';
        str +='</select>';
        $("#subcategorias").html(str);
        alert('Elija una categoria');
    }
    else
    {
        //alert(padre);
        $.ajax({
            type: 'POST',
            url: 'mainpanel/controller_ajax/cargaSubcategoriasImpresion',
            data: { padre: padre },
            dataType : 'json',
            success: function(data) {            
                resultado = data.result;
                str = '<select name="subcategoria" id="subcategoria">';
                str += '<option value="0">Seleccione...</option>';
                lista = data.lista;
                $.each( lista, function( key, value ) {
                    str += '<option value="'+value.id+'">'+value.titulo+'</option>';
                });
                str +='</select>';
                $("#subcategorias").html(str);
            }
        });        
    }
}

function cargaOrdenProveedor(id_categoria) {
    if(id_categoria==="0")
    {
        alert('Elija una categoria');
        return false;
    }
    $.ajax({
        type: 'POST',
        url: 'mainpanel/ajax/cargaOrdenProveedor',
        data: { id_categoria: id_categoria },
        dataType : 'json',
        cache:    false,
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        },
        success: function(json) {            
            sgte = json.sgte;
            $("#orden").val(sgte);
        }
    });
}

function cargaSgteSubcategoria(padre) {
    if(padre==="0")
    {
        alert('Elija una subcategoria');
        return false;
    }
    $.ajax({
        type: 'POST',
        url: 'mainpanel/controller_ajax/cargaSgteSubcategoria',
        data: { padre: padre },
        dataType : 'json',
        cache:    false,
        error: function (request, error) {
            console.log(arguments);
            alert(" Can't do because: " + error);
        },
        success: function(json) {            
            sgte = json.sgte;
            $("#orden").val(sgte);
        }
    });
}