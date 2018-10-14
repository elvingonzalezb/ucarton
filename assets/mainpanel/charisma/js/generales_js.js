//*********** MODALES **************//



function puede_seguir()

{

var descripcion_corta = document.getElementById('descripcion_corta').value;

if(descripcion_corta.length>=10){

event.keyCode=0;

alert("Llego al maximo de caracteres permitidos");

}



}



function deletePedido(id_pedido) {

    $('#tituloModal').html('Esta a punto de borrar este pedido!');

    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/controller_pedidos/delete/'+id_pedido+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}



function deleteExpositor(id) {

    $('#tituloModal').html('Esta a punto de borrar este expositor!');

    $('#cuerpoModal').html('<p>Esta accion no puede deshacerse. Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/expositores/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');

}



function deletePromocion(id) {

    $('#tituloModal').html('Esta a punto de borrar esta promoción !');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/promocion/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}







function deleteProveedor(id) {

    $('#tituloModal').html('Esta a Punto de eliminar el producto');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/proveedores/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}



function deletePromo(id) {

    $('#tituloModal').html('Esta a Punto de eliminar el producto');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/promos/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}



function deleteColecciones(id) {

    $('#tituloModal').html('Esta a Punto de eliminar el producto');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/colecciones/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}



function deleteFotografia(id) {

    $('#tituloModal').html('Esta a punto de borrar la Fotografia !');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/fotografia/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}

function deleteCategoria(id) {

    $('#tituloModal').html('Al eliminar la Categor&iacute;a eliminar&aacute; tambien todos los proveedores que pertenecen a esta categoria!');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/categoria/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}

function deleteSubCategoria(id) {
    $('#tituloModal').html('Al eliminar la Sub Categor&iacute;a eliminar&aacute; tambien sus categor&iacute;as HIJOS!');
    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str += '<a href="mainpanel/subcategoria/delete/'+id+'" class="btn btn-primary">BORRAR</a>';
    $('#botoneraModal').html(str);
    $('#botoneraModal').show();
    $('#myModal').modal('show');   
}

function deleteBanner(id_banner) {

    $('#tituloModal').html('Esta a punto de borrar este banner!');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/banners/delete/'+id_banner+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}

function showBanner(banner, titulo) {

    $('#tituloModal').html(titulo);

    img = '<img src="files/banners/'+banner+'"/>';

    $('#cuerpoModal').html(img);

    $('#botoneraModal').hide();

    $('#myModal').modal('show'); 

}

function deleteSector(id) {

    $('#tituloModal').html('Esta a punto de borrar el sector');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/sectores/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}



function deleteBanner_Info(id) {

    $('#tituloModal').html('Esta a punto de borrar este banner Informativo!');

    $('#cuerpoModal').html('<p>Esta seguro que quiere hacerlo?</p>');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/banner_info/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');   

}





// Cuadro home

function deleteCuadro(id) {

    $("#tituloModal").html("esta a punto de borrar esta imagen");

    $("#cuerpoModal").html("<p>Esta seguro que quiere eliminar este elemento</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += "<a href='mainpanel/cuadro/delete/"+id+"' class='btn btn-primary'>BORRAR</a>";

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');   

}



// Marcas Representadas

function showMarcas(imagen,nomb_marca){

    $("#tituloModal").html(nomb_marca);

    img='<img src="files/marcas_representadas/'+imagen+'">';

    $("#cuerpoModal").html(img);

    $("#botoneraModal").hide();

    $("#myModal").modal('show');

}

function removerMarcas(id_marca) {

    $("#tituloModal").html("esta a punto de borrar esta marca");

    $("#cuerpoModal").html("<p>Esta seguro que quiere eliminar la marca</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += "<a href='mainpanel/marcasR/remove/"+id_marca+"' class='btn btn-primary'>BORRAR</a>";

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}



// catalogo



function deleteCatalo(id)

{

    $("#tituloModal").html("Esta a punto de borrar el catalogo!");

    $("#cuerpoModal").html("<p>Esta Seguro que quiere hacerlo?</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/catalogo/delete/'+id+'" class="btn btn-primary">BORRAR</a>'



    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}



// articulos

function deleteArticulo(id)

{

    $("#tituloModal").html("Esta a punto de borrar este Artículo..!");

    $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str +='<a href="mainpanel/articulos/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}

function deletecategorias(id)
{
    $("#tituloModal").html("Esta a punto de borrar esta Categoría..!");
    $("#cuerpoModal").html("<p>Se borraran todos los productos que en el contenga,¿Esta seguro de continuar?</p>");
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str +='<a href="mainpanel/categorias/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';
    $("#botoneraModal").html(str);
    $("#botoneraModal").show();
    $("#myModal").modal('show');
}


function deletesubcategorias(id)
{
    $("#tituloModal").html("Esta a punto de borrar esta Sub Categoría..!");
    $("#cuerpoModal").html("<p>Se borraran todos las categorias y los productos que contenga, Esta seguro de continuar?</p>");
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str +='<a href="mainpanel/subcategorias/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';
    $("#botoneraModal").html(str);
    $("#botoneraModal").show();
    $("#myModal").modal('show');
}

function deleteSubcategoriaImpresion(id)
{
    $("#tituloModal").html("Esta a punto de borrar esta Sub Categoría..!");
    $("#cuerpoModal").html("<p>Se borraran la subcategoria y los productos que contenga, Esta seguro de continuar?</p>");
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str +='<a href="mainpanel/subcategorias_impresion/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';
    $("#botoneraModal").html(str);
    $("#botoneraModal").show();
    $("#myModal").modal('show');
}

//categorias de impresion

function deletecategorias_impresion(id)

{

    $("#tituloModal").html("Esta a punto de borrar esta Categoría de Gráfica Jesús..!");

    $("#cuerpoModal").html("<p>Se borraran todos los catálogos y fotos que en el contenga,¿Esta seguro de continuar?</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str +='<a href="mainpanel/categorias_impresion/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}

function deleteproductos(id)

{

    $("#tituloModal").html("Esta a punto de borrar Producto..!");

    $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str +='<a href="mainpanel/productos/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}

function deleteimpresiones(id)

{

    $("#tituloModal").html("Esta a punto de borrar este trabajo de impresion..!");

    $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str +='<a href="mainpanel/impresiones/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}



function deleteNoticia(id)

{

    $("#tituloModal").html("Esta a punto de borrar esta Noticia..!");

    $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str +='<a href="mainpanel/noticias/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}



function deletePrensa(id)

{

    $("#tituloModal").html("Esta a punto de borrar esta Prensa..!");

    $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str +='<a href="mainpanel/prensa/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

    $("#botoneraModal").html(str);

    $("#botoneraModal").show();

    $("#myModal").modal('show');

}

// Trabajos

    function deleteTrabajos(id)

    {

        $("#tituloModal").html("Esta a punto de borrar este trabajo..!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/trabajos/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }

// Servicios

    function deleteServicio(id)

    {

        $("#tituloModal").html("Esta a punto de borrar este Servicio..!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/servicios/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



// Servicios

    function deleteCliente(id)

    {

        $("#tituloModal").html("Esta a punto de borrar este Cliente...!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/clientes/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }

// equipo

    function deleteEquipo(id)

    {

        $("#tituloModal").html("Esta a punto de borrar este integrante.!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/equipo/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



    function deleteEnlace(id)

    {

        $("#tituloModal").html("Esta a punto de borrar este Enlace..!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/enlaces-de-interes/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



    function deleteDenuncia(id)

    {

        $("#tituloModal").html("Esta a punto de borrar esta Denuncia!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/denuncias/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



    function deletePregunta(id)

    {

        $("#tituloModal").html("Esta a punto de borrar esta Pregunta!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/preguntas-frecuentes/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



    function deletePreguntaRecibida(id)

    {

        $("#tituloModal").html("Esta a punto de borrar esta Pregunta!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/preguntas-frecuentes/deleter/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



    function deletePagina(id,seccion)

    {

        $("#tituloModal").html("Esta a punto de borrar esta Pagina!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/'+seccion+'/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



    function deleteFoto(id)

    {

        $("#tituloModal").html("Esta a punto de borrar esta Foto!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/fotos/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }

    function deleteImpresiones(id)

    {

        $("#tituloModal").html("Esta a punto de borrar esta Foto!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/impresiones/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



    function deleteAlerta(id)

    {

        $("#tituloModal").html("Esta a punto de borrar esta Alerta!");

        $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");

        str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

        str +='<a href="mainpanel/alertas/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

        $("#botoneraModal").html(str);

        $("#botoneraModal").show();

        $("#myModal").modal('show');

    }



function deleteMsgRecibido(id) {

    $('#tituloModal').html('Esta a punto de borrar este mensaje!');

    $('#cuerpoModal').html('');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/mensajes/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');    

}

function deletesuscrito(id) {

    $('#tituloModal').html('Esta a punto de borrar esta persona Suscrita!');

    $('#cuerpoModal').html('');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/suscribete/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');    

}

function deleteCotRecibido(id) {

    $('#tituloModal').html('Esta a punto de borrar esta cotizacion!');

    $('#cuerpoModal').html('');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/cotizacion/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');    

}



function deleteSuscripcion(id) {

    $('#tituloModal').html('Esta a punto de borrar a este usuario suscrito!');

    $('#cuerpoModal').html('');

    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';

    str += '<a href="mainpanel/suscritos/delete/'+id+'" class="btn btn-primary">BORRAR</a>';

    $('#botoneraModal').html(str);

    $('#botoneraModal').show();

    $('#myModal').modal('show');    

}





//*************  FUNCIONES ******////



function valida_banner() {

    enlace=$("#enlace").val();

    enlace=$.trim(enlace);

    if(enlace===""){

        alert("Ingrese el enlace");

        $("#enlace").focus();        

        return false;

    }



    orden=$("#orden").val();

    if(orden===""){

        alert("Ingrese el orden de presentación del Banner");

        $("#orden").focus();        

        return false;

    } 

    

    banner=$("#banner").val();

    if(banner===""){

        alert("Suba una imagen para el Banner");

        return false;

    }    

}

function valida_categoria() {

    nombre_categoria=$("#nombre").val();

    nombre_categoria=$.trim(nombre_categoria);

    if(nombre_categoria===''){

        alert("Ingrese el nombre de la Categoria");

        $("#nombre_categoria").focus();        

        return false;

    }

    

    orden=$("#orden").val();

    if(orden===""){

        alert("Debe ingresar un orden");

        $("#orden").focus();

        return false;

    }     

    

   

}



function valida_subcategoria() {

    padre=$("#padre").val();

    if(padre==="0"){

        alert("Seleccione una categoria");

        $("#padre").focus();        

        return false;

    }    

    nombre_categoria=$("#nombre").val();

    nombre_categoria=$.trim(nombre_categoria);

    if(nombre_categoria===''){

        alert("Ingrese el nombre de la Categoria");

        $("#nombre").focus();        

        return false;

    }

    

    orden=$("#orden").val();

    if(orden===""){

        alert("Debe ingresar un orden");

        $("#orden").focus();

        return false;

    }   

}



function valida_fotografia() {

    id_albun=$("#id_albun").val();

    if(id_albun=='' || id_albun==0 || id_albun=="0"){

        alert("Seleccione un albun");

        return false;

    }    

}



function valida_proveedores() {

    categoria=$("#categoria").val();

    if(categoria==="0"){

        alert("Seleccione una categoria");

        $("#categoria").focus();        

        return false;

    }

  

    subcategoria=$("#subcategoria").val();

    if(subcategoria==="0"){

        alert("Seleccione una subcategoria");

        $("#subcategoria").focus();        

        return false;

    } 

    

    nombre=$("#nombre").val();

    nombre=$.trim(nombre);

    if(nombre===""){

        alert("Ingrese el nombre");

        $("#nombre").focus();        

        return false;

    }   



    foto=$("#foto").val();

    if(foto===""){

        alert("Debe subir una foto");

        $("#foto").focus();        

        return false;

    }  

     

}





function valida_seccion() {

    titulo=$("#titulo").val();

    if(titulo===""){

        alert("Debe ingresar el titulo de la Seccion");

        $("#titulo").focus();        

        return false;

    }



    imagen=$("#imagen").val();

    if(imagen===""){

        alert("Debe ingresar una imagen para la seccion");

        $("#imagen").focus();        

        return false;

    }    

}



function valida_cliente() {

    telefono=$("#telefono").val();

    if(telefono===""){

        alert("Debe ingresar un numero telefonico");

        $("#telefono").focus();        

        return false;

    }



    email=$("#email").val();

    if(email===""){

        alert("Debe ingresar una direccion de correo electronico");

        $("#email").focus();        

        return false;

    }



    clave=$("#clave").val();

    if(clave===""){

        alert("Debe ingresar una clave");

        $("#clave").focus();        

        return false;

    }

}

//    var descripcion = CKEDITOR.instances['descripcion'].getData();

//    if(descripcion===""){

//        alert("Debe ingresar la descripcion del servicio");

//        CKEDITOR.instances['descripcion'].focus();

//        return false;

//    }     





function valida_novedad() {

    nombre=$("#nombre").val();

    if(nombre===""){

        alert("Debe ingresar el nombre");

        $("#nombre").focus();        

        return false;

    }



    orden=$("#orden").val();

    if(orden===""){

        alert("Debe ingresar orden");

        $("#orden").focus();        

        return false;

    }      

}



function valida_parametro() {

    tipo=$("#tipo").val();

    llave=$("#llave").val();

    if(llave===""){

        alert("El parametro no puede estar vacio");

        return false;

    }

    

    tipo=$("#tipo").val();

    if(tipo==0){

        valor=$("#valor").val();

        if(valor===""){

            alert("El valor no puede estar vacio");

            return false;

        }

    }

    if(tipo==1){

        var valor = CKEDITOR.instances['valor'].getData();

        if(valor===""){

            alert("El valor no puede estar vacio");

            CKEDITOR.instances['valor'].focus();

            return false;

        } 

    }    



    descripcion=$("#descripcion").val();

    if(descripcion===""){

        alert("La descripcion no puede estar vacio");

        return false;

    }  

        

}









function concatena(id)

{

    id_eliminar=$("#id_eliminar").val();

    id=$("#"+id).val();

    if($("#"+id).is(':checked')===false){

            cad=id_eliminar.split("##");

            rt=cad.length;

            cont2=0;

            for(e=0;e<rt;e++){

                    id_1=cad[e];

                    if(id!==id_1){

                            cont2+=1;

                            if(cont2===1){

                                    str=id_1;

                            }else{

                                    str=str+'##'+id_1;

                            }

                    }

            }

            if(cont2===0){str='';}

    }else{

            if(id_eliminar===''){

                    str=id;								

            }else{

                    str=id_eliminar+'##'+id;

            }

    }



    $("#id_eliminar").val(str);    

}



function quitaAcentos(str){

for (var i=0;i<str.length;i++){

//Sustituye "á é í ó ú"

if (str.charAt(i)=="á") str = str.replace(/á/,"a");

if (str.charAt(i)=="é") str = str.replace(/é/,"e");

if (str.charAt(i)=="í") str = str.replace(/í/,"i");

if (str.charAt(i)=="ó") str = str.replace(/ó/,"o");

if (str.charAt(i)=="ú") str = str.replace(/ú/,"u");

if (str.charAt(i)=="Á") str = str.replace(/Á/,"a");

if (str.charAt(i)=="É") str = str.replace(/É/,"e");

if (str.charAt(i)=="Í") str = str.replace(/Í/,"i");

if (str.charAt(i)=="Ó") str = str.replace(/Ó/,"o");

if (str.charAt(i)=="Ú") str = str.replace(/Ú/,"u");

if (str.charAt(i)=="ñ") str = str.replace(/ñ/,"n");

if (str.charAt(i)=="Ñ") str = str.replace(/Ñ/,"n");

if (str.charAt(i)=="$") str = str.replace(/$/,"s");

}

return str;

} 



function url_amigable(){



var nombreFormateado = "";

var nombre = document.getElementById('nombre').value;



primerFormateo = quitaAcentos(nombre);



segundoFormateo = primerFormateo.toLowerCase(nombre);



arrayNombre = segundoFormateo.split(" ");



for($i=0; $i<arrayNombre.length; $i++){



    if(arrayNombre.length==1){

        nombreFormateado = arrayNombre[$i];

    }

    else if($i<arrayNombre.length-1){

        nombreFormateado = nombreFormateado.concat(arrayNombre[$i])+"-";



    }

    else if($i==arrayNombre.length-1){

        nombreFormateado = nombreFormateado.concat(arrayNombre[$i]);

    }



}



document.getElementById('url').value = nombreFormateado;

document.getElementById('title').value = document.getElementById('nombre').value;



}



function recalcula() {

    num_items = $("#num_items").val();  

    total = 0;

    for(i=0; i<num_items; i++)

    {

        precio = $("#precio_unit_"+i).val();

        cantidad = $("#cantidad_"+i).val();

        subtotal = parseFloat(precio*cantidad).toFixed(2);

        $("#subtotal_"+i).val(subtotal);

        $("#spanSubt_"+i).html(subtotal);

        total = total + parseFloat(precio*cantidad);

    }

    aux_total = parseFloat(total).toFixed(2);

    //alert(aux_total);

    precio_total = 'S/ '+ aux_total;

    $("#celdaTotal").html(precio_total);

}

/*function deleteproductos(id)
{
    $("#tituloModal").html("Esta a punto de borrar Producto..!");
    $("#cuerpoModal").html("<p>¿Esta seguro de continuar?</p>");
    str = '<a href="#" class="btn" data-dismiss="modal">CANCELAR</a>';
    str +='<a href="mainpanel/productos/borrar/'+id+'" class="btn btn-primary">BORRAR</a>';
    $("#botoneraModal").html(str);
    $("#botoneraModal").show();
    $("#myModal").modal('show');
}*/

function actualizarDestacado(param_id,param_estado){
    if (param_estado == 1) { estado = 2;}else{estado = 1;}
    $.ajax({
        data:  {"param_id" : param_id,"param_estado" : estado },
        url:   'mainpanel/productos/destacado',
        dataType: "json",
        type:  'post',
        beforeSend: function () {
            $('#btnD-'+param_id).text('Procesando...');
        },
        success:  function (response) {
            if (response.estado == 1){
                $('#btnD-'+param_id).addClass('btn-success').removeClass('btn-warning');
                $('#btnD-'+param_id).text('ACTIVO');
            } else {
                $('#btnD-'+param_id).addClass('btn-warning').removeClass('btn-success');
                $('#btnD-'+param_id).text('INACTIVO');
            }
            $('#destacado'+param_id).val(response.estado);                             
        }
    });
}