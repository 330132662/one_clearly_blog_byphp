<?php  /* Template Name:公用列表3 */  ?>
<main id="main" class="site-main clear">
<?php if ($type == 'index') { ?>
<div class="breadcrumbs clear"><h1><strong>最新文章</strong></h1></div>
<?php }else{  ?>
<div class="breadcrumbs clear"><h1><strong>
<?php if ($type=='tag') { ?><?php  echo $tag->Name;  ?><?php }else{  ?><?php  echo $category->Name;  ?><?php } ?>
</strong></h1></div>
<?php } ?>
<div id="recent-content" class="content-list">
<?php  foreach ( $articles as $article) { ?>
    <?php if (!$article->IsTop) { ?>
    <div id="post-<?php  echo $article->ID;  ?>"  class="clear post-<?php  echo $article->ID;  ?> hentry">
<?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),158)).'...'); ?>
    <?php if (kylin_Thumb($article) != '') { ?>
        <?php if (kylin_is_mobile()) { ?>
            <a class="thumbnail-link" href="<?php  echo $article->Url;  ?>" target="_blank">
                <div class="thumbnail-wrap">
                    <img src="<?php  echo kylin_Thumb($article);  ?>" style="height:65px;"/>
                </div><!-- .thumbnail-wrap -->
            </a>
            <div class="entry-overview">
                <h2 class="gkt-entry-title-m1"><a href="<?php  echo $article->Url;  ?>" target="_blank"><?php  echo $article->Title;  ?></a></h2>
                <div class="entry-summary">
                    <p><?php  echo $description;  ?></p>
                </div><!-- .entry-summary -->
                <div class="entry-meta">
                <span class="entry-date"><?php  echo $article->Time();  ?></span><!-- .entry-date -->
                </div><!-- .entry-meta -->  
            </div><!-- .entry-overview -->      
        <?php }else{  ?>
            <a class="thumbnail-link" href="<?php  echo $article->Url;  ?>" target="_blank">
                <div class="thumbnail-wrap"><img src="<?php  echo kylin_Thumb($article);  ?>" style="height:145px;"/>
                    <span class="gkt-img-lable"><?php  echo kylin_thumbsNum($article->Content);  ?>P</span>
                </div><!-- .thumbnail-wrap -->
            </a>
            <div class="entry-overview  ">
            <h2 class="entry-title"><a href="<?php  echo $article->Url;  ?>" target="_blank"><?php  echo $article->Title;  ?></a></h2>
            <div class="entry-summary">
                <p><?php  echo $description;  ?></p>
            </div><!-- .entry-summary -->
            <div class="entry-meta">
            <span class="entry-category">
                <a href="<?php  echo $article->Category->Url;  ?>" target="_blank"><?php  echo $article->Category->Name;  ?></a></span><!-- .entry-category -->
            <span class="entry-date"><?php  echo $article->Time();  ?></span><!-- .entry-date -->
            <?php if (!kylin_is_mobile() && count($article->Tags)<4) { ?>
            <span class="gkt-tags"><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" target="_blank"><?php  echo $tag->Name;  ?></a><?php }   ?></span>
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
