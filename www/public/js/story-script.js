$(document).ready(function(){

    function readURL(input,selector) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $(selector).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".addFile").change(function(){
        var selector = $(this).parent().children();
        readURL(this, selector);
    });
});