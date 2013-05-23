<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Areas
 *
 * @author mariki
 */
class Areas  extends CI_Controller{
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('areas_model');
    }
    
    function getCityArea(){
        
        $data['Areas'] = $this->areas_model->getAreas();
        
        $this->load->view('outdoor/content/areas', $data);
        
    }
}

?>
