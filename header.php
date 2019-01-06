<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Evolution_Developmet
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

<!-- Bootstrap core CSS -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css">

<!-- FontAwesome Icons-->
<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">

<!-- Google Fonts-->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

<!-- Typekit Fonts-->
<link href="https://use.typekit.net/nbu4tiv.css" rel="stylesheet">

	<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->	

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'evolution-developmet' ); ?></a>
</div>

<!-- HEADER
    =============================================================================== -->

<header class="site-header" role="banner">

    <!-- NAVBAR
    =============================================================================== -->
    

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?php bloginfo ('stylesheet_directory'); ?>/assets/img/logo.png" alt="Evo-development"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbar-SupportedContent" aria-controls="navbar-SupportedContent" aria-expanded="false" 
                aria-label='Toggle Navigation'>
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbar-SupportedContent">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1', // Defined when registering the menu
                            'menu_id'        => 'primary',
                            'container'      => false,
                            'menu_class'     => 'nav navbar-nav',
                            'walker'         => new Walker_Nav_Primary(), // This controls the display of the Bootstrap Navbar
                            'fallback_cb'    => 'Walker_Nav_Primary::fallback', // For menu fallback
                        ) );
                    ?>
                </div>
        </div>

    </nav><!-- navbar -->
  




</header>