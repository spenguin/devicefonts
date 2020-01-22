jQuery(document).ready( function(){
    (function() {

        var quotes = jQuery(".tagline");
        var quoteIndex = -1;
    
        
        function showNextQuote() {
            ++quoteIndex;
            quotes.eq(quoteIndex % quotes.length)
                .fadeIn(2000)
                .delay(2000)
                .fadeOut(2000, showNextQuote);
        }
    
        showNextQuote();
    
    })(); 
    
    // Need to test for search existence
    jQuery( "#fontsets" ).autocomplete({
        source: availableFontSets,
        minLength: 3,
        focus: function( event, ui ) {
            jQuery( "#fontsets" ).val( ui.item[0] );
            return false;
        },
        select: function( event, ui ) {
            console.log( "Selected: " + ui.item[1] );
            location.href = ui.item[1];
            return false;
        }
    })
    .autocomplete( "instance" )._renderItem = function( ul, item ) {
        return jQuery( "<li>" )
            .append( "<div>" + item[0]  + "</div>" )
            .appendTo( ul );
    };        
 
   
});

