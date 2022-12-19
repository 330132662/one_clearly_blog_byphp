{* Template Name:公用列表3 *}
<main id="main" class="site-main clear">
{if $type == 'index'}
<div class="breadcrumbs clear"><h1><strong>最新文章</strong></h1></div>
{else}
<div class="breadcrumbs clear"><h1><strong>
{if $type=='tag'}{$tag.Name}{else}{$category.Name}{/if}
</strong></h1></div>
{/if}
<div id="recent-content" class="content-list">
{foreach $articles as $article}
    {if !$article.IsTop}
    <div id="post-{$article.ID}"  class="clear post-{$article.ID} hentry">
{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),158)).'...');{/php}
    {if kylin_Thumb($article) != ''}
        {if kylin_is_mobile()}
            <a class="thumbnail-link" href="{$article.Url}" target="_blank">
                <div class="thumbnail-wrap">
                    <img src="{kylin_Thumb($article)}" style="height:65px;"/>
                </div><!-- .thumbnail-wrap -->
            </a>
            <div class="entry-overview">
                <h2 class="gkt-entry-title-m1"><a href="{$article.Url}" target="_blank">{$article.Title}</a></h2>
                <div class="entry-summary">
                    <p>{$description}</p>
                </div><!-- .entry-summary -->
                <div class="entry-meta">
                <span class="entry-date">{$article->Time()}</span><!-- .entry-date -->
                </div><!-- .entry-meta -->  
            </div><!-- .entry-overview -->      
        {else}
            <a class="thumbnail-link" href="{$article.Url}" target="_blank">
                <div class="thumbnail-wrap"><img src="{kylin_Thumb($article)}" style="height:145px;"/>
                    <span class="gkt-img-lable">{kylin_thumbsNum($article->Content)}P</span>
                </div><!-- .thumbnail-wrap -->
            </a>
            <div class="entry-overview  ">
            <h2 class="entry-title"><a href="{$article.Url}" target="_blank">{$article.Title}</a></h2>
            <div class="entry-summary">
                <p>{$description}</p>
            </div><!-- .entry-summary -->
            <div class="entry-meta">
            <span class="entry-category">
                <a href="{$article->Category->Url}" target="_blank">{$article->Category->Name}</a></span><!-- .entry-category -->
            <span class="entry-date">{$article->Time()}</span><!-- .entry-date -->
            {if !kylin_is_mobile() && count($article.Tags)<4}
            <span class="gkt-tags">{foreach $article.Tags as $tag}<a href="{$tag.Url}" target="_blank">{$tag.Name}</a>{/foreach}</span>
        {/if}
            <!-- .meta-right -->
            </div><!-- .entry-meta -->  
        </div><!-- .entry-overview -->
                {/if}
        {/if}
    </div><!-- #post-{$article.ID} -->
    {/if}
{/foreach} 
</div><!-- #recent-content -->      
</main><!-- .site-main -->
