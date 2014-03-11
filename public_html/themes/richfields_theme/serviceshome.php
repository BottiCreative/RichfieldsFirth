<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
	<div class="row headercontent">
	<div class="grid-9 columns headerslide">
    <?php  
			$a = new Area('serviceheader');
			$a->display($c);
			?>
    	
    </div>
    
    <div class="grid-3 columns TopForm">
    <div class="SideForm">
    <?php  
			$a = new Area('serviceform');
			$a->display($c);
			?>
                	
            	
                </div><!--end sideform-->
    </div>
</div>

<div class="row">

 	<?php  
			$a = new Area('Service Row');
			$a->display($c);
			?>

</div><!--row-->

<div class="row">
    <?php  
			$a = new Area('TitleBlock');
			$a->display($c);
			?>
</div>

<div class="row bulk">
	<div class="grid-9 columns bulktext">
	<?php  
			$a = new Area('Main');
			$a->display($c);
			?>
    	
    </div>
    
    <div class="grid-3 columns Sidenav">

       	<?php  
	
			$a = new Area('Sidebar');
			$a->display($c);
			?>
</div>


</div><!--row-->






<div class="row">

            
                <?php  
			$a = new Area('Full');
			$a->display($c);
			?>


</div>

<div class="row Testimonials">
<?php  
			$a = new Area('FullTestimonial');
			$a->display($c);
			?>
	
</div>







<div class="row Partners">
<?php  
			$a = new Area('FullPartners');
			$a->display($c);
			?>
</div>




    
	
	
<?php  $this->inc('elements/footer.php'); ?>


