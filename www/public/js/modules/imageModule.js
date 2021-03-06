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
            var remove = '<span class="removeFile">Remove this image</span>';
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(selector).css('background-image', 'url("'+e.target.result+'")');
                }
                reader.readAsDataURL(input.files[0]);

                if(!$(selector).find('span').length){
                    $(selector).append(remove);
                }
            }
        }

        return{
            readURL: readURL,
        }
    })();

    var deleteImage = (function(){

        function success(data){
            // display message
        }

        function error(data){
            // display error
        }

        return{
            success: success,
            error: error,
        }

    })();

    return{
        preview: preview,
        previewBackground:previewBackground,
        deleteImage: deleteImage,
    }
})();