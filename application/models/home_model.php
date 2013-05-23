<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home_model
 *
 * @author Zoom
 */
class home_model extends CI_Model{
    
    //put your code here
    function __construct() {
        parent::__construct();
    }
    
    function getOutdoors(){
    	
    	$this->db->select('outdoor_id, url, title');
    	$this->db->from('outdoor');
    	//$this->db->where('menu', 'yes');
    	$query = $this->db->get();
    	return $query->result_array();
    }
    
    function getSignage(){
    	
    	$this->db->select('*');
    	$this->db->from('signage');
    	//$this->db->order_by('menu_order', 'ASC');
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
    
    function getNews(){
        
        $this->db->select('news_id, title, slug, image');
        $this->db->from('news');
        $this->db->order_by('date_created','DESC');
        $this->db->limit('1');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getClients(){
        
        $this->db->select('client_id, logo, name');
        $this->db->from('clients');
        $this->db->order_by('RAND()');
        $this->db->limit('6');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getSlider(){
        
        $this->db->select('image, caption');
        $this->db->from('home_slides');
        $query = $this->db->get();
        return $query->result_array();
    }
    function getNewsReadMore($id){
        
        $this->db->select('title, image, story');
        $this->db->from('news');
        $this->db->where('news_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
    
    function getCities(){
    	$query = $this->db->get('cities');
    	return $query->result_array();
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
