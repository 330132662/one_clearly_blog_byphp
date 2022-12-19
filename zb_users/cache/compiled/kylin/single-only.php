<?php  /* Template Name:单栏文章 */  ?>
 <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
                <?php  include $this->GetTemplate('single-show-only');  ?>
                <?php }else{  ?>
                <?php  include $this->GetTemplate('page');  ?>
            <?php } ?>
