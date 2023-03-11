<?php /* EL PSY CONGROO */     	 		  	
//注册插件    			  	  
RegisterPlugin('zbnavigation', 'ActivePlugin_zbnavigation');    	      	
function ActivePlugin_zbnavigation(){    	     	 
	global $zbp;        		  
	Add_Filter_Plugin('Filter_Plugin_Admin_Header', 'zbnavigation_themeCss');    				  		
	Add_Filter_Plugin('Filter_Plugin_Admin_Footer', 'zbnavigation_themeJs');	         	  
	Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','zbnavigation_AddMenu');    			 				
	Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','zbnavigation_join');    	   		 	
	Add_Filter_Plugin('Filter_Plugin_Edit_Response5','zbnavigation_meta');       			  
	Add_Filter_Plugin('Filter_Plugin_Category_Edit_Response','zbnavigation_cateEdit');    			 		 	
	if($zbp->Config('zbnavigation')->seoON){    	  		 	 
		Add_Filter_Plugin('Filter_Plugin_Tag_Edit_Response','zbnavigation_tagSeo');         	 	
		Add_Filter_Plugin('Filter_Plugin_Category_Edit_Response','zbnavigation_cateSeo');    		  			 
		Add_Filter_Plugin('Filter_Plugin_Edit_Response2','zbnavigation_articleSeo');    	  	  	 
	}     			 	  
}         		 
//后台按钮    	 		 	 	
function zbnavigation_AddMenu(&$m){     				 	 
	global $zbp;    	      	
	array_unshift($m, MakeTopMenu("root",'主题配置',$zbp->host . "zb_users/theme/zbnavigation/plugins/main.php","","topmenu_show"));    	 		  	 
}     	 		 	 
function zbnavigation_SubMenu($id){       			 	
	$aryCSubMenu = array(    			   		
		0 => array('基础设置', 'main.php', 'left', false),     	 		 	 
		1 => array('首页设置', 'home.php', 'left', false),        		  
		5 => array('SEO设置', 'seo.php', 'left', false),	      	  			
		6 => array('广告设置', 'adver.php', 'left', false),    	   	  	
		7 => array('使用指南', 'service.php', 'left', false),      	  			
		9 => array('售后服务', 'https://www.boke8.net/zbnavigation.html', 'right', true)     	 		 	 
	);    		 	  		
	foreach($aryCSubMenu as $k => $v){     	 	 			
		echo '<a href="'.$v[1].'" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$k?'m-now':'').'">'.$v[0].'</span></a>';    	  			 	
	}      	 			 
}    					 	 
     		  	  
//初始安装      	 	 		
function InstallPlugin_zbnavigation(){    								
	global $zbp;     	 			  
	if(!$zbp->Config('zbnavigation')->HasKey('Version')){     	 	 	 	
		$zbp->Config('zbnavigation')->Version = '1.1';     	     	
		/*基础设置*/    						 	
		$zbp->Config('zbnavigation')->logo='';     		 	 	 
		$zbp->Config('zbnavigation')->favicon='';    	  				 
		$zbp->Config('zbnavigation')->submit='';    								
		$zbp->Config('zbnavigation')->message='';    	 					 
		$zbp->Config('zbnavigation')->icp='';    	  	  	 
		$zbp->Config('zbnavigation')->beian='';    	 	 			 
		$zbp->Config('zbnavigation')->baurl='';        				
		/*首页设置*/      		 	  
		$zbp->Config('zbnavigation')->top='';     	   			
		$zbp->Config('zbnavigation')->news='false';    	  	  	 
		$zbp->Config('zbnavigation')->site=array('false');     	 		   
		$zbp->Config('zbnavigation')->front = '1';    	 	 				
		$zbp->Config('zbnavigation')->slick = '';         	  
		/*SEO设置*/    	  					
		$zbp->Config('zbnavigation')->seoON='0';      			 		
		$zbp->Config('zbnavigation')->title='';      	  	 	
		$zbp->Config('zbnavigation')->keywords='';     	  	 		
		$zbp->Config('zbnavigation')->description='';    	   		  
		$zbp->Config('zbnavigation')->separator='';    		 			  
		$zbp->Config('zbnavigation')->statistic='';	    		 			  
		$zbp->Config('zbnavigation')->copyright='1';	     			 	  
		/*广告设置*/    	 					 
		$zbp->Config('zbnavigation')->siteTop='';    			 	  	
		$zbp->Config('zbnavigation')->postStart='';       	 		 
		$zbp->Config('zbnavigation')->siteStart='';		      	 				
		$zbp->Config('zbnavigation')->homeGG='';     	 	  		
		$zbp->SaveConfig('zbnavigation');    			 				
	}      		 	  
	$zbp->Config('zbnavigation')->Version = '1.1';    		 	 	  
	$zbp->SaveConfig('zbnavigation');    							 
}     		    	
//卸载主题     		 		  
function UninstallPlugin_zbnavigation(){    		 	  		
	global $zbp;    		 				 
	if ($zbp->Config('zbnavigation')->clearSetting){     	 	 	 	
		$zbp->DelConfig('zbnavigation');          	 
	}	    			  		 
}    	 		 		 
function zbnavigation_themeCss(){    				    
    global $zbp, $boke8;    	      	
    if (stripos($zbp->currenturl, 'phpinfo') !== false) {    		 	 			
        return;       		  	
    }    	 	 	 		
    if(isset($_GET['act']) || $boke8 == 'www.boke8.net'){       	 		 
    	echo '<link rel="stylesheet" href="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/plugins/plugins.css" type="text/css" media="screen"/>' . "\r\n";     	 		 	 
    }        			   	 
}     	 	 		 
function zbnavigation_themeJs(){    	    	  
    global $zbp, $boke8;    		 		   
    if (stripos($zbp->currenturl, 'phpinfo') !== false) {    					 	 
        return;     	 	 			
    }       		 	 
    if($zbp->LoadApp('plugin', 'UEditor')->isloaded){     	 	 		 	
    	if(isset($_GET['act']) && ($_GET['act'] == 'ArticleEdt' || $_GET['act'] == 'PageEdt')){         		 			
    		if($zbp->CheckPlugin('UEditor')){      						
    			echo '<script src="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/plugins/lib.upload.js"></script>';    	 	 	 	 
    		}else{     	 	 	 	
    			echo '<script src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';    		 			  
				echo '<script src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';    			 			 
				echo '<script src="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/plugins/lib.upload.js"></script>';       	      	
    		} 		    	 	 	 		
				      	  			
    	}elseif($boke8 == 'www.boke8.net'){     	 			 	
			echo '<script src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';     					  
			echo '<script src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';    	  	  	 
			echo '<script src="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/plugins/lib.upload.js"></script>';       		  		  
		} 	    					 		
    }       			 	
}      	 		  
function zbnavigation_thumbnail($related) {    	   	 	 
    global $zbp;       		   
	if($related->Metas->sitelogo){    	  	 	 	
		$src = $related->Metas->sitelogo;     	 	 	  
	}else{	      		 		 
		$pattern="/<img[^>]*src=\"([^\"]+\.(gif|jpg|png|jpeg|bmp|webp))\"[^>]*>/i";    	 	 	 		
		$content = $related->Content;        	  	 
		preg_match_all($pattern,$content,$matchContent);      		   	
		if(isset($matchContent[1][0])){				        	   
			$src = $thumb=$matchContent[1][0];    	 	 		  
		}else{	       			 	
			$src = $zbp->host."zb_users/theme/".$zbp->theme."/style/images/no-image.jpg";    	 		    
		}	     				 	 
	}    	 		  	 
    return $src;     		 			 
}    		 		 		
function zbnavigation_intro($as,$type,$long,$other){     	    		
	global $zbp;      	  	  
    if ($type=='0') {     		 				
		$str = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($as->Content,'[nohtml]'),$long)).$other);     			  	 
    } else {     	  				
		$str = trim(SubStrUTF8(TransferHTML($as->Content,'[nohtml]'),$long)).$other;    	   				
    }     	  		  
    return $str;    		 		   
}    	   			 
function zbnavigation_getTags($num){    	  	    
	global $zbp;     	 	 	 	
	$str = '';     	 				 
	$tagArray = $zbp->GetTagList('','',array('tag_Count'=>'DESC'),array($num),'');	        	 		
	foreach ($tagArray as $tag) {    		  				
		$str .= '<li><a href="'.$tag->Url.'" title="'.$tag->Name.'" target="_blank">'.$tag->Name.'</a>'.$tag->Count.'</li>';    				  		
	}     	  				
	return $str;    			 			 
}     	   		 
function zbnavigation_categories(){      		 	 	
	global $zbp;        			 
	$categories=$zbp->GetCategoryList(null,null,array('cate_Order'=>'ASC'),null,null);      	 	   
	return $categories;    	    		 
}    	 			 	 
function zbnavigation_join(){         		 
	global $zbp,$article;	    	    		 
	$action = GetVars('src', 'POST');    		 	  		
	$array  = array();	     			  		
	switch ($action) {     			  	 
		case "submitsite":    		    		
		if(isset($_COOKIE['join'])){			     	  	  	
			$zbp->footer .= '<script>alert("提交太频繁了，请稍后再提交！");window.location.replace(window.location.href);</script>';	      	     
			return;		     		 			 
		}else{      		  	 
			$name = GetVars('website', 'POST');    			 	 		
			$logo = GetVars('logo', 'POST');    		   	 	
			$url = GetVars('url', 'POST');     	     	
			$category = GetVars('category', 'POST');     		 		  
			$getjoin = GetVars('join', 'POST');    		 	 	  
			$reason = GetVars('reason', 'POST');    							 
			if(empty($name)){    			  	 	
				 $zbp->footer .= '<script>alert("网站名称不能为空，请重新提交！");window.location.replace(window.location.href);</script>';	    			  	 	
				return;    	  		 		
			}     	 	  		
			if (!CheckRegExp($name, '[username]')) {    					   
				$zbp->footer .= '<script>alert("网站名称格式不正确，请重新提交！");window.location.replace(window.location.href);</script>';	    			   	 
				return;      	 		 	
			}    					  	
			if(empty($url)){    	   	 	 
				$zbp->footer .= '<script>alert("网站地址不能为空，请重新提交！");window.location.replace(window.location.href);</script>';	    	   				
				return;     	 					
			}    		 		   
			if (!CheckRegExp($url, '[homepage]')) {     	    	 
				$zbp->footer .= '<script>alert("网站地址格式不正确，请重新提交！");window.location.replace(window.location.href);</script>';	     	 			 	
				return;    	 			 	 
			}    	 	   	 
			if(empty($reason) || mb_strlen($reason) < 20){    		 		 		
				$zbp->footer .= '<script>alert("推荐理由不能少于20字，请重新提交！");window.location.replace(window.location.href);</script>';	    	  		   
				return;      	 	 	 
			}        			 
			setcookie('join',$getjoin,time()+3600*24*0.1);    	 			  	
			$article = new Post;     	  				
			$article->Title=$name;     	 	 	 	
			$article->CateID = $category;			    							 
			$article->Status = 2;    		  	   
			$article->IsLock=true;    				 		 
			$article->Type=ZC_POST_TYPE_ARTICLE;      	 				
			$article->Metas->review=$reason;      			 	 
			$article->Metas->url=$url;    	 	     
			$article->Metas->sitelogo=$logo;         	  
			$article->Save();		    	  		 	 
			$zbp->footer .= '<script>alert("恭喜，提交成功，请等待审核！"); window.location.replace(window.location.href);</script>';	    		 			 	
			return;    			  	 	
		}    		 	  		
	}    		 	 			
}    	  	  	 
function zbnavigation_meta(){    	  		 		
	global $zbp,$article;       	  		
	if($_GET['act']=='ArticleEdt'){
		echo '<div class="leonhere">
				<label>指定图片：</label>
				<div class="uploadimg">
				<input type="text" name="meta_sitelogo" class="text uplod_img" value="'.htmlspecialchars($article->Metas->sitelogo).'">';
				if ($zbp->LoadApp('plugin', 'UEditor')->isloaded) {	    		 	  	 
					echo '<span class="btn">上传图片</span>';     			 	  
				}
			echo '</div>
				<div class="des">
				提示：新闻资讯缩略图建议尺寸：400px * 250px；导航站点缩略图建议尺寸150px * 150px；留空显示默认图片
				</div>';
				if($article->Metas->sitelogo){
				echo '<div class="preview">
					<img src="'.$article->Metas->sitelogo.'" alt="预览"/>
				</div>';
			}           	
			echo '</div>';      	  	  
		      	 				
		/*收录理由*/
		echo '<div class="leonhere">
			<label>推荐理由</label>
			<input type="text" name="meta_review" class="text" value="'.htmlspecialchars($article->Metas->review).'"/>
			<div class="des">提示：40个中文汉字以内</div>
			</div>';
		     		  			
		/*网站地址*/
		echo '<div class="leonhere">
			<label>网站地址</label>
			<input type="text" name="meta_url" class="text" value="'.htmlspecialchars($article->Metas->url).'"/>
			<div class="des">提示：目标网站地址，需要带上 http:// 或 https:// </div>
			</div>';
	}	    	  					
}    		  				
function zbnavigation_breadcrumb($id){        		  
	global $zbp, $html;    			  	 	
	$cate = $zbp->categorys;	    	 			   
	$html ='<em>&gt;</em>  <a href="' .$cate[$id]->Url.'" title="' .$cate[$id]->Name. '">' .$cate[$id]->Name. '</a> '.$html;    	     	 
	if(($cate[$id]->ParentID)>0){    				 			
		zbnavigation_breadcrumb($cate[$id]->ParentID);     		 	 		
	}       	    
	return $html;    	   	 		
}     			    
            
function zbnavigation_cateEdit(){    		 					
	global $zbp,$cate;
	echo '<div class="leonhere cateEidtor">
			<label>显示数量：</label>
			<input name="meta_cateNum" type="text" id="meta_cateNum" class="text" value="'.htmlspecialchars($cate->Metas->cateNum).'"/> <div class="des">
				首页调用该栏目的文章数量，留空则显示默认8个
				</div></div>';
}     	  	  	
function zbnavigation_cateSeo(){       	    
	global $cate;
	echo '<div class="leonhere cateEidtor">
			<label>SEO标题：</label>
			<input name="meta_catetitle" type="text" id="meta_catetitle" class="text" value="'.htmlspecialchars($cate->Metas->catetitle).'"/> </div>';
	echo "\n";		
	echo '<div class="leonhere cateEidtor">
			<label>SEO关键词：</label>
			<input name="meta_catekeywords" type="text" id="meta_catekeywords" class="text" value="'.htmlspecialchars($cate->Metas->catekeywords).'"/> </div>';
	echo "\n";
	echo '<div class="leonhere cateEidtor">
			<label>SEO描述：</label>
			<textarea name="meta_catedescription" id="meta_catedescription" cols="3" rows="6" class="text">'.htmlspecialchars($cate->Metas->catedescription).'</textarea></div>'; 
}       			 	
function zbnavigation_articleSeo(){     		     
	global $article;
	echo '<div class="leonhere">
			<label>SEO标题</label>
			<input type="text" name="meta_title" class="text" value="'.htmlspecialchars($article->Metas->title).'"/>
			</div>';
	echo '<div class="leonhere">
			<label>SEO关键词</label>
			<input type="text" name="meta_keywords" class="text" placeholder="留空则调用文章标签" value="'.htmlspecialchars($article->Metas->keywords).'"/>
			</div>';
	echo '<div class="leonhere">
			<label>SEO描述</label>
			<textarea name="meta_description" class="text" placeholder="留空则调用文章自动摘要">'.htmlspecialchars($article->Metas->description).'</textarea>
			</div>';
}      	 		 	
function zbnavigation_tagSeo(){    	     		
	global $zbp,$tag;
	echo '<div class="leonhere cateEidtor">
			<label>SEO标题：</label>
			<input name="meta_tagtitle" type="text" id="meta_tagtitle" class="text" value="'.htmlspecialchars($tag->Metas->tagtitle).'"/> </div>';
	echo "\n";		
	echo '<div class="leonhere cateEidtor">
			<label>SEO关键词：</label>
			<input name="meta_tagkeywords" type="text" id="meta_tagkeywords" class="text" value="'.htmlspecialchars($tag->Metas->tagkeywords).'"/> </div>';
	echo "\n";
	echo '<div class="leonhere cateEidtor">
			<label>SEO描述：</label>
			<textarea name="meta_tagdescription" id="meta_tagdescription" cols="3" rows="6" class="text">'.htmlspecialchars($tag->Metas->tagdescription).'</textarea></div>'; 
}    				  		
function zbnavigation_Get_Cate($cate){     	   			
	global $zbp;    			 	  	
	$categorys=$zbp->categorys;	    		  	  	
	$str = $categorys[$cate]->Metas->cateNum;    	    		 
	return $str;    		 	 		 
}     	 			 	
function zbnavigation_setCategoriesCheckbox($default){    		 					
	global $zbp;    		 	   	
	echo '<p><input type="hidden" name="Forum['.$default.'][]" value="false"/></p>';     	  		 	
	foreach ($zbp->categorysbyorder as $cate){ 		
?>	
	<p>
		<?php 
		if ($cate->Level > 0){    	 		   	
			for($i=1; $i<$cate->Level; $i++){    	   	  	
				echo ' &nbsp;&nbsp; ';      		  	 
			}     	 	  		
			echo ' └ ';    		  			 
		}    	 					 
		?>
		<input type="checkbox" name="Forum[<?php echo $default;?>][]" value="<?php echo $cate->ID;?>" <?php if(is_array($zbp->Config('zbnavigation')->$default)){if(in_array($cate->ID,$zbp->Config('zbnavigation')->$default)){echo 'checked';}}?>/> <?php echo $cate->Name;?>
	</p>
<?php 		
	}     	  	   
}    	 	 			 
function zbnavigation_setCategoriesSelect($default){     	   			
	global $zbp;		    					 	 
?>
	<select name="Forum[<?php echo $default;?>]" id="<?php echo $default;?>">
		<option value="false" <?php if($zbp->Config('zbnavigation')->$default == '') echo 'selected';?>>选择栏目</option>
        <?php echo OutputOptionItemsOfCategories($zbp->Config('zbnavigation')->$default);?>
    </select>	
<?php 
}      		  	 
function zbnavigation_setPagesSelect($default){      	 	  	
	global $zbp;       			  
	$pageArray = $zbp->GetPostList('*', array('=', 'log_Type', '1'), null, null, null);     	 					
?>
	<select name="Forum[<?php echo $default;?>]" id="<?php echo $default;?>">
		<option value="" <?php if($zbp->Config('zbnavigation')->$default == '') echo 'selected';?>>选择页面</option>
	<?php foreach ($pageArray as $page){?>
		<option value="<?php echo $page->ID;?>" <?php if($zbp->Config('zbnavigation')->$default == $page->ID) echo 'selected';?>><?php echo $page->Title;?></option>
	<?php } ?>
	</select>
<?php 
}    		  			 
function zbnavigation_setUploadInput($default, $btn){    			  	  
	global $zbp;	      	 	  	
?>
	<?php if($zbp->Config('zbnavigation')->$default){?>
	<img src="<?php echo $zbp->Config('zbnavigation')->$default;?>"/>
	<?php }?>
	<div class="uploadimg">
		<input name="Forum[<?php echo $default;?>]" id="<?php echo $default;?>" type="text" class="text uplod_img" value="<?php echo $zbp->Config('zbnavigation')->$default;?>" />
		<?php if ($zbp->LoadApp('plugin', 'UEditor')->isloaded) {?>
		<span class="btn"><?php echo $btn;?></span>
		<?php } ?>
	</div>
<?php 
}     		   	 
function zbnavigation_setTextInput($default){    	 	  	 	
	global $zbp;	
?>	
	<input name="Forum[<?php echo $default;?>]" type="text" id="<?php echo $default;?>" class="text" value="<?php echo $zbp->Config('zbnavigation')->$default;?>" />
<?php 
}         	 	
function zbnavigation_setTextarea($default){       	    
	global $zbp;	
?>	
	<textarea id="<?php echo $default;?>" name='Forum[<?php echo $default;?>]' class="text"><?php echo htmlspecialchars($zbp->Config('zbnavigation')->$default);?></textarea>
<?php 
}      			   
function zbnavigation_setOnInput($default){    	   			 
	global $zbp;	
?>	
	<input id="<?php echo $default;?>" name="Forum[<?php echo $default;?>]" type="text" value="<?php echo $zbp->Config('zbnavigation')->$default;?>" class="checkbox"/>
<?php 
}    	 		   	
function zbnavigation_setRadioInput($default=0,$name=array()){    	   		  
	global $zbp;    			   		
	$count = count($name);	     			  		
	for($i=1; $i<=$count; $i++){
?>	
	<p>
		<input type="radio" name="Forum[<?php echo $default;?>]" id="<?php echo $default;?>" value="<?php echo $i;?>" <?php if($zbp->Config('zbnavigation')->$default == $i){echo 'checked=checked';}?>/> <?php echo $name[$i-1];?>
	</p>
<?php 
	}    	  	  	 
}    	   	  	
function zbnavigation_setSelectOption($default=0,$name=array()){    		 					
	global $zbp;     		 	 		
	$count = count($name);	     	 			 	
	echo '<select name="Forum['.$default.']" id="'.$default.'">';     		  	  
	for($i=1; $i<=$count; $i++){
?>	
	<option value="<?php echo $i;?>" <?php if($zbp->Config('zbnavigation')->$default == $i) echo 'selected'?>><?php echo $name[$i-1];?></option>	
<?php 
	}    	  		  	
	echo '</select>';     	  			 
}      	   		
?>