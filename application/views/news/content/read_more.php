<div class="padded"><hr/></div>      
<article>
    <section>
      <h3><?php echo $News->title; ?></h3>
      <img src="assets/uploads/files/news/thumb/Thumb<?php echo '_'.$News->image;?>" alt="<?php echo $News->image;?>" class="pull-left gap-right gap-bottom">
      <p><?php echo $News->story; ?></p>
    </section>
</article>
