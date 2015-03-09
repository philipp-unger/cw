<?php

    $urlServer = "https://cw-event.herokuapp.com/";
    $urlFBTab = "https://www.facebook.com/pages/Celina-Kutylo/319744648215049?sk=app_710765662369464";

    date_default_timezone_set('Europe/London');
	$mtf = date('j-m-Y'); 
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="js/plugin.js"></script>

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
		
		<style type="text/css">
			@media screen and (min-width: 1105px) {
				.item { 
					width: 25%;	
				}
			}
			@media screen and (min-width: 790px) and (max-width: 1104px) {
				.item { 
					width: 40%;
				}
			}
			@media screen and (max-width: 790px ) {
				.item { 
					padding: 1em
				}				
			}
			@media screen and (min-width: 790px ) {
				.item { 	
					padding: 0;
					margin: 0 3% 50px;
					/*max-width: 42%;*/
					/*height: inherit;*/
					box-sizing: initial;
				}
			}
		</style>
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

			<div id="container" class="main clearfix">


					<?php 
						// $endDate 		 = '20-03-2015';

						// $news 			 = "ja";
						// $img 			 = "nein";

						// $folderName		 = "";							

						// $ogTitle 		 = 'Preis-Verleihung';
						// $ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						// $ogDescription	 = 'Verleihung eine Schriftsteller-Preis an einen französischen Autor' ;


						// $title 			 = 'Preis-Verleihung';
						// $imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						
						// $description	 = 'Mit vielen Überraschungen' ;

						// if ( strtotime($mtf) <= strtotime($endDate) ) {
						// 	include 'tpl.php';
						// }
					?>

					<?php 
						$endDate 		 = '20-03-2015';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "lesung_literarisches-leipziger-allerlei/";							

						$ogTitle 		 = 'Lesung - LITERARISCHES LEIPZIGER ALLERLEI';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						$ogDescription	 = 'Café Wagner | Freitag, 13. März 2015 | 19 Uhr' ;


						$title 			 = 'Lesung - LITERARISCHES LEIPZIGER ALLERLEI';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						
						$description	 = 'Das „Café Wagner“ steht für Wohlgefühl – und für kulinarische und geistige Genüsse.<br><br>
											Zur Leipziger Buchmesse wird auf dieser Grundlage ein schmackhaftes „Literarisches Leipziger Allerlei“ gereicht: 1.000 Jahre Leipzig haben Hunderte von großartigen Büchern über Leipzig hervorgebracht und gerade jüngst sind wieder reichlich Leckerbissen frisch erschienen. Über Leipzig an sich wie auch über besondere Schwerpunkte und Details.<br><br>
											Der Autor und Moderator Holger Gemmer stellt am Freitag, den 13. März, von 19 bis etwa 20 Uhr köstlich unterhaltsam einige dieser neuen Titel vor. <br><br>
											Genießen Sie mit. Bei freiem Eintritt.<br<br>
											Café Wagner | Freitag, 13. März 2015 | 19 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							include 'tpl.php';
						}
					?>					

					<?php 
						$endDate 		 = '10-03-2015';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "internationaler_frauentag/";							

						$ogTitle 		 = 'Am 8. März ist Internationaler Frauentag';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						$ogDescription	 = 'Lassen Sie sich am Tag der Tage, mit zahlreichen Überraschungen im Café Wagner verwöhnen.' ;


						$title 			 = 'Internationaler Frauentag im Café Wagner';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						
						$description	 = 'Am 8. März ist Internationaler Frauentag. <br><br>
											Das Café Wagner verwöhnt an diesem Tag besonders das sinnliche Geschlecht mit zahlreichen Überraschungen. <br><br>
											Seien Sie gespannt. 
											Unsere Türen sind für Sie weit geöffnet. <br><br>
											Wir freuen uns auf Sie. <br><br> 
											Celina und Ihr Team';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							include 'tpl.php';
						}
					?>


					<?php 
						$endDate 		 = '08-03-2015';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";							

						$ogTitle 		 = 'Vortrag über gesunde Ernährung';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						$ogDescription	 = 'Heute Abend hält Claudia Schmidt im Café Wagner ein Vortrag über gesunde Ernährung. Eine Anmeldung zum Vortrag ist erwünscht.' ;


						$title 			 = 'Vortrag über gesunde Ernährung';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						
						$description	 = 'Heute Abend hält Claudia Schmidt im Café Wagner ein Vortrag über gesunde Ernährung. <br><br>
											Eine Anmeldung zum Vortrag ist erwünscht.' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							include 'tpl.php';
						}
					?>


					<?php 
						$endDate 		 = '09-02-2015';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "lesung_leipziger-geschichten/";							

						$ogTitle 		 = 'Einladung zur Buchpremiere // 8.2.2015 // um 15 Uhr';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						$ogDescription	 = 'Leipziger Geschichten aus 1000 Jahren / Lesung und anschließender Stadtführung mit dem Autor S. Ringel / Eintritt frei' ;


						$title 			 = 'Einladung zur Buchpremiere <br> 8.2.2015 <br> um 15 Uhr';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						
						$description	 = 'Wir freuen uns auf Sie, am 8.2.2015, um 15 Uhr im Cafe Wagner <br>
											zur Lesung und anschließender Stadtführung mit unserem Autor S. Ringel<br><br>
											Eintritt frei!' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							include 'tpl.php';
						}
					?>

					<?php 
						$endDate 		 = '15-02-2015';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "valentin/";							

						$ogTitle 		 = '14.02 - der Tag der Verliebten';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						$ogDescription	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. Unsere Türen sind für Sie weit geöffnet. Wir freuen uns auf Sie. Celina und Ihr Team' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. <br> 
											Unsere Türen sind für Sie weit geöffnet. <br><br>
											Wir freuen uns auf Sie. <br><br> 
											Celina und Ihr Team' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '01-01-2016';

						$news 			 = "ja";
						$img 			 = "ja";

						$folderName		 = "piroggen-tag/";

						$ogTitle 		 = 'Jeden Freitag ist jetzt russischer Piroggen-Tag';					
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = ' ' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							include 'tpl.php';
						}
					?>
		


					<?php
						$endDate 		 = '01-01-2016';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";	

						$ogTitle 		 = 'Powerfrauen-Abende';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';						
						$ogDescription	 = 'In regelmäßigen Abständen veranstaltet das Café Wagner exklusive Abende für Powerfrauen' ;

						$title 			 = $ogTitle;
						$imgPost		 = '';
						$description	 = 'In regelmäßigen Abständen veranstaltet das Café Wagner exklusive Abende für "Powerfrauen" <br><br>
											<span class="little">* Die Teilnehmer erhalten immer eine persönliche Einladung & somit nur Zutritt zur geschlossenen Veranstaltung</span>' ;
						
						if ( strtotime($mtf) <= strtotime($endDate) ) {
							include 'tpl.php';
						}
					?>


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
		<script type="text/javascript">
		function msnry() {
		    var windowsize = $(window).width();
		    if (windowsize > 790) {
				setTimeout(function(){ 
						var container = document.querySelector('#container');
						var msnry = new Masonry( container, {
						  // options
						  columnWidth: 0,
				  		  itemSelector: '.item'
						});
				}, 300);
			}
		}
		msnry();

	  	$(window).resize(function() {
		    msnry();
	  	});

		</script>

		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
	</body>
</html>