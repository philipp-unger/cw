<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Café Wagner</title>

		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<script>
	      window.fbAsyncInit = function() {
	        FB.init({
	          appId      : '710765662369464',
	          xfbml      : true,
	          version    : 'v2.1'
	        });
	        FB.Canvas.setAutoGrow();
	      };

	      (function(d, s, id){
	         var js, fjs = d.getElementsByTagName(s)[0];
	         if (d.getElementById(id)) {return;}
	         js = d.createElement(s); js.id = id;
	         js.src = "//connect.facebook.net/de_DE/sdk.js";
	         fjs.parentNode.insertBefore(js, fjs);
	       }(document, 'script', 'facebook-jssdk'));
	    </script>

	    <div id="fb-root"></div>


	    <?php 
	    	include '_news/1.php';
	    	include '_news/2.php'
	    ?>

		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/DynamicGrid/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=15313"><span>Back to the Codrops Article</span></a></span>
			</div>
			<header>
				<h1>Nifty Modal Window Effects <span>Events & News</span></h1>
			</header>

			<div class="main clearfix">
	
				<div class="column">
					<div class="content">
						<?php 
							$ogTitle 		 = '14.02 - der Tag der Verliebten';
							$ogImg   		 = 'https://www.google.de/images/srpr/logo11w.png';						
							$ogDescription	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. Unsere Türen sind für Sie weit geöffnet. Wir freuen uns auf Sie. Celina und Ihr Team' ;

							$description	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. <br> 
												Unsere Türen sind für Sie weit geöffnet. <br><br>
												Wir freuen uns auf Sie. Celina und Ihr Team' ;
						?>
						<h1><?php echo $ogTitle ?></h1>
						<p><?php echo $description ?></p>
										
						<button class="md-trigger" data-modal="modal-1">mehr erfahen</button>

						<div>
							<div class="fb-like" data-href="_news/share.php?title=<?php echo $ogTitle ?>&img=<?php echo $ogImg ?>&description=<?php echo $ogDescription?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>
				</div>

				<div class="column">
					<div class="content">
						<?php 
							$ogTitle 		 = 'Test';
							$ogImg   		 = 'https://scontent-a-fra.xx.fbcdn.net/hphotos-xaf1/v/t1.0-9/s180x540/10442983_320543884801792_6796196549357879951_n.jpg?oh=750c81bb54a388a554ea0f222d356003&oe=55572FF3';						
							$ogDescription	 = 'test' ;
						?>
						<h1><?php echo $ogTitle ?></h1>
						<p><?php echo $ogDescription ?></p>

						<button class="md-trigger" data-modal="modal-2">mehr erfahen</button>

						<div>
							<div class="fb-like" data-href="_news/share.php?title=<?php echo $ogTitle ?>&img=<?php echo $ogImg ?>&description=<?php echo $ogDescription?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>

				</div>

								<div class="column">
					<div class="content">
						<?php 
							$ogTitle 		 = 'Powerfrauen';
							$ogImg   		 = 'https://www.google.de/images/srpr/logo11w.png';						
							$ogDescription	 = 'Ausgewählte Treffen' ;

							$description	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. <br> 
												Unsere Türen sind für Sie weit geöffnet. <br><br>
												Wir freuen uns auf Sie. Celina und Ihr Team' ;
						?>
						<h1><?php echo $ogTitle ?></h1>
						<p><?php echo $description ?></p>
										
						<button class="md-trigger" data-modal="modal-1">mehr erfahen</button>

						<div>
							<div class="fb-like" data-href="_news/share.php?title=<?php echo $ogTitle ?>&img=<?php echo $ogImg ?>&description=<?php echo $ogDescription?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- /container -->
		<div class="md-overlay"></div><!-- the overlay element -->

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
	</body>
</html>