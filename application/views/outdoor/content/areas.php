<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 * 
 */


 $js = 'id="jumpMenu" onChange="" class="selectOption" ';
               
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

                print form_dropdown('area',$city_data, set_value('area','jumpMenu','choose an area'), $js);
?>
<br />
