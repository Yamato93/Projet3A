var Ajax = (function (){
    // send method of ajax
    function send(url,myData,async,method,success,error){
        error = error || {};
        $.ajax({
            url      : url,
            data     : myData,
            async    : async,
            type     : method,
            dataType : 'json',
            error    : error,
            success  : function(data, textStatus, xhr){
                success(data, textStatus, xhr);
            }
        });
    }

    // get data of any form

    var tools = (function(){

    // GET FORM SERIALIZE FOR CLASSIC FORM
    function getData(form){
        var values = {};
        $.each( form.serializeArray(), function(i, field) {
            values[field.name] = field.value;
        });
        values.submit = "Envoyer" ;
        return(values);
    }

        return{
            getData: getData
        }
    }());

  return{
        send: send,
        sendHtml: sendHtml,
        tools: tools
    }
}());