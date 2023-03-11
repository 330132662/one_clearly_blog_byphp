{* Template Name:文章模板 *}
{if $article.Category.Metas.Jzzdl1}
<div class="nybanner"><img src="{$article.Category.Metas.Jzzdl1}" alt="{$article.Category.Name}"></div>
{/if}
<div class="max neiye">
  <div class="box">
    <div class="left neiye-l"> 
		{php}if($article->Category->Level==2){$url=$article->Category->Parent->Url;}else{$url=$article->Category->Url;}{/php}
		{Jz52_Cofive_subCaten($article.Category.ID,$url)}
  {template:sidebar3}
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
        <p>{$article.Category.Name}</p>
      </div>
      <div class="biaoti">
        <h1>{$article.Title}</h1>
        <p>发布时间：{$article.Time('Y-m-d')}　点此：{$article.ViewNums}次</p>
      </div>
      <div class="danye">
        {$article.Content}
      </div>
      {if count($article.Tags)}<div class="tags"><span>标签：</span> {foreach $article.Tags as $tag} <a href="{$tag.Url}" target="_blank">{$tag.Name}</a>{/foreach} </div>{/if}
      <div class="fn" style="padding-bottom:15px;">
        {if $article.Prev}<p>上一篇：<a href="{$article.Prev.Url}">{$article.Prev.Title}</a> </p>{/if}
        {if $article.Next}<p>下一篇：<a href="{$article.Next.Url}">{$article.Next.Title}</a> </p>{/if}
      </div>
	{if count($article.RelatedList) > 0}
      <div class="newsnav">
        <p>相关推荐</p>
      </div>
      <div class="tuijian">
	   {$array=GetList(6,null,null,null,null,null,array('is_related'=>$article->ID));}
        <ul>
		{foreach $array as $related}
          <li><span>{$related.Time('Y-m-d')}</span><a href="{$related.Url}" title="{$related.Title}">{$related.Title}</a></li>
		{/foreach}
        </ul>
      </div>
	{/if}
    </div>
  </div>
</div>