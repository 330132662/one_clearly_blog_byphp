{* Template Name:产品列表 *}
{template:header}
{if $type=='category'}
{if $category.Metas.Jzzdl1}
<div class="nybanner"><img src="{$category.Metas.Jzzdl1}" alt="{$category.Name}"></div>
{/if}
{/if}
<div class="max neiye">
  <div class="box"> <div class="left neiye-l"> 
  	{if $type=='category'}
		{php}if($category->Level==2){$url=$category->Parent->Url;}else{$url=$category->Url;}{/php}
		{Jz52_Cofive_subCaten($category.ID,$url)}
	{/if}
  {template:sidebar2}
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
        <p>{if $type=='category'}{$category.Name}{else}{$title}{/if}</p>
      </div>
      <div class="pro_list">
        <ul>
      {foreach $articles as $article}
      {if $article.IsTop}
	  <li><a href="{$article.Url}" title="{$article.Title}" class="pic"><img src="{Jz52_Cofive_IMG($article)}" alt="{$article.Title}"></a> <a href="{$article.Url}" title="{$article.Title}" class="t" >[顶]{$article.Title}</a></li>
      {else}
      <li><a href="{$article.Url}" title="{$article.Title}" class="pic"><img src="{Jz52_Cofive_IMG($article)}" alt="{$article.Title}"></a> <a href="{$article.Url}" title="{$article.Title}" class="t" >{$article.Title}</a></li>
      {/if}
      {/foreach}
        </ul>
      </div>
      <div class="pglist">{template:pagebar}</div>
    </div>
  </div>
</div>
{template:footer}