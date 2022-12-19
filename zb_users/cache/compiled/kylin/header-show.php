<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<title><?php  echo $title;  ?>_<?php  echo $name;  ?></title>
<?php 
if($article->Metas->singlekeywords){
    $keywords = $article->Metas->singlekeywords;
}else{
    $keywords = "";
}
 ?>
<?php if ($keywords) { ?>
<meta name="keywords" content="<?php  echo $keywords;  ?>">
<?php } ?>
<?php $description = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),158)).'...'); ?>
<meta name="description" content="<?php  echo $description;  ?>"/>
<link rel="canonical" href="<?php  echo $article->Url;  ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:url" content="<?php  echo $article->Url;  ?>"/>
<meta property="og:image" content="<?php  echo kylin_Thumb($article);  ?>" />
<meta property="article:published_time" content="<?php  echo $article->Time();  ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="applicable-device" content="pc,mobile">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="applicable-device" content="pc,mobile" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel='stylesheet'  href='<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/cssallinone.php' type='text/css'/>
<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
<script type='text/javascript' src='<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/jquery-all.php'></script>
<?php  echo $header;  ?>

</head>