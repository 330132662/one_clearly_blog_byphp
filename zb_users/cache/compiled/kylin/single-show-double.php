<?php  include $this->GetTemplate('header-show');  ?>
<body class="single post-<?php  echo $article->ID;  ?>">
<div id="page" class="site">
<?php  include $this->GetTemplate('navbar');  ?>
<div id="content" class="site-content container two-col-layout  clear"> 
    <div id="primary" class="content-area">
<div class="right-col">
            <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
                <?php  include $this->GetTemplate('post-single-double');  ?>
            <?php } ?>
</div><!-- .right-col -->
</div>
<?php  include $this->GetTemplate('sidebar-article');  ?>
</div><!-- #content .site-content -->
<?php  include $this->GetTemplate('footer');  ?>