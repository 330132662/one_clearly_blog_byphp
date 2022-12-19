<?php  /*Template Name:默认3栏文章页*/  ?>
            <?php if ($article->Type==ZC_POST_TYPE_ARTICLE) { ?>
                <?php  include $this->GetTemplate('single-show');  ?>
                <?php }else{  ?>
                <?php  include $this->GetTemplate('page');  ?>
            <?php } ?>
