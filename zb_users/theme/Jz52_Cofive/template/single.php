{* Template Name:文章单页判断模块 *}
{template:header}
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}
{template:footer}