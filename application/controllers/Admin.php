<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Admin
 *
 * @author Zoom
 */
class Admin extends CI_Controller{
    //put your code here
    
    public $path = 'http://localhost/platinum/assets/uploads/files/';
    
    function __construct() {
        
        parent::__construct();
        
        $this->load->library('grocery_crud');
        
        $this->path;
    }
    
    function index(){
        
        $this->news();
    }
            
    function news(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('news');
        
        $this->grocery_crud->columns('title','url','slug','story', 'image');
 
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('News');
        
        $this->grocery_crud->add_fields('title','url','slug','story','image');
        
        $this->grocery_crud->edit_fields('title','url','slug','story','image');
        
        $this->grocery_crud->required_fields('title','url','slug','story');
        
        $this->grocery_crud->set_field_upload('image','assets/uploads/files/news');
        
        $this->grocery_crud->callback_after_upload(array($this,'create_news_thumb_callback_after_upload'));
        
        $this->grocery_crud->callback_before_insert(array($this,'add_thumb_befor_insert'));
        
       // $this->grocery_crud->callback_before_delete(array($this,'delete_news_pic_before_delete'));
 
        
        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function create_news_thumb_callback_after_upload($uploader_response,$field_info, $files_to_upload){
           
        $this->load->library('image_moo');
        
        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $real_file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 

        $show_file_uploaded = $field_info->upload_path.'/show/'.$uploader_response[0]->name;
        
        $this->image_moo->load($real_file_uploaded)
                          ->set_background_colour("#ffffff")
                          ->resize(300,200)
                          ->save($show_file_uploaded);
        //thumb for home page
        $this->load->library('image_moo');
        
        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $real_file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 

        $home_file_uploaded = $field_info->upload_path.'/home_thumb/Thumb_'.$uploader_response[0]->name;
        
        $this->image_moo->load($real_file_uploaded)
                          ->set_background_colour("#ffffff")
                          ->resize(100,70)
                          ->save($home_file_uploaded);
        
        
        $this->load->library('image_moo');

        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
        
        chmod($file_uploaded, 0777);
        
        $thumb_uploaded = $field_info->upload_path.'/thumb/Thumb_'.$uploader_response[0]->name; 

        $this->image_moo->load($file_uploaded)
                        //->set_background_colour("#ffffff")
                        ->resize(200,150)
                        ->save( $thumb_uploaded);
        
        //update news table set thum path
        
        if (!$this->image_moo){
            
            print $this->image_moo->display_errors();
        }
        else{
            return true;
        }
        
    }
    public function delete_news_pic_before_delete($primary_key){
       $user= $this->db->where('news_id',$primary_key)->get('image')->row();

        $image      = $this->path.'news/'.$user->image;
        $show_image = $this->path.'news/tumb/Tumb_'.$user->image;
        $home_thumb = $this->path.'news/home_tumb/Tumb_'.$user->image;
        
        if(file_exists($image)){
            unlink($image);
        }
        if(file_exists($show_image)){
            unlink($show_image);
        }
        if(file_exists($home_thumb)){
            unlink($home_thumb);
        }
        
        return true;
    }


    //clients
    
    function clients(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('clients');
        
        $this->grocery_crud->columns('name','logo','description', 'show_on_site');
        
        $this->grocery_crud->display_as('name', 'Busines Name');
 
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Clients');
        
        $this->grocery_crud->add_action('Add Contant', '', '','ui-icon-plus',array($this,'add_contact_client_btn'));
        
        $this->grocery_crud->add_action('View Contact', '', '','ui-icon-enevelope',array($this,'view_contact_client_btn'));
        
       // $this->grocery_crud->add_fields('title','url','slug','story','image');
        
        //$this->grocery_crud->edit_fields('title','url','slug','story','image');
        
        $this->grocery_crud->required_fields('name','logo');
        
        $this->grocery_crud->set_field_upload('logo','assets/uploads/files/clients');
        
        $this->grocery_crud->callback_after_upload(array($this,'create_clients_Tumb_callback_after_upload'));
        
        //$this->grocery_crud->callback_before_delete(array($this,'REMOVE_CLIENT_THUMB_after_delete'));
        //$this->grocery_crud->callback_before_insert(array($this,'add_thumb_befor_insert'));
 
        
        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    
    
    function add_contact_client_btn($primary_key , $row)
    {
        return site_url('Admin/add_client_contacts/'.$row->client_id.'/add');
    }
    function view_contact_client_btn($primary_key , $row)
    {
        return site_url('Admin/add_client_contacts/'.$row->client_id);
    }
    
    function add_client_contacts($id){
        
        $contact_id = $id;
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->where('client_id', $id);
        
        $this->grocery_crud->set_table('contacts');
        
        $this->grocery_crud->columns('email', 'phone');
        
        $this->grocery_crud->add_fields('email', 'phone');
        
        $this->grocery_crud->edit_fields('email', 'phone');
        
        //this->grocery_crud->set_rule('email', )
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Contacts');
        
        $this->grocery_crud->required_fields('phone');
        
        $this->grocery_crud->callback_after_insert(array($this,'connect_client_contact'));
        
        $this->grocery_crud->callback_after_update(array($this,'connect_client_contact'));
        
        $this->grocery_crud->callback_after_delete(array($this,'delete_client_contact'));
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function connect_client_contact($post_array, $primary_key){
        
        $data['client_id'] = $this->uri->segment(3);
   
        $this->db->where('contact_id', $primary_key);
        
        $this->db->update('contacts', $data);
        
        return TRUE;
    }
    
    function delete_client_contact($primary_key){
        
        $this->db->where('contact_id', $primary_key);
        
        $this->db->delete('contacts');

    }
    
    
    function create_clients_Tumb_callback_after_upload($uploader_response,$field_info, $files_to_upload){
        
        $this->load->library('image_moo');

        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
        
        chmod($file_uploaded, 0777);
        
        $thumb_uploaded = $field_info->upload_path.'/clients_thumb/Thumb_'.$uploader_response[0]->name; 

        $this->image_moo->load($file_uploaded)
                        ->set_background_colour("#ffffff")
                        ->resize(100,70, TRUE)
                        ->save( $thumb_uploaded);
        
        //update news table set thum path
        
        if (!$this->image_moo){
            
            print $this->image_moo->display_errors();
        }
        else{
            return true;
        }
        
    }
    
    //slider section
   
    function slider(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('home_slides');
        
        $this->grocery_crud->columns('image','caption');
        
         $this->grocery_crud->add_fields('image', 'caption');
        //$this->grocery_crud->set_relation('outdoor_id','outdoor','title');
        
        //$this->grocery_crud->add_fields('title','signage_type_id', 'outdoor_id', 'image','caption');
        
       // $this->grocery_crud->set_relation('signage_type_id','signage_types','url');
 
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Slides');
        
        $this->grocery_crud->required_fields('image', 'caption');
        
        $this->grocery_crud->set_field_upload('image','assets/uploads/files/slides');
        
        $this->grocery_crud->callback_before_delete(array($this,'delete_slides_callback'));
        
        $this->grocery_crud->callback_after_upload(array($this,'create_slider_Thumb_callback_after_upload'));
        
        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function create_slider_Thumb_callback_after_upload($uploader_response,$field_info, $files_to_upload){
        
        $this->load->library('image_moo');

        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
        
        chmod($file_uploaded, 0777);
        
        $this->image_moo->load($file_uploaded)
                        ->resize_crop(940,400)
                        ->save($file_uploaded);
        
        //update news table set thum path
        
        if (!$this->image_moo){
            
            print $this->image_moo->display_errors();
        }
        else{
            return true;
        }
        
    }
    
    function delete_slides_callback($primary_key){
        
        $this->db->select('image');
        
        $this->db->where('slider_id', $primary_key);
        
        $image_name = $this->db->get('slider')->row();
        
        if(!empty($image_name)){
            
            $image_path = base_url('assets/uploads/files/slides/'.$image_name->image);
           
            chmod($image_path, 0777);
            
            if(file_exists($image_path)){ 

                if(unlink($image_path)){

                    return TRUE;

                }  else {

                    return FALSE;
                }

            } 
            
        }  else {
        
            return FALSE;
        }
    }


    //about us page 
    
     function about(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('about_us');
        
        $this->grocery_crud->columns('title','content','image');
 
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('About');
        
        $this->grocery_crud->add_fields('title','content','image','order');
        
        $this->grocery_crud->edit_fields('title','content','image','order');
        
        $this->grocery_crud->required_fields('title','content','order');
        
        $this->grocery_crud->set_field_upload('image','assets/uploads/files/about/');
        
        $this->grocery_crud->callback_after_upload(array($this,'create_about_thumb_callback_after_upload'));
        
        $this->grocery_crud->callback_before_insert(array($this,'add_thumb_befor_insert'));
        
       // $this->grocery_crud->callback_before_delete(array($this,'delete_news_pic_before_delete'));
 
        
        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    
    //contac us
    function contact(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('contact_us');
        
        $this->grocery_crud->columns('name','phone','email', 'subject', 'message');
 
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Contacts');
        
        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function create_about_thumb_callback_after_upload($uploader_response,$field_info, $files_to_upload){
           
        $this->load->library('image_moo');
        
        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $real_file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 

        $show_file_uploaded = $field_info->upload_path.'/thumb/'.$uploader_response[0]->name;
        
        $this->image_moo->load($real_file_uploaded)
                          ->set_background_colour("#ffffff")
                          ->resize(300,200)
                          ->save($show_file_uploaded);
        //update news table set thum path
        
        if (!$this->image_moo){
            
            print $this->image_moo->display_errors();
        }
        else{
            return true;
        }
        
    }
    
    //Signage
     function signage(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('signage_types');
        
        $this->grocery_crud->set_relation('type', 'signage','title');
        
        $this->grocery_crud->columns('title', 'type', 'images', 'description');
        
        $this->grocery_crud->add_fields('title', 'type', 'description');
        
        $this->grocery_crud->edit_fields('title', 'type', 'description');
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('signage');
        
        $this->grocery_crud->required_fields('title','type', 'description');
        
        $this->grocery_crud->callback_after_insert(array($this,'create_url_callback'));
        
        $this->grocery_crud->callback_after_update(array($this,'create_url_callback'));
        
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function create_url_callback($post_array, $primary_key) {
        

        $type = $post_array['type'];

                  
        if($type ==1){
            $data['url'] = "Pos-".url_title($post_array['title'])."";
            $data['images'] = anchor('Admin/View_Images/'.$primary_key, 'Images');
            $data['type'] = "pos";
        }
        else{
            $data['url'] = "Op-".url_title($post_array['title'])."";
            $data['images'] = anchor('Admin/View_Images/'.$primary_key, 'Images');
            $data['type'] = "op";
        }
        
        
        $this->db->where('synage_type_id', $primary_key);
        
        $this->db->update('signage_types', $data);
        
        //update corresponding images in slider table 
        
        $this->db->select('url');
        $this->db->where('synage_type_id', $primary_key);
        
        $query = $this->db->get('signage_types')->result_array();
        
         
        if($query){
            
            foreach ($query as $row){
            
                $data = array(

                    'title' => $row['url'],
                    'signage_url' => $row['url']

                );

                $this->db->where('signage_type_id', $this->uri->segment(4));

                $this->db->update('slider',  $data);

                return TRUE;
            }
            
        }  else {
            
            return FALSE;
            
        }
    }        
    

    function View_images($id){
        
        $signage_id = $id;
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                          'gif|jpeg|jpg|png|GIF|JPEG|JPG|PNG');
        
        $this->grocery_crud->where('signage_type_id', $signage_id);
                
        $this->grocery_crud->set_table('slider');
        
        $this->grocery_crud->columns('title', 'image', 'caption');
        
        $this->grocery_crud->add_fields('image', 'caption');
        
        $this->grocery_crud->edit_fields('image', 'caption');
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Images');
        
        $this->grocery_crud->required_fields('image', 'caption');
        
        $this->grocery_crud->callback_after_insert(array($this,'view_image_callback'));
        
        $this->grocery_crud->callback_after_update(array($this,'view_image_callback'));
        
        $this->grocery_crud->set_field_upload('image','assets/uploads/files/slides');
        
        $this->grocery_crud->callback_after_upload(array($this,'create_slider_Thumb_callback_after_upload'));
        
        $state = $this->grocery_crud->getState();

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function view_image_callback($post_array, $primary_key) {
        
        $this->db->select('url');
        
        $this->db->where('synage_type_id', $this->uri->segment(3));
        
        $query = $this->db->get('signage_types')->row();
        
        if($query){

            $signage_data = array(

                'signage_type_id' => $this->uri->segment(3),
                'signage_url'    => $query->url,
                'title'          => $query->url
            );
            
            //$this->db->select('signage_url');
        
           // $this->db->where('signage_url', $this->uri->segment(3));

            //$query_slider = $this->db->get('slider')->row();
        
            //if(!empty($query_slider)){
                
                $this->db->where('slider_id', $primary_key);
                $this->db->update('slider', $signage_data);
                
            //}else{
             //   $this->db->insert('slider', $signage_data);
            //}

            return TRUE;
            
        }  else {
            
            return FALSE;
        }
        
     
    }         
    

    function View_outdoor_images($id){
        
        $signage_id = $id;
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                          'gif|jpeg|jpg|png|GIF|JPEG|JPG|PNG');
        
        $this->grocery_crud->where('outdoor_id', $signage_id);
                
        $this->grocery_crud->set_table('slider');
        
        $this->grocery_crud->columns('title', 'image', 'caption');
        
        $this->grocery_crud->add_fields('image', 'caption');
        
        $this->grocery_crud->edit_fields('image', 'caption');
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Images');
        
        $this->grocery_crud->required_fields('image', 'caption');
        
        $this->grocery_crud->callback_after_insert(array($this,'view_outdoor_image_callback'));
        
        $this->grocery_crud->callback_after_update(array($this,'view_outdoor_image_callback'));
        
        $this->grocery_crud->set_field_upload('image','assets/uploads/files/slides');
        
        $this->grocery_crud->callback_after_upload(array($this,'create_slider_Thumb_callback_after_upload'));
        
        $state = $this->grocery_crud->getState();

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function view_outdoor_image_callback($post_array, $primary_key) {
        
        $this->db->select('url');
        
        $this->db->where('outdoor_id', $this->uri->segment(3));
        
        $query = $this->db->get('outdoor')->row();
        
        if($query){

            $signage_data = array(

                'outdoor_id' => $this->uri->segment(3),
                'title'          => $query->url
            );
            
            $this->db->where('slider_id', $primary_key);
            $this->db->update('slider', $signage_data);

            return TRUE;
            
        }  else {
            
            return FALSE;
        }
        
        $this->db->where('outdoor_id', $primary_key);
        
        $query_slider = $this->db->get('slider')->result_array();
        
        if($query_slider){
            
            foreach ($query_slider as $row){
                
                $data = array(

                    'outdoor_id' => $this->uri->segment(3),
                    'title'          => $query->url
                );

                $this->db->where('slider_id', $primary_key);
                $this->db->update('slider', $data); 
            }
        }
        
     
    } 
    
    //Outdoor
    
     function outdoor(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('outdoor');
        
        $this->grocery_crud->columns('title', 'url', 'images', 'description');
        
        $this->grocery_crud->add_fields('title', 'description');
        
        $this->grocery_crud->edit_fields('title', 'description');
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('outdoor');
        
        $this->grocery_crud->required_fields('title', 'description');
        
        $this->grocery_crud->callback_after_insert(array($this,'create_outdoor_url_callback'));
        
        $this->grocery_crud->callback_after_update(array($this,'create_outdoor_url_callback'));
        
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function create_outdoor_url_callback($post_array, $primary_key) {
        
        $data['url'] = url_title($post_array['title'])."";
        
        $data['images'] = anchor('Admin/View_outdoor_images/'.$primary_key, 'Images');
   
        $this->db->where('outdoor_id', $primary_key);
        
        $this->db->update('outdoor', $data);
        
        //update slider when editing outdoor
        $this->db->select('url');
        
        $this->db->where('outdoor_id', $primary_key);
        
        $query = $this->db->get('outdoor')->result_array();
        
         
        if($query){
            
            foreach ($query as $row){
            
                $data = array(

                    'title' => $row['url']

                );

                $this->db->where('outdoor_id', $this->uri->segment(4));

                $this->db->update('slider',  $data);

                return TRUE;
            }
            
        }  else {
            
            return FALSE;
            
        }
    }  
    
    function land_lords_manager(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->set_table('landlords');
        
        $this->grocery_crud->columns('first_name', 'last_name', 'contact');
        
        $this->grocery_crud->add_fields('first_name', 'last_name');
        
        $this->grocery_crud->edit_fields('first_name', 'first_name');
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Landlords');
        
        $this->grocery_crud->required_fields('first_name', 'first_name');
        
        $this->grocery_crud->callback_after_insert(array($this,'create_landlords_url_contact'));
        
        $this->grocery_crud->callback_after_update(array($this,'create_landlords_url_contact'));
        
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
        
    }
    
    function create_landlords_url_contact($post_array, $primary_key) {
        
        $data['contact'] = anchor('Admin/add_landlord_contacts/'.$primary_key, 'Conctacts');
   
        $this->db->where('landlord_id', $primary_key);
        
        $this->db->update('landlords', $data);
        
        return TRUE;
    }  
    
    function add_landlord_contacts($id){
        
        $contact_id = $id;
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->where('landlord_id', $id);
        
        $this->grocery_crud->set_table('contacts');
        
        $this->grocery_crud->columns('email', 'phone');
        
        $this->grocery_crud->add_fields('email', 'phone');
        
        $this->grocery_crud->edit_fields('email', 'phone');
        
        //this->grocery_crud->set_rule('email', )
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Contacts');
        
        $this->grocery_crud->required_fields('phone');
        
        $this->grocery_crud->callback_after_insert(array($this,'connect_landlord_contact'));
        
        $this->grocery_crud->callback_after_update(array($this,'connect_landlord_contact'));
        
        $this->grocery_crud->callback_after_delete(array($this,'delete_landlord_contact'));
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function connect_landlord_contact($post_array, $primary_key){
        
        $data['landlord_id'] = $this->uri->segment(3);
   
        $this->db->where('contact_id', $primary_key);
        
        $this->db->update('contacts', $data);
        
        return TRUE;
    }
    
    function delete_landlord_contact($primary_key){
        
        $this->db->where('contact_id', $primary_key);
        
        $this->db->delete('contacts');

    }
    
    function cities(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        
        $this->grocery_crud->set_table('cities');
        
        $this->grocery_crud->columns('name');
        
        $this->grocery_crud->add_fields('name');
        
        $this->grocery_crud->edit_fields('name');
        
        //this->grocery_crud->set_rule('email', )
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Cities');
        
        $this->grocery_crud->required_fields('name');
        
        //$this->grocery_crud->callback_after_insert(array($this,'connect_landlord_contact'));
        
        //$this->grocery_crud->callback_after_update(array($this,'connect_landlord_contact'));
        
        //$this->grocery_crud->callback_after_delete(array($this,'delete_landlord_contact'));
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function areas(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        
        $this->grocery_crud->set_table('areas');
        
        $this->grocery_crud->columns('name', 'city_id');
        
        $this->grocery_crud->add_fields('name', 'city_id');
        
        $this->grocery_crud->display_as('city_id', 'City');
        
        $this->grocery_crud->edit_fields('name', 'city_id');
        
        $this->grocery_crud->set_relation('city_id', 'cities', 'name' );
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Areas');
        
        $this->grocery_crud->required_fields('name');
        
        //$this->grocery_crud->callback_after_insert(array($this,'connect_landlord_contact'));
        
        //$this->grocery_crud->callback_after_update(array($this,'connect_landlord_contact'));
        
        //$this->grocery_crud->callback_after_delete(array($this,'delete_landlord_contact'));
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
        
    }
    
    function outdoor_size(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        
        $this->grocery_crud->set_table('outdoor_sizes');
        
        $this->grocery_crud->columns('size', 'width', 'height');
        
        $this->grocery_crud->add_fields('size', 'width', 'height');
        
        //$this->grocery_crud->display_as('city_id', 'City');
        
        $this->grocery_crud->edit_fields('size', 'width', 'height');
        
        //$this->grocery_crud->set_relation('city_id', 'cities', 'name' );
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Areas');
        
        $this->grocery_crud->required_fields('size', 'width', 'height'); 
        
        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
        
    }
    
    function location(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        
       $this->grocery_crud->set_table('locations');
        
        $this->grocery_crud->columns('location_name', 'description', 
                                     'area_id', 'size_id', 'annual_rent', 'start_date', 
                                     'end_date', 'amount', 'payment_model');
        
        $this->grocery_crud->display_as('landlord_id', 'Landlord')
                           ->display_as('area_id', 'Area')
                           ->display_as('faces', 'Number of faces')
                           ->display_as('annual_rent', 'Annual Rent')
                           ->display_as('amount', 'Payment Amount')
                           ->display_as('size_id', 'Size');
        
        $this->grocery_crud->add_action('More', '', '','ui-icon-plus',array($this,'details'));
        
        $this->grocery_crud->add_action('Photos', '', '','ui-icon-image',array($this,'view_photos'));
        
        $this->grocery_crud->set_relation('landlord_id', 'landlords', 'first_name');
        
        $this->grocery_crud->set_relation('area_id', 'areas', 'name');
        
        $this->grocery_crud->set_relation('size_id', 'outdoor_sizes', 'size');
        
        $this->grocery_crud->add_fields('landlord_id', 'location_name', 'description', 
                                        'area_id', 'size_id', 'faces', 'latitude', 
                                        'longitude', 'annual_rent', 'start_date', 
                                        'end_date', 'amount', 'payment_model');
        
        //$this->grocery_crud->display_as('city_id', 'City');
        
        $this->grocery_crud->edit_fields('landlord_id', 'location_name', 'description', 
                                        'area_id', 'size_id', 'faces', 'latitude', 
                                        'longitude', 'annual_rent', 'start_date', 
                                        'end_date', 'amount', 'payment_model');
        
        $this->grocery_crud->required_fields('landlord_id', 'location_name', 'description', 
                                        'area_id', 'size_id', 'faces', 'latitude', 
                                        'longitude', 'annual_rent', 'start_date', 
                                        'end_date', 'amount', 'payment_model');
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Location'); 
        
        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function view_photos($primary_key , $row)
    {
        return site_url('Admin/location_photos/'.$row->location_id);
    }
    function details($primary_key , $row)
    {
        return site_url('Admin/location_details/'.$row->location_id);
    }
    
    
    function location_photos($id){
        
        $contact_id = $id;
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
        $this->grocery_crud->where('location_id', $id);
        
        $this->grocery_crud->set_table('location_images');
        
        $this->grocery_crud->columns('photo', 'caption');
        
        $this->grocery_crud->set_field_upload('photo','assets/uploads/files/location/');
        
        $this->grocery_crud->add_fields('photo', 'caption');
        
        $this->grocery_crud->edit_fields('photo', 'caption');
        
        //this->grocery_crud->set_rule('email', )
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Location Photo');
        
        $this->grocery_crud->required_fields('photo', 'caption');
        
        $this->grocery_crud->callback_after_insert(array($this,'connect_location_image'));
        
        $this->grocery_crud->callback_after_update(array($this,'connect_location_image'));
        
        //$this->grocery_crud->callback_after_delete(array($this,'delete_landlord_contact'));
        
        $this->grocery_crud->callback_after_upload(array($this,'create_location_Thumb_callback_after_upload'));
        
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    
    function connect_location_image($post_array, $primary_key){
        
        $data['location_id'] = $this->uri->segment(3);
   
        $this->db->where('id', $primary_key);
        
        $this->db->update('location_images', $data);
        
        return TRUE;
    }
    
    function create_location_Thumb_callback_after_upload($uploader_response,$field_info, $files_to_upload){
        $this->load->library('image_moo');

        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 
        
        chmod($file_uploaded, 0777);
        
        $this->image_moo->load($file_uploaded)
                        ->resize_crop(940,400)
                        ->save($file_uploaded);
        
        //thumb for location details page
        $this->load->library('image_moo');
        
        //Is only one file uploaded so it ok to use it with $uploader_response[0].

        $real_file_uploaded = $field_info->upload_path.'/'.$uploader_response[0]->name; 

        $home_file_uploaded = $field_info->upload_path.'/thumb/Thumb_'.$uploader_response[0]->name;
        
        $this->image_moo->load($real_file_uploaded)
                          ->set_background_colour("#ffffff")
                          ->resize(150,100, TRUE)
                          ->save($home_file_uploaded);
        
        //update news table set thum path
        
        if (!$this->image_moo){
            
            print $this->image_moo->display_errors();
        }
        else{
            return true;
        }
        
    }
    
    function location_details($id){
        $this->load->model('admin_model');
        $data['query']= $this->admin_model->getLocation($id);
        $data['photos']= $this->admin_model->getLocationImages($id);
       // var_dump($data['photos']);
        $this->load->view('Admin/location_details', $data);
    }
    
    
    function location_pdf($id){
        $this->load->model('admin_model');
        $data['query']= $this->admin_model->getLocation($id);
        $data['photos']= $this->admin_model->getLocationImages($id);
       // var_dump($data['photos']);
        $this->load->view('Admin/downloadPDF', $data);
    }
    
    function manage_inventory(){
        
        $this->load->config('grocery_crud');
        
        $this->config->set_item('grocery_crud_file_upload_allow_file_types',
                                                            'gif|jpeg|jpg|png');
       // $this->grocery_crud->where('location_id', $id);
        
        $this->grocery_crud->set_table('inventories');
        
        $this->grocery_crud->columns('location_id', 'start_date', 'end_date', 'client_id', 'renewal_terms');
        
        $this->grocery_crud->display_as('location_id', 'Location')
                           ->display_as('start_date', 'Start Term')
                           ->display_as('end_date', 'End Term')
                           ->display_as('client_id', 'Client');
        
        $this->grocery_crud->set_relation('location_id', 'locations', 'location_name');
        
        $this->grocery_crud->set_relation('client_id', 'clients', 'name');
        
      //  $this->grocery_crud->set_field_upload('photo','assets/uploads/files/location/');
        
        $this->grocery_crud->add_fields('location_id', 'start_date', 'end_date', 'client_id', 'renewal_terms');
        
        $this->grocery_crud->edit_fields('location_id', 'start_date', 'end_date', 'client_id', 'renewal_terms');
        
        //this->grocery_crud->set_rule('email', )
        
        $this->grocery_crud->set_theme('datatables');
        
        $this->grocery_crud->set_subject('Inventory');
        
        $this->grocery_crud->required_fields('location_id', 'start_date', 'end_date', 'client_id', 'renewal_term');
        
        $this->grocery_crud->callback_after_insert(array($this,'add_inventory_booking'));
        
        $this->grocery_crud->callback_after_update(array($this,'add_inventory_booking'));
        
        //$this->grocery_crud->callback_after_delete(array($this,'delete_landlord_contact'));
        
        $this->grocery_crud->callback_after_upload(array($this,'create_location_Thumb_callback_after_upload'));
        
        //$this->grocery_crud->callback_after_update(array($this,'change_slide_url'));

        $output = $this->grocery_crud->render();
        
        $this->_news_output($output); 
    }
    function createDateRangeArray($strDateFrom,$strDateTo) {
        // takes two dates formatted as YYYY-MM-DD and creates an
        // inclusive array of the dates between the from and to dates.

        // could test validity of dates here but I'm already doing
        // that in the main script

	  $aryRange=array();

	  $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
	  $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

	  if ($iDateTo>=$iDateFrom) {
	    array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry

	    while ($iDateFrom<$iDateTo) {
	      $iDateFrom+=86400; // add 24 hours
	      array_push($aryRange,date('Y-m-d',$iDateFrom));
	    }
	  }
	  return $aryRange;
	}

    function add_inventory_booking($post_array, $primary_key){
        
        $strDateFrom = $post_array['start_date'];
        $strDateTo   = $post_array['end_date'];
        
        $fromdates =  explode('/', $strDateFrom);
        $from = $fromdates[2]."-". $fromdates[1]."-".$fromdates[0];
        
        $todate =  explode('/', $strDateTo);
        $to =$todate[2]."-". $todate[1]."-".$todate[0];
        print $from;
        $searchDates = $this->createDateRangeArray($from, $to);
        //if(count($aryRange)>0){
        var_dump($searchDates);
            //for($i=0; $i<=count($searchDates); $i++){
            foreach ($searchDates as $key=>$value){
               
                $data = array(
                    'location_id'=> $post_array['location_id'],
                    'invetory_id'=>$primary_key,
                    'date'=>$value
                );
                
                $this->db->insert('booking', $data); 
            }
           // }
        //}
    }
            
    function searach_location_availability(){
        
        $this->load->model('admin_model');
        
        $this->load->library('form_validation');
        
        $data['Cities']= $this->admin_model->getCities();
        
        $data['Areas']= $this->admin_model->getAreas();
                
        if($_POST){
             
            $config = array(

                array(
                    'field' => 'city',
                    'label' => 'City',
                    'rules' => 'trim|required|xss_clean|callback_defualt_validation'
                ),        
                array(
                    'field' => 'area',
                    'label' => 'Area',
                    'rules' => 'trim|required|xss_clean|callback_defualt_validation'
                ),        
                array(
                    'field' => 'from',
                    'label' => 'Start Date',
                    'rules' => 'trim|required|xss_clean'
                ),         
                array(
                    'field' => 'to',
                    'label' => 'End Date',
                    'rules' => 'trim|required|xss_clean'
                )                
            );
            
            $this->form_validation->set_rules($config);

            if($this->form_validation->run() == FALSE){

                $data['error']=  validation_errors();

            }  else {
                $from =$_POST['city'];
                $to   =$_POST['area'];
                $searchDates = $this->createDateRangeArray($from, $to);
		echo "<pre>";
		print_r($searchDates);
		echo "<pre>";
		$this->db->where_in('date',$searchDates);
		$bookedDates=$this->db->get('booking');   
                
                foreach($bookedDates->result() as $bookedDate)
		{
			if($key=array_search($bookedDate->date, $searchDates))
				unset($searchDates[$key]);
			
				
			
		}

		echo "<pre>";
		print_r($searchDates);
		echo "<pre>";
            }
        }
        $this->load->view('Admin/location_search', $data);
    }
    
    function Search_Results(){

        
        $this->load->view('Admin/location_search', $data);
    }
    
    public function defualt_validation($value){
            
            $value_array=array(
                '0',
                'Select Section...',
                'choose a city',
                'choose an area'
            );
            
            if(in_array($value, $value_array)){
                
                $this->form_validation->set_message('defualt_validation',
                        'Please select your %s');
                
                return FALSE;
                
            }else{
                
                return TRUE;
                
            }
        }




    // Am using the same output foreach table bcoz the admin theme remain the sama
    function _news_output($output = null){
        $this->load->view('Admin/news.php',$output);    
    }
    
}

?>
