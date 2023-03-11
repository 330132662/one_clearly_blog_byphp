{* Template Name:公用页脚模块 *}
<div class="max footer">
  <div class="box"> 
    <div class="left">
	{$zbp->Config('Jz52_Cofive')->botdh1}
    </div>
    <div class="right">
      <div class="con">
        <dl>
          <dt><img src="{$zbp->Config('Jz52_Cofive')->weixin}" alt="{$name}"/></dt>
          <dd>微信扫一扫加关注</dd>
        </dl>
        <div class="t">联系我们</div>
		<ul>{$zbp->Config('Jz52_Cofive')->botdzdh}</ul>
      </div>
    </div>
    <div class="clearit"></div>
  </div>
</div>
<div class="max copyright"> {$copyright}{if $zbp->Config('Jz52_Cofive')->beian||$zbp->Config('Jz52_Cofive')->gongan}{if $zbp->Config('Jz52_Cofive')->beian}备案号：<a href="https://beian.miit.gov.cn"  target="_blank" rel="nofollow">{$zbp->Config('Jz52_Cofive')->beian}</a>{/if} {if $zbp->Config('Jz52_Cofive')->gongan}<img src="{$host}zb_users/theme/{$theme}/style/images/gongan.png" style="height:16px;vertical-align:middle;margin-bottom:3px;"><a href="{$zbp->Config('Jz52_Cofive')->gonganu}"  target="_blank" rel="nofollow"> {$zbp->Config('Jz52_Cofive')->gongan}</a>{/if}{/if}{if $zbp->Config('Jz52_Cofive')->zbbq!="1"} Powered：<a href="https://www.zblogcn.com/" target="_blank">Z-BlogPHP</a> Thems：<a href="https://yeelz.com" target="_blank">YeeLz</a>{/if}</div>
<div class="toolbar">
  <div class="dd qq"><a href="{$zbp->Config('Jz52_Cofive')->xunpan}" target="_blank"><i></i><span>在线客服</span></a></div>
  <div class="dd tel"><i></i><span>服务热线</span>
    <div class="box">
      <p>{$zbp->Config('Jz52_Cofive')->phontxt}</p>
      <h3>{$zbp->Config('Jz52_Cofive')->phon}</h3>
    </div>
  </div>
  <div class="dd code"><i></i><span>微信咨询</span>
    <div class="box"><img src="{$zbp->Config('Jz52_Cofive')->weixini}" alt="{$name}"/></div>
  </div>
  <div class="dd top" id="top"><i></i><span>返回顶部</span></div>
</div>
<div id="bottom">
  <ul>
  {$zbp->Config('Jz52_Cofive')->mbotsg}
  </ul>
</div>
<script src="{$host}zb_users/theme/{$theme}/script/custom.js?v{$themeinfo['version']}"></script>
</body>
</html>