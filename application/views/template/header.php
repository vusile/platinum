<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>   <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>   <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
  <!--<![endif]-->
  <head>
    <base href="<?php echo base_url(); ?>"/>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Platinum Media - Indoor and Outdoor Advertising</title>
    <link rel="apple-touch-icon" href="style/css/images/apple-icons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="style/css/images/apple-icons/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="style/css/images/apple-icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="style/css/images/apple-icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144" href="styless/images/apple-icons/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileImage" content="style/css/images/apple-icons/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <!-- Modernizr -->
    <script src="style/js/libs/modernizr-2.6.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="style/js/libs/jquery-1.9.1.min.js"></script>
    
    <script type="text/javascript" src="js/script.js"></script>
    <!-- framework css -->
    <link type="text/css" rel="stylesheet" href="style/css/platinumstyle.css">
    <!--[if IE]>
    <link type="text/css" rel="stylesheet" href="../css/groundwork-ie.css">
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="../assets/js/libs/html5shiv.min.js"></script>
    <![endif]--><!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="../css/font-awesome-ie7.min.css">
    <![endif]-->
    <link type="text/css" rel="stylesheet" href="style/font/stylesheet.css">
    <script type="text/javascript">
        
        var site_url = '<?php print base_url(); ?>';
        
      // extend Modernizr to have datauri test
      (function(){
        var datauri = new Image();
        datauri.onerror = function() {
          Modernizr.addTest('datauri', function () { return false; });
        };
        datauri.onload = function() {
          Modernizr.addTest('datauri', function () { return (datauri.width == 1 && datauri.height == 1); });
          Modernizr.load({
            test: Modernizr.datauri,
            nope: '../css/no-datauri.css'
          });
        };
        datauri.src = "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";
      })();
      // fallback if SVG unsupported
      Modernizr.load({
        test: Modernizr.inlinesvg,
        nope: [
          '../css/no-svg.css'
        ]
      });
      // polyfill for HTML5 placeholders
      Modernizr.load({
        test: Modernizr.input.placeholder,
        nope: [
          '../css/placeholder_polyfill.css',
          '../assets/js/libs/placeholder_polyfill.jquery.js'
        ]
      });
      
    </script>
    
    <style type="text/css" media="screen">
		h1.fontface {font: 65px/68px 'JournalRegular', Arial, sans-serif;letter-spacing: 0; color: #eb2a2d;}

		p.style1 {font: 18px/27px 'JournalRegular', Arial, sans-serif;}
		
	</style>
  </head>
  <body >
      <div  id="mywraapper" style="margin: 0 auto; width: 1200px;" >