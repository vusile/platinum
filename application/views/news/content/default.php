   <div class="padded"><hr/></div>
      <article class="row">
      
          <section>
            <h1>News</h1>
            <div class="link pagenate" ><?php if(isset($pagination)&& $pagination!=""){echo $pagination;}?></div>
            <?php foreach ($All_News as $news): ?>
            <hr><img src="assets/uploads/files/news/thumb/Thumb<?php echo '_'.$news['image'];?>" alt="<?php echo $news['image']; ?>" class="pull-left gap-right gap-bottom">            
            <h3><?php echo $news['title']; ?></h3>
            <p><?php echo $news['slug']; ?></p><?php ?>
             <?php echo anchor('News/Read_More/'.$news['news_id'],'<button  class="round pull-right">Read More</button>') ?>
            <?php endforeach; ?>
           
          </section>
       
      </article>
   <hr>
    <div class="link pagenate" ><?php if(isset($pagination)&& $pagination!=""){echo $pagination;}?></div>