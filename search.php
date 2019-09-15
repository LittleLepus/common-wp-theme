<?php get_header(); ?>

<div id="content">

	<div id="inner-content" class="row">

		<main id="main" class="large-8 medium-8 columns first" role="main">
			<header>
				<h1 class="archive-title"><?php _e('Search Results for:', 'jointswp'); ?> <?php echo esc_attr(get_search_query()); ?></h1>
			</header>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part('assets/src/php/page-components/loop', 'archive'); ?>

				<?php endwhile; ?>

				<?php insert_page_navigation(); ?>

			<?php else : ?>

				<?php get_template_part('assets/src/php/page-components/content', 'missing'); ?>

			<?php endif; ?>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>