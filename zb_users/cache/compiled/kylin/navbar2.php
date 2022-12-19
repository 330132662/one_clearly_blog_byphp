<!--左侧导航栏公共区-->
<div class="left-col sidebar-2">
<nav id="left-nav" class="left-navigation">
<div class="menu-index_left-container"><ul id="left-menu" class="left-menu">
<li><a href="/">最新推荐</a></li>
<?php 
$LeftNavbarON = $zbp->Config('kylin')->LeftNavbarON;
$LeftNavbarli = $zbp->Config('kylin')->LeftNavbarli;

if(isset($LeftNavbarli)){
            $diy_LeftNavbarli = $LeftNavbarli;
        }
 ?>
<?php if ($LeftNavbarON == '1') { ?>
<?php  include $this->GetTemplate('diy-navbar2');  ?>
<?php }else{  ?>
<?php  include $this->GetTemplate('auto-navbar2');  ?>
<?php } ?>
</ul></div></nav><!-- #left-nav -->
</div><!-- .left-col -->    