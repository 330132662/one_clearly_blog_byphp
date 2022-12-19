{*Template Name:分页*}
<nav class="navigation pagination" role="navigation">
<h2 class="screen-reader-text">文章导航</h2>
<div class="nav-links">
{if $pagebar && $pagebar.PageAll > 1}
    {foreach $pagebar.buttons as $k => $v}
        {if $pagebar.PageNow==$k}
        <span aria-current='page' class='page-numbers current'>{$k}</span>
        {elseif $pagebar.PageNow+1==$k}
        <a class='page-numbers' href="{$v}">{$k}</a>
        {elseif $k=='‹‹'}
        <a class='page-numbers' href="{$v}">首页</a>
        {elseif $k=='››'}
        <a class='page-numbers' href="{$v}">尾页</a>
        {elseif $k=='‹'}
        <a class='page-numbers' href="{$v}">上一页</a>
        {elseif $k=='›'}
        <a class='page-numbers' href="{$v}">下一页</a>
        {else}
        <a class='page-numbers' href="{$v}">{$k}</a>
        {/if}
    {/foreach}
{/if}
</div>
</nav>
    