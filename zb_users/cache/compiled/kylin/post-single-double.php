<?php 
$CopyWeixinON = $zbp->Config('kylin')->CopyWeixinON;
$CopyWeixin = $zbp->Config('kylin')->CopyWeixin;

if($article->Metas->articlesource){
    $articlesource = $article->Metas->articlesource;
}else{
    $articlesource = "网络";
}

if($article->Metas->articleauthor){
    $articleauthor = $article->Metas->articleauthor;
}else{
    $articleauthor = "";
}
 ?>
<main id="main" class="site-main" >
  <article class="hentry" id="post-<?php  echo $article->ID;  ?>">
      <div class="gkt-breadcrumbs">当前位置：<a href="<?php  echo $host;  ?>" target="_blank">首页</a> <small>></small> <a href="<?php  echo $article->Category->Url;  ?>" target="_blank"><?php  echo $article->Category->Name;  ?></a> <small>></small> 正文</div>
    <header class="entry-header">
        <div id="single-sticky">
            <h1 class="entry-title"><?php  echo $article->Title;  ?></h1>
                <div class="entry-meta">
                    <span class="entry-category"><a href="<?php  echo $article->Category->Url;  ?>" target="_blank"><?php  echo $article->Category->Name;  ?></a></span><!-- .entry-category -->
                    <span class="entry-author">来源：<?php  echo $articlesource;  ?>&nbsp;&nbsp;作者：<?php  echo $articleauthor;  ?>&nbsp;&nbsp;编辑：<?php  echo $article->Author->StaticName;  ?></span><!-- .entry-author -->
                    <span class="entry-date"><?php  echo $article->Time();  ?></span><!-- .entry-date -->
                    <span class="sticky-meta-right">
                    <span class="meta-right">
                            <span class="entry-views">浏览：<?php  echo $article->ViewNums;  ?></span>
                            <span class="entry-comment">评论：<?php  echo $article->CommNums;  ?></span>
                    </span><!-- .meta-right -->
                    </span><!-- .sticky-meta-right -->
                </div><!-- .entry-meta --> 
        </div><!-- #single-sticky -->
    </header><!-- .entry-header -->
    <div class="entry-content">
        <?php  echo $article->Content;  ?>
        <div class="gkt-prevnext">
        <?php if ($article->Prev) { ?>
        <li><a href="<?php  echo $article->Prev->Url;  ?>" target="_blank" title="<?php  echo $article->Prev->Title;  ?>"><?php  echo $article->Prev->Title;  ?></a></li>
        <?php } ?>
        <li><a href="<?php  echo $article->Url;  ?>" target="_blank" title="<?php  echo $article->Title;  ?>"><?php  echo $article->Title;  ?></a></li>
        <?php if ($article->Next) { ?>
        <li><a href="<?php  echo $article->Next->Url;  ?>" target="_blank" title="<?php  echo $article->Next->Title;  ?>"><?php  echo $article->Next->Title;  ?></a></li>
        <?php } ?>
        </div>
    </div><!-- .entry-content -->
    <div class="entry-footer clear">
        <div class="entry-tags" style="margin-top:8px;">
<span class="gkt-tags"><?php  foreach ( $article->Tags as $tag) { ?><a href="<?php  echo $tag->Url;  ?>" target="_blank"><?php  echo $tag->Name;  ?></a><?php }   ?></span>
</div><!-- .entry-tags -->
<!--分享-->
<span class="basicShareBtn gkt-share-right">
<div id="share-2"></div>
</span>
</div>
<div class="gkt-entry-xgwz clear" style="margin-bottom:8px;">
<h3>相关文章：</h3>
<?php  foreach ( GetList(8,null,null,null,null,null,array('is_related'=>$article->ID)) as $related) { ?>
            <li>
                <a href="<?php  echo $related->Url;  ?>" target="_blank"><?php  echo $related->Title;  ?></a><i><?php  echo $article->Time();  ?></i>
            </li>
<?php }   ?>
</div>
<?php if (!$article->IsLock) { ?>
    <?php  include $this->GetTemplate('comments');  ?>
<?php }else{  ?>
<p>文章已关闭评论！</p>
<?php } ?>
</article>
</main>