<?php /* EL PSY CONGROO */        	  	 
require '../../../../zb_system/function/c_system_base.php';    		  	 	 
require '../../../../zb_system/function/c_system_admin.php';    		 	   	
$zbp->Load();    	 	 		  
$action='root';     	 	  		
$boke8 = 'www.boke8.net';    					   
if (!$zbp->CheckRights($action)) {$zbp->ShowError(6);die();}    	 		 		 
if (!$zbp->CheckPlugin('zbnavigation')) {$zbp->ShowError(48);die();}     	   	 	
$blogtitle=$zbp->theme.'主题配置->首页设置';    	   		 	
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
	<div class="SubMenu"><?php zbnavigation_SubMenu(1);?></div>  
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
			<tr>
				<td>
					<label for="top">
						站长推荐
					</label>
				</td>
				<td>
					<?php zbnavigation_setTextInput('top');?>
				</td>
				<td>
					<p>首页【站长推荐】模块的调用，输入文章ID，多个ID用英文逗号隔开（如1,2,3），<strong><a style="color:#f00;" href="<?php echo $zbp->host;?>zb_system/admin/index.php?act=ArticleMng" target="_blank">获取文章ID</a></strong>
					</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="news">
						新闻资讯分类
					</label>
				</td>
				<td>
					<?php zbnavigation_setCategoriesSelect('news');?>
				</td>
				<td>
					<p>网站首页顶部轮播新闻要调用的栏目</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="site">
						首页分类栏目
					</label>
				</td>
				<td>
					<?php zbnavigation_setCategoriesCheckbox('site');?>
				</td>	
				<td>
					<p>网站首页分类栏目，选择多少个显示多少个</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="front">
						首页导航排序
					</label>
				</td>
				<td>
					<?php zbnavigation_setRadioInput('front', array('发布时间顺序', '置顶文章顺序'));?>
				</td>
				<td>
					<p>首页各栏目导航排列顺序，默认是根据发布时间顺序排列，最迟发布的网站在前面；置顶文章顺序则只调用置顶文章</p>
				</td>
			</tr>
			<tr>
				<td>
					<label for="slick">
						首页滚动栏目
					</label>
				</td>
				<td>
					<?php zbnavigation_setCategoriesCheckbox('slick');?>
				</td>	
				<td>
					<p>网站首页滚动分类栏目，选择多少个显示多少个</p>
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