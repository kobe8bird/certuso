
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Certuso</title>
  <meta name="description" content="Certuso">
  <meta name="author" content="Certuso">
    
    <!--[if lt IE 9]>
    <link href="jackbox/css/jackbox-ie8.css" rel="stylesheet" type="text/css" />
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
        
    <!--[if gt IE 8]><link href="jackbox/css/jackbox-ie9.css" rel="stylesheet" type="text/css" /><![endif]-->

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
    <link rel="stylesheet" href="rs-plugin/css/settings.css"/>
  <link rel="stylesheet" href="css/base.css"/>
  <link rel="stylesheet" href="css/skeleton.css"/>
  <link rel="stylesheet" href="css/layout.css"/>
    <link rel="stylesheet" href="jackbox/css/jackbox_hovers.css"/>
    <link rel="stylesheet" href="jackbox/css/jackbox.css"/>
    
    <!-- Colors -->
  <link id="colorTheme" rel='stylesheet' href='css/colors/orangeTheme.css'/>
    
    
    <!-- JS
  ================================================== -->
    
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/tiny.accordion.min.js"></script>
    <script type="text/javascript" src="js/jacked.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
    <script type="text/javascript" src="js/slackBlur.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/jquery.tweet.min.js"></script>
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <script type="text/javascript" src="jackbox/js/libs/jquery.address-1.5.min.js"></script>
    <script type="text/javascript" src="jackbox/js/jackbox-swipe.min.js"></script>
    <script type="text/javascript" src="jackbox/js/jackbox.min.js"></script>
    <script type="text/javascript" src="jackbox/js/libs/StackBlur.min.js"></script>
    <script type="text/javascript" src="js/tipsy/jquery.tipsy.js"></script>
    <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
    <script type="text/javascript" src="js/jquery.fitvids.min.js"></script>
  <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    
    
    <script type="text/javascript" src="js/wiseguys.min.js"></script>



	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/icons/favicon.ico">
	<link rel="apple-touch-icon" href="images/icons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/icons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/icons/apple-touch-icon-114x114.png">

</head>
<body>


    <div class="headerBg"></div>
    <div class="headerContentBg hidden"></div>
    

	<!-- Primary Page Layout
	================================================== -->

	<div class="container" data-backgroundImage="images/backgrounds/contact.jpg">
    <div class="headerContentBgBoxed hidden"></div>
        
		    <?php include "menu.php"; ?>

         <!-- Header content
        ================================================== -->
        <!-- For data-layout, you can choose between a color background like that "#aaa", "blur" or "image" -->
        <section id="noslider" class="sixteen columns headerContent" data-layout="blur">
        
            <div id="blurMask">
                <canvas id="blurCanvas"></canvas>
            </div>
            
            <div class="headerContentContainer">
               <div class="pageTitle">Our <span class="highlight">Clients</span></div>
               <div class="breadCrumbs"><a href="/">Home</a> / <span class="highlight">Our clients</span></div>
            </div>
            
        </section>
       
        
        <section class="mainContent">
        
        
        <!-- Tag Line
        ================================================== -->
        <section id="tagLine" class="sixteen columns row">
            <h1>We provide <span class="highlight">full customization</span> on steel grade, lenght, and design to meet your specific <span class="highlight">site</span> challenges.</h1>

        </section>
        
        <div id="tagLineShadow" class="sixteen columns"></div>
        
        
        <section class="isotopeFilters clearfix">
    

         
          
          <!-- Responsive Filters
          ================================================== -->
          
          <form action="#" method="post" class="hidden">
              <select>
                  <option value="">Categories</option>
              </select>
          </form>
    
    
        </section> <!-- end filters -->

        <section class="isotopeContainer gallery left-twenty">
            <div class="element onefifth illustration">
                      
                <div class="portfolioImage">
                    <a class="jackbox" data-group="gallery_group" data-thumbTooltip = "Image with description" data-title="Logo"  data-description="#description_1" href="images/portfolio/1.jpg">
                       <div class="jackbox-hover jackbox-hover-blur jackbox-hover-magnify"></div>
                       <img width="176" height="133" src="http://placehold.it/176x133?text=Logo">
                       <span class="portfolioImageOver transparent"></span>
                   </a>
                </div>
                <!-- Sample div used as an item's description, will only appear inside JackBox -->
                <div class="jackbox-description" id="description_1">
                    <h3>Description Title One</h3>
                    <a href="#">Link</a> ipsum dolor sit amet, consectetur adipiscing elit. In est metus, tincidunt vitae eleifend sit amet, porta a sapien. Fusce in dolor nec purus facilisis dictum. tincidunt sed quam. 
                </div>

            </div> 

            <div class="element onefifth illustration">
                      
                <div class="portfolioImage">
                    <a class="jackbox" data-group="gallery_group" data-thumbTooltip = "Image with description" data-title="Logo"  data-description="#description_1" href="images/portfolio/1.jpg">
                       <div class="jackbox-hover jackbox-hover-blur jackbox-hover-magnify"></div>
                       <img width="176" height="133" src="http://placehold.it/176x133?text=Logo">
                       <span class="portfolioImageOver transparent"></span>
                   </a>
                </div>
                <!-- Sample div used as an item's description, will only appear inside JackBox -->
                <div class="jackbox-description" id="description_1">
                    <h3>Description Title One</h3>
                    <a href="#">Link</a> ipsum dolor sit amet, consectetur adipiscing elit. In est metus, tincidunt vitae eleifend sit amet, porta a sapien. Fusce in dolor nec purus facilisis dictum. tincidunt sed quam. 
                </div>

            </div>

            <div class="element onefifth illustration">
                      
                <div class="portfolioImage">
                    <a class="jackbox" data-group="gallery_group" data-thumbTooltip = "Image with description" data-title="Logo"  data-description="#description_1" href="images/portfolio/1.jpg">
                       <div class="jackbox-hover jackbox-hover-blur jackbox-hover-magnify"></div>
                       <img width="176" height="133" src="http://placehold.it/176x133?text=Logo">
                       <span class="portfolioImageOver transparent"></span>
                   </a>
                </div>
                <!-- Sample div used as an item's description, will only appear inside JackBox -->
                <div class="jackbox-description" id="description_1">
                    <h3>Description Title One</h3>
                    <a href="#">Link</a> ipsum dolor sit amet, consectetur adipiscing elit. In est metus, tincidunt vitae eleifend sit amet, porta a sapien. Fusce in dolor nec purus facilisis dictum. tincidunt sed quam. 
                </div>

            </div>

            <div class="element onefifth illustration">
                      
                <div class="portfolioImage">
                    <a class="jackbox" data-group="gallery_group" data-thumbTooltip = "Image with description" data-title="Logo"  data-description="#description_1" href="images/portfolio/1.jpg">
                       <div class="jackbox-hover jackbox-hover-blur jackbox-hover-magnify"></div>
                       <img width="176" height="133" src="http://placehold.it/176x133?text=Logo">
                       <span class="portfolioImageOver transparent"></span>
                   </a>
                </div>
                <!-- Sample div used as an item's description, will only appear inside JackBox -->
                <div class="jackbox-description" id="description_1">
                    <h3>Description Title One</h3>
                    <a href="#">Link</a> ipsum dolor sit amet, consectetur adipiscing elit. In est metus, tincidunt vitae eleifend sit amet, porta a sapien. Fusce in dolor nec purus facilisis dictum. tincidunt sed quam. 
                </div>

            </div>

            <div class="element onefifth illustration">
                      
                <div class="portfolioImage">
                    <a class="jackbox" data-group="gallery_group" data-thumbTooltip = "Image with description" data-title="Logo"  data-description="#description_1" href="images/portfolio/1.jpg">
                       <div class="jackbox-hover jackbox-hover-blur jackbox-hover-magnify"></div>
                       <img width="176" height="133" src="http://placehold.it/176x133?text=Logo">
                       <span class="portfolioImageOver transparent"></span>
                   </a>
                </div>
                <!-- Sample div used as an item's description, will only appear inside JackBox -->
                <div class="jackbox-description" id="description_1">
                    <h3>Description Title One</h3>
                    <a href="#">Link</a> ipsum dolor sit amet, consectetur adipiscing elit. In est metus, tincidunt vitae eleifend sit amet, porta a sapien. Fusce in dolor nec purus facilisis dictum. tincidunt sed quam. 
                </div>

            </div>
        </section>


       


      

      </section><!-- End // main content -->



        <?php include "footer.php" ?>
        
		

	</div><!-- /End container -->




</body>
</html>