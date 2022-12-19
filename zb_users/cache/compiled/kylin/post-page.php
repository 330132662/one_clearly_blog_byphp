<?php  /* Template Name:单页 */  ?>
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
                    <?php  echo $article->Content;  ?>
                  </div><!-- .entry-content -->
            <footer class="entry-footer">
            </footer><!-- .entry-footer -->
            </article><!-- #post-<?php  echo $article->ID;  ?> -->
        </main><!-- #main -->
    </div><!-- #primary -->      
</div>