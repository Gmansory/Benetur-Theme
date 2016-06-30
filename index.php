<?php get_header(); ?>


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