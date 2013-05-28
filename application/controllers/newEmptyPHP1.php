<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Platinum | Admin</title>
    <base href="<?php print base_url(); ?>" >
 
<style type='text/css'>
    body
    {
        font-family: Arial;
        font-size: 12px;
    }
    a {
        color: blue;
        text-decoration: none;
        font-size: 14px;
    }
    a:hover
    {
        text-decoration: underline;
    }
    #content
    {
        width: 1200px;
        margin: 0 auto;
        border: 1px solid #E3E3E3;
        border-radius: 5px;
    }
    #header
    {
        height: 40px;
    }
    .adminLink
    {
        margin-left: 20px;
        margin-top: 10px;
        font-family: sans-serif;
        font-size: 12px;
        
    }
    
    #header ul
    {
        margin: 0;
        padding: 0;
        list-style-type: none;
        text-align: center;
        margin-top: 11px;
        font-size: 10px;
    }

    #header ul li { display: inline; height: 25px;}

    #header ul li a
    {
        text-decoration: none;
        padding: .2em 1em;
        color: #FFFFF;
        background-color: #EDEBF0;border-radius: 3px;
    }

    #header ul li a:hover
    {
        color: #fff;
        background-color: #369;
    }
    p{
        margin: -4px;
        padding: -4px;
    }
    img{
        bo/rder:   2px solid #EBE6E8;
        margin-left: 4px;
    }
    button{
        cursor: pointer;
    }
    .twidth
    {
        min-width: 210px !important;
    }
    .selectOption
    {
        width: 200px;
    }
    #error
    {
         color:red; margin: 0px 0px 5px 0px; font-size: 12px; 
    }
    td
    {
        width: 100px;
        text-align: center;
        padding: 5px;
    }
    #result
    {
        border-collapse: collapse;
        border: 1px solid #F7AE36;
        padding: 5px;
    }
     table tr td
    {
          border-collapse: collapse;
          border: 1px solid #F7AE36;
          margin: 0 auto;
    }
    #resultData
    {
        border: 1px solid #EDEBF0;
        padding:40px;
        paddin/g-left: 60px;
    }
    #search tr td
    {
        border: 0px;
    }
    #dateFrom
    {
        position: relative;
        left: -24px;
    }
    #error p
    {
        padding: 5px;
        margin: 2px;
        position: relative;
        left: 93px;
    }
    #btn
    {
        position: relative;
        left: -65px;
    }
</style>
<link rel="stylesheet" href="style/js/libs/jquery-ui/css/ui-lightness/jquery-ui.css" />
<script src="style/js/libs/jquery-1.9.1.min.js""></script>
<script src="style/js/libs/jquery-ui/js/jquery-ui.js"></script>
<script type="text/javascript" src="js/script.js"></script>
 <script type="text/javascript">
     var site_url = '<?php print base_url(); ?>';
    $(function() {
     $( ".txt" ).datepicker({ dateFormat: "yy-mm-dd" });
     // getter
    var dateFormat = $( ".selector" ).datepicker( "option", "dateFormat" );
    // setter
    $( ".txt" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    
    $( "#dateFrom" ).datepicker({
    defaultDate: "+1w",
    changeMonth: true,
    numberOfMonths: 1,
    changeYear: true,
    onClose: function( selectedDate ) {
    $( "#toFrom" ).datepicker.formatDate( "option", "minDate", selectedDate );
    }
    });
    $( "#toFrom" ).datepicker({
    changeMonth: true,
    changeYear: true,
    onClose: function( selectedDate ) {
    $( "#dateFrom" ).datepicker( "option", "maxDate", selectedDate );
    }
    });
    });
</script>
</head>
<body>
<!-- Beginning header -->

<!-- End of header-->
    <div id="content">
        <div id="header" class="fg-toolbar ui-toolbar ui-widget-header ui-corner-tl ui-corner-tr ui-helper-clearfix">
            <ul>
                <li><?php echo anchor('Admin/news','News'); ?></li>
                <li><?php echo anchor('Admin/clients','Clients'); ?></li>
                <li><?php echo anchor('Admin/slider','Slides'); ?></li>
                <li><?php echo anchor('Admin/areas','Areas'); ?></li>
                <li><?php echo anchor('Admin/cities','Cities'); ?></li>
                <li><?php echo anchor('Admin/outdoor_size','Size'); ?></li>
                <li><?php echo anchor('Admin/contact','Contact Us'); ?></li>
                <li><?php echo anchor('Admin/about','About Us'); ?></li>
                <li><?php echo anchor('Admin/signage','Signage'); ?></li>
                <li><?php echo anchor('Admin/outdoor','Outdoor'); ?></li>
                <li><?php echo anchor('Admin/location','Location'); ?></li>
                <li><?php echo anchor('Admin/land_lords_manager','Manage Landlords'); ?></li>
                <li><?php echo anchor('Home/','Public Site'); ?></li>
            </ul>
        </div>
        <div id="content">
            <section class="padded" style="margin: 20px 80px 10px 80px;">
                <?php 
                 function convertToOneBased( $arr )
                {
                    return array_combine( range( 1, count( $arr ) ), array_values( $arr ) );
                }
                    if(isset($no_result) && $no_result !=""){
                        print '<p>'.$no_result.'dasfas</p>';
                    }
                ?>
                <?php if(!isset($success)){?>
                <h2>Location Availability Search</h2>
                <?php if(isset($error) && $error !=""){ ?>
                <?php print  '<div id ="error">'.$error.'</div>'; ?>
                <?php } ?>
                <?php $form_data = array(
                        "name"     => "form",
                        "id"        => "forms"

                      );
                ?>
                <?php print form_open('index.php/Admin/search_location_availability', $form_data); ?>
                <table id="search">
                    <tbody>
                        <tr>
                            <td class="twidth"><p><h4>City</h4></p></td>
                            <td>
                                <p>
                                    <?php 
                                        $js = 'id="jumpMenu" onChange="getArea()" class="selectOption city" ';

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
                            </td>
                        </tr>
                        <tr>
                            <td><p><h4>Area</h4></p></td>
                            <td>
                                <p id="changeArea">
                                <?php 
                                    $js = 'id="jumpMenu" onChange="MM_jumpMenu(\'parent\',this,0)" class="selectOption" ';

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
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td><p><h4>Dates</h4></p></td>
                            <td><input type="text" name="from" id="dateFrom" class='txt'></td>
                            <td style='width:60px;'>To</td>
                            <td><input type="text" name="to" id="toFrom" class='txt'></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td align="left"><button class="round" id="btn">Search</button></td>
                        </tr>
                    </tbody>
                </table>
                <?php print form_close(); ?>
                <?php }  else { ?>
                <h2>Location Availability Search Results</h2>
                <?php 
              

               
                ?>
                
                <?php 
                $number_of_yrs = array();
                $yr_dff = $to - $from;
                $from = explode("-", $from);
                $from_month =$from[1];
                $from=$from[0];
                $to =  explode("-", $to);
                $to_month = $to[1];
                //print $yr_dff;
                //print '<br>'.$from;
                print $to_month.'khkhk<br>gkgkhg';
                for($i=0; $i<=$yr_dff; $i++){
                    $frm=$from + $i;
                    $number_of_yrs[$frm] = $frm;
                }
                // print "<pre>";print_r($number_of_yrs); print '</pre><hr>';
               
                foreach ($success as $key=>$value){                            ?>
                
                <h3 style="color:#F7AE36"> <?php print $key; ?> </h3>
                <div id="resultData">
                <h4>Available Dates for  <?php print $key; ?> </h4><br />
                <?php 
                $i=0;
           
                
            /////////////////////////////////
           foreach ($number_of_yrs as $yrs_number=>$yrs_range){
                
               
               $January = array(); $February = array();

                $March = array();   $April = array();

                $May = array();     $June = array();

                $July= array();     $August = array();

                $September= array();     $October = array();

                $November = array();     $December = array();
                
                $years = array();
                
                $my_yrs = array(); $months =array();
    
                        
            foreach ($value as $row=>$rowdata){
                $months =array();
                $rowdata=  date('j/n/Y', strtotime($rowdata)); //svar_dump($rowdata);
                $data  = explode('/', $rowdata);
                $day   = $data['0'];
                $month = $data[1];
                $year  = $data['2'];
              if($year == $yrs_range){
               switch ($month) {
                    case 1:
                        array_push($January, $January[$day]=$day);
                        break;
                     case 2:
                        array_push($February, $February[$day]=$day);
                        break;
                     case 3:
                        array_push($March, $March[$day]=$day);
                        break;
                     case 4:
                        array_push($April, $April[$day]=$day);
                        break;
                     case 5:
                        array_push($May, $May[$day]=$day);
                        break;
                     case 6:
                        array_push($June, $June[$day]=$day);
                        break;
                     case 7:
                        array_push($July, $July[$day]=$day);
                        break;
                     case 8:
                        array_push($August, $August[$day]=$day);
                        break;
                     case 9:
                        array_push($September, $September[$day]=$day);
                        break;
                     case 10:
                        array_push($October, $October[$day]=$day);
                        break;
                     case 11:
                        array_push($November, @$November[$day]=$day);
                        break;
                     case 12:
                        array_push($December, $December[$day]=$day); 
                        break;
                }
                //callender array
                $months = array ('1' => $January, '2'=>$February, '3'=>$March, '4'=>$April,
                                    '5'=>$May, '6'=>$June, '7'=>$July, '8'=>$August, '9'=>$September,
                                    '10'=>$October, '11'=>$November, '12'=>$December); 
                $years[$year]=$months;         
            
                }                                                                        
               
            }
            foreach ($years as $my_year=>$my_dates){
                //print $my_year.'<br />';
                    foreach ($my_dates as $my_month=>$my_day){ 
                       //print $my_month.'<br />';
                        if($my_year==$from && $my_month >= $from_month && $my_month<=$to_month){
                            $k=array_key_exists($key, $my_day);
                         echo $this->calendar->generate($my_year, $my_month, $my_day);
                         
                        }elseif($my_year > $from && $my_month <=$to_month){
                            
                            echo $this->calendar->generate($my_year, $my_month, $my_day);
                        }
                        
                   //print "<pre>";print_r($my_day); print '</pre><hr>';
                    }
                }
                //print "<pre>";print_r($years); print '</pre><hr>';
                 }  
                    
            
    
            
            ?>
                </div>
                <?php 
           
                  }    
                  
                  ?>
                
                
                
                <?php } ?>
            </section>
        </div>
        
    </div> 
<br/>
<br/>
<!-- Beginning footer -->

<!-- End of Footer -->
</body>
</html>


