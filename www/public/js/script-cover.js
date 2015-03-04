$(document).ready(function(){

    $('.tab-container > ul li a[href]').click(function(e){
        e.preventDefault();
        var link = $(this).attr('href');
        $('.tab-container ul li a').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').removeClass('active');
        $(link).addClass('active');
    });

    $("#cover").change(function(){
        Images.previewBackground.readURL(this, $(".cover-journal div:first-child"));
    });
});