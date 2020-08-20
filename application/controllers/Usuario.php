<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->library('session');
    } 

    /*
     * Listing of usuario
     */
    function index()
    {
        $data['usuario'] = $this->Usuario_model->get_all_usuario();
        
        $data['_view'] = 'usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new usuario
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'usuario_nombre' => $this->input->post('usuario_nombre'),
				'usuario_email' => $this->input->post('usuario_email'),
				'usuario_telefono' => $this->input->post('usuario_telefono'),
				'usuario_clave' => $this->input->post('usuario_clave'),
            );
            
            $usuario_id = $this->Usuario_model->add_usuario($params);
            redirect('usuario/index');
        }
        else
        {            
            $data['_view'] = 'usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a usuario
     */
    function edit($usuario_id)
    {   
        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($usuario_id);
        
        if(isset($data['usuario']['usuario_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'usuario_nombre' => $this->input->post('usuario_nombre'),
					'usuario_email' => $this->input->post('usuario_email'),
					'usuario_telefono' => $this->input->post('usuario_telefono'),
					'usuario_clave' => $this->input->post('usuario_clave'),
                );

                $this->Usuario_model->update_usuario($usuario_id,$params);            
                redirect('usuario/index');
            }
            else
            {
                $data['_view'] = 'usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting usuario
     */
    function remove($usuario_id)
    {
        $usuario = $this->Usuario_model->get_usuario($usuario_id);

        // check if the usuario exists before trying to delete it
        if(isset($usuario['usuario_id']))
        {
            $this->Usuario_model->delete_usuario($usuario_id);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }


        public function login() {

        //$data['empresa'] = $this->Empresa_model->get_empresa(1);
        $licencia="SELECT DATEDIFF(licencia_fechalimite, CURDATE()) as dias FROM licencia WHERE licencia_id = 1";
                $lice = $this->db->query($licencia)->row_array();

                if ($lice['dias']<=10) {
        $data['diaslic'] = $lice;
        $this->load->view('login/singin',$data);
        } else{
            $data['diaslic'] = 5000;
        $this->load->view('usuario/login',$data);    
        }
    }

     function verificar()
    {
        $username = $this->input->post('username');
        $clave = $this->input->post('password');
        

        $result = $this->Usuario_model->login2($username, $clave);
        //print "<pre>"; print_r($result); print "</pre>";
        //var_dump($result);

        if ($result) {
            if ($result->usuario_id == 1 or $result->usuario_id == 2) {
                

               

                $sess_array = array(
                    
                    'usuario_id' => $result->usuario_id,
                    'usuario_nombre' => $result->usuario_nombre,
                    'usuario_telefono' => $result->usuario_telefono,
                    'usuario_email' => $result->usuario_email,
                    'usuario_clave' => $result->usuario_clave
                    
                );

                $this->session->set_userdata('logged_in', $sess_array);
                $session_data = $this->session->userdata('logged_in');

                if ($session_data['usuario_id'] >= 1) {// admin page
                    redirect('dashboard/inicio');
                }

            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">USUARIO invalido' . $result . '</div>');
                redirect('login');
            }

        }else{
            $movil =  $this->Usuario_model->login3($username, $clave); 
            if ($movil) {
                            $sess_array = array(
                    
                    'usuario_id' => 2,//$movil->archivo_id,
                    'usuario_nombre' => $movil->archivo_propietario,
                    'usuario_telefono' => $movil->archivo_sigla,
                    'usuario_email' => $movil->archivo_placa,
                    'usuario_clave' => $movil->archivo_ci
                    
                );

                $this->session->set_userdata('logged_in', $sess_array);
                $session_data = $this->session->userdata('logged_in');

                if ($session_data['usuario_id'] >= 1) {// admin page
                    redirect('dashboard/inicio');
                }
            }
            else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">USUARIO invalido' . $result . '</div>');
                redirect('login');
            }
         } 
         
        
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect('', 'refresh');
    }
    
}