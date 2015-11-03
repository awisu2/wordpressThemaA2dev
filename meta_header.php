<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <!--[if lt IE 9]>
    <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript"></script>
  <![endif]-->
  <title><?php echo wp_title(":", false, true) . get_bloginfo("name"); ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="">

  <?php include_once("parts/jquery.php") ?>
  <?php include_once("parts/bootstrap.php") ?>

  <link rel=stylesheet href=<?php echo get_bloginfo("stylesheet_directory")."/main.css"; ?> />

  <?php include_once("parts/analyticstracking.php") ?>
  <?php include_once("parts/javascript.php") ?>
</head>

