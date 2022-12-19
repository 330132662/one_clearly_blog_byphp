{*Template Name:首页置顶文件*}
{$topArray = GetList(2, null, null, null, null, null, array("only_ontop"  => true));}
    <div class="featured-right">
    {foreach $topArray as $top}
{php}
$pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
$content = $top->Content;
preg_match_all($pattern,$content,$matchContent);
if(isset($matchContent[1][0]))
$temp=$matchContent[1][0];
else
$temp=$zbp->host."zb_users/theme/$theme/style/images/thumb.png";/*指定图片路径*/
{/php}
        <div class="featured-small ">
            <a class="thumbnail-link" href="{$top.Url}">
                <div class="thumbnail-wrap">
                    
                    <img width="281" height="158" src="{$temp}"  alt="{$top.Title}" />
                    
                </div><!-- .thumbnail-wrap -->
                <div class="gradient"></div>
                <div class="entry-header clear">
                    <h2 class="entry-title">{$top.Title}</h2>
                </div><!-- .entry-header -->                                
            </a>
        </div><!-- .featured-small -->
    {/foreach}                                                      
    </div><!-- .featured-right -->

