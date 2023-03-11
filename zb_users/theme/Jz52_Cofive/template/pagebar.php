<?php echo'404';die();?>
{* Template Name:分页 *}
{if $pagebar}
<div class="pagelist">
{foreach $pagebar.buttons as $k=>$v}
{if $pagebar.PageNow==$k}
<a class="hover">{$k}</a>
{elseif $k=='‹‹' and $pagebar.PageNow!=$pagebar.PageFirst}
<a href="{$v}" >首页</a>
{elseif $k=='‹‹' and $pagebar.PageNow==$pagebar.PageFirst}
<a>第一页</a>
{elseif $k=='››' and $pagebar.PageNow==$pagebar.PageLast}
<a>没有了</a>
{elseif $k=='››' and $pagebar.PageNow!=$pagebar.PageLast}
<a href="{$v}" >尾页</a>
{elseif $k=='‹'}
<a href="{$v}" >上一页</a>
{elseif $k=='›'}
<a href="{$v}" class="next">下一页</a>
{else}
<a href="{$v}">{$k}</a> {/if}
{/foreach}
</div>
{/if} 