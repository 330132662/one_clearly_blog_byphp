<?php  /* Template Name:单条评论 */  ?>
<ul class="msg" id="cmt<?php  echo $comment->ID;  ?>">
	<li class="msgname" style="list-style-type:none;">
        <strong class="commentname">
        <a href="<?php  echo $comment->Author->HomePage;  ?>" rel="nofollow" target="_blank">
<?php if ($user->Level == 6) { ?>
<span style="color:#ff9800;"><?php  echo $comment->Author->StaticName;  ?>[<?php  echo $comment->IP;  ?>]</span>
<?php }else{  ?>
<span style="color:#0080f3;"><?php  echo $comment->Author->StaticName;  ?>[<?php  echo $comment->IP;  ?>]</span>
<?php } ?>
        </a>
        </strong>&nbsp;&nbsp;&nbsp;<small style="font-size:13px">&nbsp;发布于&nbsp;<?php  echo $comment->Time();  ?>&nbsp;&nbsp;<span class="revertcomment"><a href="#comment" onclick="zbp.comment.reply('<?php  echo $comment->ID;  ?>')" style="color:#00b8e8;">回复该评论</a></span></small></li>
	<li class="msgarticle" style="list-style-type:none;"><blockquote><?php  echo $comment->Content;  ?></blockquote>
<?php  foreach ( $comment->Comments as $comment) { ?>
<?php  include $this->GetTemplate('comment');  ?>
<?php }   ?>
	</li>
</ul>