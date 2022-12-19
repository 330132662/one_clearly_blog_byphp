{* Template Name:单条评论 *}
<ul class="msg" id="cmt{$comment.ID}">
	<li class="msgname" style="list-style-type:none;">
        <strong class="commentname">
        <a href="{$comment.Author.HomePage}" rel="nofollow" target="_blank">
{if $user.Level == 6}
<span style="color:#ff9800;">{$comment.Author.StaticName}[{$comment.IP}]</span>
{else}
<span style="color:#0080f3;">{$comment.Author.StaticName}[{$comment.IP}]</span>
{/if}
        </a>
        </strong>&nbsp;&nbsp;&nbsp;<small style="font-size:13px">&nbsp;发布于&nbsp;{$comment.Time()}&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="zbp.comment.reply('{$comment.ID}')" style="color:#00b8e8;">回复该评论</a></span></small></li>
	<li class="msgarticle" style="list-style-type:none;"><blockquote>{$comment.Content}</blockquote>
{foreach $comment.Comments as $comment}
{template:comment}
{/foreach}
	</li>
</ul>