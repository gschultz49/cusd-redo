<?php
// for changing team leads...
$teamLead= "Zeyu Hu";
$teamLeadEmail = "zh75@cornell.edu";
$teamLeadImg = "img/zeyu.jpeg";
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
  <head>
    <?php include "includes/header-core.php"; ?>
  </head>
  <body id="contact-page">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php include "includes/navbar.php"; ?>
    <?php //this page's content goes here ?>

     <div class="container">
       <div class="row lead">
         <div class="col s12 m6">
           <img class="lead-img" src= "<?php echo $teamLeadImg; ?>" alt="<?php echo $teamLead; ?>">
         </div>
         <div class="col s12 m6">
           <h1> <?php echo $teamLead; ?> </h1>
           <p>Composting is the natural process of recycling organic materials into nutrient rich soil amendment. Our team wishes to harvest the ample organic matter (AKA animal excrement) produced by the Smithsonian Zoo and use it to its full potential. Through this partnership, REDO is developing innovative solutions for zoos across the nation to handle their animal manure and food waste. We view waste not as a problem, but as a valued asset with environmental, economic, social, and educational worth. </p>

           <p class="contact">Any questions? Feel free to reach out to me at<a href="mailto:<?php echo $teamLeadEmail; ?>"> <?php echo $teamLeadEmail; ?></a></p>
         </div>
       </div>
       <div class="row grid">
         <div class="col s12 m4 member">
           <img class="member-img" src= "img/zeyu.jpeg" alt="MEMBER">
           <p> Kenneth Young </p>
           <p>Package Designer </p>
         </div>
         <div class="col s12 m4 member">
           <img class="member-img" src= "img/zeyu.jpeg" alt="MEMBER">
           <p> Kenneth Young </p>
           <p>Package Designer </p>
         </div>
         <div class="col s12 m4 member">
           <img class="member-img" src= "img/zeyu.jpeg" alt="MEMBER">
           <p> Kenneth Young </p>
           <p>Package Designer </p>
         </div>
         <div class="col s12 m4 member">
           <img class="member-img" src= "img/zeyu.jpeg" alt="MEMBER">
           <p> Kenneth Young </p>
           <p>Package Designer </p>
         </div>
         <div class="col s12 m4 member">
           <img class="member-img" src= "img/zeyu.jpeg" alt="MEMBER">
           <p> Kenneth Young </p>
           <p>Package Designer </p>
         </div>
         <div class="col s12 m4 member">
           <img class="member-img" src= "img/zeyu.jpeg" alt="MEMBER">
           <p> Kenneth Young </p>
           <p>Package Designer </p>
         </div>
       </div>
     </div>
     <?php include "includes/footer.php"; ?>
    <?php include "includes/js-scripts.php"; ?>
  </body>
</html>
