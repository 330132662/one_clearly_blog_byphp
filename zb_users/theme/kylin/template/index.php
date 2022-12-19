{*Template Name:首页*}
{php}
$SecondIndexListON = $zbp->Config('kylin')->SecondIndexListON;
$ThirdIndexListON = $zbp->Config('kylin')->ThirdIndexListON;
{/php}

{if $ThirdIndexListON == '1'}
{template:header3}
{else}
{template:header}
{/if}
<body class="home blog logged-in wp-custom-logo group-blog hfeed">
<div id="page" class="site">
{template:navbar}
<div id="content" class="site-content container three-col-layout  clear">
{if kylin_isMobile()}
<div id="primary" class="content-area clear">
{else}
<div id="primary" class="content-area clear" {php}if($ThirdIndexListON == '1'){echo 'style = "float: left;width: 790px;"';}{/php}> 
{/if}
{if $ThirdIndexListON == '0'}
{template:navbar2}
{/if}
        <div class="right-col">
            {if $type == 'index'}
            <div id="featured-content" class="clear">
                {template:slide}
                {template:post-istop}
            </div><!-- #featured-content -->
            {/if}
            
            {if $SecondIndexListON == '0' && $ThirdIndexListON == '0'}
            {template:post-multi}
            {/if}
            
            {if isset($SecondIndexListON) && $SecondIndexListON == '1'}
            {template:post-multi2}
            {/if}
            
            {if isset($ThirdIndexListON) && $ThirdIndexListON == '1'}
            {template:post-multi3}
            {/if}
            
{template:pagebar}
        </div><!-- .right-col -->
  </div><!-- #primary -->
{template:sidebar}
</div><!-- #content .site-content -->
{if $ThirdIndexListON == '1'}
    {template:footer3}
{else}
    {template:footer}
{/if}