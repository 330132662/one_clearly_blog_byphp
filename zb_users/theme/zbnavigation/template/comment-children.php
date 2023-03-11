<?php include('post-safe.php');?><ol>
	<li id="cmt{$comment.ID}">			
		<div class="children">
			<span class="name"><a href="{$comment.Author.HomePage}" rel="nofollow" target="_blank">{$comment.Author.StaticName}</a></span>
			<span class="time"><time>{$comment.Time()}</time> 回复：</span> 
			<span class="text">{$comment.Content}</span>
			<span class="reply"><a href="javascript:void(0);" onclick="zbp.comment.reply('{$comment.ID}')">回复</a></span>
		</div>
	</li>
	{foreach $comment.Comments as $comment}
	{template:comment-children}
	{/foreach}
</ol>
