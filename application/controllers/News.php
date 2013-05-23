<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of News
 *
 * @author Zoom
 */
class News extends MY_Controller{
   
    //put your code here
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('news_model');
        
        $this->load->library('pagination');
        
        //$this->getpages();
    }
    
    function getpages(){
    	/*call this to every function or in construct
    	
    	$data['Pages'] = $this->news_model->getPages();
    	
    	$data['Menus'] = $this->news_model->getMenu();
        
        $data['Sub_Menus'] = $this->news_model->getSubMenu();
    	 
    	$this->load->view('template/header');
    	
    	$this->load->view('template/menu', $data);*/
    	
    }
    
    function index($limit=5, $offset=NULL){
        
        $data['All_News'] = $this->news_model->getAllNews($limit, $offset);
        
        $data["total_news"] = $this->news_model->getNewsCount();
        
        //pagination
        
        $config                 = array();
        
        $config["base_url"]     = site_url('News/index');
        
        $config["total_rows"]   = $data["total_news"];
        
        $config["full_tag_open"]= '<div class="pagination">';
        
        $config["full_tag_close"]= '</div>';
        
        $config["per_page"]     = $limit;
        
        $config["uri_segment"]  =3;
        
        $this->pagination->initialize($config);
        
        $data["pagination"]     = $this->pagination->create_links();
        
        $this->load->view('news/news', $data);
        
    }
    function Read_More($id){
           
         $data['News'] = $this->news_model->getNewsReadMore($id);
         
          $this->load->view('news/news', $data);
    }
}

?>
