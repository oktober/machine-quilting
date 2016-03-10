$( document ).ready( function() {
    console.log( 'ready' );

    $( "form" ).on( "submit", function( event ) {

        // Prevent the form's default submission.
        event.preventDefault();

        // Prevent event from bubbling up DOM tree, prohibiting delegation
        event.stopPropagation();

        var formData = $( this ).serialize();
        console.log( formData );
        // Make an AJAX request to submit the form data
        $.ajax({
            method: "POST",
            url: "pages/contact-us.php",
            data: formData
        })
        .done(function( response ) {
            console.log( response );
                //remove the text from the form fields
                //Remove "We'd love to hear from you!" and replace with a thank you message
        });

    });
});