<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of signage_model
 *
 * @author Zoom
 */
class outdoor_model extends CI_Model{
    
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
    
    function getSlider(){
        
        $this->db->select('image');
        $this->db->from('slider');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getFormat($id){
        
        $this->db->select('*');
    	$this->db->from('outdoor');
    	$this->db->where('outdoor_id', $id);
    	$query = $this->db->get();
    	return $query->result_array();
    }
    
    function getFormatSlides($id){
    
    	$this->db->select('image');
    	$this->db->from('slider');
    	$this->db->where('title', $id);
    	$query = $this->db->get();
    	return $query->result_array();
    }
    
    function getCities(){
    	$query = $this->db->get('cities');
    	return $query->result_array();
    }
    
    function getAreas(){
    	$query = $this->db->get('areas');
    	return $query->result_array();
    }
}

?>
