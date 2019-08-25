<?php get_header(); ?>
    <div id="content">
		<?php while ( have_posts() ) {
			the_post();
			the_content();
		} ?>
    </div>
<?php get_footer(); ?>