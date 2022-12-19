<?php /* EL PSY CONGROO */     	 		  	
require '../../../zb_system/function/c_system_base.php';    	 	  	 	
require '../../../zb_system/function/c_system_admin.php';    	 	 		  
$zbp->Load();    	 	 	 		
$action = 'root';     			 			
if (!$zbp->CheckRights($action)) {     			 			
    $zbp->ShowError(6);       			 	
    die();    	 			 		
}      	 	 		
if (!$zbp->CheckPlugin('kylin')) {    					   
    $zbp->ShowError(48);     						 
    die();    			 				
}    		    	 
    	      	
$blogtitle = 'Kylin主题设置';    	    	  
$act = $_GET['act'] == "base" ? 'base' : $_GET['act'];      	   		
    		    	 
require $blogpath . 'zb_system/admin/admin_header.php';     			 	  
require $blogpath . 'zb_system/admin/admin_top.php';    			   		
echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.config.php"></script>';       	 	 	
echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';     			 	  
?>
<link rel="stylesheet" href="./script/admin.css">
<script type="text/javascript" src="./script/custom.js"></script>
<div class="twrapper">
<div class="theader">
	<div class="theadbg"></div>
<!--	 按照客户要求 去掉了作者标识-->
	<div class="tmenu">
		<ul>
		<?php kylin_SubMenu($act); ?>
		</ul>
	</div>
</div>
<div class="tmain">
<?php
if ($act == 'base') {        	 	 
    if (isset($_POST['PostLOGO'])) {       				 
        CheckIsRefererValid();    	 				  
        $zbp->Config('kylin')->PostLOGO = $_POST['PostLOGO'];					//网站LOGO    	    	 	
        $zbp->Config('kylin')->PostLOGOON = $_POST['PostLOGOON'];					//图片LOGO开关     	 		 	 
        $zbp->Config('kylin')->PostFAVICON = $_POST['PostFAVICON'];				//浏览器标签栏图标    	 	 	   
        $zbp->Config('kylin')->PostFAVICONON = $_POST['PostFAVICONON'];				//浏览器标签栏图标开关    		 			 	
              		 		 
        $zbp->Config('kylin')->PostIMGON = $_POST['PostIMGON'];				//列表缩略图总开关    					 		
        $zbp->Config('kylin')->PostTHUMBON = $_POST['PostTHUMBON'];       //随机缩略图开关       					
        $zbp->Config('kylin')->PostTHUMB = $_POST['PostTHUMB'];				//固定缩略图      	     
            	 				  
        $zbp->Config('kylin')->SecondIndexListON = $_POST['SecondIndexListON'];	    //第二首页列表样式开关    			 	 		
        $zbp->Config('kylin')->ThirdIndexListON = $_POST['ThirdIndexListON'];	    //第三首页列表样式开关     	 		 		
            	  		 	 
        $zbp->Config('kylin')->CopyWeixinON = $_POST['CopyWeixinON'];	    //复制微信号添加开关    	  		 	 
        $zbp->Config('kylin')->CopyWeixin = $_POST['CopyWeixin'];	    //微信号     	  	  	
             		   	 
        $zbp->Config('kylin')->PostSAVECONFIG = $_POST['PostSAVECONFIG'];			//保存配置开关    				 	 	
        $zbp->SaveConfig('kylin');    		   	  
        $zbp->BuildTemplate();    	 	   	 
        $zbp->ShowHint('good');    	 	   		
    } ?>
<dl>
	<form method="post" class="setting">
		<input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken() ?>">
		<dt style="font-weight: 800;">基本设置 
		<sapn style="font-size:11px;color:#ff0000;">重要提示：1.上传图片需要UEditor编辑器(可以不启用)，否则只能直接输入图片地址！2.手动输入地址时要加上 http://</sapn></dt>
		<dd>
			<!--<label for="PostLOGO">网站LOGO</label>-->
			<table>
				<tbody>
					<tr>
						<th width="25%">网站LOGO缩略图</th>
						<th width="35%">图片地址</th>
						<th width="15%">上传</th>
						<th width=20%>是否启用网站LOGO</th>
						
					</tr>
					<tr>
						<td><?php if ($zbp->Config('kylin')->PostLOGO) { ?><img src="<?php echo $zbp->Config('kylin')->PostLOGO; ?>" width="120" class="thumbimg" /><?php } else { ?><img src="style/images/logo.png" width="120" class="thumbimg" /><?php } ?></td>
						<td><input type="text" id="PostLOGO" name="PostLOGO" value="<?php if ($zbp->Config('kylin')->PostLOGO) {
        echo $zbp->Config('kylin')->PostLOGO;     	      
    } else {    	 			   
        echo $zbp->host . 'zb_users/theme/kylin/style/images/logo.png';
    } ?>" class="urltext thumbsrc"></td>
						<td><input type="button" class="uploadimg" value="上传"></td>
						<td><br><input type="text" id="PostLOGOON" name="PostLOGOON" class="checkbox" value="<?php echo $zbp->Config('kylin')->PostLOGOON; ?>" /></td>
					    </tr>
				</tbody>
			</table>
			<i class="help"></i><span class="helpcon">上传图片LOGO，关闭图片LOGO则使用文字LOGO(调用网站名称)；<br>
				图片LOGO与后台登录页LOGO同步开启展示；</span>
		</dd>
		<dd>
			<!--<label for="PostFAVICON">标签栏图标</label>-->
			<table>
				<tbody>
					<tr>
						<th width="25%">favicon缩略图</th>
						<th width="35%">图片地址</th>
						<th width="15%">上传</th>
						<th width="20%">是否启用图标</th>
						
					</tr>
					<tr>
						<td><?php if ($zbp->Config('kylin')->PostFAVICON) { ?><img src="<?php echo $zbp->Config('kylin')->PostFAVICON; ?>" width="16" class="thumbimg" /><?php } else { ?><img src="style/images/favicon.ico" width="16" class="thumbimg" /><?php } ?></td>
						<td><input type="text" id="PostFAVICON" name="PostFAVICON" value="<?php if ($zbp->Config('kylin')->PostFAVICON) {
                                echo $zbp->Config('kylin')->PostFAVICON;    	  	    
                            } else {    				  	 
                                echo $zbp->host . 'zb_users/theme/kylin/style/images/favicon.ico';
                            } ?>" class="urltext thumbsrc">
                        </td>
						<td><input type="button" class="uploadimg" value="上传"></td>
						<td><input type="text" id="PostFAVICONON" name="PostFAVICONON" class="checkbox" value="<?php echo $zbp->Config('kylin')->PostFAVICONON; ?>" /></td>
					</tr>
				</tbody>
			</table>
			<i class="help"></i><span class="helpcon">浏览器标签栏图标最佳尺寸：16x16px的ICO格式图标。</span>
		</dd>

        <dd>
			<table>
				<tbody>
					<tr>
						<th width="25%">缩略图</th>
						<th width="35%">图片地址</th>
						<th width="15%">上传</th>
						<th width="20%">是否启用默认图</th>
					</tr>
					<tr>
						<td><?php if ($zbp->Config('kylin')->PostTHUMB) { ?><img src="<?php echo $zbp->Config('kylin')->PostTHUMB; ?>" width="120" class="thumbimg" /><?php } else { ?><img src="style/images/thumb.png" width="120" class="thumbimg" /><?php } ?></td>
						<td><input type="text" id="PostTHUMB" name="PostTHUMB" value="<?php if ($zbp->Config('kylin')->PostTHUMB) {
                                echo $zbp->Config('kylin')->PostTHUMB;    		 	 			
                            } else {         			
                                echo $zbp->host . 'zb_users/theme/kylin/style/images/thumb.png';
                            } ?>" class="urltext thumbsrc">
                        </td>
						<td><input type="button" class="uploadimg" value="上传"></td>
						<td><br>无图默认 <input type="text" id="PostTHUMBON" name="PostTHUMBON" class="checkbox" value="<?php echo $zbp->Config('kylin')->PostTHUMBON; ?>" /><br><br>有则展示 <input type="text" id="PostIMGON" name="PostIMGON" class="checkbox" value="<?php echo $zbp->Config('kylin')->PostIMGON; ?>" /><br><br></td>
					</tr>
				</tbody>
			</table>
			<i class="help"></i><span class="helpcon">上传默认缩略图，需开启“无图默认”开关。<br>仅显示文章缩略图，请开启“有则展示”开关。<br>如不需要任何缩略图，请关闭“有则展示”开关。</span>
		</dd>
		<!--第二首页列表样式开关-->
		<dt style="font-weight: 800;">第二首页开关<sapn style="font-size:11px;color:#ff0000;">【提示：打开即启用 第二首页、第二列表页！】</sapn></dt>
	    <dd class="SecondIndexListON">
		<label style="font-weight: 800;">第2首页开关</label>
		<input type="text" id="SecondIndexListON" name="SecondIndexListON" class="checkbox" value="<?php echo $zbp->Config('kylin')->SecondIndexListON; ?>" />
		<i class="help"></i><span class="helpcon">“ON”为启用第二首页/列表页样式；<br>“OFF”为关闭第二首页/列表页样式。<br>开启后，第二首页/列表页样式生效，默认首页列表页失效。</span>
	    </dd>
		
		<!--第三首页列表样式开关-->
		<dt style="font-weight: 800;">第三首页开关<sapn style="font-size:11px;color:#ff0000;">【提示：打开即启用 第三首页(两栏)、第三列表页！***先关掉第二首页***】</sapn></dt>
	    <dd class="ThirdIndexListON">
		<label style="font-weight: 800;">第3首页开关</label>
		<input type="text" id="ThirdIndexListON" name="ThirdIndexListON" class="checkbox" value="<?php echo $zbp->Config('kylin')->ThirdIndexListON; ?>" />
		<i class="help"></i><span class="helpcon">“ON”为启用第三首页/列表页样式；<br>“OFF”为关闭第三首页/列表页样式。<br>开启后，第三首页/列表页样式生效，默认首页列表页失效。</span>
	    </dd>

		<!--移动端复制添加微信号开关-->
		<dt style="font-weight: 800;">移动端复制添加微信号开关<sapn style="font-size:11px;color:#ff0000;">【提示：打开即启用 复制添加微信号！】</sapn></dt>
	    <dd class="CopyWeixinON">
		<label style="font-weight: 800;">复制微信号开关</label>
		<input type="text" id="CopyWeixinON" name="CopyWeixinON" class="checkbox" value="<?php echo $zbp->Config('kylin')->CopyWeixinON; ?>" />
		<i class="help"></i><span class="helpcon">“ON”为启用复制添加微信号功能；<br>“OFF”为关闭。<br>开启后，在移动端生效。</span>
	    </dd>
		
        <dd>
        <label for="CopyWeixin" style="font-weight: 800;">微信号</label>
        <input type="text" name="CopyWeixin" id="CopyWeixin" class="settext" value="<?php echo $zbp->Config('kylin')->CopyWeixin; ?>" />
        <i class="help"></i><span class="helpcon">请填写微信号。</span>
        </dd>
		
		<dd class="half">
			<label>保存配置信息</label>
			<input type="text" id="PostSAVECONFIG" name="PostSAVECONFIG" class="checkbox" value="<?php echo $zbp->Config('kylin')->PostSAVECONFIG; ?>" />
			<i class="help"></i><span class="helpcon">“ON”为保存配置信息，启用或卸载主题后不清空配置信息；<br>“OFF”为删除配置信息，启用或卸载主题后将清空配置信息。<br>若不再使用本主题，请选择"OFF"提交，则清空配置信息。</span>
		</dd>
		<dd class="setok"><input type="submit" value="保存设置" class="setbtn" /><img id="statloading" src="style/images/loading.gif" /></dd>
	</form>
</dl>

<?php
}    	 	 	  	
if ($act == 'seo') {    		 	    
    if (isset($_POST['SEOON'])) {    	    			
        $zbp->Config('kylin')->SEOON = $_POST['SEOON'];						//关键词设置     					  
    $zbp->Config('kylin')->SEOTITLE = $_POST['SEOTITLE'];						//关键词设置       		   
    $zbp->Config('kylin')->SEOKEYWORDS = $_POST['SEOKEYWORDS'];				//关键词设置    	   		  
    $zbp->Config('kylin')->SEODESCRIPTION = $_POST['SEODESCRIPTION'];			//描述设置     				   
    $zbp->SaveConfig('kylin');         	  
        $zbp->BuildTemplate();     		    	
        $zbp->ShowHint('good');    	    	  
    } ?>
<form name="seo" method="post" class="setting">
	<input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken() ?>">
<dl>
	<dt style="font-weight: 800;">SEO设置</dt>
	<dd class="seoon">
		<label style="font-weight: 800;">SEO开关</label>
		<input type="text" id="SEOON" name="SEOON" class="checkbox" value="<?php echo $zbp->Config('kylin')->SEOON; ?>" />
		<i class="help"></i><span class="helpcon">“ON”为启用首页/分类/标签/文章自定义SEO信息；<br>“OFF”为关闭自定义SEO信息。<br>开启后，编辑文章/分类/标签时可设置自定义SEO信息。</span>
	</dd>
    <div class="seoinfo"<?php echo $zbp->Config('kylin')->SEOON == 1 ? '' : ' style="display:none"'; ?>>
        <dd><label for="SEOTITLE" style="font-weight: 800;">首页标题</label><input type="text" name="SEOTITLE" id="SEOTITLE" class="settext" value="<?php echo $zbp->Config('kylin')->SEOTITLE; ?>" /><i class="help"></i><span class="helpcon">请设置网站首页标题。</span></dd>
        <dd><label for="SEOKEYWORDS" style="font-weight: 800;">首页关键词</label><input type="text" name="SEOKEYWORDS" id="SEOKEYWORDS" class="settext" value="<?php echo $zbp->Config('kylin')->SEOKEYWORDS; ?>" /><i class="help"></i><span class="helpcon">请设置网站首页关键词。</span></dd>
        <dd><label for="SEODESCRIPTION" style="font-weight: 800;">首页描述</label><textarea name="SEODESCRIPTION" id="SEODESCRIPTION" cols="30" rows="3" class="setinput"><?php echo $zbp->Config('kylin')->SEODESCRIPTION; ?></textarea><i class="help"></i><span class="helpcon">请设置网站首页描述。</span></dd>
	</div>
	<dd class="setok"><input type="submit" value="保存设置" class="setbtn" /><img id="statloading" src="style/images/loading.gif" /></dd>
</dl>
</form>

<?php
}      		  	 
if ($act == 'KylinADS'){    		  		 	
    if (isset($_POST['SidebarADON_U'])) {      		 			
        $zbp->Config('kylin')->SidebarADON_U = $_POST['SidebarADON_U'];   //开关    					   
            		 	    
        $zbp->Config('kylin')->SidebarADURL_1 = $_POST['SidebarADURL_1'];    //广告链接    			  		 
        $zbp->Config('kylin')->SidebarADIMG_1 = $_POST['SidebarADIMG_1'];    //广告图片      				 	
        //$zbp->Config('kylin')->SidebarADURL_2 = $_POST['SidebarADURL_2'];    //广告链接    			 	 		
        //$zbp->Config('kylin')->SidebarADIMG_2 = $_POST['SidebarADIMG_2'];    //广告图片    	 	 				
        //$zbp->Config('kylin')->SidebarADURL_3 = $_POST['SidebarADURL_3'];    //广告链接    	 	  		 
        //$zbp->Config('kylin')->SidebarADIMG_3 = $_POST['SidebarADIMG_3'];    //广告图片     	 				 
            	    			
        $zbp->SaveConfig('kylin');    		  		 	
        $zbp->BuildTemplate();    			   	 
        $zbp->ShowHint('good');    	 		 	  
        }       	 			
            					 		
    if (isset($_POST['SidebarADON_M'])) {     		  	 	
        $zbp->Config('kylin')->SidebarADON_M = $_POST['SidebarADON_M'];   //开关      			   
              	  			
        $zbp->Config('kylin')->SidebarADURL_2 = $_POST['SidebarADURL_2'];    //广告链接    	       
        $zbp->Config('kylin')->SidebarADIMG_2 = $_POST['SidebarADIMG_2'];    //广告图片    		 	   	
          		
        $zbp->SaveConfig('kylin');    	 	     
        $zbp->BuildTemplate();    	  	 	  
        $zbp->ShowHint('good');     	 					
        }    		 	 		 
             		 	   
    if (isset($_POST['SidebarADON_D'])) {    						  
        $zbp->Config('kylin')->SidebarADON_D = $_POST['SidebarADON_D'];   //开关    	 		  		
                	 		
        $zbp->Config('kylin')->SidebarADURL_3 = $_POST['SidebarADURL_3'];    //广告链接        	  	
        $zbp->Config('kylin')->SidebarADIMG_3 = $_POST['SidebarADIMG_3'];    //广告图片     		 	 	 
    				  	 
        $zbp->SaveConfig('kylin');     	 		  	
        $zbp->BuildTemplate();     	   		 
        $zbp->ShowHint('good');      					 
        }       		 		
?>
<form name="KylinADS" method="post" class="setting">
    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken() ?>">
<dl>
    <dt style="font-weight: 800;">边栏广告设置
    <sapn style="font-size:11px;color:#ff0000;">重要提示：1.广告图放在kylin文件夹下ad目录！2.广告图尺寸为：300*250 3.这里是手动填写图片URL要加上 http://</sapn>
    </dt>
    <strong style="font-size:11px;color:#ff0000;">提示：开关要打开！关闭状态则没有广告图</strong>
    <p style="font-size:11px;color:#0080d5;font-weight:800;">广告图片目录：<?php echo $zbp->host . 'zb_users/theme/kylin/ad/你的广告图片名.jpg';?></p>
    <dd>
        <label style="font-weight: 800;">广告开关(上)</label>
        <input type="text" id="SidebarADON_U" name="SidebarADON_U" class="checkbox" value="<?php echo $zbp->Config('kylin')->SidebarADON_U; ?>" />
        <i class="help"></i><span class="helpcon">“ON”为启用首页/分类/标签/边栏自定义广告信息；<br>“OFF”为关闭广告。<br>开启后，编辑文章/分类/标签时可设置自定义广告。</span>
    </dd>
    <dd><label for="SidebarADURL_1" style="font-weight: 800;color:#ff0000">跳转链接(上)</label><input type="text" name="SidebarADURL_1" id="SidebarADURL_1" class="settext" value="<?php echo $zbp->Config('kylin')->SidebarADURL_1; ?>" placeholder="留空默认为本站!"/><i class="help"></i><span class="helpcon">跳转的URL链接。</span></dd>
    <dd><label for="SidebarADIMG_1" style="font-weight: 800;color:#003088">广告图片(上)</label><input type="text" name="SidebarADIMG_1" id="SidebarADIMG_1" class="settext" value="<?php if($zbp->Config('kylin')->SidebarADIMG_1){echo $zbp->Config('kylin')->SidebarADIMG_1;}else{echo $zbp->host . 'zb_users/theme/kylin/style/images/ad-1.jpg';} ?>" /><td><input type="button" class="uploadimg" value="上传"></td><i class="help"></i><span class="helpcon">请设置广告图片。</span></dd>

    <dd>
        <label style="font-weight: 800;">广告开关(中)</label>
        <input type="text" id="SidebarADON_M" name="SidebarADON_M" class="checkbox" value="<?php echo $zbp->Config('kylin')->SidebarADON_M; ?>" />
        <i class="help"></i><span class="helpcon">“ON”为启用首页/分类/标签/边栏自定义广告信息；<br>“OFF”为关闭广告。<br>开启后，编辑文章/分类/标签时可设置自定义广告。</span>
    </dd>

    <dd><label for="SidebarADURL_2" style="font-weight: 800;color:#ff0000">跳转链接(中)</label><input type="text" name="SidebarADURL_2" id="SidebarADURL_2" class="settext" value="<?php echo $zbp->Config('kylin')->SidebarADURL_2; ?>" placeholder="留空默认为本站!"/><i class="help"></i><span class="helpcon">跳转的URL链接。</span></dd>
    <dd><label for="SidebarADIMG_2" style="font-weight: 800;color:#003088">广告图片(中)</label><input type="text" name="SidebarADIMG_2" id="SidebarADIMG_2" class="settext" value="<?php if($zbp->Config('kylin')->SidebarADIMG_2){echo $zbp->Config('kylin')->SidebarADIMG_2;}else{echo $zbp->host . 'zb_users/theme/kylin/style/images/ad-2.jpg';} ?>" /><td><input type="button" class="uploadimg" value="上传"></td><i class="help"></i><span class="helpcon">请设置广告图片。</span></dd>
        
    <dd>
        <label style="font-weight: 800;">广告开关(下)</label>
        <input type="text" id="SidebarADON_D" name="SidebarADON_D" class="checkbox" value="<?php echo $zbp->Config('kylin')->SidebarADON_D; ?>" />
        <i class="help"></i><span class="helpcon">“ON”为启用首页/分类/标签/边栏自定义广告信息；<br>“OFF”为关闭广告。<br>开启后，编辑文章/分类/标签时可设置自定义广告。</span>
    </dd>

    <dd><label for="SidebarADURL_3" style="font-weight: 800;color:#ff0000">跳转链接(下)</label><input type="text" name="SidebarADURL_3" id="SidebarADURL_3" class="settext" value="<?php echo $zbp->Config('kylin')->SidebarADURL_3; ?>" placeholder="留空默认为本站!"/><i class="help"></i><span class="helpcon">跳转的URL链接。</span></dd>
    <dd><label for="SidebarADIMG_3" style="font-weight: 800;color:#003088">广告图片(下)</label><input type="text" name="SidebarADIMG_3" id="SidebarADIMG_3" class="settext" value="<?php if($zbp->Config('kylin')->SidebarADIMG_3){echo $zbp->Config('kylin')->SidebarADIMG_3;}else{echo $zbp->host . 'zb_users/theme/kylin/style/images/ad-3.jpg';} ?>"/><td><input type="button" class="uploadimg" value="上传"></td><i class="help"></i><span class="helpcon">请设置广告图片。</span></dd>
        
	<dd class="setok"><input type="submit" value="保存设置" class="setbtn" /><img id="statloading" src="style/images/loading.gif" /></dd>
</dl>
</form>

<?php
}    	 		 	  
if ($act == 'KylinSlides'){    	  	  		
    if (isset($_POST['KylinSlidesON'])) {    				  		
            $zbp->Config('kylin')->KylinSlidesON = $_POST['KylinSlidesON'];   //开关    	 	 	   
                 	 			 	
            $zbp->Config('kylin')->KylinSlidesURL_1 = $_POST['KylinSlidesURL_1'];        //幻灯片链接     	 		 	 
            $zbp->Config('kylin')->KylinSlidesIMG_1 = $_POST['KylinSlidesIMG_1'];        //幻灯片图片     				   
            $zbp->Config('kylin')->KylinSlidesTitle_1 = $_POST['KylinSlidesTitle_1'];    //幻灯片标题    	   	   
                	 	   	 
            $zbp->Config('kylin')->KylinSlidesURL_2 = $_POST['KylinSlidesURL_2'];        //幻灯片链接       	 		 
            $zbp->Config('kylin')->KylinSlidesIMG_2 = $_POST['KylinSlidesIMG_2'];        //幻灯片图片       		 		
            $zbp->Config('kylin')->KylinSlidesTitle_2 = $_POST['KylinSlidesTitle_2'];    //幻灯片标题    			 			 
                   					
            $zbp->Config('kylin')->KylinSlidesURL_3 = $_POST['KylinSlidesURL_3'];        //幻灯片链接     							
            $zbp->Config('kylin')->KylinSlidesIMG_3 = $_POST['KylinSlidesIMG_3'];        //幻灯片图片    	 	  		 
            $zbp->Config('kylin')->KylinSlidesTitle_3 = $_POST['KylinSlidesTitle_3'];    //幻灯片标题      					 
                 		   		
            $zbp->SaveConfig('kylin');    			   	 
            $zbp->BuildTemplate();        			 
            $zbp->ShowHint('good');        				
        }     		  	  
?>
<form name="KylinSlides" method="post" class="setting">
    <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken() ?>">
<dl>
    <dt style="font-weight: 800;">幻灯片设置
    <sapn style="font-size:11px;color:#ff0000;">重要提示：1.幻灯片尺寸为：510*318 2.这里是手动填写图片URL要加上 http://</sapn>
    </dt>
    <strong style="font-size:11px;color:#ff0000;">提示：开关要打开！关闭状态则没有幻灯片</strong>
    <dd>
        <label style="font-weight: 800;">幻灯片开关</label>
        <input type="text" id="KylinSlidesON" name="KylinSlidesON" class="checkbox" value="<?php echo $zbp->Config('kylin')->KylinSlidesON; ?>" />
        <i class="help"></i><span class="helpcon">“ON”为启用首页/分类/标签/边栏自定义幻灯片；<br>“OFF”为关闭幻灯片。<br>开启后，首页可设置自定义幻灯片。</span>
    </dd>
        <dd><label for="KylinSlidesURL_1" style="font-weight: 800;color:#ff0000">文章链接(1)</label><input type="text" name="KylinSlidesURL_1" id="KylinSlidesURL_1" class="settext" value="<?php echo $zbp->Config('kylin')->KylinSlidesURL_1; ?>" placeholder="留空默认为本站域名!"/><i class="help"></i><span class="helpcon">文章的URL链接。</span></dd>
        <dd><label for="KylinSlidesIMG_1" style="font-weight: 800;color:#003088">幻灯片图片(1)</label><input type="text" name="KylinSlidesIMG_1" id="KylinSlidesIMG_1" class="settext" value="<?php if($zbp->Config('kylin')->KylinSlidesIMG_1){echo $zbp->Config('kylin')->KylinSlidesIMG_1;}else{echo $zbp->host . 'zb_users/theme/kylin/style/images/Slides-1.jpg';} ?>" /><td><input type="button" class="uploadimg" value="上传"></td><i class="help"></i><span class="helpcon">请设置幻灯片图片。</span></dd>
        <dd><label for="KylinSlidesTitle_1" style="font-weight: 800;color:#007ed5">文章标题(1)</label><input type="text" name="KylinSlidesTitle_1" id="KylinSlidesTitle_1" class="settext" value="<?php echo $zbp->Config('kylin')->KylinSlidesTitle_1; ?>" placeholder="必需填写不能为空"/><i class="help"></i><span class="helpcon">文章标题</span></dd>

        <dd><label for="KylinSlidesURL_2" style="font-weight: 800;color:#ff0000">文章链接(2)</label><input type="text" name="KylinSlidesURL_2" id="KylinSlidesURL_2" class="settext" value="<?php echo $zbp->Config('kylin')->KylinSlidesURL_2; ?>" placeholder="留空默认为本站域名!"/><i class="help"></i><span class="helpcon">文章的URL链接。</span></dd>
        <dd><label for="KylinSlidesIMG_2" style="font-weight: 800;color:#003088">幻灯片图片(2)</label><input type="text" name="KylinSlidesIMG_2" id="KylinSlidesIMG_2" class="settext" value="<?php if($zbp->Config('kylin')->KylinSlidesIMG_2){echo $zbp->Config('kylin')->KylinSlidesIMG_2;}else{echo $zbp->host . 'zb_users/theme/kylin/style/images/Slides-2.jpg';} ?>" /><td><input type="button" class="uploadimg" value="上传"></td><i class="help"></i><span class="helpcon">请设置幻灯片图片。</span></dd>
        <dd><label for="KylinSlidesTitle_2" style="font-weight: 800;color:#007ed5">文章标题(2)</label><input type="text" name="KylinSlidesTitle_2" id="KylinSlidesTitle_2" class="settext" value="<?php echo $zbp->Config('kylin')->KylinSlidesTitle_2; ?>" placeholder="必需填写不能为空"/><i class="help"></i><span class="helpcon">文章标题</span></dd>

        <dd><label for="KylinSlidesURL_3" style="font-weight: 800;color:#ff0000">文章链接(3)</label><input type="text" name="KylinSlidesURL_3" id="KylinSlidesURL_3" class="settext" value="<?php echo $zbp->Config('kylin')->KylinSlidesURL_3; ?>" placeholder="留空默认为本站域名!"/><i class="help"></i><span class="helpcon">文章的URL链接。</span></dd>
        <dd><label for="KylinSlidesIMG_3" style="font-weight: 800;color:#003088">幻灯片图片(3)</label><input type="text" name="KylinSlidesIMG_3" id="KylinSlidesIMG_3" class="settext" value="<?php if($zbp->Config('kylin')->KylinSlidesIMG_3){echo $zbp->Config('kylin')->KylinSlidesIMG_3;}else{echo $zbp->host . 'zb_users/theme/kylin/style/images/Slides-3.jpg';} ?>"/><td><input type="button" class="uploadimg" value="上传"></td><i class="help"></i><span class="helpcon">请设置幻灯片图片。</span></dd>
        <dd><label for="KylinSlidesTitle_3" style="font-weight: 800;color:#007ed5">文章标题(3)</label><input type="text" name="KylinSlidesTitle_3" id="KylinSlidesTitle_3" class="settext" value="<?php echo $zbp->Config('kylin')->KylinSlidesTitle_3; ?>" placeholder="必需填写不能为空"/><i class="help"></i><span class="helpcon">文章标题</span></dd>
    <dd class="setok"><input type="submit" value="保存设置" class="setbtn" /><img id="statloading" src="style/images/loading.gif" /></dd>
</dl>
</form>

<?php
}       	    
if ($act == 'LeftNavbar') {     		 	 	 
  if (isset($_POST['LeftNavbarON'])) {    			  	  
    $zbp->Config('kylin')->LeftNavbarON = $_POST['LeftNavbarON'];      //左侧导航开关    	 	 	 		
    $zbp->Config('kylin')->LeftNavbarli = $_POST['LeftNavbarli'];     //分类LI设置    		 		 		
    $zbp->SaveConfig('kylin');      		    
        $zbp->BuildTemplate();        		 	
        $zbp->ShowHint('good');     	   	  
    } ?>
<form name="LeftNavbar" method="post" class="setting">
  <input type="hidden" name="csrfToken" value="<?php echo $zbp->GetCSRFToken() ?>">
<dl>
  <dt style="font-weight: 800;">左侧导航设置</dt>
  <sapn style="font-size:13px;color:#ff0000;">格式如下：<xmp><li><a href="http://www.jryga.com/news.html">资讯</a></li></xmp></sapn>
  <dd>
    <label style="font-weight: 800;">导航设置开关</label>
    <input type="text" id="LeftNavbarON" name="LeftNavbarON" class="checkbox" value="<?php echo $zbp->Config('kylin')->LeftNavbarON; ?>" />
    <i class="help"></i><span class="helpcon">“ON”为启用左侧导航分类自定义信息；<br>“OFF”为关闭自定义左侧导航分类信息。<br>开启后，编辑分类li列表即可。</span>
  </dd>

  <dd><label for="LeftNavbarli" style="font-weight: 800;">分类li列表</label><textarea name="LeftNavbarli" id="LeftNavbarli" cols="30" rows="13" class="setinput" placeholder="必需填写不能为空!"><?php echo $zbp->Config('kylin')->LeftNavbarli; ?></textarea><i class="help"></i><span class="helpcon">填写要显示的分类地址链接。</span></dd>
  
  <dd class="setok"><input type="submit" value="保存设置" class="setbtn" /><img id="statloading" src="style/images/loading.gif" /></dd>
</dl>
</form>

<?php
}    			 	 		
?>

</div>
</div>
<div class="tfooter">
	<p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> <!--<a href="http://www.geekercode.com/" target="_blank">极客主题网</a> all rights reserved.--></p>
</div>

<script type="text/javascript">ActiveTopMenu("topmenu_kylin");</script>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';     	   			
RunTime();      	 			 
?>