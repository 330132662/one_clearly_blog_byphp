{* Template Name:公用头部模块 *}
<!doctype html>
<html lang="{$language}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1,user-scalable=0">
<meta name="applicable-device" content="pc,wap">
{if $zbp->Config('Jz52_Cofive')->seo}{template:lm-seo}{else}<title>{$name}-{$title}</title>{/if}
<meta name="generator" content="{$zblogphp} Themes: Yeelz.Com">
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/style.css?v{$themeinfo['version']}">
<link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/style/css/swiper.min.css">
<script src="{$host}zb_system/script/jquery-2.2.4.min.js"></script> 
{if $type=='index'&&$page=='1'}
<script src="{$host}zb_users/theme/{$theme}/script/jquery.superslide.2.1.1.js"></script>
{/if}
<script src="{$host}zb_users/theme/{$theme}/script/swiper.min.js"></script>
<script src="{$host}zb_system/script/zblogphp.js"></script> 
<script src="{$host}zb_system/script/c_html_js_add.php"></script>
{if $type=='index'&&$page=='1'}
<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}">
{/if}
{if $zbp->Config('Jz52_Cofive')->diycss}
<style>{$zbp->Config('Jz52_Cofive')->diycss}</style>
{/if}
{$header}
{if Jz52_Cofive_is_mobile()}{$zbp->Config('Jz52_Cofive')->xunpancodem}{else}{$zbp->Config('Jz52_Cofive')->xunpancode}{/if}
</head>
<body>
<div class="max header">
  <div class="head_top">
    <div class="box">
      <p>{$zbp->Config('Jz52_Cofive')->topz}</p>
      <ul class="right">
        {$zbp->Config('Jz52_Cofive')->topy}
      </ul>
    </div>
  </div>
  <div class="box">
    <div class="left logo"><a href="{$host}"><img src="{$zbp->Config('Jz52_Cofive')->logo}" alt="{$name}"></a></div>
    <div class="l_title">
      <p class="l_p1">{$zbp->Config('Jz52_Cofive')->hearz1}</p>
      <p class="l_p2">{$zbp->Config('Jz52_Cofive')->hearz2}</p>
    </div>
    <div class="tel"><span>{$zbp->Config('Jz52_Cofive')->phontxt}</span><strong>{$zbp->Config('Jz52_Cofive')->phon}</strong> </div>
  </div>
</div>
<div class="max nav">
  <div class="box">
    <ul>
	{module:navbar}
    </ul>
  </div>
</div>