<?php
class Controller_ajax extends CI_Controller {
    function __construct()
    {
        parent::__construct();    
        $this->load->model('mainpanel/Model_ajax');
        //$this->load->model('mainpanel/Model_subsubcategoria');        
    }

    public function index()	{

    }

    public function cargaOrdenProduct() {
        $id_categoria_padre = $_POST['id_categoria_padre'];
        $aux = $this->Model_ajax->getMaximoCategoria($id_categoria_padre);
        $json['sgte'] = $aux+1;
        echo json_encode($json);
    }

    public function cargaOrdenProducto() {
        $id_categoria_padre = $_POST['id_categoria_padre'];
        $aux = $this->Model_ajax->getMaximoOrden($id_categoria_padre);
        $maximo = $aux->orden;
        if($maximo==0 )
        {
            $json['sgte'] = 1;
        }
        else
        {
            $json['sgte'] = $maximo + 1;
        }      
        echo json_encode($json);
    }

    public function cargaSubcategorias() {
        $json = array();        
        $padre = $_POST['padre'];
        $lista = $this->Model_ajax->getSubcategorias($padre);
        if(count($lista)>0)
        {
            $json['result']=1;
        }
        else
        {
            $json['result']=0;
        }        
        $json['lista'] = $lista;
        echo json_encode($json);
    }  

    public function cargaSubcategoriasImpresion() {
        $json = array();        
        $padre = $_POST['padre'];
        $lista = $this->Model_ajax->getSubcategoriasImpresion($padre);
        if(count($lista)>0)
        {
            $json['result']=1;
        }
        else
        {
            $json['result']=0;
        }        
        $json['lista'] = $lista;
        echo json_encode($json);
    }  



    public function cargaOrdenProveedor() {



        $id_categoria = $_POST['id_categoria'];

        $aux_2 = $this->Model_ajax->numMax($id_categoria);



        if($aux_2==0)

        {

            $json['sgte'] = 1;

        }

        else

        {

            $aux = $this->Model_ajax->getMaximo($id_categoria);

            $maximo = $aux->orden;

            $json['sgte'] = $maximo + 1;

        }

        echo json_encode($json);

    }



    public function cargaSgteSubcategoria() {

        $padre = $_POST['padre'];

        $num = $this->Model_ajax->getMaximoSubcategoria($padre);

            $json['sgte'] = $num + 1;

        echo json_encode($json);

    }



    public function updateusuario() {

        $json=array();        

        $nombres = $_POST['nombres'];

        $password = $_POST['password'];        

        $newpasw = $_POST['newpasw'];

        $idusuario = $this->session->userdata('id_admin'); 

        $this->session->set_userdata('nombre_admin', $nombres);

        $result=$this->Model_ajax->updateusuario($nombres,$newpasw,$idusuario,$password);                           

        $json['result'] = $result;

        echo json_encode($json);

    }   

    

   public function ordProd() {

        $json=array();      

        $ordenes = $_POST['orden'];	

        $cad1=explode("&",$ordenes);

        $num=count($cad1);

        $orden=0;

	for($o=1;$o<=$num;$o++){

            $str=explode("=",$cad1[$o]);

            $id=$str[1];

            $orden +=1;

            $data=array();

            $data['ordestaca']=$orden;

            $this->Model_ajax->ordProd($id,$data);        

            //$aux = "update productos set orden='$pos' where id_producto='$id'";

            //$sql[] = $aux;

            //$query = mysql_query($aux);	

        }

        $json['result'] = 'Se ordeno correctamente!';

        echo json_encode($json);

    }  

        

}

?>

