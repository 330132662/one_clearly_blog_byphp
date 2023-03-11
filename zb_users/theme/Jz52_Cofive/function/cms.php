<?php /* EL PSY CONGROO */     		 		 		
/**        	 	 
cms模块 隔壁老李 https://yeelz.com/    	    		 
**/     		 		 	
#产品展示100    			 	  	
function Jz52_Cofive_pro(){    			 	  	
	global $zbp;     		   	 
	$array = explode(",",$zbp->Config('Jz52_Cofive')->proid);     		  	  
	$array = explode(",",$zbp->Config('Jz52_Cofive')->product100id);     	     	
	$html='';     	 	 			
	foreach ($array as $hotlist) {    	   	 		
		$hotlist=(int)$hotlist;      	  	  
		$cmsarry=Getlist(4,$hotlist,null,null,null,null,array('has_subcate'=>true));     		  		 
		if($cmsarry){//有内容才输出    		  	   
		$html.='<div class="pro_box"><div class="title"><a href="'.$zbp->GetCategoryByID($hotlist)->Url.'">+ 查看更多</a> <strong>'.$zbp->GetCategoryByID($hotlist)->Name.'</strong></div><ul class="pro_list">';    		  	 		
		foreach ($cmsarry as $related) {    	  	  	 
				$html.='<li><a href="'.$related->Url.'" title="'.$related->Title.'" class="pic"><img src="'.Jz52_Cofive_IMG($related).'" alt="'.$related->Title.'"></a><a href="'.$related->Url.'" title="'.$related->Title.'" class="t">'.$related->Title.'</a></li>';    		 				 
		}     	   	  
		$html.='</ul></div>';     		  		 
		}else{      	 		  
		$html.='';    	 	  	  
		}    	  					
	}     			 	 	
	return $html;       			 	
}    	 	   	 
     	 				 
#产品展示50            
function Jz52_Cofive_pro50(){      	   		
	global $zbp;      	    	
	$array = explode(",",$zbp->Config('Jz52_Cofive')->proid);     					  
	$array = explode(",",$zbp->Config('Jz52_Cofive')->product50id);    					  	
	$html='';     	    	 
	foreach ($array as $key=>$hotlist) {     			 		 
		$hotlist=(int)$hotlist;      		  	 
		$cmsarry=Getlist(2,$hotlist,null,null,null,null,array('has_subcate'=>true));       			 	
		if($cmsarry){//有内容才输出     	    	 
		if($key%2==0){$zyclass='class="left"';}else{$zyclass='class="right"';}    		 			  
		if($key==0||$key==1){$titclass=' title1';}else{$titclass='';}      	 	  	
		$html.='<div '.$zyclass.'><div class="pro_box"><div class="title'.$titclass.'"><a href="'.$zbp->GetCategoryByID($hotlist)->Url.'">+ 查看更多</a> <strong>'.$zbp->GetCategoryByID($hotlist)->Name.'</strong></div><ul class="pro_list">';       	  	 
		foreach ($cmsarry as $related) {    	 	  		 
				$html.='<li><a href="'.$related->Url.'" title="'.$related->Title.'" class="pic"><img src="'.Jz52_Cofive_IMG($related).'" alt="'.$related->Title.'"></a><a href="'.$related->Url.'" title="'.$related->Title.'" class="t">'.$related->Title.'</a></li>';    		  	 		
		}    	  	  	 
		$html.='</ul></div></div>';       	 	  
		}else{      	    	
		$html.='';    	 	 	 	 
		}      		   	
	}     					  
	return $html;    				 	  
}     	  	 		
?>