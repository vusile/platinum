 <div class="padded"></div>
      <article class="row">
      <section>
            <?php  foreach ($outdoor as $points):?>
            <h2><?php echo $points['title']; ?></h3>
            <p><?php echo $points['description']; ?></p>
            <?php endforeach; ?>
            <h3>common sizes:</h3>
            <p>Size One</p>
            <p>Size Two</p>
            <p>Size Three</p>
            <h3>EXAMPLES:</h3>
            <div class="container centered">
	            <div class="padded">
	                <div data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" class="cycle-slideshow">
	                    <?php foreach ($fomatSlides as $slide): ?>
                                <img src="assets/uploads/files/slides/<?php echo $slide["image"];?>" alt="slides">
                            <?php endforeach; ?>
	                    
	                </div>
	            </div>
        	 </div>
          </section>
       
      </article>