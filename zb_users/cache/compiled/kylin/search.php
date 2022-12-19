<?php  /*Template Name:搜索页模板*/  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="home blog logged-in wp-custom-logo group-blog hfeed">
<div id="page" class="site">
<?php  include $this->GetTemplate('navbar');  ?>
<div id="content" class="site-content container three-col-layout  clear"> 
  <div id="primary" class="content-area clear">   
<?php  include $this->GetTemplate('navbar2');  ?>
        <div class="right-col">
                        <?php  include $this->GetTemplate('post-list');  ?>
<?php  include $this->GetTemplate('pagebar');  ?>
        </div><!-- .right-col -->
  </div><!-- #primary -->
<?php  include $this->GetTemplate('sidebar');  ?>
</div><!-- #content .site-content -->
<?php  include $this->GetTemplate('footer');  ?>