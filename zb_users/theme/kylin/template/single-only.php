{* Template Name:单栏文章 *}
 {if $article.Type==ZC_POST_TYPE_ARTICLE}
                {template:single-show-only}
                {else}
                {template:page}
            {/if}
