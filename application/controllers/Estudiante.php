<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Estudiante extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estudiante_model');
        $this->load->model('Grupo_model');
    } 

    /*
     * Listing of estudiante
     */
    function index()
    {
        $data['estudiante'] = $this->Estudiante_model->get_all_estudiante();
        
        $data['_view'] = 'estudiante/index';
        $this->load->view('layouts/main',$data);
    }

    function grupo($grupo_id)
    {
        $data['estudiante'] = $this->Estudiante_model->get_estudiante_grupo($grupo_id);
        $data['grupo_id'] = $grupo_id;
        $data['grupo'] = $this->Grupo_model->get_grupo($grupo_id);
        $data['_view'] = 'estudiante/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new estudiante
     */
    function add($grupo_id)
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'grupo_id' => $grupo_id,
				'estudiante_nombre' => $this->input->post('estudiante_nombre'),
				'estudiante_ci' => $this->input->post('estudiante_ci'),
				'estudiante_email' => $this->input->post('estudiante_email'),
				'estudiante_telefono' => $this->input->post('estudiante_telefono'),
				'estudiante_clave' => md5($this->input->post('estudiante_ci')),
            );
            
            $estudiante_id = $this->Estudiante_model->add_estudiante($params);
            redirect('estudiante/grupo/'.$grupo_id);
        }
        else
        {
			$this->load->model('Grupo_model');
			$data['all_grupo'] = $this->Grupo_model->get_all_grupo();
            $data['grupo_id'] = $grupo_id;
            $data['grupo'] = $this->Grupo_model->get_grupo($grupo_id);
            $data['_view'] = 'estudiante/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a estudiante
     */
    function edit($estudiante_id)
    {   
        // check if the estudiante exists before trying to edit it
        $data['estudiante'] = $this->Estudiante_model->get_estudiante($estudiante_id);
        
        if(isset($data['estudiante']['estudiante_id']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'grupo_id' => $this->input->post('grupo_id'),
					'estudiante_nombre' => $this->input->post('estudiante_nombre'),
					'estudiante_ci' => $this->input->post('estudiante_ci'),
					'estudiante_email' => $this->input->post('estudiante_email'),
					'estudiante_telefono' => $this->input->post('estudiante_telefono'),
					
                );

                $this->Estudiante_model->update_estudiante($estudiante_id,$params);            
                redirect('estudiante/grupo/'.$this->input->post('grupo_id'));
            }
            else
            {
				$this->load->model('Grupo_model');
				$data['all_grupo'] = $this->Grupo_model->get_all_grupo();

                $data['_view'] = 'estudiante/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The estudiante you are trying to edit does not exist.');
    } 

    /*
     * Deleting estudiante
     */
    function remove($estudiante_id)
    {
        $estudiante = $this->Estudiante_model->get_estudiante($estudiante_id);

        // check if the estudiante exists before trying to delete it
        if(isset($estudiante['estudiante_id']))
        {
            $this->Estudiante_model->delete_estudiante($estudiante_id);
            redirect('estudiante/index');
        }
        else
            show_error('The estudiante you are trying to delete does not exist.');
    }
    
}