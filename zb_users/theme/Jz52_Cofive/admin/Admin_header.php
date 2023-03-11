<?php /* EL PSY CONGROO */    			     
require '../../../../zb_system/function/c_system_admin.php';    				 		          		 
$zbp->Load();    					 	     					 		
$action = 'root';    				 	 	     		 	  	
if ( !$zbp->CheckRights( $action ) ) {      	  			    	 	  	 	
	$zbp->ShowError( 6 );      	  		         			 
	die();     						     		 		  	
}     		 				     			 	  
if ( !$zbp->CheckPlugin( 'Jz52_Cofive' ) ) {    		 	  	     	  	  		
	$zbp->ShowError( 48 );    		 	 		      	 					
	die();     		   		     	 	   	
}     		 	 	     		   			
$blogtitle = '主题配置';    		 	 			    	  				 
require $blogpath . 'zb_system/admin/admin_header.php';    		 	    
require $blogpath . 'zb_system/admin/admin_top.php';       	    
if (!function_exists('AppCentre_VerifyV2')) {      			 		    		 		   
  $txt = base64_decode('6K+35ZCv55So5oiW5pu05paw5bqU55So5Lit5b+D');     	    		    			    	
  $zbp->ShowError($txt);         	 	    	 						
}    	 	 	       	 			 	 
$verify = AppCentre_VerifyV2('Jz52_Cofive', 'theme');     						 	    		 	  		
if ($verify !== '781826d7ba48608e670cfb7fcf02470e') {      	    	     	  		  
  $txt = base64_decode('5q2j54mI6aqM6K+B5aSx6LSl');    	 				 	       		  	
  $verify = $txt . $verify;    			   	     		   	 	
  echo '<script>alert(' . json_encode($verify) . ')</script>' . htmlspecialchars($verify,ENT_COMPAT,'ISO-8859-1');       	 		             
  $zbp->ShowError($verify);     							     							
  exit;      		  	       		    
}    	 		 	 	
?>
<link rel="stylesheet" href="jzadmin.css">
<div id="divMain">
	<div class="divHeader">
		<?php echo $blogtitle;?>
	</div>