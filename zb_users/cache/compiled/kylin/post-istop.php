<?php  /*Template Name:首页置顶文件*/  ?>
<?php  $topArray = GetList(2, null, null, null, null, null, array("only_ontop"  => true));;  ?>
    <div class="featured-right">
    <?php  foreach ( $topArray as $top) { ?>
<?php 
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $top->Content;
preg_match_all($pattern,$content,$matchContent);
if(isset($matchContent[1][0]))
$temp=$matchContent[1][0];
else
$temp=$zbp->host."zb_users/theme/$theme/style/images/thumb.png";/*指定图片路径*/
 ?>
        <div class="featured-small ">
            <a class="thumbnail-link" href="<?php  echo $top->Url;  ?>">
                <div class="thumbnail-wrap">
                    
                    <img width="281" height="158" src="<?php  echo $temp;  ?>"  alt="<?php  echo $top->Title;  ?>" />
                    
                </div><!-- .thumbnail-wrap -->
                <div class="gradient"></div>
                <div class="entry-header clear">
                    <h2 class="entry-title"><?php  echo $top->Title;  ?></h2>
                </div><!-- .entry-header -->                                
            </a>
        </div><!-- .featured-small -->
    <?php }   ?>                                                      
    </div><!-- .featured-right -->

