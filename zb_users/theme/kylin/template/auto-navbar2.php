{php}
$array=$zbp->GetCategoryList(null,null,array('cate_Order'=>'ASC'),null,null);
{/php}
{foreach $array as $cate} 
<li><a href="{$cate.Url}">{$cate.Name}</a></li>
{/foreach}