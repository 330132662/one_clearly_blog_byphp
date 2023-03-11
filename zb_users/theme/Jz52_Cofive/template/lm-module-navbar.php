<li class="nLi">
	<a href="{$item.href}" target="{$item.target}" title="{$item.title}">{$item.text}</a>
	{if count($item.subs)}
	<div class="sub">
	{foreach $item.subs as $item}<a href="{$item.href}" target="{$item.target}" title="{$item.title}">{$item.text}</a>{/foreach}
	</div>
	{/if}
</li>