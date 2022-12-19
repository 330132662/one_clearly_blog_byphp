<?php  /* Template Name:所有评论模板 */  ?>
<!--评论框-->
<?php  include $this->GetTemplate('commentpost');  ?>

<?php if ($socialcomment) { ?>
<?php  echo $socialcomment;  ?>
<?php }else{  ?>
<?php if ($article->CommNums>0) { ?>
<ul class="msg msghead">
	<li class="tbname" style="list-style-type:none;">
          <h3 class="comment-reply-title" >
    评论列表(共<span class="required"><?php  echo $article->CommNums;  ?></span>条评论):
  </h3>
    </li>
</ul>
<?php } ?>

<label id="AjaxCommentBegin"></label>
<!--评论输出-->
<?php  foreach ( $comments as $key => $comment) { ?>
<?php  include $this->GetTemplate('comment');  ?>
<?php }   ?>

<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
<?php  include $this->GetTemplate('pagebar');  ?>
</div>
<label id="AjaxCommentEnd"></label>
<?php } ?>