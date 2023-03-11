{* Template Name:产品详情 *}
{template:header}
{if $article.Category.Metas.Jzzdl1}
<div class="nybanner"><img src="{$article.Category.Metas.Jzzdl1}" alt="{$article.Category.Name}"></div>
{/if}
<div class="max neiye">
  <div class="box">
    <div class="left neiye-l"> 
		{php}if($article->Category->Level==2){$url=$article->Category->Parent->Url;}else{$url=$article->Category->Url;}{/php}
		{Jz52_Cofive_subCaten($article.Category.ID,$url)}
  {template:sidebar4}
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
  <div class="pro-xq"> 
    <div class="swiper-container pic">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><img src="{Jz52_Cofive_IMG($article)}" alt="{$article.Title}"></div>
        {if $article.Metas.Jzzd2}<div class="swiper-slide"><img src="{$article.Metas.Jzzd2}" alt="{$article.Title}"></div>{/if}
        {if $article.Metas.Jzzd3}<div class="swiper-slide"><img src="{$article.Metas.Jzzd3}" alt="{$article.Title}"></div>{/if}
        {if $article.Metas.Jzzd4}<div class="swiper-slide"><img src="{$article.Metas.Jzzd4}" alt="{$article.Title}"></div>{/if}

      </div>
      <div class="swiper-pagination"></div>
    </div>
<script>
var swiper = new Swiper('.pro-xq .pic', {
spaceBetween:0,
autoplay:true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
</script> 
    <div class="pro-js">
      <h1>{$article.Title}</h1>
      <div class="pro-xx">
        <p>{php}$description = preg_replace('/[\r\n\s)]|(\s|\&nbsp\;|　|\xc2\xa0)+/', ' ', trim(SubStrUTF8(TransferHTML($article->Intro,'[nohtml]'),64)).'...');{/php}{$description}</p>
      </div>
      <div class="pro-lx"> <a href="{$zbp->Config('Jz52_Cofive')->xunpan}" class="zx" target="_blank">立即咨询</a>
        <p><i></i><span>{$zbp->Config('Jz52_Cofive')->phontxt}</span><a href="tel:{$zbp->Config('Jz52_Cofive')->phon}"><span>{$zbp->Config('Jz52_Cofive')->phon}</span></a></p>
      </div>
    </div>
    <div class="clearit"></div>
  </div>
  <div class="newsnav">
    <p>产品详情</p>
  </div>
  <div class="danye">
    {$article.Content}
  </div>
  {if count($article.Tags)}<div class="tags"><span>标签：</span> {foreach $article.Tags as $tag} <a href="{$tag.Url}" target="_blank">{$tag.Name}</a>{/foreach} </div>{/if}
      <div class="fn">
        {if $article.Prev}<p>上一篇：<a href="{$article.Prev.Url}">{$article.Prev.Title}</a> </p>{/if}
        {if $article.Next}<p>下一篇：<a href="{$article.Next.Url}">{$article.Next.Title}</a> </p>{/if}
      </div>
	{if count($article.RelatedList) > 0}
      <div class="newsnav">
        <p>相关推荐</p>
      </div>
	   {$array=GetList(3,null,null,null,null,null,array('is_related'=>$article->ID));}
        <ul class="pro_list ipro">
		{foreach $array as $related}
		<li><a href="{$related.Url}" title="{$related.Title}" class="pic"><img src="{Jz52_Cofive_IMG($related)}" alt="{$related.Title}"></a> <a href="{$related.Url}" title="{$related.Title}" class="t" >{$related.Title}</a></li>
		{/foreach}
        </ul>
  {/if}
</div>
  </div>
</div>
{template:footer}