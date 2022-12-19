<?php  /*Template Name:文章页*/  ?>
<?php  include $this->GetTemplate('header-show');  ?>
<!--<body class="single post-<?php  echo $article->ID;  ?>" oncontextmenu=self.event.returnValue=false onselectstart="return false">-->
<body class="single post-<?php  echo $article->ID;  ?>">
<div id="page" class="site">
<?php  include $this->GetTemplate('navbar');  ?>
<div id="content" class="site-content container three-col-layout  clear"> 
    <div id="primary" class="content-area">
<?php  include $this->GetTemplate('navbar2');  ?>
<div class="right-col">
            <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
                <?php  include $this->GetTemplate('post-single');  ?>
            <?php } ?>
</div><!-- .right-col -->
</div>
<?php  include $this->GetTemplate('sidebar-article');  ?>
</div><!-- #content .site-content -->
<?php  include $this->GetTemplate('footer');  ?>