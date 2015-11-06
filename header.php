<!DOCTYPE html>
<html>
<head>

<!--Description meta-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width"/>
<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />

<link href='http://fonts.googleapis.com/css?family=Varela+Round|Carter+One|Kalam|Lemon|Monoton|Wire+One|Tulpen+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide|Michroma|Julius+Sans+One' rel='stylesheet' type='text/css'>

<title><?php wp_title() ?></title>

<!--Style sheets-->

</head>

<body <?php body_class($class); ?>>
<div id="container">
	<header class="">
	<hgroup class="screen-reader-text">
		<h1 id="site-title">
		<a href="<?php bloginfo('url'); ?>" title="<?php
bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
		<h2 id="site-description"><?php bloginfo( 'description' ); ?>
		</h2>		
		<div class="logo"><!--Logo-->
			<h3>Logo</h3>
			<img src="http://dummyimage.com/100x100" alt=" " />		
     	</div>		
	</hgroup>
	</header>
   
<nav id="nav-main">
	<?php wp_nav_menu( array('theme_location' => 'main')) ?>
</nav>

