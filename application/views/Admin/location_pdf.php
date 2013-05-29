<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
</head>
<body>
    <div >
        <div >
                <table>
                        <td >LOCATION DETAILS</td>
                        <tr>
                            <td >Location name:</td>
                            <td><?php print $query->location_name; ?></td>
                        </tr>
                        <tr>
                            <td>Landlord:</td>
                            <td><?php print $query->first_name." ".$query->last_name; ?></td>
                        </tr>
                        <tr>
                            <td>Description:</td>
                            <td><?php print $query->description ?></td>
                        </tr>
                </table>
                <table>
                        <tr>
                            <td>Area:</td>
                            <td><?php print $query->name ?></td>
                        </tr>
                        <tr>
                            <td >Size:</td>
                            <td><?php print $query->size; ?></td>
                        </tr>
                        <tr>
                            <td ># of Faces:</td>
                            <td><?php print $query->faces; ?></td>
                        </tr>
                        <tr>
                            <td>Illuminated:</td>
                            <td><?php print $query->illuminated; ?></td>
                        </tr>
                        <tr>
                            
                        </tr>
                        <tr>
                            <td >Latitude:</td>
                            <td><?php print $query->latitude; ?></td>
                        </tr>
                        <tr>
                            <td>Longitude:</td>
                            <td><?php print $query->longitude; ?></td>
                        </tr>
                        <tr>
                            <td >Rented From:</td>
                            <td><?php print $query->start_date; ?></td>
                            <td>To:</td>
                            <td><?php print $query->end_date; ?></td>
                        </tr>
                </table>
                <table>
                    <tr>
                        <td><h1>PAYMENT TERMS:</h1></td>
                    </tr>
                    <tr>
                        <td>Payment amount:</td>
                        <td ><?php print $query->amount; ?></td>
                    </tr>
                </table>
        </div>
    </div> 
</body>
</html>

