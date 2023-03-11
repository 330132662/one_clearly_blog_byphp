{* Template Name:单个模块 *}
<div class="sidebar nylx" id="{$module.HtmlID}">
{if (!$module.IsHideTitle)&&($module.Name)}<div class="side-title"><h3 class="function_t title">{$module.Name}</h3></div>{else}<div class="side-title" style="display:none;"><h3></h3></div>{/if}
{if $module.Type=='div'}
<div class="contact">{$module.Content}</div>
{/if}
{if $module.Type=='ul'}
<ul class="contact">{$module.Content}</ul>
{/if}
</div>