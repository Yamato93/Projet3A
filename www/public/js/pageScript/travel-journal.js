$(document).ready(function(){

    $(".travel-nav a").on('click',function(e){
        e.preventDefault();
        Scroll.down.slide($(this).attr('href'))
    })
});