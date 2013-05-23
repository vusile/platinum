       <div class="container centered">
            <div class="padded">
                <div data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" class="cycle-slideshow">
                    <?php foreach ($Slides as $slide): ?>
                        <img src="assets/uploads/files/slides/<?php echo $slide["image"];?>" alt="slides">
                    <?php endforeach; ?>
                    
                </div>
            </div>
        </div>