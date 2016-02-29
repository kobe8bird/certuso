
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
    

	<!-- Primary Page Layout
	================================================== -->

	<div class="container home" data-backgroundImage="images/backgrounds/home1.jpg">
    
        
		    <?php include "menu.php"; ?>

        
        <!-- Slider
        ================================================== -->
        <section id="slider" class="sixteen columns headerContent">
        
            <div id="blurMask">
                <canvas id="blurCanvas"></canvas>
            </div>
            
            <div class="bannercontainer">					
					<div class="banner">
						<ul>	
                        
							
                            
              <!-- FIRST SLIDE -->
							<li data-transition="boxfade" > 		
								<img src="images/slides/hotrolled.jpg" alt="">
                   <!-- <div class="caption lfl" data-x="207" data-y="83" data-speed="900" data-start="200" data-easing="easeOutExpo"><img src="images/slides/wehavethe.png" alt=""></div> 
                    <div class="caption lft" data-x="82" data-y="133" data-speed="900" data-start="300" data-easing="easeOutExpo"><img src="images/slides/product.png" alt=""></div>
                    <div class="caption lfb" data-x="79" data-y="211" data-speed="900" data-start="400" data-easing="easeOutExpo"><img src="images/slides/yourelookingfor.png" alt=""></div>                        
                    <div class="caption lfl normal_grey"  data-x="78" data-y="270" data-speed="900" data-start="600" data-easing="easeOutExpo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet nibh arcu, vitae<br />adipiscing vuo metus. Sed ultricies, neque ac vulputate tempus, arcu libero sodales<br />lacus, eleifend molestie tre tellus neque eget dolor. Sed et arcu non orci iaculis loborti.</div> -->	
							</li>
                            

               
             <!-- SECOND SLIDE -->
              <li data-transition="boxfade" data-slotamount="5"  data-thumb="images/other_images/img53.jpg">    
                <img src="images/slides/coldformed.jpeg" alt="">  
                               <!--  <div class="caption lfr" data-x="500" data-y="10" data-speed="1000" data-start="100" data-easing="easeOutExpo"><img src="images/slides/splash.png" alt=""></div> 
                                <div class="caption lfl" data-x="207" data-y="83" data-speed="900" data-start="200" data-easing="easeOutExpo"><img src="images/slides/wehavethe.png" alt=""></div>  
                                <div class="caption lft" data-x="82" data-y="133" data-speed="900" data-start="300" data-easing="easeOutExpo"><img src="images/slides/product.png" alt=""></div>
                                <div class="caption lfb" data-x="79" data-y="211" data-speed="900" data-start="400" data-easing="easeOutExpo"><img src="images/slides/yourelookingfor.png" alt=""></div>                        
                                <div class="caption lfl normal_grey"  data-x="78" data-y="270" data-speed="900" data-start="600" data-easing="easeOutExpo">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet nibh arcu, vitae<br />adipiscing vuo metus. Sed ultricies, neque ac vulputate tempus, arcu libero sodales<br />lacus, eleifend molestie tre tellus neque eget dolor. Sed et arcu non orci iaculis loborti.</div> -->  
              </li>               
             
                            
                            
                            


						</ul>	
						<div class="tp-bannertimer"></div>												
					</div>					
				</div>
            
        </section>
        
        <section class="mainContent">
        <div class="contentBgFull"></div>
        
        <!-- Tag Line
        ================================================== -->
        <section id="tagLine" class="sixteen columns row">
            <h1>We provide <span class="highlight">full customization</span> on steel grade, length, and design to meet your specific <span class="highlight">site</span> challenges.</h1>

        </section>
        
        <div id="tagLineShadow" class="sixteen columns"></div>
        
        <!-- Teasers
        ================================================== -->
        <section class="row offset-by-one">
               

                <article class="row">
                  <h2>WHY CHOOSE CERTUSO?</h2>
                   <article class="onehalf row">
                      <img src="images/home2.jpg" alt="">
                  </article>

                  <article class="onehalf row last">
                    <img src="images/home3.jpg" alt="">
                 </article>
                  <p>Certuso focuses on quality, cost efficiency, and product availability in all of its steel sheet pile products. It is dedicated to provide its customers with the highest level of service at the most competitive prices.</p>
                  <p>Certuso's sheet pile products are manufactured under the highest international standards and are engineered to provide optimal performance for maximal results.</p>
               </article>
              
        
        </section>
        
        <!-- Featured works
        ================================================== -->
        <section class="left-twenty sixteen columns">
        
           <!-- Start section header -->
           <div class="sectionHeader row">
           
                <div class="sectionHeadingWrap">
                    <span class="sectionHeading">FEATURED PROJECTS</span>
                </div>
                
                <!-- Carousel navigation -->
                <div class="carouselNav">
                    <div class="carouselPrevious"></div>
                    <div class="carouselNext"></div>
                </div>
                       
           </div>
           <!-- /End section header -->
           
            <!-- Start carousel large-->
            <div class="carouselWrapper large">
            
                <ul class="carousel portfolio" data-autoPlay="false" data-autoDelay="3000">
                    
                    <?php for($i = 0; $i <= 10; $i++): ?>
                    <!-- Start carousel item portfolio -->
                    <li>
                        <figure>
                            <a class="jackbox" data-group="featured_works" data-thumbTooltip = "Client <?php echo $i ?>" data-title="Client <?php echo $i ?>"  data-description="#description_1" href="images/clients/img1.jpg">
                               <div class="jackbox-hover jackbox-hover-blur jackbox-hover-magnify"></div>
                               <img width="225" height="170" src="images/clients/thumbs/1.jpg" alt="" />
                               <span class="portfolioImageOver transparent"></span>
                           </a>
                        </figure>
                              
                        <article data-targetURL="./">
                              <p>Client <?php echo $i ?></p> 
                        </article>

						            <!-- Sample div used as an item's description, will only appear inside JackBox -->
                        <div class="jackbox-description" id="description_1">
                            <h3>Description Title One</h3>
                            <a href="#">Link</a> ipsum dolor sit amet, consectetur adipiscing elit. In est metus, tincidunt vitae eleifend sit amet, porta a sapien. Fusce in dolor nec purus facilisis dictum. tincidunt sed quam. 
                        </div>
                        
                        <span class="carouselArrow"></span>
                    </li>
                    <!-- /End carousel item portfolio -->
                  <?php endfor; ?>
					

                    
                </ul>
                
                <div class="clearfix"></div>
                
            </div><!-- /End carousel -->
          
        
        </section><!-- End // Featured works -->
        
        
       
        
        
     
        
        </section><!-- End // main content -->
        
        
        <?php include "footer.php" ?>
        
		

	</div><!-- /End container -->




</body>
</html>