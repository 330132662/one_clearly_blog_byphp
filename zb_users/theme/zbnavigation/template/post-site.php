<?php include('post-safe.php');?><article class="site">
	<div class="pic">
		<figure class="icon">
			<img src="{zbnavigation_thumbnail($article)}" alt="{$article.Title}"/>
		</figure>          
	</div>
	<div class="info">
		<h1>{$article.Title}</h1>
		<div class="infoBox">
			<div class="meta">
				<p>
					<span class="left">网站地址：</span>
					<span class="right"><a rel="nofollow" href="{$article->Metas->url}" target="_blank">{$article->Metas->url}</a></span>
				</p>
				<p>
					<span class="left">收录时间：</span>
					<span class="right"><time pubdate="{$article.Time('Y-m-d H:i:s')}">{$article.Time('Y-m-d H:i:s')}</time></span>
				</p>
				<p>              
					<span class="left">浏览次数：</span>
					<span class="right">{$article.ViewNums}</span>
				</p>
				<p>
					<span class="left">点评数量：</span>
					<span class="right">{$article.CommNums}</span>
				</p>
				<p>
					<span class="left">所属栏目：</span>
					<span class="right"><a href="{$article.Category.Url}" title="{$article.Category.Name}" target="_blank">{$article.Category.Name}</a></span>
				</p>            
				<p>
					<span class="left">收录理由：</span>
					<span class="right">{$article->Metas->review}</span>
				</p>
			</div>
			{if $boke8->siteStart}
			<div class="gg">
			{$boke8->siteStart}
			</div>
			{/if}
		</div>
	</div>
	<div class="clear"></div>
	<div class="tabTop">
		<ul>
			<li class="cur"><span>网站介绍</span></li>
			<li><span>相关推荐</span></li>
			<li><span>相关资讯</span></li>
			{if !$article.IsLock}
			<li><span>网友点评</span></li>
			{/if}
			<div class="clear"></div>
		</ul>
	</div>
	<div class="tabBtm">
		<div class="box">
			{if $boke8->postStart}
			<div class="gg">
			{$boke8->postStart}
			</div>
			{/if}
			<div class="entry">
				{$article.Content}
			</div>
			{if $article->Tags}
			<div class="tags">
				<span class="left">关键词：</span>
				<span class="right">
					{foreach $article->Tags as $tag} <a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a>{/foreach}
				</span>
			</div>
			{/if}
		</div>
		<div class="box">
			<div class="relSite">
				<ul>
					{$cid=$article.Category.ID}
					{$sameCat = GetList(24,$cid,null,null,null,null,array('only_not_ontop' => true))}
					{if $sameCat}				
					{foreach $sameCat as $related}
					<li>
						<a href="{$related.Url}" target="_blank" title="{$related.Title}">
							<div class="top">
								<figure class="icon">
									<img alt="{$related.Title}" src="{zbnavigation_thumbnail($related)}"/>
								</figure>
							</div>
							<p>{$related.Title}</p>
						</a>
					</li>
					{/foreach}				
					{else}
					<p class="warning">“暂无相关推荐”</p>
					{/if}
				</ul>
			</div>
		</div>
		<div class="box">
			<section class="relNews">
				<ul>
					{$relatedTag = GetList(8,null,null,null,$article->Tags,null,array('is_related'=>$article->ID))}
					{if $relatedTag}	
					{foreach $relatedTag as $tagpost}
					<li>
						<a href="{$tagpost.Url}" target="_blank" title="{$tagpost.Title}">
							<div class="thumbnail">
								<figure>
									<img alt="{$tagpost.Title}" src="{zbnavigation_thumbnail($tagpost)}"/>
								</figure>
							</div>
							<div class="info">
								<h4>{$tagpost.Title}</h4>
								<p>{zbnavigation_intro($tagpost,1,320,'...')}</p>
							</div>
						</a>
					</li>
					{/foreach}	
					{else}
					<p class="warning">“暂无相关资讯”</p>
					{/if}
				</ul>
			</section>
		</div>
		{if !$article.IsLock}
		<div class="box">					
		{template:comments}   
		</div>
		{/if}
	</div>
</article>