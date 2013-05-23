 <div class="padded"><hr/></div>
      <article class="row">
      
          <section>
            <h1>About Platinum Media</h1>
            <?php foreach ($About_Content as $content): ?>
            <?php if($content['image']!=""):  ?>
            <img src="assets/uploads/files/about/thumb/<?php echo $content['image']; ?>" alt="" class="pull-right gap-left gap-bottom">
            <?php endif; ?>
            <h3><?php echo $content['title']; ?></h3>
            <p><?php echo $content['content']; ?></p>
            <hr>
            <?php endforeach; ?>
          </section>
       
      </article>