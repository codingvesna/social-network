$( document ).ready(function() {
    console.log( "ready!" );

    // Create Post Characters Limit
    var maxLength = 150;
    $('#post').keyup(function (){
        var length = $(this).val().length;
        var currentLength = maxLength-length;
        $('#chars').text(currentLength);

    });
});


