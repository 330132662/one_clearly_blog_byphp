<?php include('post-safe.php');?>{* Template Name:首页 * Template Type: index *}
{if $type == 'index' && $page == '1'}
{template:header}
<main class="wrapper">
	{if $boke8->siteTop}
	<div class="sitetop gg">
	{$boke8->siteTop}
	</div>
	{/if}
	{if $boke8->news && $boke8->news != 'false'} 
	<section class="hmnews">
		<h2><i class="fas fa-bullhorn"></i>新闻资讯</h2>
		<div class="box">
			<div id="hmnews">
				{foreach GetList(10,$boke8->news) as $news}
				<div class="item">
					<a href="{$news.Url}" title="{$news.Title}" target="_blank">{$news.Title}</a>
				</div>
				{/foreach}
			</div>
		</div>
	</section>
	{/if}
	{if $boke8->top}
	{$arrayTop = explode(',',$boke8->top)}
	<div class="mainbox hmtop">
		<section class="homebox">
			<div class="hmtitle">
				<h2><i class="fas fa-thumbs-up"></i>站长推荐</h2>
			</div>
			<ul>
				{foreach $arrayTop as $stickid}
				{$stick = GetPost((int)$stickid)}
				<li>
					<a href="{$stick.Url}" target="_blank" title="{$stick.Title}">
						<figure class="icon">
							<img alt="{$stick.Title}" src="{zbnavigation_thumbnail($stick)}"/>
						</figure>
						<div class="info">
							<h3>{$stick.Title}</h3>
							<p>{$stick.Metas.review}</p>
						</div>
					</a>
				</li>
				{/foreach}
		  </ul>
		</section>
	</div>
	{/if}
  <div class="mainbox">
  	{if $boke8->site}
  	{$siteArray = array_diff($boke8->site, ['false'])}  	
	{$i = 0}
	{foreach $siteArray as $siteId}
	<section class="homebox">
	  <div class="hmtitle">
		<h2><i class="fas fa-newspaper"></i>{$categorys[$siteId].Name}</h2>
		<span><a href="{$categorys[$siteId].Url}" title="{$categorys[$siteId].Name}">更多 &gt;</a></span>
	  </div>
	  <ul>
		{if $boke8->front == '1'}
		
		{foreach GetList($categorys[$siteId]->Metas->cateNum,$siteId,null,null,null,null,array('has_subcate' => true)) as $site}
		<li>
		  <a href="{$site.Url}" target="_blank" title="{$site.Title}">
			<figure class="icon">
			  <img alt="{$site.Title}" src="{zbnavigation_thumbnail($site)}"/>
			</figure>
			<div class="info">
			  <h3>{$site.Title}</h3>
			  <p>{$site.Metas.review}</p>
			</div>
		  </a>
		</li>
		{/foreach}
		
		{else}
		
		{foreach GetList($categorys[$siteId]->Metas->cateNum,$siteId,null,null,null,null,array('only_ontop'  => true,'has_subcate' => true)) as $site}
		<li>
		  <a href="{$site.Url}" target="_blank" title="{$site.Title}">
			<figure class="icon">
			  <img alt="{$site.Title}" src="{zbnavigation_thumbnail($site)}"/>
			</figure>
			<div class="info">
			  <h3>{$site.Title}</h3>
			  <p>{$site.Metas.review}</p>
			</div>
		  </a>
		</li>
		{/foreach}
		
		{/if}
	  </ul>
	</section>
	{if $i == '1' && $boke8->homeGG}
	<div class="gg">
	{$boke8->homeGG}
	</div>
	{/if}
	{$i += 1}
	{/foreach}
	{/if}
  </div>
  {if $boke8->slick}
  {$newsArray = array_diff($boke8->slick, ['false'])}
  {foreach $newsArray as $slickId}
  <div class="slickBox">
  		<div class="hmtitle">
			<h2><i class="fas fa-newspaper"></i>{$categorys[$slickId].Name}</h2>
			<span><a href="{$categorys[$slickId].Url}" title="{$categorys[$slickId].Name}">更多 &gt;</a></span>
	  	</div>
	  	<div class="box">
	  		<div class="slick-load">
	  			{foreach GetList($categorys[$slickId]->Metas->cateNum,$slickId,null,null,null,null,array('has_subcate' => true)) as $slick}
	  			<article class="item">
	  				<a href="{$slick.Url}" target="_blank" title="{$slick.Title}">
	  					<div class="pic">
	  						<i style="background-image:url({zbnavigation_thumbnail($slick)});"></i>
	  					</div>
	  					<h3>{$slick.Title}</h3>
	  				</a>
	  			</article>
	  			{/foreach}
	  		</div>
	  	</div>
  </div>
{/foreach}
{/if}
  <div class="friendlinks">
	<h2>友情链接：</h2>
	<ul>
		{module:link}
	</ul>
  </div>
</main>
{template:footer}
{else}
{template:index-blog}
{/if}