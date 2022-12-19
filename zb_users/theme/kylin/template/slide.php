{*Template Name:首页幻灯*}
{php}
$KylinSlidesON = $zbp->Config('kylin')->KylinSlidesON;

$KylinSlidesURL_1 = $zbp->Config('kylin')->KylinSlidesURL_1;
$KylinSlidesURL_2 = $zbp->Config('kylin')->KylinSlidesURL_2;
$KylinSlidesURL_3 = $zbp->Config('kylin')->KylinSlidesURL_3;

$KylinSlidesIMG_1 = $zbp->Config('kylin')->KylinSlidesIMG_1;
$KylinSlidesIMG_2 = $zbp->Config('kylin')->KylinSlidesIMG_2;
$KylinSlidesIMG_3 = $zbp->Config('kylin')->KylinSlidesIMG_3;

$KylinSlidesTitle_1 = $zbp->Config('kylin')->KylinSlidesTitle_1;
$KylinSlidesTitle_2 = $zbp->Config('kylin')->KylinSlidesTitle_2;
$KylinSlidesTitle_3 = $zbp->Config('kylin')->KylinSlidesTitle_3;

if(isset($KylinSlidesURL_1)){
            $slidesurl_1 = $KylinSlidesURL_1;
        }
        else{
            $slidesurl_1 = '';
        }
if(isset($KylinSlidesIMG_1)){
            $slidesimg_1 = $KylinSlidesIMG_1;
        }
        else{
            $slidesimg_1 = '';
        }
if(isset($KylinSlidesTitle_1)){
            $slidestitle_1 = $KylinSlidesTitle_1;
        }
        else{
            $slidestitle_1 = '';
        }

if(isset($KylinSlidesURL_2)){
            $slidesurl_2 = $KylinSlidesURL_2;
        }
        else{
            $slidesurl_2 = '';
        }
if(isset($KylinSlidesIMG_2)){
            $slidesimg_2 = $KylinSlidesIMG_2;
        }
        else{
            $slidesimg_2 = '';
        }
if(isset($KylinSlidesTitle_2)){
            $slidestitle_2 = $KylinSlidesTitle_2;
        }
        else{
            $slidestitle_2 = '';
        }

if(isset($KylinSlidesURL_3)){
            $slidesurl_3 = $KylinSlidesURL_3;
        }
        else{
            $slidesurl_3 = '';
        }
if(isset($KylinSlidesIMG_3)){
            $slidesimg_3 = $KylinSlidesIMG_3;
        }
        else{
            $slidesimg_3 = '';
        }
if(isset($KylinSlidesTitle_3)){
            $slidestitle_3 = $KylinSlidesTitle_3;
        }
        else{
            $slidestitle_3 = '';
        }
{/php}
    <div class="featured-left">
        <ul class="bxslider">   
{if isset($KylinSlidesON) && $KylinSlidesON == '1'}
        <li class="featured-slide hentry">    
            <a class="thumbnail-link" href="{if $slidesurl_1}{$slidesurl_1}{/if}" title="{if $slidestitle_1}{$slidestitle_1}{/if}">       
                <div class="thumbnail-wrap">
                    <img width="510" height="321" src="{if $slidesimg_1}{$slidesimg_1}{/if}"  alt="{if $slidestitle_1}{$slidestitle_1}{/if}" /></div><!-- .thumbnail-wrap -->
                <div class="gradient"></div>
            </a>
            <div class="entry-header clear">
                <h2 class="entry-title"><a href="{if $slidesurl_1}{$slidesurl_1}{/if}">{if $slidestitle_1}{$slidestitle_1}{/if}</a></h2>
            </div><!-- .entry-header -->
        </li><!-- .featured-slide .hentry -->
        <li class="featured-slide hentry">    
            <a class="thumbnail-link" href="{if $slidesurl_2}{$slidesurl_2}{/if}" title="{if $slidestitle_2}{$slidestitle_2}{/if}">       
                <div class="thumbnail-wrap">
                    <img width="510" height="321" src="{if $slidesimg_2}{$slidesimg_2}{/if}"  alt="{if $slidestitle_2}{$slidestitle_2}{/if}" /></div><!-- .thumbnail-wrap -->
                <div class="gradient"></div>
            </a>
            <div class="entry-header clear">
                <h2 class="entry-title"><a href="{if $slidesurl_2}{$slidesurl_2}{/if}">{if $slidestitle_2}{$slidestitle_2}{/if}</a></h2>
            </div><!-- .entry-header -->
        </li><!-- .featured-slide .hentry -->
        <li class="featured-slide hentry">    
            <a class="thumbnail-link" href="{if $slidesurl_3}{$slidesurl_3}{/if}" title="{if $slidestitle_3}{$slidestitle_3}{/if}">       
                <div class="thumbnail-wrap">
                    <img width="510" height="321" src="{if $slidesimg_3}{$slidesimg_3}{/if}"  alt="{if $slidestitle_3}{$slidestitle_3}{/if}" /></div><!-- .thumbnail-wrap -->
                <div class="gradient"></div>
            </a>
            <div class="entry-header clear">
                <h2 class="entry-title"><a href="{if $slidesurl_3}{$slidesurl_3}{/if}">{if $slidestitle_3}{$slidestitle_3}{/if}</a></h2>
            </div><!-- .entry-header -->
        </li><!-- .featured-slide .hentry -->        
{/if}        
        </ul><!-- .bxslider -->
       <!-- <div class="ribbon"><span>热点文章</span></div>-->
    </div><!-- .featured-left -->