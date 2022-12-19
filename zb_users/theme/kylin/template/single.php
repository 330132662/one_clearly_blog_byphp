{*Template Name:默认3栏文章页*}
            {if $article.Type==ZC_POST_TYPE_ARTICLE}
                {template:single-show}
                {else}
                {template:page}
            {/if}
