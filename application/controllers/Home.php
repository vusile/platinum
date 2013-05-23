<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Home
 *
 * @author Zoom
 */
class Home extends MY_Controller{
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('home_model');
        
    }
    

    function getSubMenus($id){
    	$data['Signage_Menus'] = $this->home_model->getSubMenu($id);
    }
    function index(){
        
        //get client list
        $data['Clients'] = $this->home_model->getClients();
        
        //get news
        $data['NewsList'] = $this->home_model->getNews();
        
        $data['Cities'] = $this->home_model->getCities();
        
        $data['Areas'] = $this->home_model->getAreas();
        
        $this->load->view('home/home', $data);
    }
    
    function read_more($id){
        
         $data['News'] = $this->home_model->getNewsReadMore($id);
         
          $this->load->view('home/home', $data);
    }
}

?>
