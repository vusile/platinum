<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Platinum | Admin</title>
    
    <base href="<?php echo base_url(); ?>"/>
    
    <?php 
    foreach($css_files as $file): ?>
        <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />

    <?php endforeach; ?>

    <?php foreach($js_files as $file): ?>

        <script src="<?php echo $file; ?>"></script>

    <?php endforeach; ?>
 
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
                <li><?php echo anchor('Admin/manage_inventory','Inventory'); ?></li>
            </ul>
        </div>
        <div>
            <?php echo $output; ?>

        </div>
        
    </div> 
<!-- Beginning footer -->

<!-- End of Footer -->
</body>
</html>
