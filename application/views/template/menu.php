   <header >
      <div class="container ">
        <!--logo and slogan--> 
        <img src="style/images/logoplatinum_bgtransparent.gif" alt="Platinum Media Logo" class="pull-left">
    <h1 data-compression="7.3" class="fontface responsive padded pull-right" >  to advertise spectacularly</h1>
        <!--menu bar-->
        
       <div class="row align-right">
            <div class="one whole padded clear pull-right">

              <div class="dropdown button round"><?php echo anchor('Home','Home'); ?></div>
              <div class="dropdown button round"><?php echo anchor('About','About Us'); ?></div>
              <div class="dropdown button round">Outdoor
                <ul>
	              <?php foreach ($Outdoors as $page): ?>
                      <?php if($page['use_id']==0){ ?>
                         <li><?php print anchor('Outdoor/Search_Locations/', $page['title']); ?></li>
                      <?php }else{?>
                            <li><?php print anchor('Outdoor/Outdoor_Format/'.$page['url'].'/', $page['title']); ?></li>
                      <?php } ?>
	              <?php endforeach;?>
                </ul> 
              </div>
              <div class="dropdown button round">Signage
                  <ul>
                        <?php print $Sub_Menus; ?>
                  </ul>
              </div>
              <div class="dropdown button round"><?php echo anchor('News','News'); ?></div>
              <div class="dropdown button round"><i class="icon-envelope-alt"></i><?php echo anchor('Contact','Contact us'); ?></div>
            </div>
          </div> 
          
            <!--slide images-->
            <?php
                //showing slides only to the home page 
            
                $controller = $this->uri->segment(1);
                $method     = $this->uri->segment(2);
                
                if($controller=='Home' && $method ==""){
                    $this->load->view('home/slides');
                }
            ?>
    </header>