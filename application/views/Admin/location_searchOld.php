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
    #result tr
    {
          border-collapse: collapse;
          bord/er: 1px solid #F7AE36;
          margin: 0 auto;
    }
    #resultData
    {
        border: 1px solid #EDEBF0;
        padding:40px;
        paddin/g-left: 60px;
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
                <?php print form_open('Admin/searach_location_availability', $form_data); ?>
                <table>
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

                    </tbody>
                </table>
                <button class="round">Search</button>
                <?php print form_close(); ?>
                <?php }  else { ?>
                <?php 
                 $prefs['template'] = '

   {table_open}<table border="0" cellpadding="0" cellspacing="0">{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr>{/cal_row_start}
   {cal_cell_start}<td>{/cal_cell_start}

   {cal_cell_content}<div style="color:blue">{content}{day}<br /> Available</div>{/cal_cell_content}
   {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}<div style="color:red">{day}<br/>Not Available</div>{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';
                
                ?>
                
                <h2>Location Availability Search Results</h2>

                
                <?php  //echo "<br /><pre>"; print_r($success);echo "<pre>";?>
                
                <p> <?php foreach ($success as $key=>$value): ?> </p>
                                <?php
                    
                  
                            //month arrays
                            $January = array(); $February = array();

                            $March = array();   $April = array();

                            $May = array();     $June = array();

                            $July= array();     $August = array();

                            $September= array();     $October = array();

                            $November = array();     $December = array();

                            //callender array
                            $callender = array ('January' => $January, 'February'=>$February, 'March'=>$March, 'April'=>$April,
                                                'May'=>$May, 'June'=>$June, 'July'=>$July, 'August'=>$August, 'September'=>$September,
                                                'October'=>$October, 'November'=>$November, 'December'=>$December); 
                                    
                ?>
                
                <p><h3 style="color:#F7AE36"> <?php print $key; ?> </h3></p>
                <div id="resultData">
                    
                        <h4>Available Dates for  <?php print $key; ?> </h4><br />
                    <!--<tbody>
                        <tr>-->
                        <?php $i=0; ?>
                        <?php foreach ($value as $row=>$rowdata): ?>
                       <?php
                                $rowdata=  date('y/m/d', strtotime($rowdata));
                                $data = explode('/', $rowdata);
                                $year = $data['0'];
                                $month =$data[1];
                                //$rodata =  strtotime('d m y', $rowdata);
                                switch ($month) {
                                    case 01:
                                        array_push($January, $data[2]);
                                        break;
                                     case 02:
                                        array_push($February, $data[2]);
                                        break;
                                     case 03:
                                        array_push($March, $data[2]);
                                        break;
                                     case 04:
                                        array_push($April, $data[2]);
                                        break;
                                     case 05:
                                        array_push($May, $data[2]);
                                        break;
                                     case 06:
                                        array_push($June, $data[2]);
                                        break;
                                     case 07:
                                        array_push($July, $data[2]);
                                        break;
                                     case 08:
                                        array_push($August, $data[2]);
                                        break;
                                     case 09:
                                        array_push($September, $data[2]);
                                        break;
                                     case 10:
                                        array_push($October, $data[2]);
                                        break;
                                     case 11:
                                        array_push($November, $data[2]);
                                        break;
                                     case 12:
                                        array_push($December, $data[2]);
                                        break;
                                }
                       ?>
                        <?php /*
                            $i++;
                            
                            if($i%7 !==0){
                               print '<td>'.$rowdata.'</td>';
                            }
                            else{
                                print '</tr><tr><td>'.$rowdata.'</td>';
                            }*/
                        
                        ?>
                        <?php endforeach; ?>
                    <!--</tbody>
                    <tfoot>
                        
                    </tfoot>
                </table>-->
            <?php if(count($January)>0){
                    $this->load->library('calendar', $prefs);
            echo $this->calendar->generate($year, 1, $January);
            ?>
            <table id="result">
                <thead>
                    <h4>Available Dates On January</h4>

                </thead>
                <tbody>
                    <tr>
                        <?php $i=0; ?>
                       <?php foreach ($January as $maydata): ?>
                        <?php 
                            $i++;
                            
                            if($i%7 !==0){
                               print '<td>'.$maydata.'</td>';
                            }
                            else{
                                print '</tr><tr><td>'.$maydata.'</td>';
                            }
                        
                        ?>
                           
                    <?php endforeach; ?>

                </tbody>
                <tfoot>
                        
                </tfoot>
           </table> 
                     
            <?php }if (count($February)>0) { ?>
                        <table id="result">
                <thead>
                    <h4>Available Dates On February</h4>

                </thead>
                <tbody>
                    <tr>
                        <?php $i=0; ?>
                       <?php foreach ($February as $maydata): ?>
                        <?php 
                            $i++;
                            
                            if($i%7 !==0){
                               print '<td>'.$maydata.'</td>';
                            }
                            else{
                                print '</tr><tr><td>'.$maydata.'</td>';
                            }
                        
                        ?>
                           
                    <?php endforeach; ?>

                </tbody>
                <tfoot>
                        
                </tfoot>
           </table> 
            
            <?php }if (count($March)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On March</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($March as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table> 
            
            
            
            <?php }if (count($April)>0) {
                 $this->load->library('calendar', $prefs);
                 echo $this->calendar->generate($year, 4, $April);
                ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On April</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($April as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table> 
                        
            <?php }if (count($May)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On May</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($May as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table> 
            
            
            <?php }if (count($June)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On June</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($June as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>  
            
            
            <?php }if (count($July)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On July</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($July as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>  
            
            
            <?php }if (count($August)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On August</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($August as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>  
            
            
            <?php }if (count($September)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On September</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($September as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>  
            
            
            <?php }if (count($October)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On October</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($October as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table> 
            
            
            <?php }if (count($November)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On November</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($November as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table> 
            
            
            <?php }if (count($December)>0) { ?>
                <table id="result">
                    <thead>
                        <h4>Available Dates On December</h4>

                    </thead>
                    <tbody>
                        <tr>
                            <?php $i=0; ?>
                           <?php foreach ($December as $maydata): ?>
                            <?php 
                                $i++;

                                if($i%7 !==0){
                                   print '<td>'.$maydata.'</td>';
                                }
                                else{
                                    print '</tr><tr><td>'.$maydata.'</td>';
                                }

                            ?>

                        <?php endforeach; ?>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table> 
            
            
            
            <?php   }    ?>     
            
                <?php //print "<pre>"; print_r($May); print '</pre>'; ?>
            
                </div>
                <?php endforeach; ?> 
                <?php  }  ?>    
           
            </section>
        </div>
        
    </div> 
<br/>
<br/>
<!-- Beginning footer -->

<!-- End of Footer -->
</body>
</html>


<section class="padded">

</section>