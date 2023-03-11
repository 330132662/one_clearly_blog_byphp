<?php include('post-safe.php');?><!DOCTYPE html>
<html lang="{$language}">
<head>
<meta charset="UTF-8"/>
<meta http-equiv="Cache-Control" content="no-transform"/>
<meta http-equiv="Cache-Control" content="no-siteapp"/>
<meta name="applicable-device" content="mobile"/>
<meta name="renderer" content="webkit"/>
<meta name="format-detection" content="telephone=no"/>
<meta content="email=no" name="format-detection"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
{$boke8 = $zbp->Config('zbnavigation')}
{php}
if($boke8->seoON){
	$separator = $boke8->separator ? $boke8->separator : '_';
	if($type == 'index'){
		if($page == '1'){
			if($boke8->title){
				$topTitle = $boke8->title;
			}else{
				$topTitle = $zbp->name.$separator.$zbp->subname;
			}
		}else{
			if($boke8->title){
				$topTitle = $boke8->title.$separator.'第'.$page.'页'.$separator.$zbp->subname;
			}else{
				$topTitle = $zbp->name.$separator.'第'.$page.'页'.$separator.$zbp->subname;
			}
		}
		$keywords = $boke8->keywords ? $boke8->keywords : '';
		$description = $boke8->description ? $boke8->description : '';
	}elseif($type == 'category'){
		if($category->Metas->catetitle){
			if ($page=='1') {
				$topTitle = $category->Metas->catetitle.$separator.$zbp->name;
			} else {
				$topTitle = $category->Metas->catetitle.'第'.$page.'页'.$separator.$zbp->name;
			}
		}else{
			$topTitle = $zbp->title.$separator.$zbp->name;
		}
		if($category->Metas->catekeywords){
			$keywords = $category->Metas->catekeywords;
		}else{
			$keywords = $category->Name;
		}
		if($category->Metas->catedescription){
			$description = $category->Metas->catedescription;
		}else{
			$description = $category->Intro;
		}		
	}elseif($type == 'tag'){
		if($tag->Metas->tagtitle){
			if ($page=='1') {
				$topTitle = $tag->Metas->tagtitle.$separator.$zbp->name;
			} else {
				$topTitle = $tag->Metas->tagtitle.$separator.'第'.$page.'页'.$separator.$zbp->name;
			}
		}else{
			$topTitle = $zbp->title.$separator.$zbp->name;
		}
		if($tag->Metas->tagkeywords){
			$keywords = $tag->Metas->tagkeywords;
		}else{
			$keywords = $tag->Name;
		}
		if($tag->Metas->tagdescription){
			$description = $tag->Metas->tagdescription;
		}else{
			$description = $tag->Intro;
		}
	}elseif($type == 'article'){
		if($article->Metas->title){
			$topTitle = $article->Metas->title.$separator.$zbp->name;
		}else{
			$topTitle = $article->Title.$separator.$zbp->name;
		}
		if($article->Metas->keywords){
			$keywords = $article->Metas->keywords;
		}else{
			$aryTags = array();
			foreach($article->Tags as $key){
				$aryTags[] = $key->Name;
			}
			$keywords = count($aryTags)>0 ? implode(',',$aryTags) : '';
		}
		if($article->Metas->description){
			$description = $article->Metas->description;
		}else{
			$description = zbnavigation_intro($article,0,80,' ...');
		}		
	}elseif($type == 'page'){
		if($article->Metas->title){
			$topTitle = $article->Metas->title.$separator.$zbp->name;
		}else{
			$topTitle = $article->Title.$separator.$zbp->name;
		}
		$keywords = $article->Metas->keywords ? $article->Metas->keywords : '';
        if($article->Metas->description){
			$description = $article->Metas->description;
		}else{
			$description = zbnavigation_intro($article,0,80,' ...');
		}		
	}elseif($type == 'search'){
		$topTitle = $title.$separator.$name;
		$keywords = '';
		$description = '';
	}else{
		$topTitle = $zbp->title.$separator.$zbp->name;
		$keywords = $boke8->keywords ? $boke8->keywords : '';
		$description = $boke8->description ? $boke8->description : '';
	}
}else{
	$topTitle = $name.'-'.$title;
}
{/php}
<title>{$topTitle}</title>
{if $boke8->seoON}
{if $keywords}
<meta name="keywords" content="{$keywords}"/>
{/if}
{if $description}
<meta name="description" content="{$description}"/>
{/if}
{/if}
{if $boke8->favicon}
<link rel="icon" href="{$boke8->favicon}" type="image/x-icon"/>
{/if}
<link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/css/all.min.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="{$host}zb_users/theme/{$theme}/style/{$style}.css" media="screen"/>
<script src="{$host}zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
<script src="{$host}zb_system/script/zblogphp.js" type="text/javascript"></script>
<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/html5shiv.v3.72.min.js"></script>
<![endif]-->
{$header}
{if $type=='index' && $page=='1'}
<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/slick.min.js"></script>
{/if}
{if $type == 'index'}
<link rel="canonical" href="{$host}" />
{elseif $type == 'category'}
<link rel="canonical" href="{$category.Url}" />
{elseif $type == 'tag'}
<link rel="canonical" href="{$tag.Url}" />
{elseif $type == 'page' || $type == 'article'}
<link rel="canonical" href="{$article.Url}" />
{/if}
</head>
<body>
<header id="header">
  <div class="inner">
  	{if $type == 'article' || $type == 'page'}
  	<div id="logo">
  		<a title="{$name}" href="{$host}"{if $boke8->logo} style="background-image:url({$boke8->logo});"{/if}>{$name}</a>
  	</div>
  	{else}
  		<h1 id="logo"><a title="{$name}" href="{$host}"{if $boke8->logo} style="background-image:url({$boke8->logo});"{/if}>{$name}</a></h1>
  	{/if}
    <div class="navBtn"><span></span></div>
    <nav class="nav">
      <div class="menu">
      <ul>
        {module:navbar}
      </ul>
    </div>
    </nav>
    <div class="links">
      <ul>
      	{if $boke8->submit}
      	{$submitID = $boke8->submit}
      	{$submit = GetPost((int)$submitID)}
        <li><a href="{$submit.Url}" title="{$submit.Title}"><i class="fas fa-arrow-alt-circle-up"></i><i class="text">提交</i></a></li>
        {/if}
        {if $boke8->message}
      	{$messageID = $boke8->message}
      	{$message = GetPost((int)$messageID)}
        <li><a href="{$message.Url}" title="{$message.Title}"><i class="fas fa-comments"></i><i class="text">留言</i></a></li>
        {/if}
        <li class="schBtn"><a href="javascript:void(0);" title="全站搜索"><i class="fas fa-search"></i><i class="text">搜索</i></a></li>
      </ul>
    </div>
  </div>
</header>
<div class="blank"></div>
<section class="searchBox">
	<div class="close">
		×
	</div>
	<div class="box">
		<div class="inner">
			<div class="searchForm">
				<form name="search" method="post" action="{$host}zb_system/cmd.php?act=search">
					<input type="submit" name="submit" id="btnPost" class="submit" value="搜索"/>
					<div class="input">
						<input type="text" class="text" name="q" id="edtSearch" value="" placeholder="输入关键字搜索，如阿里云"/>
					</div>
				</form>
			</div>
			<div class="tagsBox">
				<h2>热门关键词：</h2>
				<ul>
					{zbnavigation_getTags('15')}
				</ul>
			</div>
		</div>
	</div>
</section>