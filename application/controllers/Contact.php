<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contact
 *
 * @author Zoom
 */
class Contact extends MY_Controller{
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->model('contact_model');
        
         $this->load->helper('captcha');
        
        //$this->getpages();
    }
    
    function getpages(){
    	/*call this to every function or in construct
    	
    	$data['Pages'] = $this->contact_model->getPages();
    	
    	$data['Menus'] = $this->contact_model->getMenu();
        
        $data['Sub_Menus'] = $this->contact_model->getSubMenu();
    	 
    	$this->load->view('template/header');
    	
    	$this->load->view('template/menu', $data);*/
    	
    }
    
    function index(){
         $data['Title'] = 'Contact Us';
        
        if($_POST){
            
            $config = array(
                 array(
                     'field'   => 'name',
                     'label'   => 'Name',
                     'rules'   => 'required|xss_clean|min_length[4]'
                  ),
               array(
                     'field'   => 'phone',
                     'label'   => 'Phone',
                     'rules'   => 'required|xss_clean|min_length[9]|is_natural'
                  ),
               array(
                     'field'   => 'email',
                     'label'   => 'Email',
                     'rules'   => 'required|valid_email'
                  ),   
               array(
                     'field'   => 'subject',
                     'label'   => 'Subject',
                     'rules'   => 'required|xss_clean|min_length[4]'
                  ),   
               array(
                     'field'   => 'message',
                     'label'   => 'Message',
                     'rules'   => 'required|xss_clean|min_length[9]'
                  )
            );
            
             $this->form_validation->set_rules($config);
             
            if ($this->form_validation->run() == FALSE){
                
		 $data['errors'] = validation_errors();
                 var_dump($data['errors']);
            }
            else
            {
                $this->load->library('email');
                $this->email->set_mailtype("html");
                $this->email->from($this->input->post('email', TRUE));
                $this->email->to('emmanuel@zoomtanzania.com'); 
                //$this->email->cc('another@another-example.com'); 
                //$this->email->bcc('them@their-example.com'); 

                $this->email->subject($this->input->post('subject', TRUE));
                $this->email->message('Name: '.$this->input->post('name', TRUE). '\n'.'Phone: '.$this->input->post('phone', TRUE)
                        .'\n'.$this->input->post('message', TRUE));	

                $this->email->send();

                echo $this->email->print_debugger();
                
			$Contactdata = array(
                            'name' => $this->input->post('name', TRUE),
                            'phone' => $this->input->post('phone', TRUE),
                            'email' => $this->input->post('email', TRUE),
                            'subject' => $this->input->post('subject', TRUE),
                            'message' => $this->input->post('message', TRUE)
                        );
                        
                        $data['contat_us'] = $this->contact_model->contact_us($Contactdata);
                        
                        if(!empty($data['contat_us'])){
                            $this->_field_data = array();
                            $data['success'] = "Msg sent";
                        }
            }
        }
                $vals = array(
                'img_path'	 => './captcha/',
                'img_url'	 => 'http://domain.com/captcha/',
                'img_width'	 => '200',
                'img_height' => 30,
                'border' => 0, 
                'expiration' => 7200
                );
    
                 // create captcha image
                $cap = create_captcha($vals);

                // store image html code in a variable
                $data['image'] = $cap['image'];
              
               // store the captcha word in a session
                $this->session->set_userdata('word', $cap['word']);
        
        $this->load->view("contact/contact_us", $data);
    }
}

?>
