{* Template Name:评论发布框 *}
<div class="post comment-respond" id="divCommentPost" style="margin-bottom:33px;">
  <h3 id="reply-title" class="comment-reply-title">
    发表评论
<a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;color:#00b8e8">
	<small>取消回复</small></a>
  </h3>
  <p class="comment-notes">◎欢迎参与讨论，请在这里发表您的看法、交流您的观点。</p>
	<form id="frmSumbit" class="comment-form" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
{else}
	<p class="comment-form-author"><label for="inpName">名称<span class="required">*</span></label><input type="text" name="inpName" id="inpName" class="text" value="{$user.Name}" size="30" tabindex="1" maxlength="100"/></p>
	<p class="comment-form-email"><label for="inpEmail">邮箱</label><input type="text" name="inpEmail" id="inpEmail" class="text" value="{$user.Email}" size="30" tabindex="2" maxlength="100"/></p>
	<!--<p class="comment-form-url"><label for="inpHomePage">网址</label><input type="text" name="inpHomePage" id="inpHomePage" class="comment-form-url text" value="{$user.HomePage}" size="30" tabindex="3" maxlength="200"/> </p>-->
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<p><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="30" tabindex="4" /> <label for="inpVerify">验证码(*)</label>
	<img style="width:{$option['ZC_VERIFYCODE_WIDTH']}px;height:{$option['ZC_VERIFYCODE_HEIGHT']}px;cursor:pointer;" src="{$article.ValidCodeUrl}" alt="" title="" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
	</p>
{/if}

{/if}
	<!--<p class="comment-form-comment"><label for="txaArticle">正文<span class="required">*</span></label></p>-->
	<p><textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="5" placeholder="您好，{if $user.ID>0}{$user.StaticName}{/if}请发表您的评论!"></textarea></p>
	<p><input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return zbp.comment.post()" class="gkt-radius-button-blue" /></p>
	</form>
</div>
<script language="JavaScript" type="text/javascript">
var txaArticle = document.getElementById('txaArticle');
txaArticle.onkeydown = function quickSubmit(e) {
if (!e) var e = window.event;
if (e.ctrlKey && e.keyCode == 13){
return zbp.comment.post();
}
}
</script>