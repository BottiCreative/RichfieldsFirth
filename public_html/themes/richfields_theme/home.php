<?php  
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
	
	<div class="contentWrapper">

   <div class="row">
	<div class="grid-9 columns">
    <div class="left">
    
    <div class="row">
    <div class="grid-4 columnsLess">
    	<div class="panel">
            <div class="homeGridImage">
            	<?php  
			$a = new Area('Mortgage Image');
			$a->display($c);
			?>
            <div class="medArrow"></div>
            </div>
    <div class="homeGridInfo bluemed">
    	<?php  
			$a = new Area('Mortgage Link');
			$a->display($c);
			?>
    </div>
    	</div>
    </div>
    
    <div class="grid-4 columnsLess">
    	<div class="panel">
                <div class="homeGridImage">
            	<?php  
			$a = new Area('Protection Image');
			$a->display($c);
			?>
            <div class="darkArrow"></div>
            </div>
    <div class="homeGridInfo bluedark">
    	<?php  
			$a = new Area('Protection Link');
			$a->display($c);
			?>
    </div>
    	</div>
    </div>
     <div class="grid-4 columnsLess">
    	<div class="panel">
    		 <div class="homeGridImage">
           <?php  
			$a = new Area('Investment Image');
			$a->display($c);
			?>
            <div class="lightArrow"></div>
            </div>
            <div class="homeGridInfo bluelight">
                <?php  
			$a = new Area('Investment Link');
			$a->display($c);
			?>
            </div>
    	</div>
        </div>
   	</div><!--end row-->
    
        <div class="row">
    <div class="grid-4 columnsLess">
    	<div class="panel">
    		 		 <div class="homeGridImage">
            <?php  
			$a = new Area('Will Image');
			$a->display($c);
			?>
            <div class="lightArrow"></div>
            </div>
            <div class="homeGridInfo bluelight">
               <?php  
			$a = new Area('Will Link');
			$a->display($c);
			?>
            </div>
    	</div>
    </div>
    
    <div class="grid-4 columnsLess">
    	<div class="panel">
   	 			<div class="homeGridImage">
            	<?php  
			$a = new Area('Pensions Image');
			$a->display($c);
			?>
            <div class="medArrow"></div>
          	  </div>
           	 <div class="homeGridInfo bluemed">
                <?php  
			$a = new Area('Pensions Link');
			$a->display($c);
			?>
            </div>
    	</div>
    </div>
    
     <div class="grid-4 columnsLess">
    	<div class="panel">
    			 <div class="homeGridImage">
            <?php  
			$a = new Area('Retirement');
			$a->display($c);
			?>
            <div class="darkArrow"></div>
            </div>
            <div class="homeGridInfo bluedark">
                <?php  
			$a = new Area('Retirement Link');
			$a->display($c);
			?>
            </div>
    	</div>
        </div>
   	</div><!--end row-->
    
        <div class="row">
    <div class="grid-4 columnsLess">
    	<div class="panel">
   			<div class="homeGridImage">
           <?php  
			$a = new Area('Business Image');
			$a->display($c);
			?>
            <div class="darkArrow"></div>
            </div>
            <div class="homeGridInfo bluedark">
               <?php  
			$a = new Area('Business Link');
			$a->display($c);
			?>
            </div>
    	</div>
    </div>
    
    <div class="grid-4 columnsLess">
    	<div class="panel">
    		<div class="homeGridImage">
            <?php  
			$a = new Area('Insurance Image');
			$a->display($c);
			?>
            <div class="lightArrow"></div>
            </div>
            <div class="homeGridInfo bluelight">
             <?php  
			$a = new Area('Insurance Link');
			$a->display($c);
			?>
            </div>
    	</div>
    </div>
     <div class="grid-4 columnsLess">
    	<div class="panel">
   	<div class="homeGridImage">
            <?php  
			$a = new Area('Commercial Image');
			$a->display($c);
			?>
            <div class="medArrow"></div>
            </div>
            <div class="homeGridInfo bluemed">
                <?php  
			$a = new Area('Commercial Link');
			$a->display($c);
			?>
            </div>
    	</div>
        </div>
   	</div><!--end row-->
    	 
          </div><!--end left-->
    	</div><!--end grid-9-->
        
        <div class="grid-3 columns">
        	<div class="right">
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
                
            </div><!--end right-->
        </div><!--end grid-3-->
        
    </div><!--end row-->	
</div><!--end contentWrapper-->
	
<?php  $this->inc('elements/footer.php'); ?>


