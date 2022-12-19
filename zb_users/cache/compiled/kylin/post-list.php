<?php  /* Template Name:搜索结果列表 */  ?>
<main id="main" class="site-main clear">
            <div id="recent-content" class="content-search">
                <div class="breadcrumbs clear">
                    <h1>
                    <span><?php  echo $title;  ?></span>结果：
                    </h1>   
                </div><!-- .breadcrumbs -->
<?php  foreach ( $articles as $article) { ?>                  
<div id="post-<?php  echo $article->ID;  ?>" class="clear post-<?php  echo $article->ID;  ?> hentry"> 
        <a class="thumbnail-link" href="<?php  echo $article->Url;  ?>">
<div class="thumbnail-wrap">
<?php if (kylin_Thumb($article) != '') { ?>    
    <?php if (kylin_is_mobile()) { ?>
    <img src="<?php  echo kylin_Thumb($article);  ?>"  style="height:65px;"/>
    <?php }else{  ?>
    <img src="<?php  echo kylin_Thumb($article);  ?>" style="height:65px;"/>
    <?php } ?>
<?php } ?>
</div><!-- .thumbnail-wrap -->
        </a>
    <h2 class="entry-title"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h2>
    <div class="entry-meta">
        <span class="entry-category">
            <a href="<?php  echo $article->Category->Url;  ?>" ><?php  echo $article->Category->Name;  ?></a></span><!-- .entry-category -->
        <span class="entry-date"><?php  echo $article->Time();  ?></span><!-- .entry-date -->
    <span class="meta-right"></span><!-- .meta-right -->
    </div><!-- .entry-meta -->  
</div><!-- #post-<?php  echo $article->ID;  ?> -->
<?php }   ?> 
</div><!-- #recent-content -->
</main>