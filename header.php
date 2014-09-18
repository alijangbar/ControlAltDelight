<!DOCTYPE HTML>
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <!-- CSS RESET -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/normalize.css">

	<!-- NAV ANIMATION -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/animations.css">


	<!-- STYLESHEET -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">

	<!-- BOOTSTRAP STYLESHEET -->
	   <link rel="stylesheet" href="http://www.pinnacleweb.co/wordpress/wp-content/themes/starkerschild/Bootstrap/css/bootstrap.css">


    <!-- FANCYBOX STYLESHEET -->
    <link rel="stylesheet" href="wp-content/plugins/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	
	<!-- JQUERY AUDIO PLAYER STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="http://www.pinnacleweb.co/wordpress/wp-content/plugins/audioplayer/source/css/jquery.fullwidthAudioPlayer.css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://www.pinnacleweb.co/wordpress/wp-content/plugins/audioplayer/source/css/jquery.fullwidthAudioPlayer-responsive.css">
        
    <!-- JQUERY UI STYLESHEET -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">


        
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
        

    <!-- JQUERY LIBRARY -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

    <!-- JQUERY UI -->
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        
        
    <!-- Bootstrap JS -->    
    <script type="text/javascript" src="http://pinnacleweb.co/wordpress/wp-content/themes/starkerschild/js/bootstrap.min.js"></script>    
        
    <!-- ENQUIRE JS -->
        <script type="text/javascript" src="wp-content/plugins/enquire.min.js"></script>
        
    <!-- MODERNIZR -->    
        <script type="text/javascript" src="wp-content/plugins/modernizr.js"></script>
        
    <!-- skrollr -->
    <script src="http://www.pinnacleweb.co/wordpress/wp-content/plugins/skrollr/skrollr.js"></script>
        
    <!-- HC STICKY -->
    <script src="http://www.pinnacleweb.co/wordpress/wp-content/plugins/hcSticky/jquery.hc-sticky.min.js" type="text/javascript"></script>
        
    <!-- SudoSlider jQuery -->
    <script type="text/javascript" src="http://pinnacleweb.co/wordpress/wp-content/plugins/sudoslider/js/jquery.sudoSlider.min.js"></script>

    <!-- JS FANCY LIGHTBOX -->
    <script type="text/javascript" src="wp-content/plugins/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

    <!-- JQUERY AUDIO PLAYER -->
    <script src="http://www.pinnacleweb.co/wordpress/wp-content/plugins/audioplayer/source/js/jquery-ui.js" type="text/javascript"></script>
    <script src="https://connect.soundcloud.com/sdk.js" type="text/javascript"></script>
    <!-- Include amplify.min.js when setting storePlaylist to true -->
    <script src="http://www.pinnacleweb.co/wordpress/wp-content/plugins/audioplayer/source/js/amplify.min.js" type="text/javascript"></script>
    <script src="http://www.pinnacleweb.co/wordpress/wp-content/plugins/audioplayer/source/js/soundmanager2-nodebug-jsmin.js" type="text/javascript"></script>
    <script src="http://www.pinnacleweb.co/wordpress/wp-content/plugins/audioplayer/source/js/jquery.fullwidthAudioPlayer.min.js" type="text/javascript"></script>

    

    <!-- RESPONSIVE NAV SCRIPT -->
    <script src="wp-content/plugins/SlickNav/jquery.slicknav.min.js"></script>

        

    

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53dc3c9b6e0059d9"></script>

<?php wp_head(); ?>
        
        
    <!-- TWITTER FOLLOW WIDGET -->
    <script>
       !function(d,s,id){
           var js,fjs=d.getElementsByTagName(s)[0];
           if(!d.getElementById(id)){
 js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script> 
    
        
    <!-- TWITTER TWEET WIDGET --> 
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    

    
        
        
	</head>

<body>

    <!-- FACEBOOK LIKE BUTTON -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    

    <!-- START PAGE CONTAINER -->
    <div id="pagecontainer">
	
	<!-- JQUERY AUDIO PLAYER -->
	<div id="fap"></div>
        
        
        <div class="headspace"></div>
        <nav class="mainnav">
            <ul id="menu">
                
                <li>
                     <a href="#">PLAY</a>
                    <!-- DROPDOWN MENU FOR PLAYER -->
			         <ul>
				        <li><a href="#" data-playlist="allmusic" data-enqueue="no" class="fap-add-playlist">ALL</a>
                            <!-- HIDDEN LIST OF ALL SONGS -->
                            <ul data-playlist="allmusic" class="hide">
	                           <li><a class="fap-single-track" href="http://soundcloud.com/thomas-gold/onerepublic-feel-again-thomas-gold-club-mix">OneRepublic - Feel Again (Thomas Gold Club Mix)</a></li>
	                           <li><a class="fap-single-track" href="http://soundcloud.com/arnejofficial/arnej-lost">Arnej - Lost</a></li>
                            </ul>
</li>                   
                        <!-- SOUNDCLOUD LIKES -->
				        <li><a href="https://soundcloud.com/controlaltdelight/likes" class="fap-single-track">SOUNDCLOUD SELECTS</a></li>
			         </ul>
		        </li>
                
                <li id="seconditem">
                    <a href="#">
                        GENRES
                    </a>
                    <ul>
                        <li><a href="#CATEGORYHREF">INDIE</a></li>
                        <li><a href="#CATEGORYHREF">HOUSE</a></li>
                        <li><a href="#CATEGORYHREF">HIP HOP</a></li>
                        <li><a href="#CATEGORYHREF">FUTURE</a></li>
                        <li><a href="#CATEGORYHREF">DISCO</a></li>
                        <li><a href="#CATEGORYHREF">EXPERIMENTAL</a></li>
                    </ul>
                </li>
                
                <li id="middle">
                <a href="#"></a>
                </li>
                
                <li id="fourthitem">
                    <a href="/wordpress/?page_id=38" 
                       <?php if ( is_page(38) ) {
	                   echo "class='orange'"; } ?>>
                        PHOTOS
                    </a>
                </li>
                
                <li>
                    <a href="/wordpress/?page_id=30" <?php if ( is_page(30) ) {
	                   echo "class='orange'"; } ?>>
                        INTERVIEWS
                    </a>
                </li>
                
                
                
                
            </ul>
            
            <div class="clear"></div>
        </nav>

<a href="http://pinnacleweb.co/wordpress"><div id="circlelogo" data-10="transform: scale(1.0); top: 10px; background-image: url('http://www.pinnacleweb.co/wordpress/wp-content/themes/starkerschild/photos/CADBigLogoWhite.png');" data-100="transform: scale(0.4); top:-55px; background-image: url('http://www.pinnacleweb.co/wordpress/wp-content/themes/starkerschild/photos/CADBigLogoWhiteBorder.png');"></div></a>


	
            <nav class="navbar navbar-default alternatenav" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#responsivenav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>


                    </div>
                </div>
                
                <div class="collapse navbar-collapse" id="responsivenav">
                    <ul class="nav navbar-nav">
                        <li><a href="http://www.pinnacleweb.co/wordpress">HOME</a></li>
                        <li class="dropdrown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">PLAY</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#" data-playlist="allmusic" data-enqueue="no" class="fap-add-playlist">ALL</a>
                            <!-- HIDDEN LIST OF ALL SONGS -->
                                    <ul data-playlist="allmusic" class="hide">
                                       <li><a class="fap-single-track" href="http://soundcloud.com/thomas-gold/onerepublic-feel-again-thomas-gold-club-mix">OneRepublic - Feel Again (Thomas Gold Club Mix)</a></li>
                                       <li><a class="fap-single-track" href="http://soundcloud.com/arnejofficial/arnej-lost">Arnej - Lost</a></li>
                                    </ul>
                                </li>                   
                                <li>
                                    <a href="https://soundcloud.com/controlaltdelight/likes" class="fap-single-track">SOUNDCLOUD SELECTS</a>    
                                </li>
                                
                            </ul>
                        </li>
                        
                        <li class="dropdrown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">GENRES</a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#CATEGORYHREF">INDIE</a></li>
                                <li><a href="#CATEGORYHREF">HOUSE</a></li>
                                <li><a href="#CATEGORYHREF">HIP HOP</a></li>
                                <li><a href="#CATEGORYHREF">FUTURE</a></li>
                                <li><a href="#CATEGORYHREF">DISCO</a></li>
                                <li><a href="#CATEGORYHREF">EXPERIMENTAL</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/wordpress/?page_id=38">PHOTOS</a></li>
                        <li><a href="/wordpress/?page_id=38">INTERVIEWS</a></li>
                        
                    </ul>
                </div>
            </nav>
            
            <div class="clear"></div>
     

		
        <!-- END NAV -->