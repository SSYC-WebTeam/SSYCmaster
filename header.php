<?php

?><!DOCTYPE html>

<html>
<head>

<!-- Description meta-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width"/>
<meta http-equiv="content-type" content="text/html; charset=US-ASCII" />

<link href='http://fonts.googleapis.com/css?family=Varela+Round|Carter+One|Kalam|Lemon|Monoton|Wire+One|Tulpen+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Audiowide|Michroma|Julius+Sans+One' rel='stylesheet' type='text/css'>

<title><?php wp_title() ?></title>

<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen">
<?php wp_head(); ?>
    
</head>

<body>
    <header>
        <div id="logo">
            <p>SSYC</p>
        </div>
    </header>
    
 <nav>
	<?php wp_nav_menu( array('theme_location' => 'main')) ?>
</nav>