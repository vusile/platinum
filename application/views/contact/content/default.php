 <div class="padded"><hr/></div>
      <article class="row">
      
          <section>
            <h1>Contact Platinum Media</h1>
            
            <?php if(isset($errors) && $errors!=""): ?>
            <div class="error"><?php print $errors; ?></div>
            <?php endif; ?>
            
            <?php if(isset($success) && $success!=""): ?>
            <div class="success"><?php print $success; ?></div>
            <?php endif; ?>
            
            <?php print form_open('Contact/index')?>
            <?php $name = array('name' => 'name', 'value' => set_value('name')); ?>
            <p>Name: <?php echo form_input($name); ?></p>
            
            <?php $phone = array('name' => 'phone', 'value' => set_value('phone')); ?>
            <p>Phone: <?php echo form_input($phone); ?></p>
            
            <?php $email = array('name' => 'email', 'value' => set_value('email')); ?>
            <p>Email: <?php echo form_input($email); ?></p>
            
            <?php $subject = array('name' => 'subject', 'value' => set_value('subject')); ?>
            <p>Subject: <?php echo form_input($subject); ?></p> 
            
            <?php $msg = array('name' => 'message', 'value' => set_value('msg')); ?>
            <p>Message:<?php echo form_textarea($msg); ?></p>
            
             <p>Message:<?php echo $image; ?></p>
            
            <?php $submit = array('value' =>'Send Message', 'class' =>"round pull-left"); ?>
            <p><?php echo form_submit($submit); ?></p>
            <?php print form_close(); ?>
            
          </section>
       
      </article>