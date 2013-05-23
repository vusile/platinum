<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Signage
 *
 * @author Zoom
 */
class Signage extends MY_Controller{
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('signage_model');
        
    }

    function point_of_sales($id){
        
        $data['sales_point'] = $this->signage_model->getSalesPoint($id);
        
        $data['Sales_Slides'] = $this->signage_model->getSlides($id);
        
        $this->load->view('signage/signage', $data);
        
    }
    
    function off_premise($id){
        
        $data['off_premise'] = $this->signage_model->getSalesPoint($id);
        
        $data['Sales_Slides'] = $this->signage_model->getSlides($id);
        
        $this->load->view('signage/signage', $data);       
    }
}

?>
