$(document).ready(function(){
    $(".addFile").change(function(){
        Images.previewBackground.readURL(this, $(this).parent());
    });

    $("body").on("click",".removeFile",function(){
        $(this).closest('input[type="file"]').val('');
        Images.previewBackground.readURL($(this).closest('input[type="file"]'), $(this).parent());
        $(this).remove();
    });
});