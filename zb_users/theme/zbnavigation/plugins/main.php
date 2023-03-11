<?php /* EL PSY CONGROO */      	    	 
require '../../../../zb_system/function/c_system_base.php';    			     
require '../../../../zb_system/function/c_system_admin.php';    	  	 		 
$zbp->Load();     		 		  
$action='root';    	  	 			
$boke8 = 'www.boke8.net';    	 				 	
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}    	 	   		
if (!$zbp->CheckPlugin('zbnavigation')) {$zbp->ShowError(48);die();}    		 		   
$blogtitle=$zbp->theme.'主题配置->基础设置';      		 	  
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
	<div class="SubMenu"><?php zbnavigation_SubMenu(0);?></div>  
	<div id="divMain2">
		<table class="tableBorder">
			<tr height="32">
				<td>
					<strong style="color:#F00">温馨提示：</strong>请在此处对zbnavigation模板进行配置，请在插件管理中安装启用<strong style="color:#F00">UEditor编辑器</strong>插件，否则不能使用图片上传，只能输入图片URL地址
				</td>
			</tr>
		</table>
		<form id="form1" name="form1" method="post">
			<table class="tableBorder">
			<tr>
				<th width='20%'>设置项</th>
				<th width='35%'>内容</th>
				<th width='45%'>描述</th>
			</tr>			
			<tr class="tr">
				<td>
					<label for="logo">
						LOGO上传
					</label>
				</td>
				<td class="show">
					<?php zbnavigation_setUploadInput('logo', '上传图片');?>
				</td>
				<td>
					<p>上传网站LOGO图片，演示站LOGO尺寸190px × 40px</p>
				</td>
			</tr>	
			<tr>
				<td>
					<label for="favicon">
						浏览器图标
					</label>
				</td>
				<td class="show">
					<?php zbnavigation_setUploadInput('favicon', '上传图标');?>
				</td>
				<td>
					<p>建议尺寸32px × 32px</p>
				</td>
			</tr>			
			<tr>
				<td>
					<label for="submit">
						网站提交页面
					</label>
				</td>
				<td>
					<?php zbnavigation_setPagesSelect('submit');?>
				</td>
				<td>
					<p>选择游客提交网站页面，请先在页面管理中创建网站提交页面</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="message">
						留言页面
					</label>
				</td>
				<td>
					<?php zbnavigation_setPagesSelect('message');?>
				</td>
				<td>
					<p>选择网站留言，请先在页面管理中创建网站提交页面</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="icp">
						网站备案号
					</label>
				</td>
				<td>
					<?php zbnavigation_setTextInput('icp');?>
				</td>
				<td>
					<p>输入网站ICP备案号，在网站底部显示</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="beian">
						公安备案号
					</label>
				</td>
				<td>
					<?php zbnavigation_setTextInput('beian');?>
				</td>
				<td>
					<p>输入网站公安备案号，在网站底部显示</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="baurl">
						公安备案号链接
					</label>
				</td>
				<td>
					<?php zbnavigation_setTextInput('baurl');?>
				</td>
				<td>
					<p>输入网站公安备案号链接</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="copyright">
						关闭版权
					</label>
				</td>
				<td colspan="2">
					<?php zbnavigation_setOnInput('copyright');?> OFF表示不显示网页底部博客吧链接，ON表示显示。（注：关闭仅代表不想显示，版权依然归客吧所有）
				</td>
			</tr>
			<tr>
				<td>
					<label for="clearSetting">
						清除主题配置
					</label>
				</td>
				<td colspan="2">
					<?php zbnavigation_setOnInput('clearSetting');?><span style="color:#f00;"> 开启后，当在主题管理中更换主题后，该主题的所有设置都将被清空，请谨慎操作！</span>
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