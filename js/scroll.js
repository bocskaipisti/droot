// Slow link scrolling ..............................................................................................................

$(function() {
    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            console.log(event);
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });
});

// Go To Top function ..............................................................................................................

function GoToTop() {
    $('body,html').animate({
        scrollTop: 0
    }, 800);
}

var PageDownUppSpeed = 300;    //in ms
var PageDownUppDistance = 500; //var PageDownUppDistance = 500;

function ScrollDown() {
    var WH = parseInt($(window).height()/2);
    var PageDownUppDistance = WH;
    var ST = $(window).scrollTop() + PageDownUppDistance;
    $('body,html').animate({
        scrollTop: ST
    }, PageDownUppSpeed);
}

function ScrollUpp() {
    var ST = $(window).scrollTop() - PageDownUppDistance;
    $('body,html').animate({
        scrollTop: ST
    }, PageDownUppSpeed);
}

$(function () {
    $(document).keydown(function(e) {
        var key = e.which;
        if( key==34 ) { ScrollDown(); }
        if( key==33 ) { ScrollUpp(); }
    });
})
