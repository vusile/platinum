  
<?php $this->load->view('template/header'); ?>

<?php  if(!isset($News)){
    
           // $this->load->view('template/menu');
            
            $this->load->view('home/content/default');

      }else{
           //$this->load->view('template/menu'); 
           $this->load->view('home/content/read_more');
      }
?>

<?php ?>

<?php $this->load->view('template/footer'); ?>