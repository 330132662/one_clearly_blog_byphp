{* Template Name:公用列表2*}
<main id="main" class="gkt-site-main clear">
<div id="recent-content" class="content-list">
{foreach $articles as $article}
    {if !$article.IsTop}
    <div id="post-{$article.ID}"  class="clear post-{$article.ID} gkt-hentry">
    {if kylin_Thumb($article) != ''}
        {if kylin_is_mobile()}
        <a class="thumbnail-link" href="{$article.Url}" target="_blank">
            <div class="thumbnail-wrap">
                <img src="{kylin_Thumb($article)}" style="height:70px;"/>
            </div><!-- .thumbnail-wrap -->
        </a>
        <div class="entry-overview">
            <h2 class="gkt-entry-title" style="font-size: 15px;-webkit-line-clamp: 2;margin-bottom:0px;"><a href="{$article.Url}" target="_blank">{$article.Title}</a></h2>
            <div class="entry-meta"> <span class="entry-date">{$article->Time()}</span><!-- .entry-date --></div>
        </div><!-- .entry-overview -->
        {else}
        <a class="thumbnail-link" href="{$article.Url}" target="_blank">
            <div class="thumbnail-wrap">            
                    <img src="{kylin_Thumb($article)}" style="height:145px;"/>
            </div><!-- .thumbnail-wrap -->
        </a>
        <div class="entry-overview">
            <h2 class="gkt-entry-title"><a href="{$article.Url}">{$article.Title}</a></h2>
            <div class="gkt-entry-summary">
                <p>{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),158)).'...');{/php}{$description}</p>
            </div><!-- .entry-summary -->
            <div class="entry-meta">
            <span class="entry-category">
                <a href="{$article->Category->Url}" target="_blank">{$article->Category->Name}</a></span><!-- .entry-category -->
            <span class="entry-date">{$article->Time()}</span><!-- .entry-date -->
            {if !kylin_is_mobile() && count($article.Tags)<4}
            <span class="gkt-tags-2">{foreach $article.Tags as $tag}<a href="{$tag.Url}" target="_blank">{$tag.Name}</a>{/foreach}</span>
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
