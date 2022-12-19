<?php  echo $footer;  ?><?php if ($type!='article') { ?>
    <?php  include $this->GetTemplate('footer12');  ?>
<?php }else{  ?>
    <?php  include $this->GetTemplate('footer-show');  ?>
<?php } ?>