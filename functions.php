<?php 

//Contact form


if (isset($_POST['contact'])) {

	$email =  $_POST['email'];
	$subj =  $_POST['subj'];
	$msg =  $_POST['msg'];

	if (empty($email) || empty($subj) || empty($msg)) {
		$response = ['status' => 'EMPTY','message' => pll__('ყველა ველის შევსება სავალდებულოა.')];
		echo json_encode($response);
	}else{

		$to = 'babunashvilidato@gmail.com';
		$subject = $subj;
		$body = $msg;
		$headers = [];
		$headers[] = 'Content-Type: text/html; charset=UTF-8';
		$headers[] = 'From: Benetur <'.$email.'>';
		$headers[] = 'Cc: Benetur <'.$email.'>';

		$send = wp_mail( $to, $subject, $body, $headers );

		if ($send) {
			$response = ['status' => 'OK','message' => pll__('შეტყობინება გაგზავნილია.') ];
			echo json_encode($response);
		}else{
			$response = ['status' => 'ERROR','message' => pll__('სამწუხაროდ დაფიქსირდა შეცდომა.გთხოვთ ცადეთ ხელახლა.')];
			echo json_encode($response);
		}

	}

	die();

}


//XML Import Page

add_action( 'admin_menu', 'my_plugin_menu' );


function my_plugin_menu() {
	add_options_page( 'XML ფაილის იმპორტი', 'XML ფაილის იმპორტი', 'read', 'import-xml', 'my_plugin_options' );
}

function my_plugin_options() {
	if ( !current_user_can( 'read' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	} ?>


	<h2 style='font-family: "Times New Roman", Times, sans-serif;'>XML ფაილის იმპორტი</h2>

	<form method="post" action="/?action=import-xml"> 
		<table class="form-table">
			<tr valign="top">
				<th scope="row" style='font-family: "Times New Roman", Times, sans-serif;'>აირჩიეთ XML ფაილი:</th>
				<td><input type="file" name="file"/></td>
			</tr>
		</table>
		<input type='hidden' name='action' value='add-notify'>
		<?php submit_button('იმპორტი'); ?>
	</form>
	<?php
}



// Removes ul class from wp_nav_menu



function remove_ul ( $menu ){

	return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );

}


add_filter( 'wp_nav_menu', 'remove_ul' );

function add_menuclass($ulclass) {
	return preg_replace('/<a /', '<a class="page-scroll"', $ulclass, -1);
}
add_filter('wp_nav_menu','add_menuclass');

//menu
function register_my_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
			)
		);

}

add_action( 'init', 'register_my_menus' );


//custom type

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'partners',
		array(
			'labels' => array(
				'name' => __( 'პარტნიორები' ),
				'singular_name' => __( 'პარტნიორები' )
				),
			'public' => true,
			'has_archive' => true,
			'supports'  =>  array('title', '','','thumbnail'),
			)
		);
}

add_action( 'init', 'create_post_type3' );
function create_post_type3() {
	register_post_type( 'hotels',
		array(
			'labels' => array(
				'name' => __( 'სასტუმროები' ),
				'singular_name' => __( 'სასტუმროები' )
				),
			'public' => true,
			'has_archive' => true,
			'supports'  =>  array('title', '','page-attributes','thumbnail'),
			)
		);
}

add_action( 'init', 'create_post_type4' );
function create_post_type4() {
	register_post_type( 'tours',
		array(
			'labels' => array(
				'name' => __( 'ტურები' ),
				'singular_name' => __( 'ტურები' )
				),
			'public' => true,
			'has_archive' => true,
			'supports'  =>  array('title', '','page-attributes','thumbnail'),
			)
		);
}

add_action( 'init', 'create_post_type5' );
function create_post_type5() {
	register_post_type( 'ticket',
		array(
			'labels' => array(
				'name' => __( 'ბილეთები' ),
				'singular_name' => __( 'ბილეთები' )
				),
			'public' => true,
			'has_archive' => true,
			'supports'  =>  array('title', '','page-attributes','thumbnail'),
			)
		);
}

add_action( 'init', 'create_post_type2' );
function create_post_type2() {
	register_post_type( 'testimonials',
		array(
			'labels' => array(
				'name' => __( 'შტაბეჭდილებები' ),
				'singular_name' => __( 'შტაბეჭდილებები' )
				),
			'public' => true,
			'has_archive' => true,
			'supports'  =>  array('title', 'editor','','thumbnail'),
			)
		);
}


add_theme_support( 'post-thumbnails' ); 

//get thumb
function getPostThumbUrl($id,$size){

	$thumb_id = $id;
	$thumb_url = wp_get_attachment_image_src($thumb_id,$size, true);

	return $thumb_url;
}

function getPostContent($id){



$my_postid = $id;//This is page id or post id



$content_post = get_post($my_postid);



$content = $content_post->post_content;



$content = apply_filters('the_content', $content);



$content = str_replace(']]>', ']]&gt;', $content);



return $content;



}



function gohome($menu){
  
   return str_replace('#', esc_url( home_url( '/' ) ).'#', $menu);

}

add_filter('wp_nav_menu','gohome');



//making the meta box (Note: meta box != custom meta field)
function wpse_add_custom_meta_box_2() {
   add_meta_box(
       'custom_meta_box-2',       // $id
       'დამატებითი ინფორმაცია',                  // $title
       'show_custom_meta_box_2',  // $callback
       'tours',                 // $page
       'normal',                  // $context
       'high'                     // $priority
   );
}
add_action('add_meta_boxes', 'wpse_add_custom_meta_box_2');


//making the meta box (Note: meta box != custom meta field)
function wpse_add_custom_meta_box_3() {
   add_meta_box(
       'custom_meta_box-3',       // $id
       'დამატებითი ინფორმაცია',                  // $title
       'show_custom_meta_box_3',  // $callback
       'tours',                 // $page
       'normal',                  // $context
       'high'                     // $priority
   );
}
add_action('add_meta_boxes', 'wpse_add_custom_meta_box_3');

 



//showing custom form fields
function show_custom_meta_box_2() {
    global $post;

    // Use nonce for verification to secure data sending
    wp_nonce_field( basename( __FILE__ ), 'wpse_our_nonce' );

    ?>

    <!-- my custom value input -->
    <label>პაკეტის ტიპი:</label>
    <select name='tour-type'>
       <option value='0'>Hotel + Air ticket + Transfer + Insurance</option>
    </select>

<br>
<br>

    <label>საიდან:</label>
    <select name='tour-to-country'>
       <option value='0'>საქართველო</option>
    </select>
    <select name='tour-to'>
       <option value='0'>თბილისი</option>
    </select>


    <label>სად:</label>
    <select name='tour-to-country'>
       <option value='0'>საქართველო</option>
    </select>
    <select name='tour-to'>
       <option value='0'>თბილისი</option>
    </select>


    <br>
    <br>
<label>დაწყება:</label>
<input type='date' name='tour-start'>

<label>დასრულება:</label>
<input type='date' name='tour-finish'>


    <?php
}
 

//showing custom form fields
function show_custom_meta_box_3() {
    global $post;

    // Use nonce for verification to secure data sending
    wp_nonce_field( basename( __FILE__ ), 'wpse_our_nonce' );

    ?>

  
    

    <?php
}



//now we are saving the data
function wpse_save_meta_fields2( $post_id ) {

  // verify nonce
  if (!isset($_POST['wpse_our_nonce']) || !wp_verify_nonce($_POST['wpse_our_nonce'], basename(__FILE__)))
      return 'nonce not verified';

  // check autosave
  if ( wp_is_post_autosave( $post_id ) )
      return 'autosave';



  //so our basic checking is done, now we can grab what we've passed from our newly created form
  $tourType = $_POST['tour-type'];
  $tourFrom = $_POST['tour-from'];
  $tourTo = $_POST['tour-to'];
  $tourStart = $_POST['tour-start'];
  $tourFinish = $_POST['tour-finish'];

  update_post_meta( $post_id, 'tour-type', $tourType );
  update_post_meta( $post_id, 'tour-from', $tourFrom );
  update_post_meta( $post_id, 'tour-to', $tourTo );
  update_post_meta( $post_id, 'tour-start', $tourStart );
  update_post_meta( $post_id, 'tour-finish', $tourFinish );

}
add_action( 'save_post', 'wpse_save_meta_fields2' );
add_action( 'new_to_publish', 'wpse_save_meta_fields2' );


?>