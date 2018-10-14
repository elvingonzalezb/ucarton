<?php 
	class Controller_secciones extends CI_Controller 
	{
		function __construct()
		{
			parent::__construct();
			$this->load->library("validacion");
			$this->load->model("mainpanel/model_secciones");
        	$this->load->library('my_upload');

		}
		public function listado()
		{
			$this->validacion->validacion_login();
	        $data['current_section'] = 'secciones';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
	        $data['modal'] = $this->load->view('mainpanel/banners/modal_banners', true);
	        $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="secciones/index_view";


	        $secciones = $this->model_secciones->getListaSecciones();
	     	$data["secciones"] = $secciones;
	        $this->load->view("mainpanel/includes/template", $data);

		}
	    public function edit($id)
	     {
	        $this->validacion->validacion_login();
	        // GENERAL *********************************************************
	        $data['current_section'] = 'secciones';
	        $menu['lista_menu'] = $this->load->view('mainpanel/includes/menu', $data, true);
	        $this->load->view('mainpanel/includes/header_view', $menu, true);
	        $data['modal'] = $this->load->view('mainpanel/banners/modal_banners', true);
	        $this->load->view('mainpanel/includes/footer_view', $data, true); 
	        $data['cuerpo']="secciones/edit_view";

	        // EDIT CATALOGO
	        $seccion = $this->model_secciones->getSeccion($id);
	        $data['secciones'] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }

	    public function edit_servicios() {
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "servicios";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_servicios_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(3);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }

	    /*public function edit_empresa() {
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "empresa";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_empresa_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(2);
	        $data["seccion"] = $seccion;
	        $mision = $this->model_secciones->getSeccion(3);
	        $data["mision"] = $mision;
	        $vision = $this->model_secciones->getSeccion(4);
	        $data["vision"] = $vision;
	        $pensamiento = $this->model_secciones->getSeccion(7);
	        $data["pensamiento"] = $pensamiento;
	        $this->load->view("mainpanel/includes/template", $data);
	    }*/
	  
	    public function edit_somos() {
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "empresa";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_quienes-somos_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(2);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }

	    //Aqui Falta una seccion


	    public function edit_contacto() {
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "correo";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_contacto_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(5);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }
	    public function edit_suscribete() {
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "suscribete";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_suscribete_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(5);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }
	    public function edit_cotizacion() {
	    	
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "impresiones";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_cotizacion_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(11);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }
	    public function edit_impresiones() {
	    	
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "cotizacion";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_cotizacion_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(14);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }
	    public function edit_album() {
	    	
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "impresiones";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_album_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(10);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }
	     public function edit_grafica() {
	    	
	        $this->validacion->validacion_login();
	        // General
	        $data["current_section"] = "impresiones";
	        $data["lista_menu"] = $this->load->view("mainpanel/includes/menu" , $data, true);
	        $data["cuerpo"] = "secciones/edit_grafica_view";

	        // Edit servicios
	        $seccion = $this->model_secciones->getSeccion(14);
	        $data["seccion"] = $seccion;
	        $this->load->view("mainpanel/includes/template", $data);
	    }
	    /*************************************************************************************/
	    /*******************************Actualizar********************************************/
	    /*************************************************************************************/

	    public function actualizar() {
	        $this->validacion->validacion_login();
	        // edicion de seccion//
	        $data = array();

	        $seccion                = $this->input->post('seccion');


	        $data['titulo']         = $this->input->post('titulo');
	        $data['texto']          = $this->input->post('texto'); 
	        $data['title']          = $this->input->post('title');
	        $data['description']    = $this->input->post('description');

        	$id= $this->input->post('id');       

	        $resultado = $this->model_secciones->update($id, $data);

	        if($resultado == true)
	        {
	             $this->session->set_userdata("success", "Se proceso corretamente la información");
	        }
	        else
	        {
	            $error="Ocurrió un problema al procesar su información".$error;
	             $this->session->set_userdata("error", $error);
	        }
	         redirect("mainpanel/secciones/edit/".$id);
	        // end //

	    }
	    public function actualizar_empresa()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");  //donde se encuentra declarada la variable seccion que se recibe aqui?
		    
		    //$data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id'); 
	        	$resultado = $this->model_secciones->update($id, $data);

	        //para actualizar la misión
	        $resultado2=false;
	        $data['texto']          = $this->input->post('texto_mision'); 
		    
				$id_mision= $this->input->post('id_mision'); 
	        	$resultado2 = $this->model_secciones->update($id_mision, $data);

	        //para actualizar la visión
	        $resultado3=false;
	        $data['texto']          = $this->input->post('texto_vision'); 
		    
				$id_vision= $this->input->post('id_vision'); 
	        	$resultado3 = $this->model_secciones->update($id_vision, $data);

	        //para actualizar Pensamiento
	        $resultado4=false;
	        $data['texto']          = $this->input->post('Tpensamiento'); 
		    
				$id_pensamiento= $this->input->post('id_pensamiento'); 
	        	$resultado4 = $this->model_secciones->update($id_pensamiento, $data);

		        if($resultado == true && $resultado2 == true && $resultado3 == true && $resultado4 == true )
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {
		        	if($resultado2==true && $resultado3==true && $resultado4==true){
		            	$error="Ocurrió un problema al procesar su información en el texto Lema".$error;
		             	$this->session->set_userdata("error", $error);
		            }else{
		            	if( $resultado3==true && $resultado4==true){
		            	$error="Ocurrió un problema al procesar su información en el texto Mision".$error;
		             	$this->session->set_userdata("error", $error);
			            }else{
			            	if($resultado4==true){
				            	$error="Ocurrió un problema al procesar su información en el texto visión".$error;
				             	$this->session->set_userdata("error", $error);
				            }else{
		            			$error="Ocurrió un problema al procesar su información en el texto pensamiento".$error;
				             	$this->session->set_userdata("error", $error);
		            		}	
			            }	
		            }	

		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/empresa");
	    }
	    public function actualizar_procesos()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");  //donde se encuentra declarada la variable seccion que se recibe aqui?
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id'); 
	        	$resultado = $this->model_secciones->update($id, $data);

	        //para actualizar los procesos de planeamiento estrategico
	       	$data['titulo']         = $this->input->post('titulo_proceso1');
		    $data['texto']          = $this->input->post('texto_proceso1'); 		    


	        	$id_proceso1= $this->input->post('id_proceso1'); 
	        	$resultado1 = $this->model_secciones->update($id_proceso1, $data);
		    //para actualizar los procesos de planeamiento estrategico
	       	$data['titulo']         = $this->input->post('titulo_proceso2');
		    $data['texto']          = $this->input->post('texto_proceso2'); 		    


	        	$id_proceso2= $this->input->post('id_proceso2'); 
	        	$resultado2 = $this->model_secciones->update($id_proceso2, $data);
	        //para actualizar los procesos de planeamiento estrategico
	       	$data['titulo']         = $this->input->post('titulo_proceso3');
		    $data['texto']          = $this->input->post('texto_proceso3'); 		    


	        	$id_proceso3= $this->input->post('id_proceso3'); 
	        	$resultado3 = $this->model_secciones->update($id_proceso3, $data);
	        //para actualizar los procesos de planeamiento estrategico
	       	$data['titulo']         = $this->input->post('titulo_proceso4');
		    $data['texto']          = $this->input->post('texto_proceso4'); 		    


	        	$id_proceso4= $this->input->post('id_proceso4'); 
	        	$resultado4 = $this->model_secciones->update($id_proceso4, $data);

				

		        if($resultado == true && $resultado2 == true && $resultado3 == true && $resultado4 == true )
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {		        	
				            	$error="Ocurrió un problema al procesar su información en el texto visión".$error;
				             	$this->session->set_userdata("error", $error);
				          
		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/empresa/procesos");
	    }
	     public function actualizar_quienes_somos()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");  //donde se encuentra declarada la variable seccion que se recibe aqui?
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id'); 
	        	$resultado = $this->model_secciones->update($id, $data);   

		        if($resultado == true )
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {		        	
				            	$error="Ocurrió un problema al procesar su información en el texto visión".$error;
				             	$this->session->set_userdata("error", $error);
				          
		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/empresa/quienes-somos");
	    }
	    public function actualizar_impresiones()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");  //donde se encuentra declarada la variable seccion que se recibe aqui?
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id'); 
	        	$resultado = $this->model_secciones->update($id, $data);   

		        if($resultado == true )
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {		        	
				            	$error="Ocurrió un problema al procesar su información en el texto visión".$error;
				             	$this->session->set_userdata("error", $error);
				          
		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/impresiones");
	    }
	     public function actualizar_grafica()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");  //donde se encuentra declarada la variable seccion que se recibe aqui?
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id'); 
	        	$resultado = $this->model_secciones->update($id, $data);   

		        if($resultado == true )
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {		        	
				            	$error="Ocurrió un problema al procesar su información en el texto visión".$error;
				             	$this->session->set_userdata("error", $error);
				          
		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/impresiones/texto-grafica");
	    }
	     public function actualizar_album()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");  //donde se encuentra declarada la variable seccion que se recibe aqui?
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id'); 
	        	$resultado = $this->model_secciones->update($id, $data);   

		        if($resultado == true )
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {		        	
				            	$error="Ocurrió un problema al procesar su información en el texto visión".$error;
				             	$this->session->set_userdata("error", $error);
				          
		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/impresiones/texto-galeria");
	    }
	    public function actualizar_servicios()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id');       

		        $resultado = $this->model_secciones->update($id, $data);

		        if($resultado == true)
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {
		            $error="Ocurrió un problema al procesar su información".$error;
		             $this->session->set_userdata("error", $error);
		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/seccion/servicios");
	    }

	    public function actualizar_clientes()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id');       

		        $resultado = $this->model_secciones->update($id, $data);

		        if($resultado == true)
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {
		            $error="Ocurrió un problema al procesar su información".$error;
		             $this->session->set_userdata("error", $error);
		        }
		         // redirect("mainpanel/secciones/edit/".$id);

		        redirect("mainpanel/empresa/clientes");
	    }

	   

	    public function actualizar_contacto()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id');       

		        $resultado = $this->model_secciones->update($id, $data);

		        if($resultado == true)
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {
		            $error="Ocurrió un problema al procesar su información".$error;
		             $this->session->set_userdata("error", $error);
		        }
		         // redirect("mainpanel/secciones/edit/".$id);
		        redirect("mainpanel/seccion/contacto");

	    }
	    public function actualizar_cotizacion()
	    {
	    	$this->validacion->validacion_login();

	    	$data=array();
	    	$seccion = $this->input->post("seccion");
		    
		    $data['titulo']         = $this->input->post('titulo');
		    $data['texto']          = $this->input->post('texto'); 
		    $data['title']          = $this->input->post('title');
		    $data['description']    = $this->input->post('description');


	        	$id= $this->input->post('id');       

		        $resultado = $this->model_secciones->update($id, $data);

		        if($resultado == true)
		        {
		             $this->session->set_userdata("success", "Se proceso corretamente la información");
		        }
		        else
		        {
		            $error="Ocurrió un problema al procesar su información".$error;
		             $this->session->set_userdata("error", $error);
		        }
		         // redirect("mainpanel/secciones/edit/".$id);
		        redirect("mainpanel/impresiones/texto-cotizacion");
		}
    }
?>