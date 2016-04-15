$( document ).ready( function() {

    //JS for drop-down info to show/hide in started-links
    $(".title-link").click( function() {
        if ($(this).next("section.dropdown-info").is(":hidden")) {
            $("section.dropdown-info").each(function() {
                $(this).hide();
            });
        }

        $(this).next("section.dropdown-info").toggle();
        window.location = "#" + this.id;
    });


    //JS for Contact Us form
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
            $('form').prop("hidden", true);
        });

    });

});