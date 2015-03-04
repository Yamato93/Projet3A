$(document).ready(function(){

    $(".delete").click(function(e){
        var confirm = window.confirm("Are you sure you want to delete definitely this travel journal ?");

        if(confirm === true){
        }else{
            e.preventDefault();
        }
    });
});