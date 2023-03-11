var container = document.createElement('script');
$(container).attr('type','text/plain').attr('id','img_editor');
$("body").append(container);
_editor = UE.getEditor('img_editor');
_editor.ready(function () {
	_editor.hide();
	$(".uploadimg strong").bind('click',function(){		
		object = $(this).parent().find('.uplod_img');
		objectimg = $(this).parent().prev().find('img');		
		objectimg1 = $(this).parent().find('img');		
		_editor.getDialog("insertimage").open();
		_editor.addListener('beforeInsertImage', function (t, arg) {
			objectimg.attr("src", arg[0].src);
			objectimg1.attr("src", arg[0].src);
			object.attr("value", arg[0].src);
		});
	});
});