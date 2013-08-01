<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
		
		<!-- Typekit -->
		<script type="text/javascript" src="//use.typekit.net/emi8oqv.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->
		
		
	    <!-- Smooth Page Scrolling -->
	    <script type="text/javascript">			
	        $(document).ready(function () {
	            function filterPath(string) {
	                return string
	                  .replace(/^\//, '')
	                  .replace(/(index|default).[a-zA-Z]{3,4}$/, '')
	                  .replace(/\/$/, '');
	            }
	            var locationPath = filterPath(location.pathname);
	            var scrollElem = scrollableElement('html', 'body');
	
	            $('a[href*=#]').each(function () {
	                var thisPath = filterPath(this.pathname) || locationPath;
	                if (locationPath == thisPath
	                && (location.hostname == this.hostname || !this.hostname)
	                && this.hash.replace(/#/, '')) {
	                    var $target = $(this.hash), target = this.hash;
	                    if (target) {
	                        var targetOffset = $target.offset().top;
	                        $(this).click(function (event) {
	                            event.preventDefault();
	                            $(scrollElem).animate({ scrollTop: targetOffset }, 400, function () {
	                                location.hash = target;
	                            });
	                        });
	                    }
	                }
	            });
	
	            // use the first element that is "scrollable"
	            function scrollableElement(els) {
	                for (var i = 0, argLength = arguments.length; i < argLength; i++) {
	                    var el = arguments[i],
	                        $scrollElement = $(el);
	                    if ($scrollElement.scrollTop() > 0) {
	                        return el;
	                    } else {
	                        $scrollElement.scrollTop(1);
	                        var isScrollable = $scrollElement.scrollTop() > 0;
	                        $scrollElement.scrollTop(0);
	                        if (isScrollable) {
	                            return el;
	                        }
	                    }
	                }
	                return [];
	            }
	
	        });
	    </script>
	    
	    <!-- Menu toggle in responsive mode -->
	    <script>
	
        $(function () {
            var pull = $('#pull');
            menu = $('nav ul#menu-global');
            menuHeight = menu.height();

            $(pull).on('click', function (e) {
                e.preventDefault();
                menu.slideToggle();
            });
        });

        $(window).resize(function () {
            var w = $(window).width();
            if (w > 768 && menu.is(':hidden')) {
                menu.removeAttr('style');
            }
        });
	
	    </script>    

	</head>

	<body <?php body_class(); ?>>

	    <div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap clearfix">

					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
					<div id="logo"><a href="<?php echo home_url(); ?>" rel="nofollow"><img src="/wp-content/themes/FR/library/images/logo_header@2x.png" alt="FR logo" /></a></div>

					<!-- if you'd like to use the site description you can un-comment it below -->
					<?php // bloginfo('description'); ?>

					<a href="#" id="pull"><img src="/wp-content/themes/FR/library/images/icn_menu@2x.png" alt="Nav" /></a>
					
					<nav role="navigation">
						<?php bones_main_nav(); ?>
					</nav>

				</div> <!-- end #inner-header -->

			</header> <!-- end header -->
