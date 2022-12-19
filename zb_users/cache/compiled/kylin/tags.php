<?php  /* Template Name:全站标签云页 */  ?>
<?php  include $this->GetTemplate('header');  ?>
<body class="page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-2 logged-in wp-custom-logo group-blog">
<div id="page" class="site">
<?php  include $this->GetTemplate('navbar');  ?>
<div id="content" class="site-content container three-col-layout  clear">
    <?php if (kylin_is_mobile()) { ?>
    <div id="primary" class="content-area full-width">
    <?php }else{  ?>
    <div id="primary" class="content-area width-center">
    <?php } ?>
        <main id="main" class="site-main">
            <article id="post-<?php  echo $article->ID;  ?>" class="post-<?php  echo $article->ID;  ?> page type-page status-publish has-post-thumbnail hentry">
                <!-- .entry-header -->
                <header class="entry-header"><h1 class="page-title"><?php  echo $article->Title;  ?></h1></header>
                  <div class="entry-content">
                    <?php  echo kylin_GetTagCloudList();  ?>
                  </div><!-- .entry-content -->
            <footer class="entry-footer">
            </footer><!-- .entry-footer -->
            </article><!-- #post-<?php  echo $article->ID;  ?> -->
        </main><!-- #main -->
    </div><!-- #primary -->      
</div>
</div><!-- #content .site-content -->
<?php  include $this->GetTemplate('footer');  ?>
