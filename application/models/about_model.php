<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_model
 *
 * @author Zoom
 */
class about_model extends CI_Model{
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
    }
    
    function getpages(){
    	
    	$this->db->select('*');
    	$this->db->from('pages');
    	$this->db->where('menu', 'yes');
    	$query = $this->db->get();
    	return $query->result_array();
    }
    
    function getMenu(){
    	
    	$this->db->select('*');
    	$this->db->from('menu');
    	$this->db->order_by('menu_order', 'ASC');
    	$query = $this->db->get();
    	return $query->result_array();
    }
    
    function getSubMenu(){
    	
    	$this->db->select('sales_point_id, title');
    	$this->db->from('sales_point');
    	//$this->db->order_by('sub_menu_order', 'ASC');
    	$query = $this->db->get();
    	return $query->result_array();
    }
    
    function getContents(){
        
        //$this->db->select('*')->from('about_us');
        $query = $this->db->get('about_us');
        return $query->result_array();
        
    }
}

?>
