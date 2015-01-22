$(document).ready(function(){

    $(".addFile").change(function(){
        var selector = $(this).parent().children();
        Images.preview.readURL(this, selector);
    });
});