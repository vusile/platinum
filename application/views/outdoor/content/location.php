<section class="padded">
    <h2>Search Outdoor Locations</h2>
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
        
          <button class="round">Search</button>
      <?php print form_close(); ?>
</section>