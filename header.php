<?php get_template_part("meta_header"); ?>
<header>
<h1>
	<a href="<?php echo get_bloginfo("wpurl"); ?>"><?php echo get_bloginfo("name"); ?></a>
	<div class="description clearfix">
		<div class="text"><?php echo get_bloginfo("description"); ?></div>
		<div class="search"><?php get_search_form(); ?></div>
	</div>
</h1>
</header>
