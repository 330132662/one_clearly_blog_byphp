{* Template Name:全站标签云页 *}
{template:header}
<body class="page-template page-template-page-templates page-template-full-width page-template-page-templatesfull-width-php page page-id-2 logged-in wp-custom-logo group-blog">
<div id="page" class="site">
{template:navbar}
<div id="content" class="site-content container three-col-layout  clear">
    {if kylin_is_mobile()}
    <div id="primary" class="content-area full-width">
    {else}
    <div id="primary" class="content-area width-center">
    {/if}
        <main id="main" class="site-main">
            <article id="post-{$article.ID}" class="post-{$article.ID} page type-page status-publish has-post-thumbnail hentry">
                <!-- .entry-header -->
                <header class="entry-header"><h1 class="page-title">{$article.Title}</h1></header>
                  <div class="entry-content">
                    {kylin_GetTagCloudList()}
                  </div><!-- .entry-content -->
            <footer class="entry-footer">
            </footer><!-- .entry-footer -->
            </article><!-- #post-{$article.ID} -->
        </main><!-- #main -->
    </div><!-- #primary -->      
</div>
</div><!-- #content .site-content -->
{template:footer}
