<?php include('post-safe.php');?><article class="post">
	<h1 class="title">{$article.Title}</h1>
	<div class="meta">
		<span><i class="fas fa-calendar-alt"></i> 发布时间：<time pubdate="{$article.Time('Y-m-d H:i:s')}">{$article.Time('Y-m-d H:i:s')}</time></span>
		<span><i class="fas fa-eye"></i> 访问量：{$article.ViewNums}</span>
	</div>
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
			{foreach $article.Tags as $tag} <a href="{$tag.Url}" title="{$tag.Name}">{$tag.Name}</a>{/foreach}
		</span>
	</div>          
	{/if}
	<section class="relNews">
		<h2 class="boxTitle"><i class="fas fa-newspaper"></i> 更多文章</h2>
		<ul>
			{$cid=$article.Category.ID}
			{$sameCat = GetList(5,$cid,null,null,null,null,array('only_not_ontop' => true))}
			{if $sameCat}
			{foreach $sameCat as $related}
			<li>
				<a href="{$related.Url}" target="_blank" title="{$related.Title}">
					<div class="thumbnail">
						<figure>
							<img alt="{$related.Title}" src="{zbnavigation_thumbnail($related)}"/>
						</figure>
					</div>
					<div class="info">
						<h4>{$related.Title}</h4>
						<p>{zbnavigation_intro($related,1,320,'...')}</p>
					</div>
				</a>
			</li>
			{/foreach}	
			{else}
			<p class="warning">“暂无相关资讯”</p>
			{/if}
		</ul>
	</section>
	{if !$article.IsLock}
	{template:comments}   
	{/if}
</article>