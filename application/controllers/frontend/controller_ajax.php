<?php
class Controller_ajax extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('frontend/model_index');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('frontend/Model_ajax');      
        //$this->load->model('mainpanel/Model_ajax');
        //$this->load->model('mainpanel/Model_subsubcategoria');  
    }

    public function index()	{

    }

    public function cargaContenido() {

        $id = $_POST['id'];
        $contenido = $this->model_index->getContenido($id);

        $json['contenido'] = $contenido;

        echo json_encode($json);
    }
       public function agregarProducto()
    {
        //print_r($parametros); return;
        $parametros = $_POST["parametros"];
        $array = explode("|", $parametros);
        $id_producto = $array[0];
        $cantidad = $array[1];
        $nombre = $array[2];
        $imagen = $array[3];
        $precio = $array[4];
        $indice = $id_producto;
        
        if($this-> session->userdata('carrito_industrial'))//$this-> session ->has_userdata('carrito_industrial'))
        {
            $carrito = $this-> session->userdata('carrito_industrial');
            if(isset($carrito[$indice]))
            {
                $cantidad_1 = $carrito[$indice]['cantidad'];
                $carrito[$indice]['cantidad'] = $cantidad_1 + $cantidad;
            }
            else
            {
            $carrito[$indice] = array('id_producto' => $id_producto, 'cantidad' => $cantidad, 'nombre' => $nombre, 'imagen' => $imagen, 'precio' => $precio);
            }
        }
        else
        {
            $carrito=array();
            $carrito[$indice]= array('id_producto' => $id_producto, 'cantidad' => $cantidad, 'nombre' => $nombre, 'imagen' => $imagen, 'precio' => $precio);
        }

        $this-> session->set_userdata('carrito_industrial', $carrito);
        $text = base_url()."cotizacion/detalle";

        echo $text;

    }
    
    public function eliminaItemCarro() {

        $parametros = explode("|", $_POST['parametros']);
        $id_producto = $parametros[0];
        $cantidad = $parametros[1];
        $nombre = $parametros[2];
        $imagen = $parametros[3];
        $indice = $id_producto;

        if($this->session->userdata('carrito_industrial'))
        {
            $carrito = $this->session->userdata('carrito_industrial');
            unset($carrito[$indice]);
            if(count($carrito)==0)
            {
                $this->session->unset_userdata('carrito_industrial');        
            }
            else
            {
                $this-> session->set_userdata('carrito_industrial', $carrito);
            }
        }

        $text = base_url()."cotizacion/detalle";

        echo $text;
    }

    public function eliminaCarro()
    {
        $this->session->unset_userdata('carrito_industrial');
        $text = base_url()."cotizacion/detalle";
        echo $text; 
    }

    public function actualizarCotizacion()
    {
        $parametros = explode("|", $_POST['parametros']);
        $id_producto = $parametros[0];
        $cantidad = $parametros[1];
        $nombre = $parametros[2];
        $imagen = $parametros[3];
        $indice = $id_producto;
        
        if($this->session->userdata('carrito_industrial'))
        {
            $carrito = $this->session->userdata('carrito_industrial');
            $carrito[$indice]['cantidad'] = $cantidad;
            $this-> session->set_userdata('carrito_industrial', $carrito);
        }
        
        $text = base_url()."cotizacion/detalle";
        echo $text; 

    }

 }