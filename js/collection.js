$(document).ready(function () {
    $('#collection').keyup(function () {

        var user = $(this).val();

        if (user != "") {
            $.ajax({
                type: 'GET',
                URL: 'fonction/searchItems.php',
                data: 'user=' + encodeURIComponent(user),
                success: function (data) {
                    if (data != ""){
                $('#result-search').append(data);
            } else {

                document.getElementById('result-search').innerhtml = '<div>Aucun résultat trouvé</div>'

            }
        }

    });

}
        
    });
});

