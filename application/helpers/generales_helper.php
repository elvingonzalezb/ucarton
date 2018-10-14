<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	function getNumSubcategorias($id) {
		$ci =& get_instance();
		$ci->db->where('padre', $id);
		$query = $ci->db->get('categorias');
		$num = $query->num_rows();
		return $num;
	}

	function getNumProductos($id) {
		$ci =& get_instance();
		$ci->db->where('id', $id);
		$query = $ci->db->get('productos');
		$num = $query->num_rows();
		return $num;
	}

	function getNumSubcategoriasImpresion($id) {
		$ci =& get_instance();
		$ci->db->where('padre', $id);
		$query = $ci->db->get('categorias_impresion');
		$num = $query->num_rows();
		return $num;
	}

	function getNumProductosImpresion($id) {
		$ci =& get_instance();
		$ci->db->where('id', $id);
		$query = $ci->db->get('impresiones');
		$num = $query->num_rows();
		return $num;
	}

	function getUrlCategoria($id) {
		$ci =& get_instance();
		$ci->db->where('id', $id);
		$query = $ci->db->get('categorias');
		$nombre = $query->row()->url;
		return $nombre;
	}

	function getCategoria($id) {
		$ci =& get_instance();
		$ci->db->where('id', $id);
		$query = $ci->db->get('categorias');
		return $query->row();
	}
	function getCategorias() {
		$ci =& get_instance();
		$ci->db->where('padre', 0);
		$query = $ci->db->get('categorias');
		return $query->result_array();
	}

if ( ! function_exists('getInfo'))
{
	function getInfo($seccion) {
		$ci =& get_instance();
		$ci->db->where('seccion', $seccion);
		$query = $ci->db->get('textos_web');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row;
		}
		return 0;
	}
}

if ( ! function_exists('getInfoE'))
{
	function getInfoE($seccion, $id) {

		$ci =& get_instance();

		

		$ci->db->where('seccion', $seccion);

		$ci->db->where('id', $id);

		$query = $ci->db->get('textos_web');

		if ($query->num_rows() > 0){

			$row = $query->row();

			return $row;

		}

		return 0;
	}
}

if ( ! function_exists('get_prod_cat'))
{
	function get_prod_cat($id) {

		$ci =& get_instance();

		

		$ci->db->where('id_categoria_padre', $id);

		$query = $ci->db->get('productos');

		if ($query->num_rows() > 0){

			$resultado = $query->result_array();

			return $resultado;

		}

		return 0;
	}
}

if ( ! function_exists('getConfig'))
{
	function getConfig($llave) {

		$ci =& get_instance();
		$ci->db->select('valor');
		$ci->db->where('llave', $llave);
		$query = $ci->db->get('configuracion');
		if ($query->num_rows() > 0){
			$row = $query->row();
			return $row->valor;
		}
		return 0;
	}
}

if ( ! function_exists('formateaCadena'))
{
	function formateaCadena($cadena) {
		$cadena = str_replace("á", "a", $cadena);
		$cadena = str_replace("é", "e", $cadena);
		$cadena = str_replace("í", "i", $cadena);
		$cadena = str_replace(" ", "-", $cadena);
		$cadena = str_replace("#", "N", $cadena);
		$cadena = str_replace("%", "", $cadena);
		$cadena = str_replace("&", "", $cadena);				
		$cadena = str_replace("'", "", $cadena);
		$cadena = str_replace("(", "", $cadena);
		$cadena = str_replace(")", "", $cadena);				
		$cadena = str_replace(",", "", $cadena);
		$cadena = str_replace(",", "", $cadena);
		$cadena = str_replace("-", "", $cadena);
		$cadena = str_replace("/", "-", $cadena);
		$cadena = str_replace(":", "-", $cadena);
		$cadena = str_replace(";", "", $cadena);                
		$cadena = str_replace("?", "", $cadena);
		$cadena = str_replace("¿", "", $cadena);
		$cadena = str_replace("Á", "A", $cadena);
		$cadena = str_replace("É", "E", $cadena);
		$cadena = str_replace("Í", "I", $cadena);
		$cadena = str_replace("ñ", "n", $cadena);
		$cadena = str_replace("Ñ", "N", $cadena);	
		$cadena = str_replace("ó", "o", $cadena);
		$cadena = str_replace("Ó", "O", $cadena);
		$cadena = str_replace("ú", "u", $cadena);
		$cadena = str_replace("Ú", "U", $cadena);
		$cadena = str_replace('"', "", $cadena);
		$cadena = strtolower($cadena);
		return $cadena;
	}
}

if ( ! function_exists('Ymd_2_dmY'))
{
	function Ymd_2_dmY($fecha) {

		$aux = explode("-", $fecha);

		$agno = $aux[0];

		$mes = $aux[1];

		$dia = $aux[2];

		$formateada = $dia."-".$mes."-".$agno;

		return $formateada;
	}
}

if ( ! function_exists('dmY_2_Ymd'))
{
	function dmY_2_Ymd($fecha) {

		$aux = explode("-", $fecha);

		$agno = $aux[2];

		$mes = $aux[1];

		$dia = $aux[0];

		$formateada = $agno."-".$mes."-".$dia;

		return $formateada;
	}
}

if ( ! function_exists('fecha_hoy_dmY'))
{
    function fecha_hoy_dmY() {
        $fecha = getdate();
        $dia = $fecha['mday'];
        if($dia<10) $dia="0".$dia;
        $mes = $fecha['mon'];
        if($mes<10) $mes="0".$mes;
        $agno = $fecha['year'];	
        $hoy = $dia."-".$mes."-".$agno;
        return $hoy;
    }
}

if ( ! function_exists('fecha_hoy_dmY2'))
{
    function fecha_hoy_dmY2() {
        $fecha = getdate();
        $dia = $fecha['mday'];
        if($dia<10) $dia="0".$dia;
        $mes = $fecha['mon'];
        if($mes<10) $mes="0".$mes;
        $agno = $fecha['year'];	
        $hoy = $dia."/".$mes."/".$agno;
        return $hoy;
    }
}

if ( ! function_exists('fecha_hoy_Ymd'))
{
    function fecha_hoy_Ymd() {
        $fecha = getdate();
        $dia = $fecha['mday'];
        if($dia<10) $dia="0".$dia;
        $mes = $fecha['mon'];
        if($mes<10) $mes="0".$mes;
        $agno = $fecha['year'];	
        $hoy = $agno."-".$mes."-".$dia;
        return $hoy;
    }
}

if ( ! function_exists('valRuc'))
{
    function ValidRucPeru($ruc){
        $factor= "5432765432";
        $ruc= trim($ruc);


        if ( (!is_numeric($ruc)) || (strlen($ruc) != 11) ){
            return false;
        }


        // verificar digitos iniciales
        $dig_valid= array("10", "20" ,"17", "15");
        $dig=substr($ruc, 0, 2);
        if (!in_array($dig, $dig_valid, true)) {
        return false;
        }

        

        $dig_verif= substr($ruc, 10, 1);

        

        for ($i=0; $i < 10; $i++){

        $arr[]= substr($ruc, $i, 1) * substr($factor, $i, 1);

        }



        $suma=0;

        foreach($arr as $a){

        $suma= $suma + $a;

        }



        //Calculamos el residuo

        $residuo= round(($suma/11),1);

        $residuo= substr($residuo, -1);

        $resta= 11 - $residuo;

        $dig_verif_aux= substr($resta, -1);



        if ($dig_verif == $dig_verif_aux){

            return true;

        } else {

            return false;

        }
    }
}

if ( ! function_exists('dias_transcurridos'))
{
function dias_transcurridos($fecha_i,$fecha_f)
{

	$dias	= (strtotime($fecha_i)-strtotime($fecha_f))/86400;

	$dias 	= abs($dias); $dias = ceil($dias);		

	return $dias;

}

}
?>