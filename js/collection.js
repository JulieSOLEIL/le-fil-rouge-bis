$(document).ready(function() {
    $('#result-search').click(function(){
        $.ajax({
            type:'POST',
            url:'/fonction/searchItems.php',
            data:{
                collection:$('#collection').val(),
            },
            success:function(data){
                $("#output").html(data);
            }
        });
    });
});