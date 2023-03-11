<?php include('post-safe.php');?><footer class="footer">
  <div class="copyright">
    {$copyright} Powered By <a href="https://www.zblogcn.com/" target="_blank">Z-Blog</a>. {if $boke8->icp}<a rel="nofollow" href="https://beian.miit.gov.cn/" target="_blank">{$boke8->icp}</a>.{/if} {if $boke8->beian}<a rel="nofollow" target="_blank" href="{$boke8->baurl}" title="{$boke8->beian}"><img src="{$host}zb_users/theme/{$theme}/style/images/beian.png" alt="{$boke8->beian}">{$boke8->beian}</a>.{/if} {if $boke8->copyright}Theme By <a href="https://www.boke8.net/" title="博客吧" target="_blank">博客吧</a>{/if} {if $boke8->statistic}{$boke8->statistic}{/if}
  </div>
</footer>
{if $type == 'index'}
<script>
  var _url = '{$host}';
</script>
{elseif $type == 'category'}
<script>
  var _url = '{$categorys[$category->ID].Url}';
</script>
{elseif $type == 'page'}
<script>
  var _url = '{$article->Url}';
</script>
{elseif $type == 'article'}
<script>
  var _url = '{$categorys[$article->Category->ID].Url}';
</script>
{else}
<script>
  var _url = window.location.href;
</script>
{/if}
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="{$host}zb_users/theme/{$theme}/script/boke8.js"></script>
{$footer}
</body>
</html>