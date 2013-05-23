<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_model
 *
 * @author Zoom
 */
class news_model extends CI_Model{
    
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
    
    function getAllNews($limit, $offset){
        
        $this->db->select('news_id, title, slug, image');
        $this->db->from('news');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        return $query->result_array();
    }
    
    function getNewsCount(){
        
        return $this->db->count_all('news');
        
    }
    function getNewsReadMore($id){
        
        $this->db->select('title, image, story');
        $this->db->from('news');
        $this->db->where('news_id', $id);
        $query = $this->db->get();
        return $query->row();
    }
}

?>
