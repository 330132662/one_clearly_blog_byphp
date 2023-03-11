{* Template Name:SEO文件，不要选 *}
{if $type=='article'}
<title>{if $article.Metas.nrtit && $zbp->Config('Jz52_Cofive')->nseo}{$article.Metas.nrtit}{else}{$title}{/if} - {$name}</title>
{php} 
$aryTags = array();
foreach($article->Tags as $key){$aryTags[] = $key->Name;}
if(count($aryTags)>0){$keywords = implode(',',$aryTags);} else {$keywords = $zbp->name;}
$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...';
{/php}
<meta name="keywords" content="{if $article.Metas.nrgjc && $zbp->Config('Jz52_Cofive')->nseo}{$article.Metas.nrgjc}{else}{$keywords}{/if}" />
<meta name="description" content="{if $article.Metas.nrms && $zbp->Config('Jz52_Cofive')->nseo}{$article.Metas.nrms}{else}{$description}{/if},{$name}" />
{if $article.Prev}
<link rel="prev" title="{$article.Prev.Title}" href="{$article.Prev.Url}"/>
{/if}
{if $article.Next}
<link rel="next" title="{$article.Next.Title}" href="{$article.Next.Url}"/>
{/if}
<link rel="canonical" href="{$article.Url}"/>
{elseif $type=='page'}
<title>{if $article.Metas.nrtit && $zbp->Config('Jz52_Cofive')->nseo}{$article.Metas.nrtit}{else}{$title}{/if} - {$name}</title>
<meta name="keywords" content="{if $article.Metas.nrgjc && $zbp->Config('Jz52_Cofive')->nseo}{$article.Metas.nrgjc}{else}{$title}{/if}" />
{php}
$description = trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),135)).'...';
{/php}
<meta name="description" content="{if $article.Metas.nrms && $zbp->Config('Jz52_Cofive')->nseo}{$article.Metas.nrms}{else}{$description}{/if},{$name}" />
{elseif $type=='index'}
<title>{if $zbp->Config('Jz52_Cofive')->seotitle&&$page=='1'}{$zbp->Config('Jz52_Cofive')->seotitle}{if $subname} - {$subname}{/if}{else}{$name}{if $page>'1'} - 第{$pagebar.PageNow}页{/if}{/if}</title>
{if $zbp->Config('Jz52_Cofive')->seokeywords}
<meta name="keywords" content="{$zbp->Config('Jz52_Cofive')->seokeywords}" />
{/if}
{if $zbp->Config('Jz52_Cofive')->seodescription}
<meta name="description" content="{$zbp->Config('Jz52_Cofive')->seodescription}" />
{/if}
{elseif $type=='tag'}
<title>{if $tag.Metas.tagt}{$tag.Metas.tagt}{else}{$tag.Name}{/if}{if $page>'1'} - 第{$pagebar.PageNow}页{/if} - {$name}</title>
<meta name="keywords" content="{if $tag.Metas.tagk}{$tag.Metas.tagk}{else}{$tag.Name}{/if}"> 
<meta name="description" content="{if $tag.Metas.tagd}{$tag.Metas.tagd}{else}{if $tag.Intro}{$tag.Intro}{else}{$title}_{$name}{/if}{/if}"> 
{elseif $type=='category'}
<title>{if $category.Metas.flbt && $zbp->Config('Jz52_Cofive')->nseo}{$category.Metas.flbt}{if $page>'1'} 第{$pagebar.PageNow}页{/if}{else}{$title}{/if} - {$name}</title>
<meta name="keywords" content="{if $category.Metas.flgjc && $zbp->Config('Jz52_Cofive')->nseo}{$category.Metas.flgjc}{else}{$title}{/if},{$name}" />
<meta name="description" content="{if $category.Metas.fenld}{$category.Metas.fenld}{else}{if $category.Intro}{$category.Intro}{else}{$title}_{$name}{/if}{/if}" />
{else}
<title>{$title} - {$name}</title>
<meta name="keywords" content="{$title},{$name}" />
<meta name="description" content="{$title}_{$name}{if $page>'1'}_当前是第{$pagebar.PageNow}页{/if}" />
{/if}