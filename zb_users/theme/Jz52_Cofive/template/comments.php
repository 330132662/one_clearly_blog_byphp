{* Template Name:评论模块 *}
{if $socialcomment}
{$socialcomment}
{else}
<!--评论框-->
{template:commentpost}

<label id="AjaxCommentBegin"></label>
<!--评论输出-->
{foreach $comments as $key => $comment}
{template:comment}
{/foreach}
{if $pagebar && $pagebar.PageAll > 1}
<!--评论翻页条输出-->
<div class="page-comment pages">
{template:pagebar}
</div>
{/if}
<label id="AjaxCommentEnd"></label>
{/if}