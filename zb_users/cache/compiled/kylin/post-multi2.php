<?php  /* Template Name:公用列表2*/  ?>
<main id="main" class="gkt-site-main clear">
<div id="recent-content" class="content-list">
<?php  foreach ( $articles as $article) { ?>
    <?php if (!$article->IsTop) { ?>
    <div id="post-<?php  echo $article->ID;  ?>"  class="clear post-<?php  echo $article->ID;  ?> gkt-hentry">
    <?php if (kylin_Thumb($article) != '') { ?>
        <?php if (kylin_is_mobile()) { ?>
        <a class="thumbnail-link" href="<?php  echo $article->Url;  ?>" target="_blank">
            <div class="thumbnail-wrap">
                <img src="<?php  echo kylin_Thumb($article);  ?>" style="height:70px;"/>
            </div><!-- .thumbnail-wrap -->
        </a>
        <div class="entry-overview">
            <h2 class="gkt-entry-title" style="font-size: 15px;-webkit-line-clamp: 2;margin-bottom:0px;"><a href="<?php  echo $article->Url;  ?>" target="_blank"><?php  echo $article->Title;  ?></a></h2>
            <div class="entry-meta"> <span class="entry-date"><?php  echo $article->Time();  ?></span><!-- .entry-date --></div>
        </div><!-- .entry-overview -->
        <?php }else{  ?>
        <a class="thumbnail-link" href="<?php  echo $article->Url;  ?>" target="_blank">
            <div class="thumbnail-wrap">            
                    <img src="<?php  echo kylin_Thumb($article);  ?>" style="height:145px;"/>
            </div><!-- .thumbnail-wrap -->
        </a>
        <div class="entry-overview">
            <h2 class="gkt-entry-title"><a href="<?php  echo $article->Url;  ?>"><?php  echo $article->Title;  ?></a></h2>
            <div class="gkt-entry-summary">
                <p><?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),158)).'...'); ?><?php  echo $description;  ?></p>
            </div><!-- .entry-summary -->
            <div class="entry-meta">
            <span class="entry-category">
                <a href="<?php  echo $article->Category->Url;  ?>" target="_blank"><?php  echo $article->Category->Name;  ?></a></span><!-- .entry-category -->
            <span class="entry-date"><?php  echo $article->Time();  ?></span><!-- .entry-date -->
            <?php if (!kylin_is_mobile() && count($article->Tags)<4) { ?>
            <span class="gkt-tags-2"><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" target="_blank"><?php  echo $tag->Name;  ?></a><?php }   ?></span>
            <?php } ?>
            <!-- .meta-right -->
            </div><!-- .entry-meta -->  
        </div><!-- .entry-overview -->
        <?php } ?>
    <?php } ?>
    </div><!-- #post-<?php  echo $article->ID;  ?> -->
    <?php } ?>
<?php }   ?> 
</div><!-- #recent-content -->      
</main><!-- .site-main -->
