{* Template Name:单页模板 *}
{if $article.Metas.Jzzdy1}
<div class="nybanner"><img src="{$article.Metas.Jzzdy1}" alt="{$article.Title}}"></div>
{/if}
<div class="max neiye">
  <div class="box">
    <div class="left neiye-l"> 
<div class="nydh">
  <div class="title">
    <p><a href="{$host}" title="{$article.Title}">— {$article.Title} —</a></p>
  </div>
  <ul class="ul">
  {$zbp->Config('Jz52_Cofive')->clnav}
  </ul>
</div>
  {template:sidebar5}
  <div class="nylx"> <div class="title">联系我们</div>
    <div class="contact">
      <div class="tel"><img src="{$host}zb_users/theme/{$theme}/style/images/tebl.svg" alt="tel"><span>{$zbp->Config('Jz52_Cofive')->phontxt}</span> <b>{$zbp->Config('Jz52_Cofive')->phon}</b> </div>
      <div class="dizhi">
	  {$zbp->Config('Jz52_Cofive')->cllxwm}
      </div>
    </div>
  </div>
    </div>
    <div class="right neiye-r">
      <div class="newsnav">
        <div class="more">您的位置：{if $type=='article'}<a href="{$host}">首页</a>>><a href="{$article.Category.Url}">{$article.Category.Name}</a>>>正文 {elseif $type=='category'}<a href="{$host}">首页</a>>><a href="{$category.Url}">{$category.Name}</a> {elseif $type=='index'} {else}<a href="{$host}">首页</a>>>{$title}{/if} </div>
        <p>{$article.Title}</p>
      </div>
      <div class="danye">
        {$article.Content}
      </div>
	  {if !$article.IsLock}
      <div class="commen_pl">
        <div class="gbko"> 
          {template:comments} 
        </div>
      </div>
      {/if}
    </div>
  </div>
</div>