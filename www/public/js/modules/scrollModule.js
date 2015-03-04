var Scroll = (function(){

    var down = (function(){

        function slide(link){
            $('body').animate({ scrollTop: $(link).offset().top }, 1000);
        }

        return{
            slide:slide,
        }
    })();

    return{
        down:down,
    }
})();