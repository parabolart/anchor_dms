<?php theme_include('header'); ?>

<section class="sheet answer" id="article-<?php echo article_id(); ?>">
	<header class="ribbon"><h5>DEATH MOUNTAIN SOUND</h5><h4><?php echo page_title(); ?><h4></header>
	
	<article>
		<?php echo page_content(); ?>
	</article>
</section>

<?php theme_include('footer'); ?>