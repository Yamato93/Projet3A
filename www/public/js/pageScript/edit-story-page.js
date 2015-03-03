$(document).ready(function(){

    (function(){
        var remove = '<span class="removeFile">Remove this image</span>';
        var elem = $(".addFile").parent();

        elem.each(function(){
            if($(this).attr("style") != 'background-image:url(public/img/preview.jpg);' && $(this).attr("style")){
                $(this).append(remove);
            }else{
                $(this).removeAttr("style");
            }
        });
    })();

    $(".addFile").change(function(){
        Images.previewBackground.readURL(this, $(this).parent());
    });

    $("body").on("click",".removeFile",function(){
        var url = $(this).parent().data('url');
        Ajax.send(url,'',true,'GET',Images.deleteImage.success,Images.deleteImage.error);
        $(this).siblings('input[type="file"]').val('');
        $(this).parent().removeAttr('style data-url');
        $(this).remove();
    });
});