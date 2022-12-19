{*Template Name:公共页尾*}
{if $CopyWeixinON == '1' &&  kylin_is_mobile()}
<div class="juzhong">
<div class="weixinde">
客服微信 :  <span id="target">{$CopyWeixin}</span>
<button class="btn" data-clipboard-action="copy" data-clipboard-target="#target" id="copy_btn">复制并跳转到微信添加好友</button>
<script>    
    $(document).ready(function(){       
        var clipboard = new Clipboard('#copy_btn');    
        clipboard.on('success', function(e) {
            alert("微信号 : {$CopyWeixin} 复制成功",1500); 
            window.location.href='weixin://';
            e.clearSelection();    
            console.log(e.clearSelection);    
        });    
    });    
</script>
</div>
</div>
<script src='{$host}zb_users/theme/{$theme}/script/clipboard.min.js'></script>
{/if}
<footer id="colophon" class="site-footer">
<div class="clear"></div>
<div id="site-bottom" class="clear">
<div class="container">
<div class="menu-m_footer-container"><ul id="footer-menu" class="footer-nav">
<li><strong><a href="{$host}about">关于我们</a></strong></li>
<li><strong><a href="{$host}contact">联系我们</a></strong></li>
<li><strong><a href="{$host}copyright">免责声明</a></strong></li>
</ul></div> 
<div class="site-info">

<p>CopyRight &copy; <script>document.write(new Date().getFullYear());</script> <a href="{$host}">{$name}</a>  版权所有3</p>
<p><span>适用《知识共享 署名-非商业性使用-相同方式共享 3.0》协议-中文版</span></p>
<p></p>
<p>Powered By <span style="font-weight:800;">zhonggongPHP</span>.
{$copyright}
<p title="认证站点"><svg width="18" height="18" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M48 1H0V49H48V1Z" fill="white" fill-opacity="0.01"/><path d="M6 9.25564L24.0086 4L42 9.25564V20.0337C42 31.3622 34.7502 41.4194 24.0026 45.0005C13.2521 41.4195 6 31.36 6 20.0287V9.25564Z" fill="#69c004" stroke="#ffffff" stroke-width="4" stroke-linejoin="round"/><path d="M15 23L22 30L34 18" stroke="#ffffff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg></p>
</div><!-- .site-info -->           
</div><!-- .container -->
</div>
<!-- #site-bottom -->                           
</footer><!-- #colophon -->
</div><!-- #page -->
<div id="back-top">
<a href="#top" title="返回顶部">
<svg width="38" height="38" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" fill="white" fill-opacity="0.01"/><path d="M24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44Z" fill="#3d4de6" stroke="#3d4de6" stroke-width="4" stroke-linejoin="round"/><path d="M24 33.5V15.5" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/><path d="M33 24.5L24 15.5L15 24.5" stroke="#FFF" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
</a>
</div>
<script>
(function($){ //create closure so we can safely use $ as alias for jQuery
    $(document).ready(function(){
        "use strict";
            
        /*-----------------------------------------------------------------------------------*/
        /*  Sticky Breadcrumbs
        /*-----------------------------------------------------------------------------------*/     
        $(window).scroll(function(){
            var aTop = 200;
            if( ( $(this).scrollTop()>=aTop) ){  
                        
                    $('.single .site-main .entry-header').addClass('sticky-breadcrumbs');
                    $('.single #primary article.hentry').css('padding-top', '110px');
                    $('#single-sticky').addClass(' container');
                
                     
                    $('.single .left-col').addClass('header-scrolled');
                        
            } else {
                    
                    $('.single .site-main .entry-header').removeClass('sticky-breadcrumbs');
                    $('.single #primary article.hentry').css('padding-top', '0');
                    $('#single-sticky').removeClass(' container');
                                                    
                    $('.single .left-col').removeClass('header-scrolled');   
                                                
            }
        });     
                /*-----------------------------------------------------------------------------------*/
        /*  Sticky Left Navigation
        /*-----------------------------------------------------------------------------------*/
             
            $(".left-col").sticky( { topSpacing: 0 } );
                /*-----------------------------------------------------------------------------------*/
        /*  Slick Mobile Menu
        /*-----------------------------------------------------------------------------------*/
        /*$('#primary-menu').slicknav({
            prependTo: '#slick-mobile-menu',
            allowParentLinks: true,
            label: '导航'
        });*/
    });
})(jQuery);</script>
<script src="{$host}zb_users/theme/{$theme}/script/footer-js.php"></script>
<script src="{$host}zb_system/script/common.js"></script>
<script src="{$host}zb_system/script/c_html_js_add.php"></script>
<script src="{$host}zb_users/theme/{$theme}/script/social-share.js"></script>
<script src="{$host}zb_users/theme/{$theme}/script/qrcode.js"></script>
<!--导航选中状态-->
<script type="text/javascript">  
    $(function () {
        $(".menu-index_left-container li").click(function () {
            $(this).addClass('current-menu-item').siblings().removeClass('current-menu-item');
        })
        var urlstr = location.href;
        var urlstatus = false;
        $(".menu-index_left-container li").each(function () {
            if ((urlstr +"/").indexOf($(this).find('a').attr("href")) > -1 && $(this).find('a').attr("href") != '') {
                $(".menu-index_left-container li").removeClass("current-menu-item");
                $(this).addClass("current-menu-item");
                urlstatus = true;
            }else{
                $(this).removeClass("current-menu-item");
            }
        });
        if (!urlstatus) {
            $(".menu-index_left-container li").eq(0).addClass("current-menu-item");
    }
})
</script>
<script>
socialShare('#share-2', {sites: ['weibo','wechat', 'qzone', 'qq']});
</script>
{$footer}

<!--统计代码-->
<!--统计结束-->
</body>
<!--<script type="text/javascript">$("html").removeAttr("class");</script>-->
</html>