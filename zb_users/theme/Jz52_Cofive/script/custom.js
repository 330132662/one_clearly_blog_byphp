var swiper = new Swiper('.banner_list', {
spaceBetween:0,
autoplay:true,
pagination: {
el: '.swiper-pagination',
clickable: true,
},
});
$(function () {
    $('#toolbar dd').bind({
        'mouseenter': function () {
            if ($(this).children('.slide').length) {
                var _this = $(this).children('.slide');
                _this.stop(true, true).animate({ 'width': 180 }, 200);
            } else if ($(this).children('.pop').length) {
                var _this = $(this).children('.pop');
                _this.show().animate({ 'right': 65 }, 200);
            }
        },
        'mouseleave': function () {
            if ($(this).children('.slide').length) {
                var _this = $(this).children('.slide');
                _this.stop(false, false).animate({ 'width': 0 }, 200);
            } else if ($(this).children('.pop').length) {
                var _this = $(this).children('.pop');
                _this.hide().animate({ 'right': 90 }, 200);
            }
        }
    });
    $("#top").click(function () {
        $("body, html").stop().animate({ "scrollTop": 0 });
    });
});
zbp.plugin.unbind("comment.reply.start", "system");
zbp.plugin.on("comment.reply.start", "Jz52_Cofive", function(i) {
	$("#inpRevID").val(i);
	var frm = $('#divCommentPost'),
		cancel = $("#cancel-reply"),
		temp = $('#temp-frm');
	var div = document.createElement('div');
	div.id = 'temp-frm';
	div.style.display = 'none';
	frm.before(div);
	$('#AjaxComment' + i).before(frm);
	frm.addClass("reply-frm");
	cancel.show();
	cancel.click(function() {
		$("#inpRevID").val(0);
		var temp = $('#temp-frm'),
			frm = $('#divCommentPost');
		if (!temp.length || !frm.length) return;
		temp.before(frm);
		temp.remove();
		$(this).hide();
		frm.removeClass("reply-frm");
		return false;
	});
	try {
		$('#txaArticle').focus();
	} catch (e) {}
	return false;
});
zbp.plugin.on("comment.get", "Jz52_Cofive", function(postid, page) {
	$('span.commentspage').html("Waiting...");
});
zbp.plugin.on("comment.got", "Jz52_Cofive", function(formData, data, textStatus, jqXhr) {
	$('#AjaxCommentBegin').nextUntil('#AjaxCommentEnd').remove();
	$('#AjaxCommentEnd').before(data);
	$("#cancel-reply").click();
});
zbp.plugin.on("comment.post.success", "Jz52_Cofive", function () {
	$("#cancel-reply").click();
});
$(function(){
    var surl = location.href;
	var surl2 = $(".more a:eq(1)").attr("href");
	$(".nav .box li a").each(function() {
		if ($(this).attr("href")==surl || $(this).attr("href")==surl2) $(this).parent().addClass("hover")
	});
	$(".nydh ul li a").each(function() {
		if ($(this).attr("href")==surl || $(this).attr("href")==surl2) $(this).parent().addClass("on")
	});
});