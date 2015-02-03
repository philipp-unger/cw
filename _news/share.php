<?php

    $urlServer = "https://cw-event.herokuapp.com/";
    $urlFBTab = "https://www.facebook.com/pages/Celina-Kutylo/319744648215049?sk=app_710765662369464";
     
	$title 			= $_GET['title'];
	$img 			= $_GET['img'];
	$description 	= $_GET['description'];
?>

<!doctype html>
<html>
    <head>
		<meta property="fb:app_id" content="710765662369464" />
		<meta property="og:site_name" content="Café Wagner" />
		<meta property="og:title" content="<?php echo $title; ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:image" content="<?php echo $img; ?>" />
		<meta property="og:locale" content="de_DE" />
		<meta property="og:description" content="<?php echo $description; ?>" />
    </head>


    <script>
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)  ){
            // Mobile Site auf dem Server
            window.location = "<?php echo $urlServer; ?>"
        } else {
            // Desktop Facebook Tab
            window.location = "<?php echo $urlFBTab; ?>"
        }
    </script>
</html>
