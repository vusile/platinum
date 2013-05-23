<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]>   <html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]>   <html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Platinum Media - Indoor and Outdoor Advertising</title>
    <link rel="apple-touch-icon" href="../css/images/apple-icons/apple-touch-icon-precomposed.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../css/images/apple-icons/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../css/images/apple-icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../css/images/apple-icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../css/images/apple-icons/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileImage" content="../css/images/apple-icons/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <!-- Modernizr -->
    <script src="../assets/js/libs/modernizr-2.6.2.min.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="../assets/js/libs/jquery-1.8.2.min.js"></script>
    <!-- framework css -->
    <link type="text/css" rel="stylesheet" href="../assets/css/platinumstyle.css"><!--[if IE]>
    <link type="text/css" rel="stylesheet" href="../css/groundwork-ie.css"><![endif]--><!--[if lt IE 9]>
    <script type="text/javascript" src="../assets/js/libs/html5shiv.min.js"></script><![endif]--><!--[if IE 7]>
    <link type="text/css" rel="stylesheet" href="../css/font-awesome-ie7.min.css"><![endif]-->
    <link type="text/css" rel="stylesheet" href="../assets/font/stylesheet.css">
    <script type="text/javascript">
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
		
	
		}
	</style>
  </head>
  <body class="centered">
   <header >
      <div class="container ">
        <!--logo and slogan--> 
        <img src="../assets/images/logoplatinum_bgtransparent.gif" alt="Platinum Media Logo" class="pull-left">
    <h1 data-compression="7.3" class="fontface responsive padded pull-right" >  to advertise spectacularly</h1>
        <!--menu bar-->
        
       <div class="row align-right">
            <div class="one whole padded clear pull-right">

              <div class="dropdown button round"> <a href="#">Home</a>
                
              </div>
              <div class="dropdown button round"> <a href="#">About Us</a>
              </div>
              <div class="dropdown button round">Outdoor 
                <ul>
                  <li><a href="#"> outdoor 1 </a></li>
                  <li>
                    <hr>
                  </li>
                  <li><a href="#">  outdoor  2</a></li>
                  <li>
                    <hr>
                  </li>
                  <li><a href="#"> outdoor 3</a></li>
                </ul><br>
              </div>
              <div class="dropdown button round">Signage 
                <ul>
                  <li><a href="#">position 1</a></li>
                  <li>
                    <hr>
                  </li>
                  <li class="top-level"><a href="#">  position 2</a> 
					   <!--terzo livello di cui aggiunto codice-->
					   <ul class="sub-level">
                 		  <li>ambarabam</li>
                 		  <li>ambarabam</li>
                 		  <li>ambarabam</li>
					  
					  </ul></li>
                  <li>
                    <hr>
                  </li>
                  <li><a href="#"> position 3</a></li>
                </ul><br>
              </div>
              <div class="dropdown button round"> <a href="#">News</a>
                
              </div>
              <div class="dropdown button round"><i class="icon-envelope-alt"></i> <a href="#">Contact us</a>
                
              </div>
            </div>
          </div>
     
     
      <!-- <nav class="nav inline menu gap-top pull-right">
                <ul>
                  <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Home</a></li>
                  <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">About Us</a></li>
                  <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">News</a></li>
                  <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Contact us</a></li>
                  <li class="menu"><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Outdoor</a>
                    <ul>
                      <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
                      <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
                      <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
                      <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li><
                      li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
                    </ul>
                  </li>
                   <li class="menu"><a href="#nowhere" title="Praesent dapibus, neque id cursus faucibus">Signage</a>
                    <ul>
                      <li><a href="#nowhere" title="Pellentesque fermentum dolor">Pellentesque</a></li>
                      <li><a href="#nowhere" title="Aliquam tincidunt mauris eu risus">Aliquam</a></li>
                      <li><a href="#nowhere" title="Lorum ipsum dolor sit amet">Lorem</a></li>
                      <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
                      <li><a href="#nowhere" title="Morbi in sem quis dui placerat ornare">Morbi</a></li>
                    </ul>
                  </li>
                </ul>
              </nav> --> 
              <div>  
          
            <!--slide images--><div class="container centered"><div class="padded">
        <div data-cycle-fx="scrollHorz" data-cycle-pause-on-hover="true" class="cycle-slideshow ">
        <img src="http://placehold.it/940x400/24cada/ffffff/&amp;text=Slide+1" alt="">
        <img src="http://placehold.it/940x400/bada55/ffffff/&amp;text=Slide+2" alt="">
        <img src="http://placehold.it/940x400/c82647/ffffff/&amp;text=Slide+3" alt="">
        <img src="http://placehold.it/940x400/198d98/ffffff/&amp;text=Slide+4" alt=""></div>
      </div></div>
    </header>
  
   <div class="padded"><hr/></div>
      <article class="row centered">
        <section class="one third padded gapped bordered">
          <h2>Clients</h2>
           <div class="row">
        <div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div>
        <div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div></row>
         <div class="row"> <div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div>
          <div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div>
          <div class="row"><div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div>
          <div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div>
          
          <div class="row">
          <div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div>
          <div class="one mobile half padded"><img src="http://placehold.it/100x70/198d98/ffffff/" alt=""></div></row>
         <button class="round pull-right">View All</button>
        </section>
        <section class="one third padded gapped bordered">
          <h2>News</h2>
          <h3>Title News</h3>
          <img src="http://placehold.it/350x200/198d98/ffffff/" alt="" class="gap-top gap-bottom">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. 
          Etiam bibendum iaculis libero, eget molestie nisl pharetra in. 
          In semper consequat est, eu porta velit mollis nec. 
          Curabitur posuere enim eget turpis feugiat tempor.</p>
          <button class="round pull-right">Read More</button>
        </section>
        <section class="one third padded gapped bordered">
          <h2>Search</h2>
           <h3>Outdoor Location</h3>
          <form name="form" id="form">
  <p>
    <select name="city" id="city" onchange="MM_jumpMenu('parent',this,0)">
      <option>dar es salaam</option>
      <option>arusha</option>
      <option>zanzibar</option>
      <option>moshi</option>
      <option>dodoma</option>
      <option selected="selected">choose a city</option>
    </select>
  </p>
  <p>
    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
      <option>mikocheni</option>
      <option>city center</option>
      <option>chang'ombe</option>
      <option>msasani</option>
      <option>masaki</option>
      <option selected="selected">choose an area</option>
    </select>
    <br />
    <br />
    <button class="round">Search</button>
  </p>
  </form>
        </section>
      </article>
    </div></div>
    <footer class="footer centered"><div>
		<ul><li><img src="../assets/images/logoplatinum_bgtransparent.gif" alt="Platinum Media Logo"></li><li>contacts</li><li>social networks</li></ul>
	</div></footer>
    <!-- scripts-->
    <script type="text/javascript" src="../assets/js/plugins/jquery.cycle2.js"></script>
    <script type="text/javascript" src="../assets/js/groundwork.all.js"></script>
    <!-- google analytics-->
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
      _gaq.push(['_trackPageview']);
      (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
      
    </script></div>
  </body>
</html>