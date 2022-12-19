<?php /* EL PSY CONGROO */       	  	 
//require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'plugin' . DIRECTORY_SEPARATOR . 'searchstr.php';    		 		 		
         		 
RegisterPlugin("kylin", "ActivePlugin_kylin");      		 	  
function ActivePlugin_kylin()         			
{       	  	 
    global $zbp;     			  	 
    $zbp->LoadLanguage('theme', 'kylin');    	  	  		
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu', 'kylin_AddMenu');     					  
    Add_Filter_Plugin('Filter_Plugin_Admin_Header', 'kylin_Header');    	 	 		 	
    Add_Filter_Plugin('Filter_Plugin_Login_Header', 'kylin_LoginHeader');    	 		 	 	
    //if ($zbp->Config('kylin')->SEOON == '1') {    	  		 	 
        //Add_Filter_Plugin('Filter_Plugin_Category_Edit_Response', 'kylin_CategorySEO');      				 	
        //Add_Filter_Plugin('Filter_Plugin_Tag_Edit_Response', 'kylin_TagSEO');    	 	   	 
        //Add_Filter_Plugin('Filter_Plugin_Edit_Response5', 'kylin_SingleSEO');       		 		
    //}    		 			 	
    Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','kylin_IMGTitleAlt');  //图片自动添加文章标题为ALT    	    		 
    Add_Filter_Plugin('Filter_Plugin_Zbp_ShowError', 'kylin_ErrorCode');    //超时退出时跳转登录    					   
    	    	 	
}     	  	  	
         	 	
function kylin_SubMenu($id)     				 		
{     	   		 
    global $zbp;     	    		
    $arySubMenu = array(     			  		
        0 => array('基本设置', 'base', 'left', false),     		  	  
        1 => array('SEO设置', 'seo', 'left', false),    				 			
        2 => array('广告设置', 'KylinADS', 'left', false),     		 		  
        3 => array('幻灯设置', 'KylinSlides', 'left', false),    		 		 		
        4 => array('左侧导航设置', 'LeftNavbar', 'left', false),     		 		 	
    );       	 	  
    foreach ($arySubMenu as $k => $v) {     		   		
        echo '<li><a href="?act=' . $v[1] . '" ' . ($v[3] == true ? 'target="_blank"' : '') . ' class="' . ($id == $v[1] ? 'on' : '') . '">' . $v[0] . '</a></li>';    	  	   	
    }     		 	   
}     			   	
     	    		
function kylin_AddMenu(&$m){     				 		
    global $zbp;    	  	  		
    $m[] = MakeTopMenu("root", '主题设置', $zbp->host . "zb_users/theme/kylin/main.php?act=base", "", "topmenu_kylin");    		 	  		
}    	 	 	  	
     						 
function kylin_Header(){    	  	 	  
    global $bloghost;     		   		
    echo '<style>.header {background: #409EFF;}#divMain2 [class^="icon-"] {font-size: 16px;color: #409EFF;}.left #leftmenu .on a, .left #leftmenu #on a:hover {color: #ffffff;background: #409EFF;}input.button, input[type="submit"], input[type="button"] {color: #ffffff;font-size: 1.05em;height: 29px;padding: 2px 18px 3px 18px;margin: 0 0.5em 0 0;   background: #409EFF;border: 1px solid #409EFF;cursor: pointer;}.imgcheck-on:before {background: #409EFF;transition: all .3s;}#divMain a:hover, #divMain2 a:hover {color: #F56C6C;}.icon-trash:before {content: "\ed3f";color: #F56C6C;}.icon-cloud-arrow-up-fill:before {content: "\ea8d";color: #E6A23C;}.icon-download:before {content: "\eade";color: #67C23A;}.icon-tools:before {content: "\ed3e";color: #197dff;}.icon-power:before {content: "\ec8e";color: #197dff;}.icon-pencil-square:before {content: "\ec5e";color: #197dff;}div.theme {width: 239px;height: auto;}.left #leftmenu a:hover {color: #FFF;background: #409eff;}</style>';    	  				 
}         	  
        	 		
function kylin_LoginHeader(){    		 	 			
    global $zbp;     		  	 	
    $logo = $zbp->Config('kylin')->PostLOGO && $zbp->Config('kylin')->PostLOGOON == 1 ? $zbp->Config('kylin')->PostLOGO : $zbp->name;       	    
    echo <<<CSSJS
    <style>
        .bg { height:100%; background:url({$zbp->host}zb_users/theme/kylin/style/images/banner.jpg) no-repeat center top; background-size:cover; }
        .logo { width:100%; height:120px; margin:0 auto 40px; padding-top:24px; text-align:center; border-bottom:1px solid #eee; }
        .logo img { background:none; }
        #wrapper { width:400px; min-height:350px;height:auto; border-radius:8px; background:#fff; position:absolute; top:50%; left:50%; transform:translate(-50%, -50%); }
        .login { width:auto; }
        .login input[type="text"], .login input[type="password"] { width:240px; border:1px solid #e4e8eb; outline:0; border-radius:3px; }
        .login input[type="text"]:focus, .login input[type="password"]:focus { color:#0188fb; background-color:#fff; border-color:#aab7c1; outline:0; box-shadow:0 0 0 0.2rem rgba(31,73,119,0.1); }
        .login dd.submit, .login dd.password, .login dd.username { width:auto; overflow:visible; }
        .login dd.checkbox { width:170px; }
        .login label { padding-right:15px; }
        .logintitle { font-size:24px; line-height:76px; position:relative; display:inline-block; }
        .logintitle:before,.logintitle:after { content:""; width:50px; height:0; border-top:1px solid #ddd; position:absolute; top:38px; right:-70px; }
        .logintitle:before { right:auto; left:-70px; }
        .button { border-radius:3px; background:#0188fb; }
        .button:hover { background:#0188fb; }
        @media only screen and (max-width: 768px){
            .login dd { float:left; margin-bottom:20px; }
            .login dd.username label, .login dd.password label { width:100px; text-align:right; }
            .login dd.checkbox { width:175px; margin-left:95px; padding:0; }
            .login dd.submit { float:left; padding:0; }
        }
        </style>
        <script>
        $(function(){
        function check_is_img(url) {
            return (url.match(/\.(jpeg|jpg|gif|png)$/) != null)
        }
        if(check_is_img("{$logo}")){
            $(".logo").find("img").replaceWith('<img src="{$logo}">').end().wrapInner("<a href='"+bloghost+"'/>");
        }else{
            $(".logo").find("img").replaceWith('<span class="logintitle">{$logo}<span>').end().wrapInner("<a href='"+bloghost+"'/>");
        }
        });
    </script>
CSSJS;
}    	 	 	 		
/*     			   	
function kylin_Exclude_CategorySelect($default)     	 	  		
{     			   	
    global $zbp;    		  			 
    foreach ($GLOBALS['hooks']['Filter_Plugin_OutputOptionItemsOfCategories'] as $fpname => &$fpsignal) {     	 	   	
        $fpreturn = $fpname($default);     		     
        if ($fpsignal == PLUGIN_EXITSIGNAL_RETURN) {    				 			
            $fpsignal = PLUGIN_EXITSIGNAL_NONE;    					 		
    		  		 	
            return $fpreturn;    			 	   
        }    				 		 
    }    	   		  
    $s = '';    	 	 		  
    $s .= '<option value="0">屏蔽多个分类ID</option>';        				
    foreach ($zbp->categoriesbyorder as $id => $cate) {    			    	
        $s .= '<option ' . ($default == $cate->ID ? 'selected="selected"' : '') . ' value="' . $cate->ID . '">' . $cate->SymbolName . '</option>';    	 			 	 
    }    	 	 	 	 
           	
    return $s;    					   
}    				  		
*/    		 		 	 
/*        	 	 
function kylin_CategorySEO()    			  			
{     				   
    global $zbp,$cate; ?>
    <link rel="stylesheet" href="<?php echo $zbp->host; ?>zb_users/theme/kylin/script/admin.css">
    <script type="text/javascript" src="<?php echo $zbp->host; ?>zb_users/theme/kylin/script/custom.js"></script>
    <script type="text/javascript" src="<?php echo $zbp->host; ?>zb_users/theme/kylin/script/jscolor.js"></script>
    <?php
    if ($zbp->CheckPlugin('UEditor')) {
        echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.config.php"></script>';
        echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
    }
    $array = array('catetitle', 'catekeywords', 'catedescription');
    $catetitle_intro = '分类SEO标题';
    $catekeywords_intro = '分类SEO关键词';
    $catedescription_intro = '分类SEO描述';
    if (is_array($array) == false) {
        return null;
    }
    if (count($array) == 0) {
        return null;
    }
    foreach ($array as $key => $value) {
        if ($key == 0) {
            $cate_meta_intro = $catetitle_intro;
            echo '<div class="introbox"><div class="togglelabel">+++++ 分类列表SEO设置 +++++</div><p><span class="title">' . $cate_meta_intro . '</span><br /><input type="text" name="meta_' . $value . '" value="' . htmlspecialchars($cate->Metas->$value) . '" class="metasrc"/></p>';
        } elseif ($key == 1) {
            $cate_meta_intro = $catekeywords_intro;
            echo '<p><span class="title">' . $cate_meta_intro . '</span><br /><input type="text" name="meta_' . $value . '" value="' . htmlspecialchars($cate->Metas->$value) . '" class="metasrc"/></p>';
        } else {
            $cate_meta_intro = $catedescription_intro;
            echo '<p><span class="title">' . $cate_meta_intro . '</span><br /><textarea cols="3" rows="6" id="edtIntro" name="meta_' . $value . '" class="metaintro">' . htmlspecialchars($cate->Metas->$value) . '</textarea></p></div>';
        }
    }
}
*/
/*
function kylin_TagSEO()
{
    global $zbp,$tag; ?>
    <link rel="stylesheet" href="<?php echo $zbp->host; ?>zb_users/theme/kylin/script/admin.css">
    <script type="text/javascript" src="<?php echo $zbp->host; ?>zb_users/theme/kylin/script/custom.js"></script>
    <script type="text/javascript" src="<?php echo $zbp->host; ?>zb_users/theme/kylin/script/jscolor.js"></script>
    <?php
    if ($zbp->CheckPlugin('UEditor')) {
        echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.config.php"></script>';
        echo '<script type="text/javascript" src="' . $zbp->host . 'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
    }
    $array = array('tagtitle', 'tagkeywords', 'tagdescription');
    $tagtitle_intro = '标签SEO标题';
    $tagkeywords_intro = '标签SEO关键词';
    $tagdescription_intro = '标签SEO描述';
    if (is_array($array) == false) {
        return null;
    }
    if (count($array) == 0) {
        return null;
    }
    foreach ($array as $key => $value) {
        if ($key == 0) {
            $tag_meta_intro = $tagtitle_intro;
            echo '<div class="introbox"><div class="togglelabel">+++++ TAGS列表SEO设置 +++++</div><p><span class="title">' . $tag_meta_intro . '</span><br /><input type="text" name="meta_' . $value . '" value="' . htmlspecialchars($tag->Metas->$value) . '" class="metasrc"/></p>';
        } elseif ($key == 1) {
            $tag_meta_intro = $tagkeywords_intro;
            echo '<p><span class="title">' . $tag_meta_intro . '</span><br /><input type="text" name="meta_' . $value . '" value="' . htmlspecialchars($tag->Metas->$value) . '" class="metasrc"/></p>';
        } else {
            $tag_meta_intro = $tagdescription_intro;
            echo '<p><span class="title">' . $tag_meta_intro . '</span><br /><textarea cols="3" rows="6" id="edtIntro" name="meta_' . $value . '" class="metaintro">' . htmlspecialchars($tag->Metas->$value) . '</textarea></p></div>';
        }
    }
}
*/
//挂接口：
Add_Filter_Plugin('Filter_Plugin_Edit_Response5', 'kylin_SingleSEO');
function kylin_SingleSEO(){
    global $zbp,$article;
    $array = array('singletitle', 'singlekeywords', 'singledescription');
    $singletitle_intro = 'SEO标题';
    $singlekeywords_intro = 'SEO关键词';
    $singledescription_intro = 'SEO描述';
    if (is_array($array) == false) {
        return null;
    }
    if (count($array) == 0) {
        return null;
    }
    foreach ($array as $key => $value) {
        if ($key == 1) {
            $single_meta_intro = $singlekeywords_intro;
            echo '<p><label><strong>' . $single_meta_intro . '</strong></label>&nbsp;&nbsp;<input type="text" name="meta_' . $value . '" placeholder="请输入' . $single_meta_intro . '..." value="' . htmlspecialchars($article->Metas->$value) . '" class="metasrc"/></p>';
        }
        /*
        if ($key == 0) {
            $single_meta_intro = $singletitle_intro;
            echo '<div class="introbox"><div class="togglelabel">+++++ 文章页面SEO设置 +++++</div><p><label>' . $single_meta_intro . '</label><input type="text" name="meta_' . $value . '" placeholder="请输入' . $single_meta_intro . '..." value="' . htmlspecialchars($article->Metas->$value) . '" class="metasrc"/></p>';
        } elseif ($key == 1) {
            $single_meta_intro = $singlekeywords_intro;
            echo '<p><label>' . $single_meta_intro . '</label><input type="text" name="meta_' . $value . '" placeholder="请输入' . $single_meta_intro . '..." value="' . htmlspecialchars($article->Metas->$value) . '" class="metasrc"/></p>';
        } else {
            $single_meta_intro = $singledescription_intro;
            echo '<p><span class="title">' . $single_meta_intro . '</span><br /><textarea cols="3" rows="6" name="meta_' . $value . '" placeholder="请输入' . $single_meta_intro . '..." class="metaintro">' . htmlspecialchars($article->Metas->$value) . '</textarea></p></div>';
        }*/
    }
}

Add_Filter_Plugin('Filter_Plugin_Edit_Response5', 'kylin_source_author');
function kylin_source_author(){
    global $zbp,$article;
    $array = array('articlesource','articleauthor');

    $articlesource_intro = '来源';
    $articleauthor_intro = '作者';
    
    if (is_array($array) == false) {
        return null;
    }
    if (count($array) == 0) {
        return null;
    }
    foreach ($array as $key => $value) {
        if ($key == 0) {
            $single_meta_intro = $articlesource_intro;
            echo '<label><strong>' . $single_meta_intro . '</strong></label>&nbsp;&nbsp;<input type="text" name="meta_' . $value . '" placeholder="请输入' . $single_meta_intro . '..." value="' . htmlspecialchars($article->Metas->$value,ENT_QUOTES, 'utf-8') . '" class="metasrc"/>';
        }else{
            $single_meta_intro = $articleauthor_intro;
            echo '<label><strong>' . $single_meta_intro . '</strong></label>&nbsp;&nbsp;<input type="text" name="meta_' . $value . '" placeholder="请输入' . $single_meta_intro . '..." value="' . htmlspecialchars($article->Metas->$value,ENT_QUOTES, 'utf-8') . '" class="metasrc"/>';
        }
    }
}

function kylin_isMobile()
{
    global $zbp;
    if (isset($_GET['must_use_mobile'])) {
        return true;
    }
    $is_mobile = false;
    $regex = '/android|adr|iphone|ipad|linux|windows\sphone|kindle|gt\-p|gt\-n|rim\stablet|opera|meego|Mobile|Silk|BlackBerry|Opera\Mini/i';
    if (preg_match($regex, GetVars('HTTP_USER_AGENT', 'SERVER'))) {
        $is_mobile = true;
    }

    return $is_mobile;
}

function kylin_Thumb($Source, $IsThumb = '0'){
    global $zbp;
    $ThumbSrc = '';
    $randnum = mt_rand(1, 20);
    $pattern = "/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/i";
    $content = $Source->Content;
    preg_match_all($pattern, $content, $matchContent);
    if ($zbp->Config('kylin')->PostIMGON == '1') {
        if (isset($Source->Metas->proimg)) {
            $temp = $Source->Metas->proimg;
        } elseif (isset($matchContent[1][0])) {
            $temp = $matchContent[1][0];
        } else {
            if ($zbp->Config('kylin')->PostTHUMBON == '1') {
                $temp = $zbp->Config('kylin')->PostTHUMB;
            } else {
                $temp = '';
            }
        }
    } else {
        $temp = '';
    }
    $ThumbSrc = $temp;

    return $ThumbSrc;
}

function InstallPlugin_kylin(){
    global $zbp;
    if (!$zbp->Config('kylin')->HasKey('Version')) {
        $array = array(
            'PostLOGO'            => $zbp->Config('kylin')->PostLOGO,
            'PostLOGOON'          => '0',
            'PostFAVICON'         => $zbp->Config('kylin')->PostFAVICON,
            'PostFAVICONON'       => '0',

            'PostSAVECONFIG'      => '1',

            'SEOON'          => '0',
            'SEOTITLE'       => $zbp->Config('kylin')->SEOTITLE,
            'SEOKEYWORDS'    => $zbp->Config('kylin')->SEOKEYWORDS,
            'SEODESCRIPTION' => $zbp->Config('kylin')->SEODESCRIPTION,
            
            //'SidebarADON'    => '0',
            'SidebarADON_U'    => '0',
            'SidebarADON_M'    => '0',
            'SidebarADON_D'    => '0',
            
            'SidebarADURL_1'   => $zbp->Config('kylin')->SidebarADURL_1,
            'SidebarADIMG_1'   => $zbp->Config('kylin')->SidebarADIMG_1,
            //'Defult_IMG_1'   => '默认主题图片1',
            'SidebarADURL_2'   => $zbp->Config('kylin')->SidebarADURL_2,
            'SidebarADIMG_2'   => $zbp->Config('kylin')->SidebarADIMG_2,
            //'Defult_IMG_2'   => '默认主题图片2',
            'SidebarADURL_3'   => $zbp->Config('kylin')->SidebarADURL_3,
            'SidebarADIMG_3'   => $zbp->Config('kylin')->SidebarADIMG_3,
            //'Defult_IMG_3'   => '默认主题图片3',
            
            'KylinSlidesON'    => '0',
            'KylinSlidesURL_1'   => $zbp->Config('kylin')->KylinSlidesURL_1,
            'KylinSlidesIMG_1'   =>  $zbp->Config('kylin')->KylinSlidesIMG_1,
            'KylinSlidesTitle_1'   => $zbp->Config('kylin')->KylinSlidesTitle_1,

            'KylinSlidesURL_2'   => $zbp->Config('kylin')->KylinSlidesURL_2,
            'KylinSlidesIMG_2'   =>  $zbp->Config('kylin')->KylinSlidesIMG_2,
            'KylinSlidesTitle_2'   => $zbp->Config('kylin')->KylinSlidesTitle_2,

            'KylinSlidesURL_3'   => $zbp->Config('kylin')->KylinSlidesURL_3,
            'KylinSlidesIMG_3'   =>  $zbp->Config('kylin')->KylinSlidesIMG_3,
            'KylinSlidesTitle_3'   => $zbp->Config('kylin')->KylinSlidesTitle_3,

            //第二首页列表样式总开
            'SecondIndexListON'    => '0',
            
            //第三首页列表(两栏)样式总开
            'ThirdIndexListON'    => '0',
            
            //移动端复制添加微信号总开关
            'CopyWeixinON'    => '0',
            
            //微信号
            'CopyWeixin'    => $zbp->Config('kylin')->CopyWeixin,
            
            //左侧导航开关
            'LeftNavbarON'          => '0',
            'LeftNavbarli'            => $zbp->Config('kylin')->LeftNavbarli,
        );
        foreach ($array as $value => $intro) {
            $zbp->Config('kylin')->$value = $intro;
        }
        $zbp->SaveConfig('kylin');
    }
}

function UninstallPlugin_kylin(){
    global $zbp;
    if ($zbp->Config('kylin')->PostSAVECONFIG == 0) {
        $zbp->DelConfig('kylin');
    }
}

function kylin_is_mobile() {
    if ( empty($_SERVER['HTTP_USER_AGENT']) ) {
        $is_mobile = false;
    } elseif ( strpos($_SERVER['HTTP_USER_AGENT'], 'Mobile') !== false // many mobile devices (all iPhone, iPad, etc.)
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Android') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Silk/') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Kindle') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'BlackBerry') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== false
        || strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mobi') !== false ) {
            $is_mobile = true;
    } elseif (isset ($_SERVER['HTTP_X_WAP_PROFILE'])) { //判断是否有HTTP_X_WAP_PROFILE，有则一定是移动设备,部分服务商会屏蔽该信息
        $is_mobile = true;
    } elseif ( isset ($_SERVER['HTTP_VIA']) ) { //判断HTTP_VIA信息是否含有wap信息，有则一定是移动设备
        $is_mobile = true;
    } else {
        $is_mobile = false;
    }
    return $is_mobile;
}

// 获取文章图片数量，调用方法：{kylin_thumbsNum($article->Content)}
function kylin_thumbsNum($as) {
global $zbp;
$imgNum= '';
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
preg_match_all($pattern,$as,$matchContent);
 $imgNum .= count($matchContent[1]);
 return $imgNum;
}

//调用方法：列表中{kylin_getBodypics($article.Content, 3)}
function kylin_getBodypics($string, $num){
    preg_match_all("/<img([^>]*)\s*src=('|\")([^'\"]+)('|\")/",$string,$matches);
    $imgsrc_arr = array_unique($matches[3]);
    $count = count($imgsrc_arr);
    $i = 0;
    foreach($imgsrc_arr as $imgsrc)
    {
	if($i == $num) break;
	$result .= "<img src=\"$imgsrc\"/>";
	$i++;
    }
    return $result;
}

// 自动ZBP图片ALT 
function kylin_IMGTitleAlt(&$template){
	global $zbp;
	$article = $template->GetTags('article');
	$pattern = "/<img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|swf)('|\")(.*?)>/i";
	$replacement = '<img alt="'.$article->Title.'" src=$2$3.$4$5/>';
	$content = preg_replace($pattern, $replacement, $article->Content);
	$article->Content = $content;
	$template->SetTags('article', $article);
}

//输出当天更新文章数量,调用方式：{kylin_DayPostNum()}
function kylin_DayPostNum(){
global $zbp;
$nowtime = time();
$settime = 1*24*60*60;
$gettime = $nowtime-$settime;
$db = $zbp->db->sql->get();
$sql = $db->select('zbp_post')->where(array(array('=','log_Status','0'),array('>','log_PostTime',$gettime)))->sql;
$array = $zbp->GetListType('Post', $sql);
echo count($array);
}

//热门标签侧边栏
function kylin_sidetags(){
    global $zbp,$str;
    $str = '';
    $array = $zbp->GetTagList('','',array('tag_Count'=>'DESC'),array(20),'');
    foreach ($array as $key=>$tag) {
        $str .= '<li><a class="gkt-button-square-border-w58-purplish-blue" target="_blank" href="' .$tag->Url. '" title="' .$tag->Name. '">' .$tag->Name. '</a></li>';
    }
    return $str;
}

//获取站内所有标签(标签云)
function kylin_GetTagCloudList(){
	global $zbp;
	$filterNum = 0;
	$result = $zbp->GetTagList(array('*'), array(array('>', 'tag_Count', $filterNum),), array('tag_Count' => 'DESC'));
	$str = '<ul class="tagscloud">';
        foreach($result as $tag){
            $str .= "<li><a href=\"{$tag->Url}\" title=\"{$tag->Name}\">{$tag->Name}</a><span>({$tag->Count})</span></li>";
        }
	$str .= '</ul>';
    $tagsnull = '<div class="tagsnull">'.'没有标签'.'</div>';
	return count($result) ? $str : $tagsnull;
}

//列表缩略图延迟加载
function kylin_ListIMGLazyLoad(&$template){
    global $zbp;
    $templateArr = explode(',', 'post-multi,post-istop');
    $templateArr = array_unique($templateArr);
    foreach ($templateArr as $key => $value) {
        if (isset($template[$value])) {
            $template[$value] = tpure_LazyLoadReplace($template[$value]);
        }
    }
}

//后台登陆过期时自动跳转到登录页
//挂接口：Add_Filter_Plugin('Filter_Plugin_Zbp_ShowError', 'kylin_ErrorCode');
function kylin_ErrorCode($errorCode){
    global $zbp;
    if($errorCode == 6){
            Redirect($zbp->host.'zb_system/login.php');
        }
        die();
}