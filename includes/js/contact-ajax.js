$( document ).ready( function() {

    $( "form" ).on( "submit", function( event ) {
        // Prevent the form's default submission.
        event.preventDefault();
        // Prevent event from bubbling up DOM tree, prohibiting delegation
        event.stopPropagation();

        var formData = $( this ).serialize();
        $.ajax({
            method: "POST",
            url: "pages/contact-us.php",
            data: formData
        })
        .done(function( response ) {
            $('form')[0].reset();
            $('#contact-title').hide().html('Thank you for your message!').fadeIn("slow");
        });

    });

});