{* Template Name:双栏文章 *}
 {if $article.Type==ZC_POST_TYPE_ARTICLE}
                {template:single-show-double}
                {else}
                {template:page}
            {/if}
