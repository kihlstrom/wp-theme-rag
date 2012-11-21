<!DOCTYPE html>
<!--[if (lte IE 8) & (!IEMobile)]> <html class="noscript ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="noscript" lang="en"> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( ' - ', 1, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<script>document.documentElement.className = document.documentElement.className.replace( 'noscript', 'script' );</script>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">
	<script type="text/javascript" src="<?php echo THEME_DIR; ?>/js/main.js" ></script>	
	<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/rag-fav-icon32x32.ico">
	<?php wp_head(); ?>
</head>
<body>

<div class="header">
	<div class="inside">
		<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo THEME_DIR; ?>/images/rag-logo145x108.png" width="145" height="108" alt="Real Art Group"><span>Real Art Group</span></a></h1>
		<ul class="nav-main">
<?php
$id_exclude = url_to_postid( 'cookies' );
wp_list_pages( 'sort_column=menu_order&depth=1&echo=1&title_li=&exclude=' . $id_exclude );
?>
		</ul>
		<!--
		<form id="header-form-search" method="get" action="">
			<input type="text" name="search" value="">
		</form>-->
	</div>
</div>