{*Template Name:第三首页页头*}
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
{if $type != 'index'}
<title>{$title}_{$name}</title>
{/if}
{php}
$SEOON = $zbp->Config('kylin')->SEOON;
$SEOTITLE = $zbp->Config('kylin')->SEOTITLE;
$SEOKEYWORDS = $zbp->Config('kylin')->SEOKEYWORDS;
$SEODESCRIPTION = $zbp->Config('kylin')->SEODESCRIPTION;

if(isset($SEOTITLE)){
    $seotitle = $SEOTITLE;
}
if(isset($SEOKEYWORDS)){
        $keywords = $SEOKEYWORDS;
    }else{
        $keywords = '';
}
if(isset($SEODESCRIPTION)){
        $description = $SEODESCRIPTION;
    }else{
        $description = '';
}
{/php}
{if isset($SEOON) && $SEOON == '0'}
    {if $type == 'index' && $page=='1'}
        <title>{$name}_{$title}</title>
    {elseif $type=="index" && $page > '1'}
        <title>{$name}_{$title}-第{$page}页</title>
    {/if}
{/if}
{if isset($SEOON) && $SEOON == '1'}
    {if $type == 'index' && $page=='1'}
        {if $seotitle}<title>{$seotitle}</title>{/if}
    {elseif $type=="index" && $page > '1'}
        {if $seotitle}<title>{$seotitle}-第{$page}页</title>{/if}
    {/if}
{if $keywords}<meta name="keywords" content="{$keywords}" />{/if}
{if $description}<meta name="description" content="{$description}"/>{/if}
{/if}
{if $zbp->Config('kylin')->PostFAVICONON}<link rel="shortcut icon" href="{$zbp->Config('kylin')->PostFAVICON}" type="image/x-icon" />{/if}
{if $type=='index'}<link rel="canonical" href="{$host}"/>{/if}
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="applicable-device" content="pc,mobile" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel='stylesheet'  href='{$host}zb_users/theme/{$theme}/style/cssallinone.php' type='text/css'/>
<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
<script type='text/javascript' src='{$host}zb_users/theme/{$theme}/script/jquery2.php'></script>
{$header}
</head>