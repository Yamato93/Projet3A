$(document).ready(function(){

    $(".delete").click(function(e){
        var confirm = window.confirm("Are you sure you want to delete definitely this story of your journal ?");

        if(confirm === true){
        }else{
            e.preventDefault();
        }
    });
});