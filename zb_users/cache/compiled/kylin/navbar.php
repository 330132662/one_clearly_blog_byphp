<!--页头导航栏公共区-->
<header id="masthead" class="site-header clear">
<div class="container">
<div class="site-branding">
<div id="logo">
<span class="helper"></span>
<a href="/" class="custom-logo-link" rel="home" itemprop="url">
    <?php if ($zbp->Config('kylin')->PostLOGOON == '1') { ?>
    <img width="247" height="60" src="<?php if ($zbp->Config('kylin')->PostLOGO) { ?><?php  echo $zbp->Config('kylin')->PostLOGO;  ?><?php }else{  ?><?php  echo $host;  ?>zb_users/zb_users/kylin/style/images/logo.png<?php } ?>" class="custom-logo" alt="<?php  echo $name;  ?>" itemprop="logo" />
    <?php }else{  ?>
    <strong><?php  echo $name;  ?></strong>
    <?php } ?>
</a>
</div><!--#logo-->
</div><!--.site-branding-->
<nav id="primary-nav" class="primary-navigation">
<div class="menu-top-container"><ul id="primary-menu" class="sf-menu">
<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
<!--
<li>
<a href="/">更多</a>
<ul class="sub-menu">
<li><a href="<?php  echo $host;  ?>finance.html">财经</a></li>
<li><a href="<?php  echo $host;  ?>tech.html">科技</a></li>
<li><a href="<?php  echo $host;  ?>life.html">生活</a></li>
<li><a href="<?php  echo $host;  ?>tour.html">旅游</a></li>
<li><a href="<?php  echo $host;  ?>game.html">游戏</a></li>
</ul>
</li>
-->
</ul></div>
</nav><!-- #primary-nav -->
<div id="slick-mobile-menu">
<?php if (kylin_isMobile()) { ?>
<!--移动端导航开始-->
<div class="slicknav_menu">
<a href="javascript:;" role="button" class="slicknav_btn a_js" >
    <span class="slicknav_menutxt">导航</span>
    <span class="slicknav_icon">
        <span class="slicknav_icon-bar"></span>
        <span class="slicknav_icon-bar"></span>
        <span class="slicknav_icon-bar"></span>
    </span>
</a>
</div>
<div class="a_txt">
    <div class="div1 a_closed"></div>
    <div class="div2">
        <a href="javascript:;" class="a_closed">
        <img src="<?php  echo $host;  ?>zb_users/theme/kylin/style/images/close.png" width="22"></a>
    </div>
    <div class="div3">
        <ul>
            <li><a href="<?php  echo $host;  ?>">首页</a></li>
<?php  if(isset($modules['navbar'])){echo $modules['navbar']->Content;}  ?>
        </ul>
    </div>
</div>
<!--移动端导航结束-->
<?php } ?>
</div>
            <span class="search-icon">
            <span class="genericon genericon-search"> <span>搜索</span></span>
            <span class="genericon genericon-close"> <span>收起</span></span>
            </span>
            <div class="header-search">
                <form id="searchform" method="post" action="<?php  echo $host;  ?>zb_system/cmd.php?act=search">
    <input type="search" name="q" class="search-input" placeholder="请输入关键字" autocomplete="off">
    <button type="submit" class="search-submit">搜索</button>
</form>         </div><!-- .header-search -->
                </div><!-- .container -->
</header><!-- #masthead -->

