<?php include('post-safe.php');?>{* Template Name:文章页面 * Template Type: single *}
{template:header}
<main class="wrapper">
{if $boke8->siteTop}
	<div class="sitetop gg">
	{$boke8->siteTop}
	</div>
	{/if}
	<div class="mainbox">
		{template:post-breadcrumb}
		{if $article.Type==ZC_POST_TYPE_ARTICLE}
		{template:post-single}
		{else}
		{template:post-page}
		{/if}
	</div>
</main>
{template:footer}