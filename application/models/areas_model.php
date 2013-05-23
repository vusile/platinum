<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of areas_model
 *
 * @author mariki
 */
class areas_model extends CI_Model {
  
    //put your code here
    
    function __construct() {
        
        parent::__construct();
    }
    
    function getAreas(){
        
        if(isset($_POST['city_id']) && $_POST['city_id']!=""){
            
            $id = $_POST['city_id'];
            
             $this->db->where('city_id', $id);
             $query = $this->db->get('areas');
             return $query->result_array();
            
        }  else {
            
            $query = $this->db->get('areas');
            return $query->result_array();
        }
    }
}

?>
