<?php  /* Template Name:双栏文章 */  ?>
 <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
                <?php  include $this->GetTemplate('single-show-double');  ?>
                <?php }else{  ?>
                <?php  include $this->GetTemplate('page');  ?>
            <?php } ?>
