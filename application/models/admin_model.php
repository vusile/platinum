<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of admin_model
 *
 * @author Zoom
 */
class admin_model extends CI_Model{
    
    //put your code here
    
    function __construct() {
        
        parent::__construct();
    }
    
    function getLocation($id){
        $this->db->select('locations.location_id, locations.location_name, locations.faces, 
                           locations.illuminated, locations.latitude, locations.longitude, 
                           locations.start_date, locations.end_date, locations.description, landlords.landlord_id, 
                           locations.amount, locations.payment_model, landlords.first_name, 
                           landlords.last_name, areas.area_id, areas.name, outdoor_sizes.size_id, 
                           outdoor_sizes.size');
            $this->db->from('locations');
            $this->db->join('landlords','locations.landlord_id=landlords.landlord_id','inner');
            $this->db->join('areas', 'areas.area_id=locations.area_id','inner');
            $this->db->join('outdoor_sizes', 'outdoor_sizes.size_id=locations.size_id','inner');
            $this->db->where('location_id', $id);
            //$this->db->limit($limit, $offset);
            $query = $this->db->get();
            return $query->row();
    }
    
    function getLocationImages($id){
        $this->db->where('location_id', $id);
        $query = $this->db->get('location_images');
        return $query -> result_array();
    }
        
    function getCities(){
    	$query = $this->db->get('cities');
    	return $query->result_array();
    }
    
    function getAreas(){
        $query = $this->db->get('areas');
        return $query->result_array();
    }
}

?>
