<footer>
<?php

$shows = array(
	"name",
	"description",
	"wpurl",
	"url",
	"admin_email",
	"charset",
	"version",
	"html_type",
	"text_direction",
	"language",
	"language",
	"stylesheet_url",
	"stylesheet_directory",
	"template_url",
	"template_directory",
	"pingback_url",
	"atom_url",
	"rdf_url",
	"rss_url",
	"rss2_url",
	"comments_atom_url",
	"comments_rss2_url",
	"siteurl",
	"home",
);

foreach($shows as $show) {
//	echo $show . " : " . get_bloginfo($show). "<br />";
}

?>

<p class="debug"></p>
</footer>
