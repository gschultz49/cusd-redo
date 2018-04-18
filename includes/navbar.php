<?php //core navbar HTML ?>

<ul class="sidenav" id="mobile-menu">
  <li><a class="dropdown-links" href="index.php">Home</a></li>
  <li> <a class="dropdown-links" href="whatiscompost.php">What-Compost</a></li>
  <li> <a class="dropdown-links" href="whatthezoodoes.php">What-Zoo</a></li>
  <li> <a class="dropdown-links" href="whatyoucando.php">What-You</a></li>
  <li><a class="dropdown-links" href="products.php">Products</a></li>
  <li><a class="dropdown-links" href="contact.php">Contact</a></li>
</ul>

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content" >
  <li> <a class="dropdown-links" id="whatiscompost" href="whatiscompost.php">What is Compost?</a></li>
  <li> <a class="dropdown-links" id="whatthezoodoes" href="whatthezoodoes.php">What the Zoo does</a></li>
  <li> <a class="dropdown-links" id="whatyoucando" href="whatyoucando.php">What you Can Do</a></li>
</ul>

<nav class="nav-controller">
  <div class="nav-wrapper">
    <!-- <a href="#!" class="brand-logo">Logo</a> -->
    <a href="index.php" class="brand-logo hide-on-med-and-down"><img class ="redo-logo" src = "img/redo-lego.png" alt="LOGO"></a>
    <ul class="links right hide-on-med-and-down">
      <li class="top-links"> <a class="black-links"id="index" href="index.php">Home</a></li>
      <!-- Dropdown Trigger -->
      <li class="top-links"><a class="dropdown-trigger black-links" href="#!" data-constrainWidth="false" data-target="dropdown1">Compost<i class="material-icons right">arrow_drop_down</i></a></li>
      <li class="top-links"> <a class="black-links" id="products" href="products.php">Products</a></li>
      <li class="top-links"> <a class="black-links" id="contact" href="contact.php">Contact</a></li>

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
      <li> <a id="whatyoucando" href="whatyoucando.php">What-You</a></li>
      <li> <a id="products" href="products.php">Products</a></li>
      <li> <a id="contact" href="contact.php">Contact</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>

    </ul>
  </div>
</div> -->
