<?php   defined('C5_EXECUTE') or die("Access Denied."); ?>


<footer>
	<div class="row">
    	<div class="grid-12">
        
    	<div class="grid-4 columns">
        	<div class="footerLogo">
            	 <a href="#"><img src="<?php  echo $this->getThemePath(); ?>/images/logo.png" alt="Richfield Firth" /></a>
            </div>
            
            <div class="footerContact">
            	<p>Richfields Firth<br />
                59 Nutfield Road,<br />
                Merstham,<br />
                Redhill,<br />
                Surrey.<br />
                RH1 3ER</p>
       
                <br />
                <h5>Telephone: 01737 - 649900</h5>
                <h5>e-mail to: <a href="mailto:enquiries@RichfieldsFirth.co.uk">enquiries@RichfieldsFirth.co.uk</a></h5>
                
         <div class="footerSocial">       
         <a href="#" rel="nofollow" target="_blank" class="fbLink"></a>
        <a href="#" rel="nofollow" target="_blank" class="twittLink"></a>
      	<a href="#" rel="nofollow" target="_blank" class="inLink"></a>
         <a href="#" rel="nofollow" target="_blank" class="youLink"></a>
       
       
		</div>
        
            </div>
         </div>
            
        <div class="grid-8 columns">
        	<div class="footerNav">
            	<ul>
                	<li><a href="#">Privacy Policy</a></li>
                  	<li><a href="#">Career Opportunities</a></li>
                </ul>
            </div>
            <div class="footerInfo">
            	<p>Richfield's Firth is a trading name of Clive John Firth who is an appointed representative of Openwork Limited which is authorised and regulated by the Financial Conduct Authority. Openwork Limited offers advice on insurance and investment products from a limited number of product providers and advice on mortgages representative of the whole market.</p>
                <a href="#">Check our credentials on the Financial Conduct Authority website.</a>
                <p>The information on this website is for the use of residents of the United Kingdom only. No representations are made as to whether the information is applicable or available in any other country which may have access to it. The internet is not a secure medium and the privacy of your data cannot be guaranteed.</p>

<p>The appearance of the logo's of various product providers and mortgage lenders on this site is not meant to give the appearance that those providers endorse the services of Richfields Firth.</p>
            </div>
         </div>
         
     	
      </div>
    </div><!--end row-->
    <div class="row">
    	<div class="grid-12 column copyRight">
        	&copy;<?php  echo date('Y')?> Richfield and Firth
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php  echo $this->getThemePath(); ?>/js/jquery.watermark.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.watermark').watermark();
	});
</script> 
    
    

<?php   Loader::element('footer_required'); ?>

</body>
</html>



   