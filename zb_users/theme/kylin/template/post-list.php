{* Template Name:搜索结果列表 *}
<main id="main" class="site-main clear">
            <div id="recent-content" class="content-search">
                <div class="breadcrumbs clear">
                    <h1>
                    <span>{$title}</span>结果：
                    </h1>   
                </div><!-- .breadcrumbs -->
{foreach $articles as $article}                  
<div id="post-{$article.ID}" class="clear post-{$article.ID} hentry"> 
        <a class="thumbnail-link" href="{$article.Url}">
<div class="thumbnail-wrap">
{if kylin_Thumb($article) != ''}    
    {if kylin_is_mobile()}
    <img src="{kylin_Thumb($article)}"  style="height:65px;"/>
    {else}
    <img src="{kylin_Thumb($article)}" style="height:65px;"/>
    {/if}
{/if}
</div><!-- .thumbnail-wrap -->
        </a>
    <h2 class="entry-title"><a href="{$article.Url}">{$article.Title}</a></h2>
    <div class="entry-meta">
        <span class="entry-category">
            <a href="{$article->Category->Url}" >{$article->Category->Name}</a></span><!-- .entry-category -->
        <span class="entry-date">{$article->Time()}</span><!-- .entry-date -->
    <span class="meta-right"></span><!-- .meta-right -->
    </div><!-- .entry-meta -->  
</div><!-- #post-{$article.ID} -->
{/foreach} 
</div><!-- #recent-content -->
</main>