<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?= base_url() ?>favicon.ico">

  <title>Jumbotron Template for Bootstrap</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url() ?>dist/css/bootstrap.min.css" rel="stylesheet">


  <!-- Custom styles for this template -->
  <link href="<?= base_url() ?>custom.css" rel="stylesheet">

  <script src="https://use.fontawesome.com/b91a308fba.js"></script>



<link href="<?= base_url() ?>flags.css" rel="stylesheet">

    </head>
    <body>
      <div id="top_strip">
        <div class="container">
          <span class="today_date">Monday, March 12 2017</span> 
          <span class="top_right_links">
            <a href="<?= base_url() ?>members/display">OUR MEMBERS</a>
            <a href="#">GET IN TOUCH</a>
            <a href="#">JOIN FOR FREE</a>
            <a href="#">MEMBER LOGIN</a>
          </span>
        </div>
      </div>

      <div id="boxshadow" class="header">
        <div class="container">
          <div id="row">
            <div class="col-md-4">
              <div id="logo">LOGO</div>
            </div>

            <div class="col-md-8">
              <div id="banner">If I had something to sell then I'd probably put a banner here.</div>
            </div>
          </div>

          <div id="row">
            <div class="col-md-12">
              <?= Modules::run('templates/_draw_top_nav') ?>
            </div>
          </div>
        </div>
      </div>

<?php
$first_bit = $this->uri->segment(1);
// if ($first_bit=="not_allowed") {
//   $page_content = Modules::run('template/_get_not_allowed_content', $page_content);
// }

// if (isset($page_content)) {
//     echo $page_content;
// }

// if (!isset($view_file)) {
//     $view_file = "";
// }

// if (!isset($module)) {
//     $module = $this->uri->segment(1);
// }

// if (($module!="") && ($view_file!="")) {
//     $path = $module."/".$view_file;    
// //    $this->load->view($path);
// }

if ($first_bit=="") {
  include('homepage_content.php');
} else {

  if (!isset($view_file)) {
      $view_file = "";
  }

  if (!isset($module)) {
      $module = $this->uri->segment(1);
  }

  if (($module!="") && ($view_file!="")) {
    $path = $module."/".$view_file; 
    $this->load->view($path);
  }

}
?>


<div id="footer" class="footer">
  Here is the footer with links and stuff
</div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?= base_url() ?>assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="<?= base_url() ?>dist/js/bootstrap.min.js"></script>

  </body>
  </html>
