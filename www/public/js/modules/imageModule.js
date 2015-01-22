var Images = (function(){

    var preview = (function(){

        function readURL(input,selector){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(selector).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        return{
            readURL: readURL,
        }
    })();

    var previewBackground = (function(){

        function readURL(input,selector){
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(selector).css('background-image', 'url("'+e.target.result+'")');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        return{
            readURL: readURL,
        }
    })();

    return{
        preview: preview,
        previewBackground:previewBackground,
    }
})();