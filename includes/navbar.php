<?php //core navbar HTML ?>
<div class="nav-wrapper">
  <div id ="navbar">
    <a href="index.php" class="brand-logo hide-on-med-and-down"><img class ="redo-logo" src = "img/redo-lego.png"></a>
    <a href="#" data-target="mobile-menu" class="sidenav-trigger hide-on-med-and-up"><i class="material-icons">menu</i></a>
    <?php

    //figure out how to render a centered logo on small screens instead of just links

    // <a href="index.php" class="brand-logo left"><img class ="redo-logo" src = "img/redo-lego.png"></a>
    ?>
    <ul class="links right hide-on-med-and-down ">
      <li> <a id="index" href="index.php">Home</a></li>
      <li> <a id="mikey" href="mikey.php">Mikey</a></li>
      <li> <a id="compost" href="compost.php">Compost</a></li>
      <li> <a id="education" href="education.php">Education</a></li>
      <li> <a id="infographic" href="infographic.php">Infographic</a></li>
      <li> <a id="contact" href="contact2.php">Contact</a></li>
    </ul>
  </div>
</div>

<ul class="sidenav" id="mobile-menu">
  <li> <a id="index" href="index.php">Home</a></li>
  <li> <a id="mikey" href="mikey.php">Mikey</a></li>
  <li> <a id="compost" href="compost.php">Compost</a></li>
  <li> <a id="education" href="education.php">Education</a></li>
  <li> <a id="infographic" href="infographic.php">Infographic</a></li>
  <li> <a id="contact" href="contact2.php">Contact</a></li>
</ul>
