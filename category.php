<?php get_header(); ?>


<div class="row">

	<div class="about-text">
		<div class="section-title geo3">
			<h2><?php echo single_cat_title("", false); ?></h2>
			<hr>
			<div class="clearfix"></div>
		</div>


		<?php 
		$paged = (get_query_var('page')) ? get_query_var('page') : 1;
		$pp = 5;
		$off = $pp*($paged-1);
		$args = array(
			'posts_per_page'   => $pp,
			'offset'           => $off,
			'category'         => [11,13],
			'category_name'    => '',
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
			);

		$args2 = array(
			'posts_per_page'   => 500000000,
			'offset'           => 0,
			'category'         => [11,13],
			'category_name'    => '',
			'orderby'          => 'date',
			'order'            => 'DESC',
			'include'          => '',
			'exclude'          => '',
			'meta_key'         => '',
			'meta_value'       => '',
			'post_type'        => 'post',
			'post_mime_type'   => '',
			'post_parent'      => '',
			'author'	   => '',
			'post_status'      => 'publish',
			'suppress_filters' => true 
			);

		$pages = ceil( count(get_posts($args2)) / $pp);

		$posts_array = get_posts( $args ); ?>

		<?php  foreach ($posts_array as $key => $value) { ?>

		<div class="tours">
			<div class="thumb"><a href="<?php echo get_permalink($value->ID); ?>"><img src="<?php echo getPostThumbUrl(get_post_thumbnail_id($value->ID),array(150,150))[0]; ?>" class="img-re"></a></div>
			<div class="title"><a href="<?php echo get_permalink($value->ID); ?>" <?php if($_COOKIE['pll_language'] != 'en') { echo " style='font-family:Archy EDT;' "; } ?>><?php echo get_the_title($value->ID); ?></a></div>
			<div class="price">5800 USD</div>
			<div class="read geo3"><a href="<?php echo get_permalink($value->ID); ?>">სრულად ნახვა</a></div>
			<a href="#" class="book geo3">დაჯავშნა</a>

		</div>

		<?php } ?>
        <?php if($pages > 1): ?>
		<nav>
			<ul class="pagination">
				<li>
					<a href="<?php if($page > 1 ){ echo '?page='.($page-1); }else{ echo "#"; } ?>" aria-label="Previous">
						<span aria-hidden="true">&laquo;</span>
					</a>
				</li>
				 <?php 
                     foreach (range(0,($pages-1),1) as $key => $num) { ?>
                     	<li><a href="?page=<?php echo $num+1; ?>"><?php echo $num+1; ?></a></li>
                    <?php }  ?>
				<li>
					<a href="<?php if($page < $pages ){ echo '?page='.($page+1); }else{ echo "#"; } ?>" aria-label="Next">
						<span aria-hidden="true">&raquo;</span>
					</a>
				</li>
			</ul>
		</nav>
	<?php endif; ?>


	</div>


	<?php get_footer(); ?>