<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MY_Controller
 *
 * @author Zoom
 */
class MY_Controller extends CI_Controller{
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
        
        $this->MenuMnagement();
    }
    
    function MenuMnagement(){
    	//call this to every function or in construct

    	$data['Outdoors'] = $this->getOutdoors();
    	
    	$data['Signage'] = $this->getSignage();
        
        $data['Sub_Menus'] = $this->Menu();
        
        //get sliders
        
        $data['Slides'] = $this->getSlider();
    	 
    	$this->load->view('template/header');
    	
    	$this->load->view('template/menu', $data);
    	
    }
    
    function getOutdoors(){
    	 
    	$this->db->select('outdoor_id, url, title, use_id');
    	$this->db->from('outdoor');
    	$query = $this->db->get();
    	return $query->result_array();
    }
    
    function menu(){
        
        $menu ='';
        
        $query = $this->getSignage();
        
          foreach ($query as $signage){
              
            $sub_menus = $signage['type'];
            
            $left_menu = $this->getSubMenu($sub_menus);

            $menu .='<li>'.$signage["title"].'</li>';
            

            $menu .='<ul class="sub-level">';

            foreach ($left_menu as $my_menu){
                if($my_menu["type"] =='pos'){
                    $menu .='<li>'.anchor('Signage/point_of_sales/'.$my_menu["url"], $my_menu["title"]).'</li>';
                }
                else{

                    $menu .='<li>'. anchor('Signage/off_premise/'.$my_menu["url"], $my_menu["title"]).'</li>';
                }                    
            }

            $menu .='</ul>';
        }
        return $menu;
    }
            
    function getSignage(){
    	 
    	$this->db->select('*');
    	$this->db->from('signage');
    	$query = $this->db->get();
    	return $query->result_array();
        
    }
    
    function getSubMenu($sub_menus){
    	
    	$this->db->select('title, type, url');
        $this->db->from('signage_types');
        $this->db->where('type', $sub_menus);
        $left_menu = $this->db->get();
        return $left_menu ->result_array();
        
        //var_dump($left_menu ->result_array());
    }
    
    function getSlider(){
        
        $this->db->select('image');
        $this->db->from('home_slides');
        $query = $this->db->get();
        return $query->result_array();
    }
}

?>
