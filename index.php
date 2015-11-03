<?php get_header(); ?>

<div id="wrapper" class="row">

<div id="contents" class="col-xs-9">

<nav>
<a href="/"><span class="glyphicon glyphicon-home" /></a>
<?php
$glyphicon="";
$val="";
$isList=false;
if (is_single()) { // 投稿個別ページ
	$glyphicon="glyphicon-pencil";
} else if (is_tag()) { // タグページ
	$glyphicon="glyphicon-tag";
} else if (is_date()) { // アーカイブページ
	$glyphicon="glyphicon-calendar";
} else if (is_category()) { // カテゴリページ
	$glyphicon="glyphicon-list";
} else if (is_search()) { // 検索結果ページ
	$glyphicon="glyphicon-search";
} else if (is_page()) { // 個別ページ
	$glyphicon="glyphicon-pencil";
} else {
	$isList=true;
}


if($glyphicon) {
	echo ' &raquo; <span class="glyphicon ' . $glyphicon . '"></span> ' . wp_title("", false);
}
?>
</nav>

<?php
if($isList){
	// 次のページ対応
	$paged = get_query_var('paged');
 	query_posts("posts_per_page=10&paged=$paged");
}
?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="content">
	<h1>
		<?php the_title('<a href="'.get_page_link(get_the_ID()).'">', "</a>"); ?>
	</h1>

	<div class="time">
		<span style="font-size: 10pt;">
		<span class="glyphicon glyphicon-list"></span> : <?php the_category(","); ?>
		<?php the_tags('<span class="glyphicon glyphicon-tags"></span> : ', ",", ""); ?>
		</span>
		<?php the_time( "Y/m/d H:i:m" ); ?>
	</div>

	<?php if(is_single()){ ?>
		<div id="innerLinks" style="position: relative; float: right; font-size: 8pt; border: solid 1px #666; background-color: #f5f5f5; padding: 3px; max-width: 250px; margin-left: 3px; margin-bottom: 3px;"></div>
	<?php } ?>

	<div><?php the_content(); ?></div>

	<?php if(is_single()){ ?>
	<div class="pager">
		<?php previous_post_link(); ?> | 他の投稿 | <?php next_post_link(); ?>　
	</div>
	<?php } ?>

	<div>
	<?php
	if( is_singular('post') ) {
		echo "<h2>コメント</h2>";
		comments_template();
	}
	?>
	</div>
</div>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<div class="pager">
	<div class="previous"><?php previous_posts_link(); ?></div>
	<div class="next"><?php next_posts_link(); ?></div>
</div>

</div>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
<?php get_template_part("meta_footer"); ?>
