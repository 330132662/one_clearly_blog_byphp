<?php include('post-safe.php');?><div id="comment">
<div class="commentForm">
  <form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}">
    <input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
      <input type="hidden" name="inpRevID" id="inpRevID" value="0" />
      {if $user.ID>0}
      <input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
      <input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
      <input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
      <div class="user">登录用户：{$user.StaticName}</div>
      {else}
    <div class="top">
      <div class="item">
        <label>昵称：<i>*</i></label>
        <div class="input">         
          <input type="text" name="inpName" id="inpName" class="text" value="{$user.Name}" tabindex="1" placeholder="输入您的昵称"/> 
        </div>
      </div>

      <div class="item">
        <label>邮箱：<i>*</i></label>
        <div class="input">         
          <input type="text" name="inpEmail" id="inpEmail" class="text" value="{$user.Email}" tabindex="2" placeholder="输入您的邮箱(保密)"/>
        </div>
      </div>

      <div class="item">
        <label>网站：</label>
        <div class="input">         
          <input type="text" name="inpHomePage" id="inpHomePage" class="text" value="{$user.HomePage}" tabindex="3" placeholder="输入您的网站地址"/>
        </div>
      </div>
    </div>
    {/if}
    <div class="btm">
      <label>内容：<i>*</i></label>
      <div class="input">
        <textarea name="txaArticle" class="text" id="txaArticle" tabindex="4" placeholder="留下您的点评"></textarea>
      </div>
    </div>
	{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<div class="verify">
		<label for="verify">验证码<i>*</i></label>
		<img src="{$article.ValidCodeUrl}" alt="验证码" title="点击图片刷新验证码" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
		<div class="input">
			<input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="28" tabindex="5" placeholder="输入右边的验证码"/>
		</div>
	</div>
	{/if}
    <div class="btn">
      <input type="submit" name="submit" class="submit" value="提交" tabindex="6" onclick="return zbp.comment.post()"/>
      <a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;">取消</a>
    </div>
  </form>
</div>
</div>