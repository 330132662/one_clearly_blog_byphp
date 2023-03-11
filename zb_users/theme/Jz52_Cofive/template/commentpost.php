{* Template Name:评论提交模块 *}
<div class="jz-comment" id="divCommentPost">
  <h3 class="sub-tit" >{if $user.ID>0}{$user.StaticName}{/if}发表评论<a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;float:right;"><small>取消回复</small></a></h3>

  <form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}">
	<input type="hidden" name="inpRevID" id="inpRevID" value="0">
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}">
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}">
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}">
{else}
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<div class="jz-comment-box jz-comment-ul4">
      <input type="text" name="inpName" id="inpName" class="text" value="访客" size="28" tabindex="1" placeholder="名称(*)">
    </div>
    <div class="jz-comment-box jz-comment-ul4">
      <input type="text" name="inpEmail" id="inpEmail" class="text" value="" size="28" tabindex="2" placeholder="邮箱">
    </div>
    <div class="jz-comment-box jz-comment-ul4">
      <input type="text" name="inpHomePage" id="inpHomePage" class="text" value="" size="28" tabindex="3" placeholder="网站">
    </div>
	<div class="jz-comment-box jz-comment-ul4">
	  <input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="4"  placeholder="验证码">
	<img class="jz-code" src="{$article.ValidCodeUrl}" alt="" title="" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();">
    </div>
	{else}
	<div class="jz-comment-box jz-comment-ul3">
      <input type="text" name="inpName" id="inpName" class="text" value="访客" size="28" tabindex="1" placeholder="名称(*)">
    </div>
    <div class="jz-comment-box jz-comment-ul3 jz-comment-ul3-2">
      <input type="text" name="inpEmail" id="inpEmail" class="text" value="" size="28" tabindex="2" placeholder="邮箱">
    </div>
    <div class="jz-comment-box jz-comment-ul3">
      <input type="text" name="inpHomePage" id="inpHomePage" class="text" value="" size="28" tabindex="3" placeholder="网站">
    </div>
{/if}
{/if}
    <div class="jz-comment-box jz-comment-textarea">
      <textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" tabindex="5" placeholder="欢迎在这里交流评论，但是垃圾评论不受欢迎！"></textarea>
      <input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return zbp.comment.post()" class="button">
    </div>
  </form>
</div>