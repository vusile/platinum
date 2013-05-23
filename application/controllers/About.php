<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of About
 *
 * @author Zoom
 */
class About extends MY_Controller {
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('about_model');
        
        //$this->getpages();
    }
    
    function getpages(){
    	/*call this to every function or in construct
    	
    	$data['Pages'] = $this->about_model->getPages();
    	
    	$data['Menus'] = $this->about_model->getMenu();
        
        $data['Sub_Menus'] = $this->about_model->getSubMenu();
    	 
    	$this->load->view('template/header');
    	
    	$this->load->view('template/menu', $data);*/
    	
    }
    
    function index(){
        
        $data['About_Content'] = $this->about_model->getContents();
        
        $this->load->view('about/about', $data);
        
    }
}

?>
