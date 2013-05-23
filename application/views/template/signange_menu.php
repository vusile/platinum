<?php

        foreach ($query as $signage){
            $menu ='';
            $sub_menus = @$signage['type'];

            $menu .='<ul><li>$signage["title"]</li>';
            

            $menu .='<ul class="sub-level">';

            foreach ($left_menu as $menu){
                if(@$menu['type'] =='pos'){
                    $menu .='<li>'.anchor('Signage/point_of_sales/'.@$menu["url"], @$menu["title"]).'</li>';
                }
                else{

                    $menu .='<li>'. anchor('Signage/off_premise/'.@$menu["url"], @$menu["title"]).'</li>';
                }                    
            }

            $menu .='</ul>';
            $menu .='</ul>';

            print $menu;
        }

?>
