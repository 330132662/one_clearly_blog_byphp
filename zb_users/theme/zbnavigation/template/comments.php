<?php include('post-safe.php');?>{if $socialcomment}
{$socialcomment}
{else}
<div class="commentsList">
  <h2 class="boxTitle"><i class="fas fa-newspaper"></i> 相关评论</h2>
  <label id="AjaxCommentBegin"></label>
  {foreach $comments as $key => $comment}
    {template:comment}
  {/foreach}
  <div class="pagenavi">
  {template:pagebar}
  </div> 
  <label id="AjaxCommentEnd"></label>
</div>
{template:commentpost}
{/if}
