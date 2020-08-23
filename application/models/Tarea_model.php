<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tarea_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tarea by tarea_id
     */
    function get_tarea($tarea_id)
    {
        return $this->db->get_where('tarea',array('tarea_id'=>$tarea_id))->row_array();
    }
        
    /*
     * Get all tarea
     */
    function get_all_tarea()
    {
        $this->db->order_by('tarea_id', 'desc');
        return $this->db->get('tarea')->result_array();
    }
        
    /*
     * function to add new tarea
     */
    function add_tarea($params)
    {
        $this->db->insert('tarea',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tarea
     */
    function update_tarea($tarea_id,$params)
    {
        $this->db->where('tarea_id',$tarea_id);
        return $this->db->update('tarea',$params);
    }
    
    /*
     * function to delete tarea
     */
    function delete_tarea($tarea_id)
    {
        return $this->db->delete('tarea',array('tarea_id'=>$tarea_id));
    }
    /* retorna las tareas de un determinado grupo */
    function get_all_tareagrupo($grupo_id)
    {
        $this->db->where('grupo_id', $grupo_id);
        $this->db->order_by('tarea_id', 'desc');
        return $this->db->get('tarea')->result_array();
    }
}
