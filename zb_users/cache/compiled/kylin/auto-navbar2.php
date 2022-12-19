<?php 
$array=$zbp->GetCategoryList(null,null,array('cate_Order'=>'ASC'),null,null);
 ?>
<?php  foreach ( $array as $cate) { ?> 
<li><a href="<?php  echo $cate->Url;  ?>"><?php  echo $cate->Name;  ?></a></li>
<?php }   ?>