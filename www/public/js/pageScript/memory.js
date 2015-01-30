$(document).ready(function(){

    if($(".memorie .grid li").length < 2){
        $(".save-journal").attr('disabled', true);
    }else{
        $(".save-journal").removeAttr('disabled');
    }
});