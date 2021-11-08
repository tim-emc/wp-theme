<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

$page_id = get_option( 'page_for_posts' );
?>
<div class="row g-0">
	<div class="col-md-12 d-none">
		<?php
			echo apply_filters( 'the_content', get_post_field( 'post_content', $page_id ) );

			edit_post_link( __( 'Edit', 'wp-theme' ), '<span class="edit-link">', '</span>', $page_id );
		?>
	</div><!-- /.col -->
	<div class="col-md-12">
		<?php
			get_template_part( 'archive', 'loop' );
		?>
	</div><!-- /.col -->
</div><!-- /.row -->
<!-- broadcast desktop -->
<?php
	if ( is_active_sidebar( 'seventh_widget_area' ) ) :
?>
	<?php
		dynamic_sidebar( 'seventh_widget_area' );
	?>
<?php
	endif;						
?>
<!-- section 1 -->
<?php
	if ( is_active_sidebar( 'fifth_widget_area' ) ) :
?>
	<?php
		dynamic_sidebar( 'fifth_widget_area' );
	?>
<?php
	endif;						
?>
<!-- section 2 -->
<div class="services container-fluid lazyload">
	<div class="container">
		<?php
			if ( is_active_sidebar( 'sixth_widget_area' ) ) :
		?>
			<?php
				dynamic_sidebar( 'sixth_widget_area' );
			?>
		<?php
			endif;						
		?>
		<div class="row text-center text-white py-3 " id="thing">
                <div class="col-2 offset-2">
                    <span class="icon-paint-format wow animate__animated animate__fadeInUp"></span>
                </div>
                <div class="col-2">
                    <span class="icon-bullhorn wow animate__animated animate__fadeInUp"></span>
                </div>
                <div class="col-2">
                    <span class="icon-ticket wow animate__animated animate__fadeInUp"></span>
                </div>
                <div class="col-2">
                    <span class="icon-cloud-check wow animate__animated animate__fadeInUp"></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-2">
                    <hr class="wow animate__animated animate__fadeInUp">
                </div>
                <div class="col-md-4 col-8 text-center">
                    <a class="btn btn-custom reverse wow animate__animated animate__fadeInUp" href="services">Services</a>
                </div>
                <div class="col-md-4 col-2">
                    <hr class="wow animate__animated animate__fadeInUp">
                </div>
            </div>
	</div>
</div>
<?php
get_footer();
