<?php
	//Add Thumbnail
	add_theme_support( 'post-thumbnails' );
	//Banner Superior
	function BannerSup() {
	    $labels = array(
	        'name' => __( 'Banner Superior' ),
	        'singular_name' => __( 'BannerSup' ),
	        'add_new' => __( 'Novo Banner' ),
	        'add_new_item' => __( 'Adicionar Novo Banner' ),
	        'edit_item' => __( 'Editar Banner' ),
	        'new_item' => __( 'Novo Banner' ),
	        'not_found' =>  __( 'Não foram encontrados Banner cadastrados' ),
	        'not_found_in_trash' => __( 'Não foram encontradas Banner na lixeira' ),
	    );
	    $args = array(
	        'labels' => $labels,
	        'menu_icon' => 'dashicons-cover-image',
	        'public' => true,
	        'hierarchical' => false,
	        'supports' => array(
	            'title',
	            'thumbnail',
	        ),
	    );
	    register_post_type( 'BannerSup', $args );
	}
	add_action( 'init', 'BannerSup' );
	//Banner Inferior
	function BannerInf() {
	    $labels = array(
	        'name' => __( 'Banner Inferior' ),
	        'singular_name' => __( 'BannerInf' ),
	        'add_new' => __( 'Novo Banner' ),
	        'add_new_item' => __( 'Adicionar Novo Banner' ),
	        'edit_item' => __( 'Editar Banner' ),
	        'new_item' => __( 'Novo Banner' ),
	        'not_found' =>  __( 'Não foram encontrados Banner cadastrados' ),
	        'not_found_in_trash' => __( 'Não foram encontradas Banner na lixeira' ),
	    );
	    $args = array(
	        'labels' => $labels,
	        'menu_icon' => 'dashicons-cover-image',
	        'public' => true,
	        'hierarchical' => false,
	        'supports' => array(
	            'title',
	            'thumbnail',
	        ),
	    );
	    register_post_type( 'BannerInf', $args );
	}
	add_action( 'init', 'BannerInf' );

	// META BOXES
	function get_custom_field( $value ) {
        global $post;
        $custom_field = get_post_meta( $post->ID, $value, true );
        if ( !empty( $custom_field ) )
            return is_array( $custom_field ) ? stripslashes_deep( $custom_field ) : stripslashes( wp_kses_decode_entities( $custom_field ) );
        return false;
    }
	/**
	 * Register the Meta box URL
	 */
	function link_add_custom_meta_box() {
		add_meta_box( 'link-meta-box', __( 'Configurar Link:', 'link' ), 'link_meta_box_output', 'BannerSup', 'normal', 'high' );
		add_meta_box( 'link-meta-box', __( 'Configurar Link:', 'link' ), 'link_meta_box_output', 'BannerInf', 'normal', 'high' );
	}
	add_action( 'add_meta_boxes', 'link_add_custom_meta_box' );
	/**
	 * Layout do Meta box URL
	 */
	function link_meta_box_output( $post ) {
		wp_nonce_field( 'my_link_meta_box_nonce', 'link_meta_box_nonce' ); 
		?>
		<p>
			<label for="link_textfield"><?php _e( 'Endereço do link', 'link' ); ?>:</label>
			<input type="text" name="link_textfield" id="link_textfield" size="50" value="<?php echo get_post_meta(  get_the_ID(), 'link_textfield', true ) ?>"/>
	    </p>
		<?php
	}
	/**
	 * Save the Meta box values URL
	 */
	function link_meta_box_save( $post_id ) {
		if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
		if( !isset( $_POST['link_meta_box_nonce'] ) || !wp_verify_nonce( $_POST['link_meta_box_nonce'], 'my_link_meta_box_nonce' ) ) return;
		if( !current_user_can( 'edit_post', get_the_id() ) ) return;
		if( isset( $_POST['link_textfield'] ) )
			update_post_meta( $post_id, 'link_textfield', esc_attr( $_POST['link_textfield'] ) );
	}
	add_action( 'save_post', 'link_meta_box_save' );

				
	/*	PAGINATION	*/
	function pagination($pages = '', $range = 4)
	{  
	 $showitems = ($range * 2)+1;  
	 global $paged;
	 if(empty($paged)) $paged = 1;
	 if($pages == ''){
	     global $wp_query;
	     $pages = $wp_query->max_num_pages;
	     if(!$pages){
	         $pages = 1;
	     }
	 }   
	 if(1 != $pages){
	     echo "<div class=\"pagination\">";
	     if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; &laquo;</a>";
	     if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
	     for ($i=1; $i <= $pages; $i++){
	         if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
	             echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
	         }
	     }
	     if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";  
	     if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo; &raquo;</a>";
	     echo "</div>\n";
	 }
	}
	/*	SEARCH FIX	*/
	function SearchFilter($query) {
	if ($query->is_search) {
		$query->set('post_type', 'post');
	}
	return $query;
	}
	add_filter('pre_get_posts','SearchFilter');
?>