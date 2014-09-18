<!-- FOOTER -->

<!-- END PAGE CONTAINER --> </div>   

 


<script type="text/javascript">
    
var $j = jQuery.noConflict();
    
    
$(function() {
    $( "#tabs" ).tabs({
    collapsible: true,
    active: false,
    });
  }); 


 
// SKROLLR LOGO RESIZE ANIMATION
    $(document).ready(function(){
        var s = skrollr.init();
    });
    
    
$(function() {
     var windowWidth = $(window).width();
     if(windowWidth > 767){
  skrollr.init({
  forceHeight: false
  });
  }});
    


    
// HC STICKY SCRIPT
	$(window).load(function(){
            $('.mainnav').hcSticky({
                stickTo: document
            });
        });
 
    
    
// MENU ANIMATION / CHANGE ON SCROLL SCRIPT 
    
    $j(window).scroll(function(){
        if($j(window).scrollTop()>100){
            $j('nav ul li').css('background-color', 'rgba(255,255,255,1.0)');
            $j('#middle').css('background-color', 'rgba(255,255,255,1.0)')
        }
        
        else {
            
            $j('nav ul li').css('background-color', 'rgba(255,255,255,0.6)');
              
        }
});


// OPEN LOCAL SHOWS TAB ON CLICK 
    $j(document).ready(function(){
        $j(".localclick").click(function(){
            var href = $(this).attr("href")
            $j(href).toggle();
            
            if ($j(".localshowsbanner").hasClass("floatright")) {
                $j(".localshowsbanner").removeClass("floatright").addClass("floatleft");
                }
            else {$j(".localshowsbanner").removeClass("floatleft").addClass("floatright");
            }
            return false;
        });
    });


// FANCYBOX
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});


// READ MORE ARROW CHANGE ON CLICK
$j(document).ready(function(){
	$j(".readmore").click(function(){
	var href = $j(this).attr("href");
	$j(href).slideToggle();
	$j(this).find(':first-child').toggleClass("arrow").toggleClass("arrowup");
return false;
	
	});
});


//FULL WIDTH AUDIO PLAYER OPTIONS
$(document).ready(function(){
  $('#fap').fullwidthAudioPlayer({
	wrapperColor: 'rgba(255,255,255,0.7)',
	twitterText: 'Tweet',
	facebookText: 'Share on Facebook',
	height: 70,
	playlistHeight: 210 ,
	volume: false ,
	openPlayerOnTrackPlay: 'true' ,
	popup: false ,
	opened: false,
	sortable: true ,
	
});
});
// opened: doesn't work
// playlist opens full screen
// how to add direct shuffle link?


//PLAY WHEN CLICK ON MENU PLAY BUTTON
$j(document).ready(function(){
	$j('#play').click(function(){
		$.fullwidthAudioPlayer.play();
	return false;
});
});



//SCRIPT TO ADD ORANGE CLASS TO CURRENT PAGE
$j(document).ready(function(){

$j('nav a').click(function() {
$j('nav a').each(function() {
$j('nav a').removeClass('current-menu-item');
});
$j(this).addClass('current-menu-item');
});
});


//SUDO SLIDER
	 $j(document).ready(function(){
        var sudoSlider = $("#slider").sudoSlider({
	customLink: 'a.customlink',
	prevNext: false,
	speed: 'fast'
});
    });
	
        
    </script>

	</body>
    
    </html>