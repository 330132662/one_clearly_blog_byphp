/*!
 * SuperSlide v2.1.1 
 * 轻松解决网站大部分特效展示问题
 * 详尽信息请看官网：http://www.SuperSlide2.com/
 *
 * Copyright 2011-2013, 大话主席
 *
 * 请尊重原创，保留头部版权
 * 在保留版权的前提下可应用于个人或商业用途

 * v2.1.1：修复当调用多个SuperSlide，并设置returnDefault:true 时返回defaultIndex索引错误

 */
!function(f){f.fn.slide=function(O){return f.fn.slide.defaults={type:"slide",effect:"fade",autoPlay:!1,delayTime:500,interTime:2500,triggerTime:150,defaultIndex:0,titCell:".hd li",mainCell:".bd",targetCell:null,trigger:"mouseover",scroll:1,vis:1,titOnClassName:"on",autoPage:!1,prevCell:".prev",nextCell:".next",pageStateCell:".pageState",opp:!1,pnLoop:!0,easing:"swing",startFun:null,endFun:null,switchLoad:null,playStateCell:".playState",mouseOverStop:!0,defaultPlay:!0,returnDefault:!1},this.each(function(){var g=f.extend({},f.fn.slide.defaults,O),P=f(this),gZ=g.effect,gE=f(g.prevCell,P),c=f(g.nextCell,P),W=f(g.pageStateCell,P),d=f(g.playStateCell,P),E=f(g.titCell,P),a=E.size(),Od=f(g.mainCell,P),H=Od.children().size(),gD=g.switchLoad,fG=f(g.targetCell,P),cT=parseInt(g.defaultIndex),cR=parseInt(g.delayTime),aM=parseInt(g.interTime);parseInt(g.triggerTime);var cJ,aK=parseInt(g.scroll),e=parseInt(g.vis),Pc="false"==g.autoPlay||0==g.autoPlay?!1:!0,Y="false"==g.opp||0==g.opp?!1:!0,dJ="false"==g.autoPage||0==g.autoPage?!1:!0,eP="false"==g.pnLoop||0==g.pnLoop?!1:!0,cd="false"==g.mouseOverStop||0==g.mouseOverStop?!1:!0,eW="false"==g.defaultPlay||0==g.defaultPlay?!1:!0,cW="false"==g.returnDefault||0==g.returnDefault?!1:!0,fL=0,cZ=0,b=0,N=0,gN=g.easing,eQ=null,eQg=null,M=null,gJ=g.titOnClassName,h=E.index(P.find("."+gJ)),i=cT=-1==h?cT:h,j=cT,k=cT,l=H>=e?0!=H%aK?H%aK:aK:0,m="leftMarquee"==gZ||"topMarquee"==gZ?!0:!1,n=function(){f.isFunction(g.startFun)&&g.startFun(cT,a,P,f(g.titCell,P),Od,fG,gE,c)},o=function(){f.isFunction(g.endFun)&&g.endFun(cT,a,P,f(g.titCell,P),Od,fG,gE,c)},p=function(){E.removeClass(gJ),eW&&E.eq(j).addClass(gJ)};if("menu"==g.type)return eW&&E.removeClass(gJ).eq(cT).addClass(gJ),E.hover(function(){cJ=f(this).find(g.targetCell);var O=E.index(f(this));eQg=setTimeout(function(){switch(cT=O,E.removeClass(gJ).eq(cT).addClass(gJ),n(),gZ){case"fade":cJ.stop(!0,!0).animate({opacity:"show"},cR,gN,o);break;case"slideDown":cJ.stop(!0,!0).animate({height:"show"},cR,gN,o)}},g.triggerTime)},function(){switch(clearTimeout(eQg),gZ){case"fade":cJ.animate({opacity:"hide"},cR,gN);break;case"slideDown":cJ.animate({height:"hide"},cR,gN)}}),cW&&P.hover(function(){clearTimeout(M)},function(){M=setTimeout(p,cR)}),void 0;if(0==a&&(a=H),m&&(a=2),dJ){if(H>=e)if("leftLoop"==gZ||"topLoop"==gZ)a=0!=H%aK?(0^H/aK)+1:H/aK;else{var q=H-e;a=1+parseInt(0!=q%aK?q/aK+1:q/aK),0>=a&&(a=1)}else a=1;E.html("");var r="";if(1==g.autoPage||"true"==g.autoPage)for(var s=0;a>s;s++)r+="<li>"+(s+1)+"</li>";else for(var s=0;a>s;s++)r+=g.autoPage.replace("$",s+1);E.html(r);var E=E.children()}if(H>=e){Od.children().each(function(){f(this).width()>b&&(b=f(this).width(),cZ=f(this).outerWidth(!0)),f(this).height()>N&&(N=f(this).height(),fL=f(this).outerHeight(!0))});var t=Od.children(),u=function(){for(var f=0;e>f;f++)t.eq(f).clone().addClass("clone").appendTo(Od);for(var f=0;l>f;f++)t.eq(H-f-1).clone().addClass("clone").prependTo(Od)};switch(gZ){case"fold":Od.css({position:"relative",width:cZ,height:fL}).children().css({position:"absolute",width:b,left:0,top:0,display:"none"});break;case"top":Od.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+e*fL+'px"></div>').css({top:-(cT*aK)*fL,position:"relative",padding:"0",margin:"0"}).children().css({height:N});break;case"left":Od.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+e*cZ+'px"></div>').css({width:H*cZ,left:-(cT*aK)*cZ,position:"relative",overflow:"hidden",padding:"0",margin:"0"}).children().css({float:"left",width:b});break;case"leftLoop":case"leftMarquee":u(),Od.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; width:'+e*cZ+'px"></div>').css({width:(H+e+l)*cZ,position:"relative",overflow:"hidden",padding:"0",margin:"0",left:-(l+cT*aK)*cZ}).children().css({float:"left",width:b});break;case"topLoop":case"topMarquee":u(),Od.wrap('<div class="tempWrap" style="overflow:hidden; position:relative; height:'+e*fL+'px"></div>').css({height:(H+e+l)*fL,position:"relative",padding:"0",margin:"0",top:-(l+cT*aK)*fL}).children().css({height:N})}}var v=function(f){var O=f*aK;return f==a?O=H:-1==f&&0!=H%aK&&(O=-H%aK),O},w=function(O){var g=function(g){for(var P=g;e+g>P;P++)O.eq(P).find("img["+gD+"]").each(function(){var O=f(this);if(O.attr("src",O.attr(gD)).removeAttr(gD),Od.find(".clone")[0])for(var g=Od.children(),P=0;P<g.size();P++)g.eq(P).find("img["+gD+"]").each(function(){f(this).attr(gD)==O.attr("src")&&f(this).attr("src",f(this).attr(gD)).removeAttr(gD)})})};switch(gZ){case"fade":case"fold":case"top":case"left":case"slideDown":g(cT*aK);break;case"leftLoop":case"topLoop":g(l+v(k));break;case"leftMarquee":case"topMarquee":var P="leftMarquee"==gZ?Od.css("left").replace("px",""):Od.css("top").replace("px",""),gE="leftMarquee"==gZ?cZ:fL,c=l;if(0!=P%gE){var W=Math.abs(0^P/gE);c=1==cT?l+W:l+W-1}g(c)}},x=function(f){if(!eW||i!=cT||f||m){if(m?cT>=1?cT=1:0>=cT&&(cT=0):(k=cT,cT>=a?cT=0:0>cT&&(cT=a-1)),n(),null!=gD&&w(Od.children()),fG[0]&&(cJ=fG.eq(cT),null!=gD&&w(fG),"slideDown"==gZ?(fG.not(cJ).stop(!0,!0).slideUp(cR),cJ.slideDown(cR,gN,function(){Od[0]||o()})):(fG.not(cJ).stop(!0,!0).hide(),cJ.animate({opacity:"show"},cR,function(){Od[0]||o()}))),H>=e)switch(gZ){case"fade":Od.children().stop(!0,!0).eq(cT).animate({opacity:"show"},cR,gN,function(){o()}).siblings().hide();break;case"fold":Od.children().stop(!0,!0).eq(cT).animate({opacity:"show"},cR,gN,function(){o()}).siblings().animate({opacity:"hide"},cR,gN);break;case"top":Od.stop(!0,!1).animate({top:-cT*aK*fL},cR,gN,function(){o()});break;case"left":Od.stop(!0,!1).animate({left:-cT*aK*cZ},cR,gN,function(){o()});break;case"leftLoop":var O=k;Od.stop(!0,!0).animate({left:-(v(k)+l)*cZ},cR,gN,function(){-1>=O?Od.css("left",-(l+(a-1)*aK)*cZ):O>=a&&Od.css("left",-l*cZ),o()});break;case"topLoop":var O=k;Od.stop(!0,!0).animate({top:-(v(k)+l)*fL},cR,gN,function(){-1>=O?Od.css("top",-(l+(a-1)*aK)*fL):O>=a&&Od.css("top",-l*fL),o()});break;case"leftMarquee":var g=Od.css("left").replace("px","");0==cT?Od.animate({left:++g},0,function(){Od.css("left").replace("px","")>=0&&Od.css("left",-H*cZ)}):Od.animate({left:--g},0,function(){Od.css("left").replace("px","")<=-(H+l)*cZ&&Od.css("left",-l*cZ)});break;case"topMarquee":var P=Od.css("top").replace("px","");0==cT?Od.animate({top:++P},0,function(){Od.css("top").replace("px","")>=0&&Od.css("top",-H*fL)}):Od.animate({top:--P},0,function(){Od.css("top").replace("px","")<=-(H+l)*fL&&Od.css("top",-l*fL)})}E.removeClass(gJ).eq(cT).addClass(gJ),i=cT,eP||(c.removeClass("nextStop"),gE.removeClass("prevStop"),0==cT&&gE.addClass("prevStop"),cT==a-1&&c.addClass("nextStop")),W.html("<span>"+(cT+1)+"</span>/"+a)}};eW&&x(!0),cW&&P.hover(function(){clearTimeout(M)},function(){M=setTimeout(function(){cT=j,eW?x():"slideDown"==gZ?cJ.slideUp(cR,p):cJ.animate({opacity:"hide"},cR,p),i=cT},300)});var y=function(f){eQ=setInterval(function(){Y?cT--:cT++,x()},f?f:aM)},z=function(f){eQ=setInterval(x,f?f:aM)},A=function(){cd||(clearInterval(eQ),y())},B=function(){(eP||cT!=a-1)&&(cT++,x(),m||A())},C=function(){(eP||0!=cT)&&(cT--,x(),m||A())},D=function(){clearInterval(eQ),m?z():y(),d.removeClass("pauseState")},F=function(){clearInterval(eQ),d.addClass("pauseState")};if(Pc?m?(Y?cT--:cT++,z(),cd&&Od.hover(F,D)):(y(),cd&&P.hover(F,D)):(m&&(Y?cT--:cT++),d.addClass("pauseState")),d.click(function(){d.hasClass("pauseState")?D():F()}),"mouseover"==g.trigger?E.hover(function(){var f=E.index(this);eQg=setTimeout(function(){cT=f,x(),A()},g.triggerTime)},function(){clearTimeout(eQg)}):E.click(function(){cT=E.index(this),x(),A()}),m){if(c.mousedown(B),gE.mousedown(C),eP){var G,I=function(){G=setTimeout(function(){clearInterval(eQ),z(0^aM/10)},150)},J=function(){clearTimeout(G),clearInterval(eQ),z()};c.mousedown(I),c.mouseup(J),gE.mousedown(I),gE.mouseup(J)}"mouseover"==g.trigger&&(c.hover(B,function(){}),gE.hover(C,function(){}))}else c.click(B),gE.click(C)})}}(jQuery),jQuery.easing.jswing=jQuery.easing.swing,jQuery.extend(jQuery.easing,{def:"easeOutQuad",swing:function(f,O,g,P,gZ){return jQuery.easing[jQuery.easing.def](f,O,g,P,gZ)},easeInQuad:function(f,O,g,P,gZ){return P*(O/=gZ)*O+g},easeOutQuad:function(f,O,g,P,gZ){return-P*(O/=gZ)*(O-2)+g},easeInOutQuad:function(f,O,g,P,gZ){return(O/=gZ/2)<1?P/2*O*O+g:-P/2*(--O*(O-2)-1)+g},easeInCubic:function(f,O,g,P,gZ){return P*(O/=gZ)*O*O+g},easeOutCubic:function(f,O,g,P,gZ){return P*((O=O/gZ-1)*O*O+1)+g},easeInOutCubic:function(f,O,g,P,gZ){return(O/=gZ/2)<1?P/2*O*O*O+g:P/2*((O-=2)*O*O+2)+g},easeInQuart:function(f,O,g,P,gZ){return P*(O/=gZ)*O*O*O+g},easeOutQuart:function(f,O,g,P,gZ){return-P*((O=O/gZ-1)*O*O*O-1)+g},easeInOutQuart:function(f,O,g,P,gZ){return(O/=gZ/2)<1?P/2*O*O*O*O+g:-P/2*((O-=2)*O*O*O-2)+g},easeInQuint:function(f,O,g,P,gZ){return P*(O/=gZ)*O*O*O*O+g},easeOutQuint:function(f,O,g,P,gZ){return P*((O=O/gZ-1)*O*O*O*O+1)+g},easeInOutQuint:function(f,O,g,P,gZ){return(O/=gZ/2)<1?P/2*O*O*O*O*O+g:P/2*((O-=2)*O*O*O*O+2)+g},easeInSine:function(f,O,g,P,gZ){return-P*Math.cos(O/gZ*(Math.PI/2))+P+g},easeOutSine:function(f,O,g,P,gZ){return P*Math.sin(O/gZ*(Math.PI/2))+g},easeInOutSine:function(f,O,g,P,gZ){return-P/2*(Math.cos(Math.PI*O/gZ)-1)+g},easeInExpo:function(f,O,g,P,gZ){return 0==O?g:P*Math.pow(2,10*(O/gZ-1))+g},easeOutExpo:function(f,O,g,P,gZ){return O==gZ?g+P:P*(-Math.pow(2,-10*O/gZ)+1)+g},easeInOutExpo:function(f,O,g,P,gZ){return 0==O?g:O==gZ?g+P:(O/=gZ/2)<1?P/2*Math.pow(2,10*(O-1))+g:P/2*(-Math.pow(2,-10*--O)+2)+g},easeInCirc:function(f,O,g,P,gZ){return-P*(Math.sqrt(1-(O/=gZ)*O)-1)+g},easeOutCirc:function(f,O,g,P,gZ){return P*Math.sqrt(1-(O=O/gZ-1)*O)+g},easeInOutCirc:function(f,O,g,P,gZ){return(O/=gZ/2)<1?-P/2*(Math.sqrt(1-O*O)-1)+g:P/2*(Math.sqrt(1-(O-=2)*O)+1)+g},easeInElastic:function(f,O,g,P,gZ){var gE=1.70158,c=0,W=P;if(0==O)return g;if(1==(O/=gZ))return g+P;if(c||(c=.3*gZ),W<Math.abs(P)){W=P;var gE=c/4}else var gE=c/(2*Math.PI)*Math.asin(P/W);return-(W*Math.pow(2,10*(O-=1))*Math.sin((O*gZ-gE)*2*Math.PI/c))+g},easeOutElastic:function(f,O,g,P,gZ){var gE=1.70158,c=0,W=P;if(0==O)return g;if(1==(O/=gZ))return g+P;if(c||(c=.3*gZ),W<Math.abs(P)){W=P;var gE=c/4}else var gE=c/(2*Math.PI)*Math.asin(P/W);return W*Math.pow(2,-10*O)*Math.sin((O*gZ-gE)*2*Math.PI/c)+P+g},easeInOutElastic:function(f,O,g,P,gZ){var gE=1.70158,c=0,W=P;if(0==O)return g;if(2==(O/=gZ/2))return g+P;if(c||(c=gZ*.3*1.5),W<Math.abs(P)){W=P;var gE=c/4}else var gE=c/(2*Math.PI)*Math.asin(P/W);return 1>O?-.5*W*Math.pow(2,10*(O-=1))*Math.sin((O*gZ-gE)*2*Math.PI/c)+g:.5*W*Math.pow(2,-10*(O-=1))*Math.sin((O*gZ-gE)*2*Math.PI/c)+P+g},easeInBack:function(f,O,g,P,gZ,gE){return void 0==gE&&(gE=1.70158),P*(O/=gZ)*O*((gE+1)*O-gE)+g},easeOutBack:function(f,O,g,P,gZ,gE){return void 0==gE&&(gE=1.70158),P*((O=O/gZ-1)*O*((gE+1)*O+gE)+1)+g},easeInOutBack:function(f,O,g,P,gZ,gE){return void 0==gE&&(gE=1.70158),(O/=gZ/2)<1?P/2*O*O*(((gE*=1.525)+1)*O-gE)+g:P/2*((O-=2)*O*(((gE*=1.525)+1)*O+gE)+2)+g},easeInBounce:function(f,O,g,P,gZ){return P-jQuery.easing.easeOutBounce(f,gZ-O,0,P,gZ)+g},easeOutBounce:function(f,O,g,P,gZ){return(O/=gZ)<1/2.75?P*7.5625*O*O+g:2/2.75>O?P*(7.5625*(O-=1.5/2.75)*O+.75)+g:2.5/2.75>O?P*(7.5625*(O-=2.25/2.75)*O+.9375)+g:P*(7.5625*(O-=2.625/2.75)*O+.984375)+g},easeInOutBounce:function(f,O,g,P,gZ){return gZ/2>O?.5*jQuery.easing.easeInBounce(f,2*O,0,P,gZ)+g:.5*jQuery.easing.easeOutBounce(f,2*O-gZ,0,P,gZ)+.5*P+g}});$(".fullSlide").slide({titCell:".hd ul",mainCell:".bd ul",effect:"fold",interTime:5e3,autoPlay:true,autoPage:true,trigger:"click"});