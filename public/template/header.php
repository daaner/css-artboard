<?php
  $base = '/';
  $site_name = 'Test gtid';

  //default
  $def_title = 'Test';
  $def_description = 'test desc';
?>

<!DOCTYPE html>
<html lang="ru">
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php //title
    if (!isset($title)) {
      $title_site = $def_title;
    } else {
      $title_site = $title . ' - ' . $site_name;
    }
    ?>
    <title><?php echo $title_site ?></title>
    <meta property="og:title" content="<?php echo $title_site ?>">

    <meta content="true" name="HandheldFriendly">
    <meta content="width" name="MobileOptimized">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="robots" content="index,follow">
    <meta http-equiv="content-language" content="ru">

    <?php //favicon
      $fav = $base . 'favicon.ico';
    ?>
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $fav ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $fav ?>">
    <meta name="msapplication-TileImage" content="<?php echo $fav ?>">

    <?php //canonical
    if (!isset($canonical)) {
      $canonical = $base;
    }
    ?>
    <link rel="canonical" href="<?php echo $canonical ?>">

    <?php //description
    if (!isset($description)) {
      $description = $def_description;
    }
    ?>
    <meta name="description" content="<?php echo $description ?>">
    <meta property="og:description" content="<?php echo $description ?>">


    <meta property="og:type" content="website">
    <meta property="og:image:alt" content="<?php echo $site_name ?>">
    <meta property="og:site_name" content="<?php echo $site_name ?>">
    <meta property="og:url" content="<?php echo $base ?>">
    <meta property="og:locale" content="en-GB">

    <link href="<?php echo $base ?>css/style.css" rel="stylesheet">

  </head>
  <body>
