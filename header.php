<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Benetur</title>
    <meta name="description" content="Benetur Travel Agency">
    <meta name="keywords" content="benetur, travel, agency,">
    <meta name="author" content="chagela.ge">
    
    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/font-awesome/css/font-awesome.css">

    <!-- Slider
    ================================================== -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="<?php echo get_stylesheet_directory_uri(); ?>/css/style2.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/modernizr.custom.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>
    <!-- Navigation
    ==========================================-->
    <nav id="tf-menu" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand " href="index.html">
          Benetur<span class="color">.ge</span></a>
      </div>

      <div class="lan pull-right">
        <a href="<?php echo str_replace(['ka/','en/'],'',esc_url( home_url( '/' ) )); ?>en"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"></a>
        <a href="<?php echo str_replace(['ka/','en/'],'',esc_url( home_url( '/' ) )); ?>ka"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHkSURBVHjaYnz9+jUDDPz79w9CsslIMvxl+Pb48T8w+PPnD1wKIIBYgJSIiMj/9+/+XjjPpG/AKCj0/z/Dr46O/39+80tK/geC9+//7N/LaGrGICl1584dgABigpj9+/LFd2eO/b54DqiAgeH/32dP/z6BGv/z3OmX+7b/PH4YqAxoE0AAgWwAKmK1dRDg5WHRN4Zwgcb///37Pxiw2DsJsbOxmFkB2UDXAQQQ49fcdNaA4P8fPzEwMf7/9ev/37//v3//c/woUAOTkfF/NnagCAMz079vP5kE+F7U1wAEEMuPyTOZhESADvj/58//338YgAb/+/ufi+v/3z9/Nm/8/+M7UPDfb5CFzHJyXx6/BAggFpboUCYTMwYVVQZGxn8/f4Jt+Pbn1EmgfiY7RwY2tv///jAzMv398ZNJUIht+y6AAAAxAM7/AOXl5fz8/Pv7+/O7t/r6+vn5+fj4+O5ZVO1STfX19fT09PPz8+eTi/Ly8vPz88PDwwKICRLAPzatfb9r27e1KyAe/f8b4enP0ya82bf7U3cT2NP/AAKIBYiBLHYjM/43b9jNrCChzCguwfDrJyMjI5DN4x/K8v07q6cfJOIAAojx/v370IgEQwibTV8faO+XkyeBXIg6CACyAQIMANK2TnMREZBLAAAAAElFTkSuQmCC"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right geo3">
        <?php echo gohome(remove_ul(wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => false,'container' => false ) ))); ?>
    </ul>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>
