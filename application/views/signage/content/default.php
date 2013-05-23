 <div class="padded"></div>
      <article class="row">
      
          <section>
            <?php if(isset($sales_point) && $sales_point!=""){?>
                <h2><?php print $sales_point->title; ?></h3>
                <p><?php print $sales_point->description; ?></p>
                <h3>EXAMPLES:</h3>
                <div class="container centered">
	            <div class="padded">
	                <div data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" class="cycle-slideshow">
	                    <?php foreach ($Sales_Slides as $slide): ?>
                                <img src="assets/uploads/files/slides/<?php echo $slide["image"];?>" alt="slides">
                            <?php endforeach; ?>
	                    
	                </div>
	            </div>
        	 </div>
            
            <?php  }elseif(isset($off_premise) && $off_premise!=""){ ?>
                <h2><?php echo $off_premise->title; ?></h3>
                <p><?php echo $off_premise->description; ?></p>
                <h3>EXAMPLES:</h3>
                 <div class="container centered">
	            <div class="padded">
	                <div data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" class="cycle-slideshow">
	                    <?php foreach ($Sales_Slides as $slide): ?>
                                <img src="assets/uploads/files/slides/<?php echo $slide["image"];?>" alt="slides">
                            <?php endforeach; ?>
	                    
	                </div>
	            </div>
        	 </div>
            
            <?php } ?>
          </section>
       
      </article>