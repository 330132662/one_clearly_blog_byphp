<?php  /*Template Name:分页*/  ?>
<nav class="navigation pagination" role="navigation">
<h2 class="screen-reader-text">文章导航</h2>
<div class="nav-links">
<?php if ($pagebar && $pagebar->PageAll > 1) { ?>
    <?php  foreach ( $pagebar->buttons as $k => $v) { ?>
        <?php if ($pagebar->PageNow==$k) { ?>
        <span aria-current='page' class='page-numbers current'><?php  echo $k;  ?></span>
        <?php }elseif($pagebar->PageNow+1==$k) {  ?>
        <a class='page-numbers' href="<?php  echo $v;  ?>"><?php  echo $k;  ?></a>
        <?php }elseif($k=='‹‹') {  ?>
        <a class='page-numbers' href="<?php  echo $v;  ?>">首页</a>
        <?php }elseif($k=='››') {  ?>
        <a class='page-numbers' href="<?php  echo $v;  ?>">尾页</a>
        <?php }elseif($k=='‹') {  ?>
        <a class='page-numbers' href="<?php  echo $v;  ?>">上一页</a>
        <?php }elseif($k=='›') {  ?>
        <a class='page-numbers' href="<?php  echo $v;  ?>">下一页</a>
        <?php }else{  ?>
        <a class='page-numbers' href="<?php  echo $v;  ?>"><?php  echo $k;  ?></a>
        <?php } ?>
    <?php }   ?>
<?php } ?>
</div>
</nav>
    