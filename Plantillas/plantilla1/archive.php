<?php get_header(); ?>

<div id="content">

	<?php if (have_posts()): ?>
	
		<div>
			<?php $post = $posts[0]; ?>
			<h2 class="pagetitle">
				<?php if (is_category()): ?>
					Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category
				<?php elseif (is_day()): ?>
					Archive for <?php the_time('F jS, Y'); ?>
				<?php elseif (is_month()): ?>
					Archive for <?php the_time('F, Y'); ?>
				<?php elseif (is_year()): ?>
					Archive for <?php the_time('Y'); ?>
				<?php elseif (is_author()): ?>
					Author Archive
				<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])): ?>
					Blog Archives
				<?php endif; ?>
			
			</h2>
			<div class="entry">&nbsp;</div>
		</div>
	
		<?php while (have_posts()) : the_post(); ?>

			<div class="post" id="post-<?php the_ID(); ?>">
				<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div class="entry">
				<?php the_excerpt(); ?>
				<p class="links">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="more">Read full article</a>
					<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
					<?php comments_popup_link('No Comments', '1 Comment', '% Comments', 'comments'); ?>
				</p>
				</div>

			</div>

		<?php endwhile; ?>
	
		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;') ?></div>
		</div>
	
	<?php else: ?>
	
		<div class="post">
			<h2 class="title">Not Found</h2>
		</div>
			
	<?php endif; ?>

</div>
<!-- end content -->


<?php get_sidebar(); ?>

<?php get_footer(); ?>
