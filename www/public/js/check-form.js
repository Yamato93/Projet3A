$(document).ready(function(){
    "use strict";
    // COVER FORM
    var formCover = $(".create-cover");

    formCover.submit(function(){
        if($(".form-div").hasClass('error')){
            return false;
        }else if($(this).find('input[type="text"]').val() == ''){
            $(this).find('input[type="text"]').parent().children('label').removeClass('active');
            $(this).find('input[type="text"]').parent().append('<span class="error">You have to fill this field</span>');
            ga('send', 'event', 'form-cover', 'submit', 'error title');
            return false;
        }else if($('#cover').val() == ''){
            $(this).find('#cover').parent().parent().children('label').removeClass('active');
            $(this).find('#cover').parent().parent().append('<span class="error">You have to choose an image</span>');
            ga('send', 'event', 'form-cover', 'submit', 'error image');
            return false;
        }else if((this.files[0].size) > 5000000){
            $(this).parent().parent().append('<span class="error">Your image is too heavy, please select an other</span>');
            return false;
        }
        else if($(this).find('textarea').val() == ''){
            $(this).find('textarea').parent().children('label').removeClass('active');
            $(this).find('textarea').parent().append('<span class="error">You have to fill this field</span>');
            ga('send', 'event', 'form-cover', 'submit', 'error textarea');
            return false;
        }else{
            ga('send', 'event', 'form-cover', 'submit', 'submit without error');
            return true;
        }
    });

    $(".create-cover input[type='text']").change(function(){
        if($(this).val() == ''){
            $(this).parent().children('label').removeClass('active');
            $(this).parent().append('<span class="error">You have to fill this field</span>');
        }else{
            $(this).parent().children('label').addClass('active');
            $(this).parent().children('.error').remove();
        }
    });
    $(".create-cover input[type='file']").change(function(){
        if($(this).val() == ''){
            $(this).parent().parent().append('<span class="error">You have to choose an image</span>');
        }else if((this.files[0].size) > 5000000){
            $(this).parent().parent().append('<span class="error">Your image is too heavy, please select an other</span>');
        }
        else{
            $(this).parent().parent().children('.error').remove();
        }
    });
    $(".create-cover textarea").change(function(){
        if($(this).val() == ''){
            $(this).parent().children('label').removeClass('active');
            $(this).parent().append('<span class="error">You have to fill this field</span>');
        }else{
            $(this).parent().children('label').addClass('active');
            $(this).parent().children('.error').remove();
        }
    });

    $("#cover").change(function(){
        Images.preview.readURL(this, $('#cover-preview'));
    });
});