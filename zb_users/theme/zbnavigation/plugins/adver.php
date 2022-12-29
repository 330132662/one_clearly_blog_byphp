<?php /* EL PSY CONGROO */     	 	 		  
require '../../../../zb_system/function/c_system_base.php';     		  		 
require '../../../../zb_system/function/c_system_admin.php';    		 	 	 	
$zbp->Load();    	 			 		
$action='root';      	 	 		
$boke8 = 'www.boke8.net';     		  			
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}     	 	   	
if (!$zbp->CheckPlugin('zbnavigation')) {$zbp->ShowError(48);die();}    	  	  		
$blogtitle=$zbp->theme.'主题配置->联系信息';      		 	  
require $blogpath . 'zb_system/admin/admin_header.php';      	 			 
require $blogpath . 'zb_system/admin/admin_top.php';       	   	
if(isset($_POST['Forum'])){    					   
if (function_exists('CheckIsRefererValid')) CheckIsRefererValid();    	 				  
if (!function_exists('AppCentre_VerifyV2')) {$zbp->ShowError(base64_decode('5oKo55qE5bqU55So5Lit5b+D54mI5pys6L+H5L2O77yM6K+35YWI5pu05paw5bqU55So5Lit5b+D5o+S5Lu26Iez5pyA5paw54mI5pys77yB'));die();}    		    		
$verify = AppCentre_VerifyV2('zbnavigation', 'theme');    		  				
if ($verify !== 'b38f27fc9485d8a3439d82bd5d562381') {   $zbp->ShowError(base64_decode('5Li76aKY5pyq6LSt5Lmw5oiW5pyq55m76ZmG5bqU55So5Lit5b+D'));die();    		 		  	
}else{foreach($_POST['Forum'] as $key=>$val){$zbp->Config('zbnavigation')->$key = $val;}      	   	 
$zbp->SaveConfig('zbnavigation');       	  	 
$zbp->ShowHint('good');     	 		   
}}     	   			
?>
<div id="divMain" class="settings">
	<div class="divHeader"><?php echo $blogtitle;?></div>
	<div class="SubMenu"><?php zbnavigation_SubMenu(6);?></div>
	<div id="divMain2">
		<table class="tableBorder">
			<tr height="32">
				<td>
					<p><strong style="color:#F00">提示：</strong></p>
					<p>支持图片超链接、文字超链接HTML代码以及第三方广告平台代码（如百度联盟、google Adsense等）</p>
					<p>图片广告代码格式：</p>
					<p>&lt;a href="https://www.boke8.net"&gt;&lt;img src="图片url"/&gt;&lt;/a&gt;</p>
					<p>文字广告代码</p>
					<p>&lt;a href="https://www.boke8.net"&gt;广告文字&lt;/a&gt;</p>
				</td>
			</tr>
		</table>
		<form id="form1" name="form1" method="post">	
			<table class="tableBorder">
				<tr>
					<th width='20%'>设置项</th>
					<th width='50%'>设置内容</th>
					<th width='30%'>描述</th>
				</tr>
				<tr>
					<td>
						<label for="siteTop">
							全站顶部广告
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextarea('siteTop');?>
					</td>
					<td>
						<p>广告尺寸：图片超链接广告请自行调整图片大小，按比例缩放；第三方广告平台，请在第三方广告平台获取自适应式广告位代码（如果第三方广告平台支持）</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="postStart">
							文章开头广告
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextarea('postStart');?>
					</td>
					<td>
						<p>广告尺寸：图片超链接广告请自行调整图片大小，按比例缩放；第三方广告平台，请在第三方广告平台获取自适应式广告位代码（如果第三方广告平台支持）</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="siteStart">
							站点内容页右上角广告
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextarea('siteStart');?>
					</td>
					<td>
						<p>广告尺寸：宽200px以内的自适应广告。</p>
					</td>
				</tr>				
				<tr>
					<td>
						<label for="homeGG">
							首页列表广告
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextarea('homeGG');?>
					</td>
					<td>
						<p>广告尺寸：图片超链接广告请自行调整图片大小，按比例缩放；第三方广告平台，请在第三方广告平台获取自适应式广告位代码（如果第三方广告平台支持）</p>
					</td>
				</tr>
			</table>
			<?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
			<div class="clear"></div>
			<div class="submit">
				<input name="" type="Submit" class="button" value="保存"/>
			</div>
		</form>
	</div>
</div>
<?php 
require $blogpath . 'zb_system/admin/admin_footer.php';    	  				 
RunTime();      		   	
?>