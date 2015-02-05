<?php

    $urlServer = "https://cw-event.herokuapp.com/";
    $urlFBTab = "https://www.facebook.com/pages/Celina-Kutylo/319744648215049?sk=app_710765662369464";

?>

<!DOCTYPE html>
<html lang="de" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Café Wagner</title>


		<meta property="fb:app_id" content="710765662369464" />
		<meta property="og:site_name" content="Café Wagner" />
		<meta property="og:title" content="Events & News | Café Wagner" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="https://cw-event.herokuapp.com/img/share.jpg" />
		<meta property="og:locale" content="de_DE" />
		<meta property="og:description" content="Aktuelle Events & Neuigkeiten rundum des Café Wagners finden Sie jetzt immer hier" />

		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>

		<script>
		  if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)  ){
		      if (window != window.top) {
		          // If in iframe, redirect to standalone site

		          // Mobile Site auf dem Server
		          window.top.location = "<?php echo $urlServer ?>"
		      }

		  } else {
		      if (window == window.top) {
		          // If not in iframe, redirect to facebook app

		          // Desktop Facebook Tab
		          window.top.location = "<?php echo $urlFBTab ?>"
		      }
		  }
		</script>
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
			<header>
				<img src="img/wagner.svg" width="300">
				<h1>Events & News</h1>
			</header>

			<div class="main clearfix">
	
				<div class="column">
					<div class="content">
						<?php 
							$news 			 = "nein";
							$img 			 = "ja";

							$folderName		 = "valentin/";							

							$ogTitle 		 = '14.02 - der Tag der Verliebten';
							$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
							$ogDescription	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. Unsere Türen sind für Sie weit geöffnet. Wir freuen uns auf Sie. Celina und Ihr Team' ;

							$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
							$description	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. <br> 
												Unsere Türen sind für Sie weit geöffnet. <br><br>
												Wir freuen uns auf Sie. <br><br> 
												Celina und Ihr Team' ;
						?>
						<?php if ($news == "ja" ){ echo "<span>News</span>"; } ?>
						<?php if ($img == "ja" ){ echo "<div class='txtC imgRound'><img src=". $imgPost ."></div>"; } ?>
						
						<h1><?php echo $ogTitle ?></h1>
						<p><?php echo $description ?></p>
										
						<!-- <button class="md-trigger" data-modal="modal-1">mehr erfahen</button> -->
						
						<div>
							<div class="fb-like" data-href="_news/share.php?title=<?php echo $ogTitle ?>&img=<?php echo $ogImg ?>&description=<?php echo $ogDescription?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>
				</div>

				<div class="column">
					<div class="content">
						<?php
							$news 			 = "ja";
							$img 			 = "ja";

							$folderName		 = "piroggen-tag/";

							$ogTitle 		 = 'Jeden Freitag ist jetzt russischer Piroggen-Tag';					
							$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
							$ogDescription	 = '' ;

							$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
							$description	 = ' ' ;
						?>
						<?php if ($news == "ja" ){ echo "<span class='news'>News</span>"; } ?>
						<?php if ($img == "ja" ){ echo "<div class='txtC imgRound'><img src=". $imgPost ."></div>"; } ?>

						<h1><?php echo $ogTitle ?></h1>
						<p><?php echo $description ?></p>
										
						<div>
							<div class="fb-like" data-href="_news/share.php?title=<?php echo $ogTitle ?>&img=<?php echo $ogImg ?>&description=<?php echo $ogDescription?>" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
						</div>
					</div>
				</div>

				<div class="column">
					<div class="content">
						<?php
							$news 			 = "ja";
							$img 			 = "nein";

							$folderName		 = "";	

							$ogTitle 		 = 'Powerfrauen-Abende';
							$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
							$ogDescription	 = 'In regelmäßigen Abständen veranstaltet das Café Wagner exklusive Abende für Powerfrauen' ;

							$imgPost		 = '';
							$description	 = 'In regelmäßigen Abständen veranstaltet das Café Wagner exklusive Abende für "Powerfrauen" <br><br>
												<span class="little">* Die Teilnehmer erhalten immer eine persönliche Einladung & somit nur Zutritt zur geschlossenen Veranstaltung</span>' ;
						?>
						<?php if ($news == "ja" ){ echo "<span class='news'>News</span>"; } ?>
						<?php if ($img == "ja" ){ echo "<div class='txtC imgRound'><img src=". $imgPost ."></div>"; } ?>
						
						<h1><?php echo $ogTitle ?></h1>
						<p><?php echo $description ?></p>
										
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