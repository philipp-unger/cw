<?php
	$appActive 	= true;
    $urlServer 	= "https://cw-event.herokuapp.com/";
    $urlFBTab 	= "https://www.facebook.com/pages/Celina-Kutylo/319744648215049?sk=app_710765662369464";

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

		<?php if ($appActive) : ?>
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
		<?php endif; ?>

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
						// $endDate 		 = '14-03-2015';

						// $news 			 = "ja";
						// $img 			 = "nein";

						// $folderName		 = "";

						// $ogTitle 		 = 'Preis-Verleihung';
						// $ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						// $ogDescription	 = 'Am 12.03 | Verleihung eines Schriftsteller-Preises an einen französischen Autor. Ab 19 Uhr – Geschlossene Gesellschaft.' ;


						// $title 			 = 'Preis-Verleihung';
						// $imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						// $description	 = 'Verleihung eines Schriftsteller-Preises an einen französischen Autor.<br><br>
						// 					Am 12.03 im Café Wagner <br><br>
						// 					Ab 19 Uhr – Geschlossene Gesellschaft' ;

						// if ( strtotime($mtf) <= strtotime($endDate) ) {
						$style = '';
						// 	include 'tpl.php';
						// }
					?>


					<?php
						$endDate 		 = '12-05-2015';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "schriftsteller_salon/";

						$ogTitle 		 = 'Schriftsteller–Salon';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Junge Talente und interessante Schriftsteller »meets« Café Wagner | Samstag, 09. Mai 2015 | ab 19 Uhr' ;


						$title 			 =  $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = 'Junge Talente & interessante Schriftsteller »meets« Café Wagner <br><br>

											Nächste Treffen:
											Samstag, 09. Mai 2015<br>
											ab 19 Uhr <br>
											Café Wagner<br><br>

											<a style="color:#3B5998; text-decoration: underline;" target="_blank" href="https://www.facebook.com/events/720557544724542/">Zum Event</a>

											<br><br>';


						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '31-05-2015';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "richard_wagner_genusswochenende/";

						$ogTitle 		 = 'Richard Wagner Genusswochenende';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Seien Sie Teil von etwas Großem – Opernabend »Die Walküre« und »Zu Gast bei Wagners« | Freitag, 29. Mai 2015 | ab 22 Uhr' ;


						$title 			 = 'Richard Wagner Genusswochenende';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = 'Seien Sie Teil von etwas Großem – <br>Opernabend »Die Walküre« und »Zu Gast bei Wagners«<br><br>

											Anmeldung unter <a target="_blank" href="http://www.porzellanundglasdesign.de/68-0-Anmeldung.html">http://www.porzellanundglasdesign.de/68-0-Anmeldung.html</a> <br> <br>

											Nach der Vorstellung bringt Sie ein Shuttle zum Café Restaurant Wagner, wo Celina Kutylo eine
											stimmungsvolle Hommage an den großen Komponisten schuf. Nach einer Führung
											durch die Ausstellung der Leipziger Malerin Jeannette PietrowskiSiefke
											erleben Sie in einem Lichtermeer auf dem Richard-Wagner-
											Platz Kurioses aus dem Leben des Dichterkomponisten, erzählt von Wagner-Autorin Ursula Oehmeund
											Thomas Krakow, Präsident des Richard-Wagner-Verbandes International. Eine Tanz- und
											Feuershow der Feuerfünkchen Company beschließt den Abend.<br><br>

											Café Wagner  <br>
											Freitag, 29. Mai 2015<br>
											ab 22 Uhr <br><br>
											Quelle: <a target="_blank" href="https://www.xing.com/events/wagner-salondinner-leipzig-1534458">https://www.xing.com/events/wagner-salondinner-leipzig-1534458</a>' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '15-04-2015';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "lesung_passoras-gold/";

						$ogTitle 		 = 'Lesung - Paßoras GOLD';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Bezaubernd geht es am 11.04.2015 um 19 Uhr weiter. Café Wagner | Freitag, 13. März 2015 | 19 Uhr' ;


						$title 			 = 'Lesung - LITERARISCHES LEIPZIGER ALLERLEI';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = 'Das „Café Wagner“ steht für Wohlgefühl – und für kulinarische und geistige Genüsse.<br><br>
											Bezaubernd geht es am 11.04.2015 um 19 Uhr weiter. <br>
											Unsere zweite Lesebühne öffnet ihre Türen für Euch. <br>
											Ganz im Sinne des Literatursalons suchen auch wir für weitere Projekte Literaten, Künstler und
											Musiker mit eigenen Texten und Musikkreationen die eine gute Werbeoption nutzen möchten. <br><br>
											Einmal im Monat laden wir, unter anderem dann im Cafe Café Wagner & Celina Kutylo zu selbst verfassten Präsentationen ein und freuen uns auf Paßoras GOLD.<br><br>
											Café Wagner  <br>
											Samstag, 11. April 2015<br>
											ab 19 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '15-03-2015';

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
											Genießen Sie mit.<br> Bei freiem Eintritt.<br><br>
											Café Wagner | Freitag, 13. März 2015 | 19 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '17-03-2015';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Lesung – Dr. Reiner Tetzner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Am 15.03 | Lesung im Café Wagner – Dr. Reiner Tetzner';


						$title 			 = 'Lesung – Dr. Reiner Tetzner';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = 'Im Café Wagner findet am 15.03 eine Lesung von Dr. Reiner Tetzner statt.' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '16-03-2015';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Lesung – Christiane Maria Fischer';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Am 14.03 | Lesung im Café Wagner – Christiane Maria Fischer' ;


						$title 			 = 'Lesung – Christiane Maria Fischer';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = 'Am 14.03 findet im Café Wagner eine Lesung von Christiane Maria Fischer statt.<br><br>
											Wir freuen uns auf Sie. <br><br>
											Celina und Ihr Team' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
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
							$style = '';
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
							$style = '';
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
							$style = '';
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
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '01-01-2017';

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
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '06-09-2016';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Lesung Lerchenküsse';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">5. September 2016</span><br />
											Heiter spritziger Liebesroman mit Leipzig-Flair<br><br>
											Ort: Café Wagner<br />
											Beginn: 19 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '26-09-2016';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Genn Sie sächs&apos;sch?';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">25. September 2016</span><br />
											Sächs&apos;scher Gaffeeglatsch weil dr Sachse de Geschmiedlichgeet liebt <br><br>
											Genießen Sie Bei einem "Scheelchen Heeßen" einen Nachmittag mitt sächsischer Mundart.<br><br>
											Es erwartet Sie eine Mischung aus Kabarett, Lesung und Humor.<br><br>
											Ort: Café Wagner<br />
											Beginn: 16 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '22-10-2016';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Oktoberfest im Cafe Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">21. Oktober 2016</span><br />
											Weißwurst + Weißbier + Tanzparkett + Champagner<br /><br />
											Weitere Informationen folgen.<br /><br />
											Ort: Café Wagner<br />
											Beginn: 19 Uhr <br />
											Ende: ca. 5 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '28-11-2016';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Genn Sie sächs&apos;sch?';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">27. November 2016</span><br />
											Sächs&apos;scher Gaffeeglatsch weil dr Sachse de Geschmiedlichgeet liebt <br><br>
											Genießen Sie Bei einem "Scheelchen Heeßen" einen Nachmittag mitt sächsischer Mundart.<br><br>
											Es erwartet Sie eine Mischung aus Kabarett, Lesung und Humor.<br><br>
											Ort: Café Wagner<br />
											Beginn: 16 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '31-10-2016';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Genn Sie sächs&apos;sch?';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">30. Oktober 2016</span><br />
											Sächs&apos;scher Gaffeeglatsch weil dr Sachse de Geschmiedlichgeet liebt <br><br>
											Genießen Sie Bei einem "Scheelchen Heeßen" einen Nachmittag mitt sächsischer Mundart.<br><br>
											Es erwartet Sie eine Mischung aus Kabarett, Lesung und Humor.<br><br>
											Ort: Café Wagner<br />
											Beginn: 16 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '17-12-2016';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Weihnachtsfeier im Cafe Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">16. Dezember 2016</span><br />
											Für Gäste und Friends.<br />
											Mit echtem Weihnachtsmann<br /><br />
											Ort: Café Wagner<br />
											Beginn: 19 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '25-12-2016';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Öffnungszeiten <br />am Heiligabend';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">24. Dezember 2016</span><br />
											von 9 Uhr bis 18 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '27-12-2016';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Öffnungszeiten <br />Weihnachtsfeier-<br />tage';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">25. und 26. Dezember 2016</span><br />
											von 11 Uhr bis 21 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '01-01-2017';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Silvester im Cafe Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">31. Dezember 2016</span><br />
											mit Live-Musik, Kaviar & Champagner<br />
											Tanzfläche für 500 Leute<br /><br />
											Ort: Café Wagner<br />
											Beginn: 19 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '02-01-2017';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Neujahr';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">1. Januar 2017</span><br />
											Ruhetag' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '03-01-2017';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Mit Champagner-Frühstück ins neue Jahr';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">2. Januar 2017</span><br />
											Ort: Café Wagner<br />
											Beginn: 9 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '03-01-2018';

						$news 			 = "ja";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'NEU: Business-Frühstück';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;

						$title 			 = 'NEU: <br /> Business-Frühstück';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '<span class="time">ab Februar - jeden Tag</span><br />
											Ort: Café Wagner<br />
											Beginn: ab 8 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '12-01-2018';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Wiederholungstäter Powerfrauen-Abende';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Powerfrauen Workshop' ;

						$title 			 = 'Wiederholungs-täter Powerfrauen-Abende';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = '
						<span class="time">11. Januar 2017</span> <br />
						Weitere Informationen hier:<br />
						<a href="https://www.facebook.com/events/172861663191702/" target="_blank">
						https://www.facebook.com/events/172861663191702/
						</a><br /><br />
						Ort: Café Wagner<br />
						Beginn: ab 19 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '15-02-2017';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "valentin/";

						$ogTitle 		 = '14.02 - der Tag der Verliebten';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine besondere Überraschung. 3 Gänge Menü inklusive Liebeselixier als Begrüßungsdrink. Unsere Türen sind für Sie weit geöffnet. Wir freuen uns auf Sie. Beginn: ab 18 Uhr. Celina und Ihr Team' ;

						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';
						$description	 = 'Liebe Verliebten und zukünftige Verliebten, in ihrem Cafe Wagner erwartet Sie zum Valentinstag eine
											besondere Überraschung. <br>
											3 Gänge Menü inklusive Liebeselixier als Begrüßungsdrink<br /><br />
											Unsere Türen sind für Sie weit geöffnet. <br><br>
											Wir freuen uns auf Sie. <br>
											Celina und Ihr Team<br /><br>
											Ort: Café Wagner<br />
											Beginn: ab 18 Uhr' ;

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '09-03-2017';

						$news 			 = "nein";
						$img 			 = "ja";

						$folderName		 = "internationaler_frauentag/";

						$ogTitle 		 = 'Am 8. März ist Internationaler Frauentag';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Lassen Sie sich am Tag der Tage, mit zahlreichen Überraschungen im Café Wagner verwöhnen.' ;


						$title 			 = 'Internationaler Frauentag im Café Wagner';
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = 'Am 8. März ist Internationaler Frauentag. <br><br>
											Das Café Wagner verwöhnt an diesem Tag besonders das sinnliche Geschlecht mit zahlreichen Überraschungen.
											</p>
											<ul class="inlinelist">
												<li>neuste Make-up-Trends 2017</li>
												<li>Wahrsagerin</li>
												<li>exklusive private Handmassage</li>
											</ul>
											<p>
											Seien Sie gespannt.
											Unsere Türen sind für Sie weit geöffnet. <br><br>
											Wir freuen uns auf Sie. <br><br>
											Celina und Ihr Team';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '27-03-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Leipziger Buchmesse auch in ihrem Café Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Jeden Tag eine Lesung! Immer ab 19 Uhr' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">23. - 26. März 2017</span> <br />Jeden Tag eine Lesung! <br />Immer ab 19 Uhr';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '18-04-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Ostern im Café Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '16. und 17. April 2017 | Kuchen-Torten-Festival. Jeden Tag zwischen 10 und 18 Uhr.' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">16. und 17. April 2017</span><br />
						Kuchen-Torten-Festival. <br /><br />Jeden Tag zwischen 10 und 18 Uhr.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '01-05-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Tanz in den Mai';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '30. April 2017 | Powerfrauen-Abend unter den Motto Hexentreff.' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">30. April 2017</span><br />
						Powerfrauen-Abend unter den Motto Hexentreff.<br /><br />
						<b>Neue Bilderausstellung:</b><br />
						Verabschiedung der Ausstellung Manfred von Kühnemund<br />
						Willkommen heißen der neuen Ausstellung von Sebastian Lüksch
						';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '07-05-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Honky Tonk Leipzig';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Wir sind wieder mit dabei.' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">06. Mai 2017</span><br />
						Wir sind wieder mit dabei.<br />
						Weitere Informationen folgen.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '15-05-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Muttertag im Café Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Den ganzen Tag über - viele Überraschungen für die liebe Mutter.' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">14. Mai 2017</span><br />
						Den ganzen Tag über - viele Überraschungen für die liebe Mutter.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '23-05-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Wagner Geburtstag';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Mit großer Kuchen-Tortentafel | ab 14 Uhr' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">22. Mai 2017</span><br />
						Mit großer Kuchen-Tortentafel<br /><br />
						Beginn ist ab 14 Uhr';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '26-05-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Himmelfahrt / Vatertag';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Special Deal: Bestell 10 Bier und Du bekommst eine 1 runde Wodka aufs Haus.' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">25. Mai 2017</span><br />
						<b>Special Deal:</b> <br />Bestell 10 Bier und Du bekommst eine 1 runde Wodka aufs Haus.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '29-05-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Luther Tage';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Weiter Informationen folgen.' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">25. - 28. Mai 2017</span><br />
						Weiter Informationen folgen.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '05-06-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Gothik-Treffpunkt-Delux';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'ab 20 Uhr' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">4. und 05. Juni 2017</span><br />
						ab 20 Uhr';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = 'color: white; background: black;';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '06-06-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'WGT Spezial';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = 'Jeden Tag neue Überraschungen.' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">4. und 05. Juni 2017</span><br />
						Jeden Tag neue Überraschungen.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = 'color: white; background: black;';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '03-07-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Wagner Festtage';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">28. Juni - 2. Juli 2017</span>';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '19-08-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Sommerparty im Café Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = '' ;


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">18. August 2017</span> <br />
						Halten Sie sich schon mal diesen Termin frei. <br />
						Viele Überraschungen warten auf Sie. <br /><br />
						Weitere Informationen folgen.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '20-10-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Oktoberfest im Café Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = "O'zapft is | Beginn ist ab 18 Uhr.";


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = "<span class='time'>20. Oktober 2017</span> <br />
						O'zapft is.<br /><br />
						Beginn ist ab 18 Uhr.";

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>


					<?php
						$endDate 		 = '16-12-2017';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Weihnachtsfeier im Café Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = "Alle Jahre wieder. | Beginn ist ab 20 Uhr.";


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = "<span class='time'>15. Dezember 2017</span> <br />
						Alle Jahre wieder.<br /><br />
						Beginn ist ab 20 Uhr.";

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							include 'tpl.php';
						}
					?>

					<?php
						$endDate 		 = '01-01-2018';

						$news 			 = "nein";
						$img 			 = "nein";

						$folderName		 = "";

						$ogTitle 		 = 'Silvester im Café Wagner';
						$ogImg   		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'share.jpg';
						$ogDescription	 = "Konzert mit festlichen 3 Gänge Menü und Champagner | Vorbestellung telefonisch oder direkt im Café Wagner";


						$title 			 = $ogTitle;
						$imgPost		 = 'https://cw-event.herokuapp.com/img/'. $folderName .'post.jpg';

						$description	 = '<span class="time">31. Dezember 2017</span> <br />
						Konzert mit festlichen 3 Gänge Menü und Champagner<br /><br />
						Sichern Sie sich ihre Plätze rechzeitig<br />
						Vorbestellung telefonisch (<a href="tel:034199994948">0341 99 99 49 48</a>) oder direkt im Café Wagner.';

						if ( strtotime($mtf) <= strtotime($endDate) ) {
							$style = '';
							$style = '';
							include 'tpl.php';
						}
					?>
			</div>
			<div class="legal">
				Etwaige Änderungen und Irrtümer sind vorbehalten.
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
