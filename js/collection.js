$(document).ready(function () {
    $('#collection').keypress(function(){
        $.ajax({
            type:'POST',
            url:'searchItems.php',
            data:{
                name:$('#collection').val(),
            },
            success:function(data){
                $("#result-search").html(data);
            }
        });
    });
});