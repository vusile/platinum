<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Platinum | Admin</title>
    <base href="<?php print base_url(); ?>" >
 
<style type='text/css'>
    body
    {
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
    <div id="content">
        <div id="content">
                <table>
                        <td class="twidth"><h1>LOCATION DETAILS</h1></td>
                        <tr>
                            <td class="twidth"><h4>Location name:</h4></td>
                            <td><p><?php print $query->location_name; ?></p></td>
                        </tr>
                        <tr>
                            <td class="twidth"><h4>Landlord:</h4></td>
                            <td><p><?php print $query->first_name." ".$query->last_name; ?></p></td>
                        </tr>
                        <tr>
                            <td><p><h4>Description:</h4></p></td>
                            <td><?php print $query->description ?></td>
                        </tr>
                </table>
                <table>
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
                </table>
                <table>
                        <td class="twidth"><h1>PAYMENT TERMS:</h1></td>
                        <tr>
                            <td class="twidth"><p><h4>Payment amount:</h4></p></td>
                            <td style="width:100px;"><p><?php print $query->amount; ?></p></td>
                        </tr>
                        <tr>
                            <td><button>Download PDF</button></td>
                        </tr>
                </table>
        </div>
    </div> 
</body>
</html>

