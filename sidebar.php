<div id="sidebar" class="col-xs-3">

<ul class="widget">
<?php
if ( function_exists('dynamic_sidebar') ) {
	dynamic_sidebar("sidebar01");
} else {
	echo "サイドバーウィジェットが無効になっています";
}
?>

<h2 id="pages"> 固定ページ</h2>
<ul>
<?php
$pages = get_pages(array(
	'post_type' => 'page',
));
foreach($pages as $page) {
	echo '<li><a href="' . $page->guid . '">' . $page->post_title . '</a></li>';
}
?>
</ul>

</ul>

</div>
