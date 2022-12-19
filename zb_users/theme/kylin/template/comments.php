{* Template Name:所有评论模板 *}
<!--评论框-->
{template:commentpost}

{if $socialcomment}
{$socialcomment}
{else}
{if $article.CommNums>0}
<ul class="msg msghead">
	<li class="tbname" style="list-style-type:none;">
          <h3 class="comment-reply-title" >
    评论列表(共<span class="required">{$article.CommNums}</span>条评论):
  </h3>
    </li>
</ul>
{/if}

<label id="AjaxCommentBegin"></label>
<!--评论输出-->
{foreach $comments as $key => $comment}
{template:comment}
{/foreach}

<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
{template:pagebar}
</div>
<label id="AjaxCommentEnd"></label>
{/if}