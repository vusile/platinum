<?php if(!isset($News)){
    
            $this->load->view('news/content/default');

      }else{ 
           $this->load->view('news/content/read_more');
      }
?>

<?php $this->load->view('template/footer'); ?>
