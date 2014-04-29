 <!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
<meta name="google-site-verification" content="IjpHVclFBk_vFlean3UbxRI8hpylW6ZkB-U3ALhBMos" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->


<!--<meta name="viewport" content="width=device-width"/> -->
<!--<link rel="stylesheet" href="http://www.neat.com/css/style.css">-->
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
<?php if( is_page('try-neat') ) :?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/main-responsive.css" media="screen" />
<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.5.3.min.js"></script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?php bloginfo('template_directory'); ?>/js/libs/jquery-1.7.1.min.js"><\/script>')</script>

<?php 
if ( !is_admin() ) wp_deregister_script('jquery'); 
wp_head(); 
?>

<script type="text/javascript" src="//use.typekit.net/lge4wjy.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>


<?php include (get_template_directory()."/inc/trackingcode-header.php"); ?>
</head>
<body>
<?php include (get_template_directory()."/inc/sitecatalyst.php"); ?>
<?php 
//only load this CSS on the onboarding pages!
if($post->ID == 735){ 
	//getting started with neat
	include (get_template_directory()."/inc/gettingstartedneat-fixed-nav.php");
}else if($post->ID == 426){
	//getting started with neatcloud
	include (get_template_directory()."/inc/gettingstartedneatcloud-fixed-nav.php");
}

?>


<div id="wrapper">
<a target="_blank" href="https://cloud.neat.com" class="neatCloudSignIn"><img src="http://neat-marketing.s3.amazonaws.com/products-new/neatcloud/Sign_in_to_NeatCloud.png" /></a>
<!--start header -->
<header>     
	<nav class="headerNav">
        <ul>
        <li class="n1 first"><a href="/" class="logo"><img src="http://neat-marketing.s3.amazonaws.com/products-new/layout/neat-logo.gif" width="133" height="34"></a></li>
            <li rel="products" class="n2"><a href="/products">Products</a></li>
            <li rel="store" class="n3"><a href="/store">Store</a></li>
            <li rel="community" class="n4"><a href="/community">Community</a></li>
            <li rel="support" class="n5"><a href="/support">Support</a></li>
            <li rel="solutions" class="n6"><a href="/solutions">Solutions</a></li>
            <li rel="our-company" class="n7 last"><a href="/our-company">Our Company</a></li>
        </ul>
	</nav>

</header>
<!--end header -->
<div id="main" role="main">