<?php 
$title 			= $_GET['title'];
$img 			= $_GET['img'];
$description 	= $_GET['description'];
?>

<!doctype html>
<html>
    <head>
		<meta property="fb:app_id" content="710765662369464" />
		<meta property="og:site_name" content="Facebook Developers" />
		<meta property="og:title" content="<?php echo $title; ?>" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="https://developers.facebook.com/docs/plugins" />
		<meta property="og:image" content="<?php echo $img; ?>" />
		<meta property="og:locale" content="de_DE" />
		<meta property="og:description" content="<?php echo $description; ?>" />
    </head>
</html>
