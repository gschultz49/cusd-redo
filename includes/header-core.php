<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon//site.webmanifest">
<link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#f18aad">
<meta name="msapplication-TileColor" content="#f18aad">
<meta name="theme-color" content="#ffffff">

<title>REDO</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" type="text/css" href="css/materialize-src/sass/materialize.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>


<?php
      // <link rel="stylesheet" type="text/css" href="css/style.css">
      //creates versions for each time the style sheet is updated
      $style_path = 'css/style.css';
      $version = filemtime($style_path);
      echo "<link rel='stylesheet' type='text/css' href='$style_path?ver=$version'>";
  ?>
