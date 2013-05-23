<div class="padded"><hr/></div>
      <article class="row centered">
        <section class="one third padded gapped bordered">
          <h2>Clients</h2>
           <div class="row">

               <?php foreach ($Clients as $client): ?>
                <div class="one mobile half padded">
                    <img src="assets/uploads/files/clients/clients_thumb/Thumb<?php echo '_'.$client["logo"]; ?>" alt="Thumb<?php echo '_'.$client["logo"]; ?>">
                </div>
               <?php endforeach;?>
               
         <button class="round pull-right">View All</button>
        </section>
        <section class="one third padded gapped bordered">
          <h2>News</h2>
          <?php foreach ($NewsList as $news): ?>
            <h3> <?php echo $news['title'] ?> </h3>
            <table>
                <tbody>
                    <tr>
                        <td><p><?php echo $news['slug'] ?></p></td>
                         <td style="min-width: 110px !important;"><img src="assets/uploads/files/news/home_thumb/Thumb<?php echo '_'.$news["image"];?>"  alt="" class="gap-top gap-bottom"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><?php echo anchor('Home/read_more/'.$news['news_id'], '<button  class="round pull-right">Read More</button>') ?></td>
                    </tr>
                </tbody>
            </table><br>
            <?php echo anchor('News/','<button  class="round pull-right">View All</button>') ?>
            
            <br />
          <?php endforeach; ?>
        </section>
        <section class="one third padded gapped bordered">
          <h2>Search</h2>
           <h3>Outdoor Location</h3>
 <?php $form_data = array(
            "name"     => "form",
            "id"        => "forms"

          );
    ?>
    <?php print form_open('Outdoor/Search_Results', $form_data); ?>
        <p>
            <?php 
                $js = 'id="jumpMenu" onChange="getArea()" class="city" ';
               
                $values = array();
                $keys = array();
                array_push($values, 'choose a city');
                array_push($keys, 'choose a city');
                
                foreach ($Cities as $city){
                    $dat = $city['name'];
                    array_push($values, $dat);
                    $key = $city['city_id'];
                    array_push($keys, $key);                        
                }
                
                $city_data = array_combine($keys, $values);

                print form_dropdown('city',$city_data, set_value('city','selectSection','choose a city'), $js);
            ?>
        </p>
        <p id="changeArea">
            <?php 
                $js = 'id="jumpMenu" onChange="MM_jumpMenu(\'parent\',this,0)" ';
               
                $values = array();
                $keys = array();
                array_push($values, 'choose an area');
                array_push($keys, 'choose an area');
                
                foreach ($Areas as $area){
                    $dat = $area['name'];
                    array_push($values, $dat);
                    $key = $area['area_id'];
                    array_push($keys, $key);                        
                }
                
                $city_data = array_combine($keys, $values);

                print form_dropdown('jumpMenu',$city_data, set_value('jumpMenu','selectSection','choose an area'), $js);
            ?>
          <br />
        </p>
        <button class="round" style="background-color: #E3E2E3;">Search</button>
      <?php print form_close(); ?>
        
          <!--<form name="form" id="form">
  <p>
    <select name="city" id="city" onchange="MM_jumpMenu('parent',this,0)">
      <option>dar es salaam</option>
      <option>arusha</option>
      <option>zanzibar</option>
      <option>moshi</option>
      <option>dodoma</option>
      <option selected="selected">choose a city</option>
    </select>
  </p>
  <p>
    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
      <option>mikocheni</option>
      <option>city center</option>
      <option>chang'ombe</option>
      <option>msasani</option>
      <option>masaki</option>
      <option selected="selected">choose an area</option>
    </select>
    <br />
    <br />
    <button class="round">Search</button>
  </p>
  </form>-->
        </section>
      </article>
    </div>
</div>