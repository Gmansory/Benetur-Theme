<?php get_header(); ?>
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

                <a class="navbar-brand " href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo"></a>
            </div>

            <div class="lan pull-right">
                <a href="<?php echo str_replace(['ka/','en/'],'',esc_url( home_url( '/' ) )); ?>en"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHzSURBVHjaYkxOP8IAB//+Mfz7w8Dwi4HhP5CcJb/n/7evb16/APL/gRFQDiAAw3JuAgAIBEDQ/iswEERjGzBQLEru97ll0g0+3HvqMn1SpqlqGsZMsZsIe0SICA5gt5a/AGIEarCPtFh+6N/ffwxA9OvP/7//QYwff/6fZahmePeB4dNHhi+fGb59Y4zyvHHmCEAAAW3YDzQYaJJ93a+vX79aVf58//69fvEPlpIfnz59+vDhw7t37968efP3b/SXL59OnjwIEEAsDP+YgY53b2b89++/awvLn98MDi2cVxl+/vl6mituCtBghi9f/v/48e/XL86krj9XzwEEEENy8g6gu22rfn78+NGs5Ofr16+ZC58+fvyYwX8rxOxXr169fPny+fPn1//93bJlBUAAsQADZMEBxj9/GBxb2P/9+S/R8u3vzxuyaX8ZHv3j8/YGms3w8ycQARmi2eE37t4ACCDGR4/uSkrKAS35B3TT////wADOgLOBIaXIyjBlwxKAAGKRXjCB0SOEaeu+/y9fMnz4AHQxCP348R/o+l+//sMZQBNLEvif3AcIIMZbty7Ly6t9ZmXl+fXj/38GoHH/UcGfP79//BBiYHjy9+8/oUkNAAHEwt1V/vI/KBY/QSISFqM/GBg+MzB8A6PfYC5EFiDAABqgW776MP0rAAAAAElFTkSuQmCC"></a>
                <a href="<?php echo str_replace(['ka/','en/'],'',esc_url( home_url( '/' ) )); ?>ka"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAALCAIAAAD5gJpuAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAHkSURBVHjaYnz9+jUDDPz79w9CsslIMvxl+Pb48T8w+PPnD1wKIIBYgJSIiMj/9+/+XjjPpG/AKCj0/z/Dr46O/39+80tK/geC9+//7N/LaGrGICl1584dgABigpj9+/LFd2eO/b54DqiAgeH/32dP/z6BGv/z3OmX+7b/PH4YqAxoE0AAgWwAKmK1dRDg5WHRN4Zwgcb///37Pxiw2DsJsbOxmFkB2UDXAQQQ49fcdNaA4P8fPzEwMf7/9ev/37//v3//c/woUAOTkfF/NnagCAMz079vP5kE+F7U1wAEEMuPyTOZhESADvj/58//338YgAb/+/ufi+v/3z9/Nm/8/+M7UPDfb5CFzHJyXx6/BAggFpboUCYTMwYVVQZGxn8/f4Jt+Pbn1EmgfiY7RwY2tv///jAzMv398ZNJUIht+y6AAAAxAM7/AOXl5fz8/Pv7+/O7t/r6+vn5+fj4+O5ZVO1STfX19fT09PPz8+eTi/Ly8vPz88PDwwKICRLAPzatfb9r27e1KyAe/f8b4enP0ya82bf7U3cT2NP/AAKIBYiBLHYjM/43b9jNrCChzCguwfDrJyMjI5DN4x/K8v07q6cfJOIAAojx/v370IgEQwibTV8faO+XkyeBXIg6CACyAQIMANK2TnMREZBLAAAAAElFTkSuQmCC"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right geo3">
                    <?php echo remove_ul(wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => false,'container' => false ) )); ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Home Page
    ==========================================-->


    <div id="tf-home" class="text-center">

        <video autoplay="" loop="" poster="" muted="" id="bgvid">
        <source src="http://idecor.ge/benetur/img/1.mp4" type="video/mp4">
        </video>

        <div class="overlay">
            <div class="container">

                <div class="choose_option_wrap col-md-3">
                    <div class="choose_option">
                        <div class="row">
                            <p class="pack geo3 col-md-4 active-pack" data-target='pack1' style="border-right:2px solid #038bc1;font-size:15px; text-align:center;float:left;">პაკეტი</p>
                            <p class="pack geo3 col-md-4" data-target='pack2' style="border-right:2px solid #038bc1;font-size:15px; text-align:center;float:left;">სასტუმროები</p>
                            <p class="pack geo3 col-md-4" data-target='pack3' style="font-size:15px; text-align:center;float:left;">ბილეთები</p>

                        </div>
                        <form class="find_option pack1" action="index.php" method="post" id="package_search_form" style="padding-top:10px; padding-bottom:20px;">
                            <div class="option_title">პაკეტის ტიპი</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                    <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                    <option value="4" >hotel</option></select>
                            </div>
                            <div class="option_title">საიდან</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                        <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                        <option value="4" >hotel</option></select></div>
                            <div class="option_title">სად</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                <option value="4" >hotel</option></select></div>
                            <div class="option_title">სასტუმროს დასახელება</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                        <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                        <option value="4" >hotel</option></select></div>
                            <div class="option_title">გამგზავრების თარიღი</div>
                            <div class="option_type_big" style="width:45%; float:left;">
                                <input type='date' name='date-from' style='width:100%;'>
                            </div>
                            <div class="option_title" style="text-align:right; margin-top:-8%;">დაბრუნების თარიღი</div>
                            <div class="option_type_big" style="width:45%; float:right;">
                                 <input type='date' name='date-to' style='width:100%;'>
                                </div>
                            <button type='submit' class="btn geo3 srch">პაკეტის ძებნა</button>
                        </form>

                        <form class="find_option pack2" action="index.php" method="post" id="package_search_form" style="padding-top:10px; padding-bottom:20px;">
                            <div class="option_title">სასტუმროები</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                <option value="4" >hotel</option></select>
                            </div>
                            <div class="option_title">საიდან</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                    <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                    <option value="4" >hotel</option></select></div>
                            <div class="option_title">სად</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                            <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                            <option value="4" >hotel</option></select></div>
                            <div class="option_title">სასტუმროს დასახელება</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                                    <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                                    <option value="4" >hotel</option></select></div>
                            <div class="option_title">გამგზავრების თარიღი</div>
                            <div class="option_type_big" style="width:45%; float:left;">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                                            <option value="00" selected="selected"></option>
                                                                                                            <option value="4" >hotel</option></select></div>
                            <div class="option_title" style="text-align:right; margin-top:-8%;">დაბრუნების თარიღი</div>
                            <div class="option_type_big" style="width:45%; float:right;">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                                                    <option value="00" selected="selected"></option>
                                                                                                                    <option value="4" >hotel</option></select></div>
                            <button type='submit' class="btn geo3 srch">პაკეტის ძებნა</button>
                        </form>

                        <form class="find_option pack3" action="index.php" method="post" id="package_search_form" style="padding-top:10px; padding-bottom:20px;">
                            <div class="option_title">ბილეთები</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                <option value="4" >hotel</option></select>
                            </div>
                            <div class="option_title">საიდან</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                    <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                    <option value="4" >hotel</option></select></div>
                            <div class="option_title">სად</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                            <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                            <option value="4" >hotel</option></select></div>
                            <div class="option_title">სასტუმროს დასახელება</div>
                            <div class="option_type_big">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                                    <option value="00" selected="selected">აირჩიეთ პაკეტის ტიპი</option>
                                                                                                    <option value="4" >hotel</option></select></div>
                            <div class="option_title">გამგზავრების თარიღი</div>
                            <div class="option_type_big" style="width:45%; float:left;">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                                            <option value="00" selected="selected"></option>
                                                                                                            <option value="4" >hotel</option></select></div>
                            <div class="option_title" style="text-align:right; margin-top:-8%;">დაბრუნების თარიღი</div>
                            <div class="option_type_big" style="width:45%; float:right;">
                                <select name="package_type" id="package_type" class="form-control" style="display: block; width:100%;">
                                                                                                                    <option value="00" selected="selected"></option>
                                                                                                                    <option value="4" >hotel</option></select></div>
                            <button type='submit' class="btn geo3 srch">პაკეტის ძებნა</button>
                        </form>

                    </div>
                </div>





                <div class="content geo3 col-md-9 pull-right col-md-push-3">
                    <h1 style="color:#fff; font-size: 46px;"><?php echo pll__('იმოგზაურე ჩვენთან ერთად'); ?></h1>
                    <p class="lead geo1" style="font-size: 25px;">
                        <?php echo pll__('მთავარი ტექსტი'); ?>
                    </p>

                </div>

            </div>
        </div>
        <a href="#tf-about" class="fa fa-angle-down page-scroll"></a>
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/02.png" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <div class="about-text">
                        <div class="section-title geo3">
                            <h4><?php echo pll__('ჩვენს შესახებ'); ?></h4>
                            <h2><?php echo pll__('ორიოდე სიტყვა ჩვენს შესახებ'); ?></h2>
                            <hr>
                            <div class="clearfix"></div>
                        </div>
                        <p class="intro" <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?>>
                            <?php echo pll__('ჩვენს შესახებ ტექსტი მთავარი გვერდი'); ?>
                        </p>
                        <!-- <ul class="about-list">
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Mission</strong> - <em>We deliver uniqueness and quality</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Skills</strong> - <em>Delivering fast and excellent results</em>
                            </li>
                            <li>
                                <span class="fa fa-dot-circle-o"></span>
                                <strong>Clients</strong> - <em>Satisfied clients thanks to our experience</em>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center geo3">
                    <h2><?php echo pll__('ჩვენი პარტნიორები'); ?></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">


                    <?php
                    $type = 'partners';
                    $args=array(
                      'post_type' => $type,
                      'post_status' => 'publish',
                      'posts_per_page' => -1,
                      'caller_get_posts'=> 1
                      );

                    $my_query = null;
                    $my_query = new WP_Query($args);
                    if( $my_query->have_posts()) {
                      while ($my_query->have_posts()) : $my_query->the_post(); ?>

                        <div class="item">
                            <div class="thumbnail">
                                <img src="<?php echo getPostThumbUrl(get_post_thumbnail_id(),array(150,150))[0]; ?>" alt="..." class="img-circle team-img">
                                <div class="caption">
                                    <h3><?php the_title(); ?></h3>

                                </div>
                            </div>
                        </div>

                        <?php
                    endwhile;
                }
wp_reset_query();  // Restore global post data stomped by the_post().
?>


                </div>

            </div>
        </div>
    </div>


    <!-- Testimonials Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center geo3">
                    <h2><?php echo pll__('ჩვენი კლიენტების შტაბეჭდილებები'); ?></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div id="testimonial" class="owl-carousel owl-theme">

                            <?php
                            $type = 'testimonials';
                            $args=array(
                              'post_type' => $type,
                              'post_status' => 'publish',
                              'posts_per_page' => -1,
                              'caller_get_posts'=> 1
                              );

                            $my_query = null;
                            $my_query = new WP_Query($args);
                            if( $my_query->have_posts()) {
                              while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                <div class="item">
                                    <h5 <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?>><?php echo strip_tags(getPostContent(get_the_id())); ?></h5>
                                    <p <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?>>
                                        <?php the_title(); ?>
                                    </p>
                                </div>
                                <?php
                            endwhile;
                        }
                        wp_reset_query(); 

                        ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section
    ==========================================-->
    <div id="tf-testimonials" class="text-center">
        <div class="overlay">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="section-title center geo3">
                            <h2><?php echo pll__('კონტაქტი'); ?></h2>
                            <div class="line">
                                <hr>
                            </div>
                            <div class="clearfix"></div>

                        </div>

                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1" <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?>><?php echo pll__('ელ.ფოსტა'); ?></label>
                                        <input type="email" <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?> class="form-control cemail" name='email' id="exampleInputEmail1" placeholder="
                                        <?php echo pll__('ჩაწერე ელ.ფოსტა'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1" <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?>><?php echo pll__('თემა'); ?></label>
                                        <input type="text" <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?> class="form-control csubj" name='subj' id="exampleInputPassword1" placeholder="
                                        <?php echo pll__('თემა'); ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?>><?php echo pll__('წერილი'); ?></label>
                                <textarea class="form-control cmsg" <?php if($_COOKIE[ 'pll_language'] !='en' ) { echo " style='font-family:Archy EDT;' "; } ?>  name='msg' rows="3"></textarea>
                            </div>
                            <p class="messages pull-left"></p>
                            <button type="submit" class="btn tf-btn btn-default geo3 send-msg"><?php echo pll__('გაგზავნა'); ?></button>
                        </form>

                    </div>
                </div>

            </div>
        </div>

        <nav id="footer">
            <div class="container">
                <div class="pull-left fnav">
                    <p class="geo3">
                        <?php echo pll__('copyright'); ?>
                    </p>
                </div>
                <div class="pull-right fnav">
                    <ul class="footer-social">
                        <li><a href="https://www.facebook.com/benetur/?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/benetur_travel_agency/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.1.11.1.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/SmoothScroll.js"></script>
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.isotope.js"></script>

        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/owl.carousel.js"></script>

        <!-- Javascripts
    ================================================== -->
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/main.js"></script>

</body>

</html>