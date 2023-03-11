<?php include('post-safe.php');?>{* Template Name:新闻列表 * Template Type: list *}
{template:header}
<main class="wrapper">
	{if $boke8->siteTop}
	<div class="sitetop gg">
	{$boke8->siteTop}
	</div>
	{/if}
  <div class="mainbox">
    {template:post-breadcrumb}
    <div class="newsList">
        {foreach $articles as $article}
        <article class="newsItem">
          <a href="{$article.Url}" title="{$article.Title}">
            <div class="pic">
              <figure>
                <img src="{zbnavigation_thumbnail($article)}" alt="{$article.Title}"/>
              </figure>         
            </div>
            <div class="info">
              <h2>{$article.Title}</h2>
              <div class="excerpt">
               <p>{zbnavigation_intro($article,1,120,'...')}</p>
             </div>
             <div class="meta">
              <time pubdate="{$article.Time('Y-m-d H:i:s')}">{$article.Time('Y-m-d H:i:s')}</time>
             </div>
            </div>
          </a>
        </article>
        {/foreach}
        <div class="pagenavi">
         {template:pagebar}
      </div>
    </div>
  </div>
</main>
{template:footer}