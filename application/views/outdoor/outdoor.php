<?php if(!isset($locations)){ ?>
<?php $this->load->view('outdoor/content/default');?>
<?php }else {?>
<?php $this->load->view('outdoor/content/location');?>
<?php }?>
<?php $this->load->view('template/footer'); ?>
