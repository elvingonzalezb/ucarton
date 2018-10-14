<?php

class Model_ajax extends CI_Model {

    public function __construct()

    {

            parent::__construct();

    }

    

    public function updateusuario($nombres,$newpasw,$idusuario,$password) {

        $this->db->where('id', $idusuario);

        $this->db->where('password', $password);        

        $query =  $this->db->get('usuarios');

        $num=$query->num_rows();

        if($num>0){

            if(!empty($newpasw)):$ps=$newpasw; else :$ps=$password; endif;

            $data = array(

               'password' => $ps,

               'nombre' => $nombres,                

            );

            $this->db->where('id', $idusuario);

            $result=$this->db->update('usuarios', $data);

        }else{

            $result='';

        }

        return $result;

    } 





    public function deleteCliente($id_cliente) {

        $this->db->where('id', $id_cliente);

        $this->db->delete('inscritos');

    } 



    public function getColor($id_color) {

        $this->db->where('id', $id_color);

        $query =  $this->db->get('colores');

        return $query->row();

    }     



    public function getListaProductos($id_categoria) {

        $this->db->select('id_producto');

	    $this->db->where('id_categoria_padre',$id_categoria);

        $query =  $this->db->get('productos');

        return $query->result();

    }

    public function updateStock($id_stock, $data) {

        $this->db->where('id', $id_stock);

        $this->db->update('stock_color', $data);

    }      

    public function ordProd($id,$data) {

        $this->db->where('id_producto', $id);

        $this->db->update('productos', $data);

    }



    public function getSubcategorias($padre) {
        $this->db->where('padre', $padre);        
        $this->db->order_by('orden');
        $query =  $this->db->get('categorias');
        return $query->result_array();
    } 

    public function getSubcategoriasImpresion($padre) {
        $this->db->where('padre', $padre);        
        $this->db->order_by('orden');
        $query =  $this->db->get('categorias_impresion');
        return $query->result_array();
    } 



    public function getMaximoSubcategoria($padre) {

        $this->db->select('orden');

        $this->db->where('padre', $padre);

        $query =  $this->db->get('categorias');

        return $query->num_rows();

    }



    public function getMaximo($id_categoria) {

        $this->db->select('orden');

        $this->db->where('id_categoria', $id_categoria);

        $this->db->order_by('orden', 'desc');

        $this->db->limit(1);

        $query =  $this->db->get('proveedores');

        return $query->row();

    }

    public function getMaximoOrden($id_categoria) {

        $this->db->select('orden');

        $this->db->where('id', $id_categoria);

        $this->db->order_by('orden', 'desc');

        $this->db->limit(1);

        $query =  $this->db->get('productos');

        return $query->row();

    }

    public function getMaximoCategoria($id_categoria_padre) {

        $this->db->where('id', $id_categoria_padre);

        $query =  $this->db->get('productos');

        return $query->num_rows();

    }    



    public function numMax($id_categoria)

    {

        $this->db->where('id_categoria', $id_categoria);

        $query =  $this->db->get('proveedores');

        return $query->num_rows();

    }



}

?>