<?php include('post-safe.php');?><ol>
  <li id="cmt{$comment.ID}">
    <figure class="gravatar">
      <img alt="{$comment.Author.StaticName}" src="{$comment.Author.Avatar}"/>
    </figure>
    <div class="cmtInfo">
      <div class="cmtName">
        <a href="{$comment.Author.HomePage}" rel="nofollow" target="_blank">{$comment.Author.StaticName}</a>
      </div>
      <div class="cmtMeta">
        <span><time>{$comment.Time()}</time></span>
        <span><a href="javascript:void(0);" onclick="zbp.comment.reply('{$comment.ID}')">回复</a></span>
      </div>
      <div class="cmtText">
       {$comment.Content}
      </div>
    </div>
    {foreach $comment.Comments as $comment}
	{template:comment-children}
    {/foreach}
  </li>
</ol>