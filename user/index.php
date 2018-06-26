<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>SungkanNgoding.com | Portal Ngoding Indonesia</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        
        <!-- xxx Favicons xxx -->
        <link rel="shortcut icon" href="favicon/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="favicon/apple-touch-icon.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="favicon/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="favicon/apple-touch-icon-114x114.png" />
        
        <!-- xxx Google Fonts xxx -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
        
        <!-- xxx Base Stylesheet xxx -->
        <link rel="stylesheet" href="css/base.css">
        <link rel="stylesheet" class="alt" href="css/theme-default.css">        

        <script src="js/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="wide">
    
    <!-- xxx Loader Start xxx -->    
    <div id="pageloader">   
        <div class="loader-item">
            <div class="spinner">
                <div class="spinner-container container1">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                </div>
                <div class="spinner-container container2">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                </div>
                <div class="spinner-container container3">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                    <div class="circle3"></div>
                    <div class="circle4"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- xxx End xxx -->
    
    <!-- xxx Main Wrapper xxx -->
    <div id="main-wrapper">
        
        <?php include 'header.php' ?>
        
        <!-- xxx Revolution Slider xxx -->
        <?php 
            if(empty($_GET['page'])){
                include 'slider.php';
                include 'main-content.php';
            }elseif($_GET['page']=='blog'){
                include 'blog.php';
            }else{
                include 'detail.php';
            }
        ?>
        <!-- xxx Revolution Slider End xxx -->
        
        <!-- xxx Body Content xxx -->
        
        <!-- xxx Body Content End xxx -->
        
        <!-- xxx Footer Content xxx -->
        <?php include 'footer.php' ?>     
        <!-- xxx Footer Content End xxx -->
        
        <!-- xxx Back To Top xxx -->
        <div id="back-top">
            <a class="img-circle" href="#top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
        <!-- xxx End xxx -->
        
	</div>
    <!-- xxx Main Wrapper End xxx -->
    
    <!-- JQuery Plugins--> 
    <script type="text/javascript" src="js/jquery.min.js"></script>    
    <script type='text/javascript' src="js/underscosre-min.js"></script>
    <script type='text/javascript' src="js/bootstrap.min.js"></script>
    <script type='text/javascript' src="js/jquery.plugins.min.js"></script>
    <script type='text/javascript' src="js/jquery.appear.min.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script>
    <script type='text/javascript' src="js/waypoints.min.js"></script>
    <script type='text/javascript' src="js/jetmenu.js"></script>
    <script type='text/javascript' src="js/owl.carousel.min.js"></script>
    <script type='text/javascript' src="js/jquery.fancybox.js"></script>
    <script type="text/javascript" src="js/stellar.js"></script>
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <script type='text/javascript' src="js/jquery.hoverIntent.minified.js"></script>
    <script type='text/javascript' src="js/jquery.validate.min.js"></script>
    <script type='text/javascript' src="js/jquery.fitvids.js"></script>
    <script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
    <script type='text/javascript' src="twitter/jquery.tweet.js"></script>
    <script type='text/javascript' src="js/jquery.flexslider-min.js"></script>
    <script type='text/javascript' src="js/jflickrfeed.min.js"></script>
    <script type="text/javascript" src="js/jquery.mixitup.js"></script>
    
    <!-- JQuery Map Plugin -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/jquery.gmap.min.js"></script>
    
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>   
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>   
    
    <script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery('.tp-banner').show().revolution(
			{
				dottedOverlay:"none",
				delay:16000,
				startwidth:1170,
				startheight:700,
				hideThumbs:200,
				
				thumbWidth:100,
				thumbHeight:50,
				thumbAmount:5,
				
				navigationType:"bullet",
				navigationArrows:"solo",
				navigationStyle:"preview1",
				
				touchenabled:"on",
				onHoverStop:"on",
				
				swipe_velocity: 0.7,
				swipe_min_touches: 1,
				swipe_max_touches: 1,
				drag_block_vertical: false,
										
										parallax:"mouse",
				parallaxBgFreeze:"on",
				parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
										
				keyboardNavigation:"off",
				
				navigationHAlign:"center",
				navigationVAlign:"bottom",
				navigationHOffset:0,
				navigationVOffset:20,
	
				soloArrowLeftHalign:"left",
				soloArrowLeftValign:"center",
				soloArrowLeftHOffset:20,
				soloArrowLeftVOffset:0,
	
				soloArrowRightHalign:"right",
				soloArrowRightValign:"center",
				soloArrowRightHOffset:20,
				soloArrowRightVOffset:0,
						
				shadow:0,
				fullWidth:"on",
				fullScreen:"off",
	
				spinner:"spinner4",
				
				stopLoop:"off",
				stopAfterLoops:-1,
				stopAtSlide:-1,
	
				shuffle:"off",
				
				autoHeight:"off",						
				forceFullWidth:"off",	
										
				hideThumbsOnMobile:"off",
				hideNavDelayOnMobile:1500,						
				hideBulletsOnMobile:"off",
				hideArrowsOnMobile:"off",
				hideThumbsUnderResolution:0,
				
				hideSliderAtLimit:0,
				hideCaptionAtLimit:0,
				hideAllCaptionAtLilmit:0,
				startWithSlide:0,
				videoJsPath:"rs-plugin/videojs/",
				fullScreenOffsetContainer: ""	
			});			
		});
	</script>
    
    <script type='text/javascript' src="js/amagon-custom.js"></script>
    <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src='//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
</body>
</html>
