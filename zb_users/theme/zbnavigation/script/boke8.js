function _top(){
	var _scroll = $(window).scrollTop();
	if($('body').hasClass('open')){
		var $_top = $('body').css('top').split('-')[1].split('px')[0];
		$('body').removeClass('open').removeAttr('style');
		$('body,html').scrollTop($_top);			
	}else{
		$('body').addClass('open').css('top',-_scroll);
	}
}
$(function(){	
	$(window).on('resize',function(){
      if($(window).width() > 1024){
        var _logo = $('.logo').innerHeight() + 86;
        var _header = $('#header').height() - _logo;
        $('.nav .menu').height(_header).mCustomScrollbar({scrollInertia:800});
      }else{
       $('.nav .menu').mCustomScrollbar("destroy").removeAttr('style');

      }
    }).trigger('resize'); 
    
	$('.navBtn').click(function(){
		$(this).toggleClass('open');		
		$('.nav').toggleClass('open');	
		
	});
	
	$('.tabTop li span').click(function(){
		$(this).parent().addClass('cur').siblings().removeClass('cur');
		var _index = $(this).parent().index();
		$('.tabBtm .box').eq(_index).stop().fadeIn('fast').siblings().hide();
	});
	
	$('.schBtn').click(function(){
		$('body, .searchBox').addClass('open');
		
	});
	$('.searchBox .close').click(function(){
		$('body, .searchBox').removeClass('open');
		
	});
	
	$(window).scroll(function(){
		if($('body').width() <= 1024){
			$('.navBtn,.nav').removeClass('open');
		}
	});
	$('.text').focus(function(){
		$('#header, .blank').addClass('focus');
	}).blur(function(){
		$('#header, .blank').removeClass('focus')
	});
	
	var _href = window.location.href;
	var _url = _href.split('#');
	if(_url.length > 1){
		var _cmt = _url[1].substr(0,3);
		if(_cmt == 'cmt'){
			$('.tabTop li').eq(3).addClass('cur').siblings().removeClass('cur');
			$('.tabBtm .box').eq(3).stop().fadeIn('fast').siblings().hide();
		}
	}
	if($('.pagenavi a').length == 0){
		$('.pagenavi').hide();
	}
	
	var _null = '1';
	$('.siteForm .submit').click(function(){		
		$('.siteForm .text').each(function(){
			if($(this).attr('name') != 'logo' && $(this).val() == ''){
				$(this).parent().siblings('.nulltip').html('<span>不能为空</span>');
				_null = '0';
			}else{
				$(this).parent().siblings('.nulltip').children('span').remove();
			}
		});		
		if($('.siteurl .text').val() != '' && $('.sitename .text').val() != '' && $('.sitereson .text').val() != ''){
			_null = '1';
		}
		if(_null == '0'){
			return false;
		}		
	});

	$('.nav li').each(function(){
        var _href = $(this).children('a').attr('href');
        if(_href == _url){
            $(this).children('a').addClass('cur');
        }
    }); 

	if($('#hmnews').length > 0){
		$('#hmnews').slick({
	        autoplay: true,
	        centerPadding:'0',
	        dots: false,
	        vertical: false,
	        centerMode: false,
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        speed: 250,
	        responsive: [{
	          	breakpoint: 768,
	          	settings: {
	            	slidesToShow: 1
	          	}
	    	}]
	  	});
	}
	$('.slickBox').each(function(){
		if($(this).find('.slick-load').length > 0){
			$(this).find('.slick-load').slick({
		        autoplay: true,
		        centerPadding:'0',
		        dots: false,
		        arrows:true,
		        vertical: false,
		        centerMode: false,
		        slidesToShow: 5,
		        slidesToScroll: 1,
		        speed: 500,
		        prevArrow:'<div class="slick-prev"></div>',
	       		nextArrow:'<div class="slick-next"></div>',
		        responsive: [
		        	{
		          		breakpoint: 1281,
		          		settings: {
		            		slidesToShow: 4
		          		}
		    			},
		    			{
		          		breakpoint: 769,
		          		settings: {
		            		slidesToShow: 3
		          		}
		    			},
		    			{
		          		breakpoint: 481,
		          		settings: {
		            		slidesToShow: 2
		          		}
		    			}
		    		]
		  	});
		}
	});
	
});