$(document).ready(function(){

    (function(){
        var remove = '<span class="removeFile">Remove this image</span>';
        var elem = $(".addFile").parent();

        elem.each(function(){
            if($(this).attr("style") != 'background-image:url(public/img/preview.jpg);'){
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
        $(this).closest('input[type="file"]').val('');
        Images.previewBackground.readURL($(this).closest('input[type="file"]'), $(this).parent());
        $(this).remove();
    });
});