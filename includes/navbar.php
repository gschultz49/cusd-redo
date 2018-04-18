<?php //core navbar HTML ?>

<ul class="sidenav" id="mobile-menu">
  <li><a href="index.php">Home</a></li>
  <li> <a href="whatiscompost.php">What-Compost</a></li>
  <li> <a href="whatthezoodoes.php">What-Zoo</a></li>
  <li> <a href="whatyoucandoathome.php">What-You</a></li>
  <li><a href="products.php">Products</a></li>
  <li><a href="contact.php">Contact</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li> <a id="whatiscompost" href="whatiscompost.php">What is Compost?</a></li>
  <li> <a id="whatthezoodoes" href="whatthezoodoes.php">What the Zoo does?</a></li>
  <li> <a id="whatyoucandoathome" href="whatyoucandoathome.php">What you can do</a></li>
</ul>
<nav class="nav-controller">
  <div class="nav-wrapper">
    <!-- <a href="#!" class="brand-logo">Logo</a> -->
    <a href="index.php" class="brand-logo hide-on-med-and-down"><img class ="redo-logo" src = "img/redo-lego.png" alt="LOGO"></a>
    <ul class="links right hide-on-med-and-down">
      <li> <a id="index" href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Compost<i class="material-icons right">arrow_drop_down</i></a></li>
      <li> <a id="products" href="products.php">Products</a></li>
      <li> <a id="contact" href="contact.php">Contact</a></li>

    </ul>
  </div>
</nav>


<!-- Dropdown Structure -->
<!-- <ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">one</a></li>
  <li><a href="#!">two</a></li>
  <li class="divider"></li>
  <li><a href="#!">three</a></li>
</ul>

<div class="nav-wrapper">
  <div id ="navbar">
    <a href="index.php" class="brand-logo hide-on-med-and-down"><img class ="redo-logo" src = "img/redo-lego.png" alt="LOGO"></a>
    <a href="#" data-target="mobile-menu" class="sidenav-trigger hide-on-med-and-up"><i class="material-icons">menu</i></a>
    <ul class="links right hide-on-med-and-down ">
      <li> <a id="index" href="index.php">Home</a></li>
      <li> <a id="whatiscompost" href="whatiscompost.php">What-Compost</a></li>
      <li> <a id="whatthezoodoes" href="whatthezoodoes.php">What-Zoo</a></li>
      <li> <a id="whatyoucandoathome" href="whatyoucandoathome.php">What-You</a></li>
      <li> <a id="products" href="products.php">Products</a></li>
      <li> <a id="contact" href="contact.php">Contact</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>

    </ul>
  </div>
</div> -->
