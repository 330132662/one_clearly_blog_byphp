var leonhere = document.createElement('script');
$(leonhere).attr('type','text/plain').attr('id','img_editor');
$('body').append(leonhere);
_editor = UE.getEditor('img_editor');
_editor.ready(function () {
    _editor.hide();
    $('.uploadimg .btn').click(function(){        
        object = $(this).parent().find('.uplod_img');
        _editor.getDialog("insertimage").open();
        _editor.addListener('beforeInsertImage', function (t, arg) {
            object.attr("value", arg[0].src);
        });
    });
});