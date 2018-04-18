<?php //core navbar HTML ?>

<!-- sidebar -->
<ul class="sidenav" id="mobile-menu">
  <li><a class="dropdown-links" href="index.php">Home</a></li>
  <li> <a class="dropdown-links" href="whatiscompost.php">What is Compost?</a></li>
  <li> <a class="dropdown-links" href="whatthezoodoes.php">What the Zoo Does</a></li>
  <li> <a class="dropdown-links" href="whatyoucando.php">What You Can Do</a></li>
  <li><a class="dropdown-links" href="products.php">Products</a></li>
  <li><a class="dropdown-links" href="process.php">Process</a></li>
  <li><a class="dropdown-links" href="contact.php">Contact</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content" >
  <li> <a class="dropdown-links" id="whatthezoodoes" href="whatthezoodoes.php">What the Zoo does</a></li>
  <li> <a class="dropdown-links" id="whatyoucando" href="whatyoucando.php">What You Can Do</a></li>
  <li> <a class="dropdown-links" id="whatiscompost" href="whatiscompost.php">What is Compost?</a></li>
</ul>

<nav class="nav-controller">
  <div class="nav-wrapper">
    <a href="index.php" class="brand-logo hide-on-med-and-down"><img class ="redo-logo" src = "img/redo-lego.png" alt="LOGO"></a>
    <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons black-text">menu</i></a>
    <ul class="links right hide-on-med-and-down">
      <li class="top-links"> <a class="black-links" id="index" href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->
      <li class="top-links"> <a class="dropdown-trigger black-links" href="#!" data-constrainWidth="false" data-target="dropdown1">Compost<i class="material-icons right">arrow_drop_down</i></a></li>
      <li class="top-links"> <a class="black-links" id="products" href="products.php">Products</a></li>
      <li class="top-links"> <a class="black-links" id="process" href="process.php">Process</a></li>
      <li class="top-links"> <a class="black-links" id="contact" href="contact.php">Contact</a></li>
    </ul>
  </div>
</nav>
