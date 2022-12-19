{*Template Name:文章页*}
{template:header-show}
<!--<body class="single post-{$article.ID}" oncontextmenu=self.event.returnValue=false onselectstart="return false">-->
<body class="single post-{$article.ID}">
<div id="page" class="site">
{template:navbar}
<div id="content" class="site-content container three-col-layout  clear"> 
    <div id="primary" class="content-area">
{template:navbar2}
<div class="right-col">
            {if $article.Type==ZC_POST_TYPE_ARTICLE}
                {template:post-single}
            {/if}
</div><!-- .right-col -->
</div>
{template:sidebar-article}
</div><!-- #content .site-content -->
{template:footer}