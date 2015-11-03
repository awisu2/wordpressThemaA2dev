<?php
function getJavascriptTag($name){
	$src=get_template_directory_uri().'/js/'.$name.'.js';
	return '<script type="text/javascript" src="'.$src.'"></script>';
}

if(is_single()){
	echo getJavascriptTag("innerLinks");
}

