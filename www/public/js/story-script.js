$(document).ready(function(){

    $(".addFile").change(function(){
        Images.previewBackground.readURL(this, $(this).parent());
    });
});