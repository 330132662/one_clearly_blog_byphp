<?php /* EL PSY CONGROO */      		 				
require '../../../../zb_system/function/c_system_base.php';    		    		
require '../../../../zb_system/function/c_system_admin.php';    		 		   
$zbp->Load();     	   	 	
$action='root';      	  	 	
$boke8 = 'www.boke8.net';        	  	
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}         	 	
if (!$zbp->CheckPlugin('zbnavigation')) {$zbp->ShowError(48);die();}    	   		  
$blogtitle=$zbp->theme.'主题配置->SEO基础设置';    	    	 	
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
	<div class="SubMenu"><?php zbnavigation_SubMenu(5);?></div>  
	<div id="divMain2">		
		<form id="form1" name="form1" method="post">	
			<table class="tableBorder">
				<tr>
					<th width='20%'>设置项</th>
					<th width='40%'>内容</th>
					<th width='40%'>描述</th>
				</tr>	
				<tr>
					<td>
						<label for="seoON">
							关于主题SEO设置
						</label>
					</td>
					<td colspan="2">
						<?php zbnavigation_setOnInput('seoON');?> 如果使用了关于title标题、关键词、描述的SEO工具，可以在这里关闭主题自带的SEO设置
					</td>
				</tr>		
				<tr>
					<td>
						<label for="title">
							首页title标题
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextInput('title');?>
					</td>
					<td>
						<p>自定义首页Title标题</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="keywords">
							首页keywords关键词
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextInput('keywords');?>
					</td>
					<td>
						<p>自定义首页keywords关键词</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="description">
							首页description描述
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextarea('description');?>
					</td>
					<td>
						<p>自定义首页description描述</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="separator">
							标题分隔符
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextInput('separator');?>
					</td>
					<td>
						<p>默认_</p>
					</td>
				</tr>
				<tr>
					<td>
						<label for="statistic">
							网站统计代码
						</label>
					</td>
					<td>
						<?php zbnavigation_setTextarea('statistic');?>
					</td>
					<td>
						<p>如百度统计、cnzz等</p>
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