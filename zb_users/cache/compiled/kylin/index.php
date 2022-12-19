<?php  /*Template Name:首页*/  ?>
<?php 
$SecondIndexListON = $zbp->Config('kylin')->SecondIndexListON;
$ThirdIndexListON = $zbp->Config('kylin')->ThirdIndexListON;
 ?>

<?php if ($ThirdIndexListON == '1') { ?>
<?php  include $this->GetTemplate('header3');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('header');  ?>
<?php } ?>
<body class="home blog logged-in wp-custom-logo group-blog hfeed">
<div id="page" class="site">
<?php  include $this->GetTemplate('navbar');  ?>
<div id="content" class="site-content container three-col-layout  clear">
<?php if (kylin_isMobile()) { ?>
<div id="primary" class="content-area clear">
<?php }else{  ?>
<div id="primary" class="content-area clear" <?php if($ThirdIndexListON == '1'){echo 'style = "float: left;width: 790px;"';} ?>> 
<?php } ?>
<?php if ($ThirdIndexListON == '0') { ?>
<?php  include $this->GetTemplate('navbar2');  ?>
<?php } ?>
        <div class="right-col">
            <?php if ($type == 'index') { ?>
            <div id="featured-content" class="clear">
                <?php  include $this->GetTemplate('slide');  ?>
                <?php  include $this->GetTemplate('post-istop');  ?>
            </div><!-- #featured-content -->
            <?php } ?>
            
            <?php if ($SecondIndexListON == '0' && $ThirdIndexListON == '0') { ?>
            <?php  include $this->GetTemplate('post-multi');  ?>
            <?php } ?>
            
            <?php if (isset($SecondIndexListON) && $SecondIndexListON == '1') { ?>
            <?php  include $this->GetTemplate('post-multi2');  ?>
            <?php } ?>
            
            <?php if (isset($ThirdIndexListON) && $ThirdIndexListON == '1') { ?>
            <?php  include $this->GetTemplate('post-multi3');  ?>
            <?php } ?>
            
<?php  include $this->GetTemplate('pagebar');  ?>
        </div><!-- .right-col -->
  </div><!-- #primary -->
<?php  include $this->GetTemplate('sidebar');  ?>
</div><!-- #content .site-content -->
<?php if ($ThirdIndexListON == '1') { ?>
    <?php  include $this->GetTemplate('footer3');  ?>
<?php }else{  ?>
    <?php  include $this->GetTemplate('footer');  ?>
<?php } ?>