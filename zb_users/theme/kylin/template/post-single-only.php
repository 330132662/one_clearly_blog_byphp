{php}
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
{/php}
<main id="main" class="site-main" style="padding: 58px 95px;">
   <article class="hentry" id="post-{$article.ID}">
     <div class="gkt-breadcrumbs">当前位置：<a href="{$host}" target="_blank">首页</a> <small>></small> <a href="{$article->Category->Url}" target="_blank">{$article->Category->Name}</a> <small>></small> 正文</div>
    <header class="entry-header">
        <div id="single-sticky">
            <h1 class="entry-title">{$article.Title}</h1>
                <div class="entry-meta">
                    <span class="entry-category"><a href="{$article->Category->Url}" target="_blank">{$article->Category->Name}</a></span><!-- .entry-category -->
                    <span class="entry-author">来源：{$articlesource}&nbsp;&nbsp;作者：{$articleauthor}&nbsp;&nbsp;编辑：{$article.Author.StaticName}</span><!-- .entry-author -->
                    <span class="entry-date">{$article->Time()}</span><!-- .entry-date -->
                    <span class="sticky-meta-right">
                        <span class="meta-right">
                            <span class="entry-views">浏览：{$article.ViewNums}</span><span class="entry-comment">评论：{$article.CommNums}</span>
                        </span><!-- .meta-right -->
                    </span><!-- .sticky-meta-right -->
                </div><!-- .entry-meta --> 
        </div><!-- #single-sticky -->
    </header><!-- .entry-header -->
    <div class="entry-content">
        {$article.Content}
        <div class="gkt-prevnext">
        {if $article.Prev}
        <li><a href="{$article.Prev.Url}" target="_blank" title="{$article.Prev.Title}">{$article.Prev.Title}</a></li>
        {/if}
        <li><a href="{$article.Url}" target="_blank" title="{$article.Title}">{$article.Title}</a></li>
        {if $article.Next}
        <li><a href="{$article.Next.Url}" target="_blank" title="{$article.Next.Title}">{$article.Next.Title}</a></li>
        {/if}
        </div>
    </div><!-- .entry-content -->
    <div class="entry-footer clear">
        <div class="entry-tags" style="margin-top:8px;">
<span class="gkt-tags">{foreach $article.Tags as $tag}<a href="{$tag.Url}" target="_blank">{$tag.Name}</a>{/foreach}</span>
        </div><!-- .entry-tags -->
<!--分享-->
<span class="basicShareBtn gkt-share-right">
<div id="share-2"></div>
</span>
    </div>
{if count($article.Tags)>0}
<div class="gkt-entry-xgwz clear" style="margin-bottom:8px;">
<h3>相关文章：</h3>
{foreach GetList(8,null,null,null,null,null,array('is_related'=>$article.ID)) as $related}
<li>
    <a href="{$related.Url}" target="_blank">{$related.Title}</a><i>{$article->Time()}</i>
</li>
{/foreach}
</div>
{/if}
{if !$article.IsLock}
    {template:comments}
{else}
<p>文章已关闭评论！</p>
{/if}
</article>
</main>