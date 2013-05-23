<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Outdoor
 *
 * @author Zoom
 */
class Outdoor extends MY_Controller{
    
 //put your code here
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('outdoor_model'); 
       // $this->load->model('home_model');

        //$this->getpages();
    }
    
    function getpages(){
    	
    	/*$data['Outdoors'] = $this->home_model->getOutdoors();
    	
    	$data['Signage'] = $this->home_model->getSignage();
        
        $data['Slides'] = $this->home_model->getSlider();
    	 
    	$this->load->view('template/header');
    	
    	$this->load->view('template/menu', $data);*/
    	
    }
    
    function Outdoor_Format($id){
        
        $data['outdoor'] = $this->outdoor_model->getFormat($id);
        
        $data['fomatSlides'] = $this->outdoor_model->getFormatSlides($id);
        
        $this->load->view('outdoor/outdoor', $data);
    }
    
    function Search_Locations(){
        
    	$data['locations'] ="n";
        
        $data['Cities'] = $this->outdoor_model->getCities();
        
        $data['Areas'] = $this->outdoor_model->getAreas();
    	
    	$this->load->view('outdoor/outdoor', $data);
    }
    
    function Search_Results(){
        
        $data['Search_Results'] = 'has';
        
        $this->load->view('outdoor/outdoor', $data);
        
    }
    
}

?>

