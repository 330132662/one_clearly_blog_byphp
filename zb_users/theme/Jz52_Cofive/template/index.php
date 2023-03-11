{* Template Name:首页列表模板 *}
{template:header}
{if $type=='index'}
{if $type=='index' && $page=='1' && $zbp->Config('Jz52_Cofive')->hdpyc!='1'}
<div class="fullSlide">
  <div class="bd">
    <ul>
	{module:jzSlides}
    </ul>
  </div>
  <div class="hd">
    <ul>
    </ul>
  </div>
</div>
<script>$(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold", interTime: 5000,  autoPlay:true, autoPage:true, trigger:"click" });</script>
<div class="max banner">
  <div class="swiper-container banner_list">
    <div class="swiper-wrapper">
	{module:mjzSlides}
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
{/if}
<div class="max index_pro">
  <div class="box">
    <div class="lmt">
      <h3 class="tit">{$zbp->Config('Jz52_Cofive')->productt}</h3>
      <p class="subtit">{$zbp->Config('Jz52_Cofive')->product1}</p>
    </div>
	<div class="pro100">{Jz52_Cofive_pro()}</div>
	<div class="pro50">{Jz52_Cofive_pro50()}</div>
  </div>
</div>
<div class="max youshi" style="background-image: url({$zbp->Config('Jz52_Cofive')->youshibj});">
  <div class="box">
    <div class="lmt">
      <h3 class="tit">{$zbp->Config('Jz52_Cofive')->youshit}</h3>
      <p class="subtit">{$zbp->Config('Jz52_Cofive')->youshitt}</p>
    </div>
    <ul>
      <li>
        <div class="youshitu left"> <img src="{$zbp->Config('Jz52_Cofive')->youshi1img}" alt="{$zbp->Config('Jz52_Cofive')->youshi1t}"></div>
        <div class="youshiwen right">{$zbp->Config('Jz52_Cofive')->youshi1p}</div>
      </li>
      <li>
        <div class="youshitu left"> <img src="{$zbp->Config('Jz52_Cofive')->youshi2img}" alt="{$zbp->Config('Jz52_Cofive')->youshi2t}"></div>
        <div class="youshiwen right">{$zbp->Config('Jz52_Cofive')->youshi2p}</div>
      </li>
      <li>
        <div class="youshitu right"> <img src="{$zbp->Config('Jz52_Cofive')->youshi3img}" alt="{$zbp->Config('Jz52_Cofive')->youshi3t}"></div>
        <div class="youshiwen left">{$zbp->Config('Jz52_Cofive')->youshi3p}</div>
      </li>
      <li>
        <div class="youshitu right"> <img src="{$zbp->Config('Jz52_Cofive')->youshi4img}" alt="{$zbp->Config('Jz52_Cofive')->youshi4t}"></div>
        <div class="youshiwen left">{$zbp->Config('Jz52_Cofive')->youshi4p}</div>
      </li>
    </ul>
  </div>
</div>
<div class="about">
  <div class="box"> 
    <div class="abtop">
      <div class="lmt">
        <h3 class="tit">{$zbp->Config('Jz52_Cofive')->aboutt}</h3>
        <p class="subtit">{$zbp->Config('Jz52_Cofive')->aboutt1}</p>
      </div>
      <div class="abtimi"> <b></b><img src="{$zbp->Config('Jz52_Cofive')->aboutimg}" alt="关于我们">
        <div class="f_z">
          <h3>关于我们</h3>
          <p>{php}$aboutzy = preg_replace('/[\r\n\s)]|(\s|\&nbsp\;|　|\xc2\xa0)+/', ' ', trim(SubStrUTF8(TransferHTML($zbp->Config('Jz52_Cofive')->aboutzy,'[nohtml]'),96)).'...');{/php}{$aboutzy}</p>
          <a href="{$zbp->Config('Jz52_Cofive')->abouturl}">查看详情</a></div>
      </div>
    </div>
  </div>
</div>
<div class="xbanner" style="background-image: url({$zbp->Config('Jz52_Cofive')->ADimg});">
  <div class="box">
    <div class="slip_tit">
      <h3 class="tit1">{$zbp->Config('Jz52_Cofive')->ADt}</h3>
      <p class="tit2">{$zbp->Config('Jz52_Cofive')->ADtt}</p>
    </div>
    <div class="slip_btn"><span><i class="icon"></i>{$zbp->Config('Jz52_Cofive')->phontxt}</span>
      <p>{$zbp->Config('Jz52_Cofive')->phon}</p>
      <a class="xbicon" href="{$zbp->Config('Jz52_Cofive')->ADurl}" target="_blank">在线咨询 </a></div>
  </div>
</div>
<div class="news">
  <div class="box">
    <div class="lmt">
      <h3 class="tit">{$zbp->Config('Jz52_Cofive')->newst}</h3>
      <p class="subtit">{$zbp->Config('Jz52_Cofive')->newstt}</p>
    </div>
    <div class="newsnr"> 
	{php}$post=GetPost((int)$zbp->Config('Jz52_Cofive')->newsid);{/php}
      <div class="newsnr_z"><a href="{$post.Url}" title="{$post.Title}"><b><img src="{Jz52_Cofive_IMG($post)}" alt="{$post.Title}"></b><em><span>{$post.Time('d')}</span>{$post.Time('Y-m')}</em>
        <div class="dk">
          <h3>{$post.Title}</h3>
          <p>{php}$description = preg_replace('/[\r\n\s)]|(\s|\&nbsp\;|　|\xc2\xa0)+/', ' ', trim(SubStrUTF8(TransferHTML($post->Intro,'[nohtml]'),64)).'...');{/php}{$description}</p>
          <i>查看详情</i></div>
        </a></div>
      <div class="newsnr_y">
        <ul>
		  {foreach Getlist(3,$zbp->Config('Jz52_Cofive')->newsq,null,null,null,null,array('has_subcate'=>true)) as $related}
		    <li><a href="{$related.Url}" title="{$related.Title}"><em><span>{$related.Time('d')}</span>{$related.Time('Y-m')}</em>
            <h3>{$related.Title}</h3>
            <p><span>{php}$description = preg_replace('/[\r\n\s)]|(\s|\&nbsp\;|　|\xc2\xa0)+/', ' ', trim(SubStrUTF8(TransferHTML($related->Intro,'[nohtml]'),64)).'...');{/php}{$description}</span></p>
            </a></li>
          {/foreach}
        </ul>
      </div>
    </div>
  </div>
</div>
{if $zbp->Config('Jz52_Cofive')->indexlink}
<div class="links">
  <div class="box"> <span>友情链接：</span><ul>{module:link}</ul></div>
</div>
{/if}
{else}
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
  {template:sidebar}
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
      <div class="newslist">
        <ul>
      {foreach $articles as $article}
      {if $article.IsTop}
                	<li>
                        <a href="{$article.Url}">
                            <div class="img-center"><img src="{Jz52_Cofive_IMG($article)}" alt="{$article.Title}"></div>
                            <div class="text">
                                <h4>[顶]{$article.Title}</h4>
                                <p>{php}$description = preg_replace('/[\r\n\s)]|(\s|\&nbsp\;|　|\xc2\xa0)+/', ' ', trim(SubStrUTF8(TransferHTML($article->Intro,'[nohtml]'),64)).'...');{/php}{$description}</p>
                                <span>阅读详情</span>
                            </div>
                        </a>
                    </li>
      {else}
                	<li>
                        <a href="{$article.Url}">
                            <div class="img-center"><img src="{Jz52_Cofive_IMG($article)}" alt="{$article.Title}"></div>
                            <div class="text">
                                <h4>{$article.Title}</h4>
                                <p>{php}$description = preg_replace('/[\r\n\s)]|(\s|\&nbsp\;|　|\xc2\xa0)+/', ' ', trim(SubStrUTF8(TransferHTML($article->Intro,'[nohtml]'),64)).'...');{/php}{$description}</p>
                                <span>阅读详情</span>
                            </div>
                        </a>
                    </li>
      {/if}
      {/foreach}
        </ul>
      </div>
      <div class="pglist">{template:pagebar}</div>
    </div>
  </div>
</div>
{/if}
{template:footer}