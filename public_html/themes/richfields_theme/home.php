<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>


<div class="row nopad">
<div class="grid-9 columns nopad">
    
<div class="grid-4 columns nopadLeft">
<?php  
$a = new Area('Home Left');
$a->display($c);
?>
</div>

<div class="grid-4 columns nopadLeft">
<?php  
$a = new Area('Home Middle');
$a->display($c);
?>
</div>

<div class="grid-4 columns nopadLeft">
<?php  
$a = new Area('Home Right');
$a->display($c);
?>
</div>



          <?php  
			$a = new Area('Mortgage Image');
			$a->display($c);
			?>


    	<?php  
			$a = new Area('Mortgage Link');
			$a->display($c);
			?>


    	<?php  
			$a = new Area('Protection Link');
			$a->display($c);
			?>


                <?php  
			$a = new Area('Investment Link');
			$a->display($c);
			?>

    

               <?php  
			$a = new Area('Will Link');
			$a->display($c);
			?>

    

                <?php  
			$a = new Area('Pensions Link');
			$a->display($c);
			?>

    

                <?php  
			$a = new Area('Retirement Link');
			$a->display($c);
			?>

    

               <?php  
			$a = new Area('Business Link');
			$a->display($c);
			?>


             <?php  
			$a = new Area('Insurance Link');
			$a->display($c);
			?>



                <?php  
			$a = new Area('Commercial Link');
			$a->display($c);
			?>





</div>
    


<div class="grid-3 columns nopadRight">
       
            	<div class="quoteRight">
                
                	<div class="clive">
                    	<?php  
							$a = new Area('Clive Image');
							$a->display($c);
							?>
                    </div>
                    
                    <div class="quoteBlock">
                   		<?php  
						$a = new Area('Clive Quote');
						$a->display($c);
						?>
                    </div>
                </div><!-- end quoteRight-->
                
                
                <div class="sideForm">
                <?php  
				$a = new Area('Side Form');
				$a->display($c);
				?>
            	
                </div><!--end sideform-->
</div><!--end grid-3-->

</div>
        

	
<?php  $this->inc('elements/footer.php'); ?>


