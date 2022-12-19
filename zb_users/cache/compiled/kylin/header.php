<?php  /*Template Name:公共页头*/  ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="UTF-8">
<?php if ($type != 'index' && $page=='1') { ?>
<title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<?php }elseif($type != "index" && $page > '1') {  ?>
<title><?php  echo $title;  ?>-<?php  echo $name;  ?></title>
<?php } ?>
<?php 
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
 ?>
<?php if (isset($SEOON) && $SEOON == '0') { ?>
<?php if ($type == 'index' && $page=='1') { ?>
<title><?php  echo $name;  ?>-<?php  echo $title;  ?></title>
<?php }elseif($type=='index' && $page > '1') {  ?>
<title><?php  echo $name;  ?>-<?php  echo $title;  ?>-第<?php  echo $page;  ?>页</title>
<?php } ?>
<?php } ?>
<?php if (isset($SEOON) && $SEOON == '1') { ?>
    <?php if ($type == 'index' && $page=='1') { ?>
        <?php if ($seotitle) { ?><title><?php  echo $seotitle;  ?></title><?php } ?>
    <?php }elseif($type=='index' && $page > '1') {  ?>
        <?php if ($seotitle) { ?><title><?php  echo $seotitle;  ?>-第<?php  echo $page;  ?>页</title><?php } ?>
    <?php } ?>
<?php if ($keywords) { ?><meta name="keywords" content="<?php  echo $keywords;  ?>" /><?php } ?>
<?php if ($description) { ?><meta name="description" content="<?php  echo $description;  ?>"/><?php } ?>
<?php } ?>
<?php if ($zbp->Config('kylin')->PostFAVICONON) { ?><link rel="shortcut icon" href="<?php  echo $zbp->Config('kylin')->PostFAVICON;  ?>" type="image/x-icon" /><?php } ?>
<?php if ($type=='index') { ?><link rel="canonical" href="<?php  echo $host;  ?>"/><?php } ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="applicable-device" content="pc,mobile" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="HandheldFriendly" content="true">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel='stylesheet'  href='<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/style/cssallinone.php' type='text/css'/>
<link rel="sitemap" type="application/xml" title="Sitemap" href="/sitemap.xml">
<script type='text/javascript' src='<?php  echo $host;  ?>zb_users/theme/<?php  echo $theme;  ?>/script/jquery-all.php'></script>
<?php  echo $header;  ?>
</head>