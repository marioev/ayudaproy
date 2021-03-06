<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Grupo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get grupo by grupo_id
     */
    function get_grupo($grupo_id)
    {
        return $this->db->get_where('grupo',array('grupo_id'=>$grupo_id))->row_array();
    }
        
    /*
     * Get all grupo
     */
    function get_all_grupo()
    {
        $this->db->order_by('grupo_id', 'desc');
        return $this->db->get('grupo')->result_array();
    }
        
    /*
     * function to add new grupo
     */
    function add_grupo($params)
    {
        $this->db->insert('grupo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update grupo
     */
    function update_grupo($grupo_id,$params)
    {
        $this->db->where('grupo_id',$grupo_id);
        return $this->db->update('grupo',$params);
    }
    
    /*
     * function to delete grupo
     */
    function delete_grupo($grupo_id)
    {
        return $this->db->delete('grupo',array('grupo_id'=>$grupo_id));
    }
}
