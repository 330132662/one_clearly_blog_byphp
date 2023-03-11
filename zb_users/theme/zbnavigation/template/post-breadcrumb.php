<?php include('post-safe.php');?><div class="breadcrumb">
    <a href="{$host}" title="{$name}"><i class="fas fa-home"></i> 首页</a>
	{if $type == 'index'}
	 <em>&gt;</em> {$subname}
	{elseif $type == 'category'}
	{zbnavigation_breadcrumb($category->ID)}
	{elseif $type =="article"}
	{zbnavigation_breadcrumb($article->Category->ID)}
	{else}
	 <em>&gt;</em> {$title}	
	{/if}
</div>