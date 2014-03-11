<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>
<!DOCTYPE html>
<html lang="<?php echo LANGUAGE?>">
<head>
<?php   Loader::element('header_required'); ?>
<!-- Site Header Content //-->
<link rel="stylesheet" href="<?php  echo $this->getThemePath(); ?>/css/foundation.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php  echo $this->getStyleSheet('main.css')?>" />
<script src="<?php  echo $this->getThemePath(); ?>/js/modernizr.js"></script>
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

</head>
<body>

<!--start main container -->
<div class="headerWrapper">
<div class="row">

<div class="grid-4 columns">
<a href="#"><img src="<?php  echo $this->getThemePath(); ?>/images/logo.png" alt="Richfield Firth" /></a>
</div>

<div class="grid-5 columns">
<p class="slogan"><strong>Financial Guidance</strong> You Can Rely On</p>
</div>
         
<div class="grid-3 columns headerContact">

<p>Call Today</p>
<h5>01737 649 900</h5>

</div>

</div><!--end row-->
</div><!--end headerWrapper-->
    
<nav>
<div class="navInner">
<div class="row">
<?php  
$a = new GlobalArea('Header Nav');
$a->display();
?>
</div>
</div>
</nav>

   
  
    

   

