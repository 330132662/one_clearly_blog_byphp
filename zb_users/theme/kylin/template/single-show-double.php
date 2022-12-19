{template:header-show}
<body class="single post-{$article.ID}">
<div id="page" class="site">
{template:navbar}
<div id="content" class="site-content container two-col-layout  clear"> 
    <div id="primary" class="content-area">
<div class="right-col">
            {if $article.Type==ZC_POST_TYPE_ARTICLE}
                {template:post-single-double}
            {/if}
</div><!-- .right-col -->
</div>
{template:sidebar-article}
</div><!-- #content .site-content -->
{template:footer}