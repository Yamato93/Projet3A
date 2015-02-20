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
        $(this).siblings('input[type="file"]').val('');
        $(this).parent().removeAttr('style');
        $(this).remove();
    });
});