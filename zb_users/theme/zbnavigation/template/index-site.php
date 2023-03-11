<?php include('post-safe.php');?>{* Template Name:导航列表 * Template Type: list *}
{template:header}
<main class="wrapper">
{if $boke8->siteTop}
	<div class="sitetop gg">
	{$boke8->siteTop}
	</div>
	{/if}
  <div class="mainbox">
    {template:post-breadcrumb}
    <div class="homebox">     
      <ul>
        {foreach $articles as $article}
        <li>
          <a href="{$article.Url}" title="{$article.Title}">
            <figure class="icon">
              <img src="{zbnavigation_thumbnail($article)}" alt="{$article.Title}"/>
            </figure>
            <div class="info">
              <h3>{$article.Title}</h3>
              <p>{$article.Metas.review}</p>
            </div>
          </a>
        </li>
        {/foreach}
        <div class="clear"></div>
      </ul>
      <div class="pagenavi">
        {template:pagebar}
      </div>
    </div>
  </div>
</main>
{template:footer}