<?php  /*Template Name:边栏*/  ?>
<?php 
$ThirdIndexListON = $zbp->Config('kylin')->ThirdIndexListON;
 ?>
<?php if (kylin_isMobile()) { ?>
<aside id="secondary" class="widget-area sidebar">
<?php }else{  ?>
<aside id="secondary" class="widget-area sidebar" <?php if($ThirdIndexListON == '1'){echo 'style = "float: left;width: 300px;margin-left: 18px;"';} ?>>
<?php } ?>
<?php 
$SidebarADON_U = $zbp->Config('kylin')->SidebarADON_U;
$SidebarADON_M = $zbp->Config('kylin')->SidebarADON_M;
$SidebarADON_D = $zbp->Config('kylin')->SidebarADON_D;

$SidebarADURL_1 = $zbp->Config('kylin')->SidebarADURL_1;
$SidebarADURL_2 = $zbp->Config('kylin')->SidebarADURL_2;
$SidebarADURL_3 = $zbp->Config('kylin')->SidebarADURL_3;

$SidebarADIMG_1 = $zbp->Config('kylin')->SidebarADIMG_1;
$SidebarADIMG_2 = $zbp->Config('kylin')->SidebarADIMG_2;
$SidebarADIMG_3 = $zbp->Config('kylin')->SidebarADIMG_3;

if(isset($SidebarADURL_1)){
            $adurl_1 = $SidebarADURL_1;
        }
        else{
            $adurl_1 = '';
        }
if(isset($SidebarADIMG_1)){
            $adimg_1 = $SidebarADIMG_1;
        }
        else{
            $adimg_1 = '';
        }

if(isset($SidebarADURL_2)){
            $adurl_2 = $SidebarADURL_2;
        }
        else{
            $adurl_2 = '';
        }
if(isset($SidebarADIMG_1)){
            $adimg_2 = $SidebarADIMG_2;
        }
        else{
            $adimg_2 = '';
        }

if(isset($SidebarADURL_3)){
            $adurl_3 = $SidebarADURL_3;
        }
        else{
            $adurl_3 = '';
        }
if(isset($SidebarADIMG_3)){
            $adimg_3 = $SidebarADIMG_3;
        }
        else{
            $adimg_3 = '';
        }
 ?>
<?php if (isset($SidebarADON_U) && $SidebarADON_U == '1') { ?>
<div id="kylinthemes-ad-1" class="widget widget_ad ad-widget"><div class="adwidget"><a href="<?php if ($adurl_1) { ?><?php  echo $adurl_1;  ?><?php } ?>" target="_blank"><img style="height:270px;" src="<?php if ($adimg_1) { ?><?php  echo $adimg_1;  ?><?php } ?>" alt=""></a></div><h2 class="widget-title" style="display: block;">赞助商</h2></div>
<?php } ?>
<?php if ($type=='index') { ?>
<div class="widget  widget_posts_thumbnail maybe_you_like"><h2 class="widget-title">热门文章</h2>
<ul>
<?php 
$order = array('log_ViewNums'=>'DESC');
$where = array(array('=','log_Status','0'));
$array = $zbp->GetArticleList(array('*'),$where,$order,array(5),'');
 ?>
<?php  foreach ( $array as $hotlist) { ?>
<li class="clear">
    <a href="<?php  echo $hotlist->Url;  ?>" rel="bookmark" target="_blank">
        <div class="thumbnail-wrap">
            <?php if (kylin_Thumb($article) != '') { ?>
            <img width="120" height="80" src="<?php  echo kylin_Thumb($hotlist);  ?>"  alt="<?php  echo $hotlist->Title;  ?>"/>
            <?php } ?>
        </div>
    </a>
    <div class="entry-wrap">
        <a href="<?php  echo $hotlist->Url;  ?>" rel="bookmark" target="_blank"><?php  echo $hotlist->Title;  ?></a>
        <div class="entry-meta"><?php  echo $hotlist->Time();  ?></div>
    </div>
</li>
<?php }   ?>
</ul>
</div>
<?php } ?>
<?php if (isset($SidebarADON_M) && $SidebarADON_M == '1') { ?>
<div id="kylinthemes-ad-2" class="widget widget_ad ad-widget"><div class="adwidget"><a href="<?php if ($adurl_2) { ?><?php  echo $adurl_2;  ?><?php } ?>" target="_blank"><img src="<?php if ($adimg_2) { ?><?php  echo $adimg_2;  ?><?php } ?>" alt=""></a></div><h2 class="widget-title" style="display: block;">赞助商</h2></div>
<?php } ?>
<div class="widget  widget_posts_thumbnail"><h2 class="widget-title">刚刚更新</h2>
<ul>
<?php  foreach ( GetList(8) as $newlist) { ?>
<li class="clear">
    <a href="<?php  echo $newlist->Url;  ?>" rel="bookmark" target="_blank">
        <div class="thumbnail-wrap">
            <?php if (kylin_Thumb($article) != '') { ?>
            <img width="120" height="80" src="<?php  echo kylin_Thumb($newlist);  ?>"  alt="<?php  echo $newlist->Title;  ?>"/>
            <?php } ?>
        </div>
    </a>
    <div class="entry-wrap">
        <a href="<?php  echo $newlist->Url;  ?>" rel="bookmark" target="_blank"><?php  echo $newlist->Title;  ?></a>
        <div class="entry-meta"><?php  echo $newlist->Time();  ?></div>
    </div>
</li>
<?php }   ?>
</ul>
</div>
<?php if (isset($SidebarADON_D) && $SidebarADON_D == '1') { ?>
<div id="kylinthemes-ad-3" class="widget widget_ad ad-widget"><div class="adwidget"><a href="<?php if ($adurl_3) { ?><?php  echo $adurl_3;  ?><?php } ?>" target="_blank"><img src="<?php if ($adimg_3) { ?><?php  echo $adimg_3;  ?><?php } ?>" alt=""></a></div><h2 class="widget-title" style="display: block;">赞助商</h2></div>
<?php } ?>
<?php if ($type=='index') { ?>
<div id="nav_menu-2" class="widget widget_nav_menu">
    <h2 class="widget-title">热门标签</h2>
    <div class="menu-firendlink-container">
        <ul id="menu-firendlink" class="menu">
        <?php  echo kylin_sidetags();  ?>
        </ul>
    </div>
</div>
<div id="youlian nav_menu-2" class="widget widget_nav_menu" style="width: 260px;">
    <h2 class="widget-title">友情链接</h2>
    <div class="menu-firendlink-container">
        <ul id="menu-firendlink" class="menu">
            <?php  if(isset($modules['link'])){echo $modules['link']->Content;}  ?>
        </ul>
    </div>
</div>
<?php } ?>
</aside><!-- #secondary -->