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

</style>

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
            <section class="padded" style="margin: 20px 10px 10px 80px;">
                <table>
                    <thead>
                        <td class="twidth"><h1>LOCATION DETAILS</h1></td>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="twidth"><p><h4>Location name:</h4></p></td>
                            <td><p><?php print $query->location_name; ?></p></td>
                        </tr>
                        <tr>
                            <td class="twidth"><p><h4>Landlord:</h4></p></td>
                            <td><p><?php print $query->first_name." ".$query->last_name; ?></p></td>
                        </tr>
                        <tr>
                            <td><p><h4>Description:</h4></p></td>
                            <td><div><?php print $query->description ?><div></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <tbody>
                        <tr>
                            <td class="twidth"><p><h4>Area:</h4></p></td>
                            <td><p><?php print $query->name ?></p></td>
                        </tr>
                        <tr>
                            <td class="twidth"><p><h4>Size:</h4></p></td>
                            <td><p><?php print $query->size; ?></p></td>
                        </tr>
                        <tr>
                            <td class="twidth"><p><h4># of Faces:</h4></p></td>
                            <td><p><?php print $query->faces; ?></p></td>
                        </tr>
                        <tr>
                            <td class="twidth"><p><h4>Illuminated:</h4></p></td>
                            <td><p><?php print $query->illuminated; ?></p></td>
                        </tr>
                        <tr colspan="6">
                            <td class="twidth"><p><h4>Photos:</h4></p></td>
                            <?php if(count($photos)>0){ ?>
                            <?php foreach ($photos as $photo): ?>
                            <td><img src="assets/uploads/files/location/thumb/Thumb_<?php print $photo['photo']; ?>" alt="<?php  print $photo['photo']; ?>"></td>
                            <?php endforeach; ?><br />
                            <?php } else { 
                                print '<td><p>This location has no photos please '. anchor('Admin/location_photos/'.$query->location_id.'/add', 'Add Photos').'</p></t>';
                            }?>
                            
                        </tr>
                        <tr>
                            <td class="twidth"><p><h4>Latitude:</h4></p></td>
                            <td><p><?php print $query->latitude; ?></p></td>
                        </tr>
                        <tr>
                            <td><p><h4>Longitude:</h4></p></td>
                            <td><p><?php print $query->longitude; ?></p></td>
                        </tr>
                        <tr colspan="5">
                            <td class="twidth"><p><h4>Rented From:</h4></p></td>
                            <td><p><?php print $query->start_date; ?></p></td>
                            <td style="width: 70px !important; padding: 0px; margin: 0px;"><p><h4>To:</h4></p></td>
                            <td><p><?php print $query->end_date; ?></p></td>
                        </tr>
                    </tbody>
                </table>
                <table>
                    <thead>
                        <td class="twidth"><h1>PAYMENT TERMS:</h1></td>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="twidth"><p><h4>Payment amount:</h4></p></td>
                            <td style="width:100px;"><p><?php print $query->amount; ?></p></td>
                            <td><p><?php print $query->payment_model; ?></p></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <r>
                            <td><?php print anchor('Admin/location_pdf/'.$query->location_id,'<button>Download PDF</button>') ?></td>
                        </r>
                    </tfoot>
                </table><br/>
<br/>
            </section>

        </div>
        
    </div> 
<br/>
<br/>
<!-- Beginning footer -->

<!-- End of Footer -->
</body>
</html>

