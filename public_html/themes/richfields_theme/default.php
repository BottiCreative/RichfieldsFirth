<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
<div class="row">
<div class="grid-9 columns nopadLeft bulktext">

<main >
<?php  
$a = new Area('Main');
$a->display($c);
?>
</main>

</div><!--end grid-9-->
<div class="grid-3 columns nopadRight">
<?php  
$a = new Area('Sidebar');
$a->display($c);
?>
</div><!--end grid-3-->
</div><!--end row-->	
    
<div class="row">
<?php  
$a = new Area('Main Full');
$a->display($c);
?>
</div>

<?php  $this->inc('elements/footer.php'); ?>

