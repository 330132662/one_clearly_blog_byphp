<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title>{$title}_{$name}</title>
{php}
if($article->Metas->singlekeywords){
    $keywords = $article->Metas->singlekeywords;
}else{
    $keywords = "";
}
{/php}
{if $keywords}
<meta name="keywords" content="{$keywords}">
{/if}
{php}$description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),158)).'...');{/php}
<meta name="description" content="{$description}"/>
<link rel="canonical" href="{$article.Url}"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="{$article.Url}"/>
<meta property="og:image" content="{kylin_Thumb($article)}" />
<meta property="article:published_time" content="{$article->Time()}"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="applicable-device" content="pc,mobile">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="applicable-device" content="pc,mobile" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel='stylesheet'  href='{$host}zb_users/theme/{$theme}/style/cssallinone.php' type='text/css'/>
<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
<script type='text/javascript' src='{$host}zb_users/theme/{$theme}/script/jquery-all.php'></script>
{$header}

</head>