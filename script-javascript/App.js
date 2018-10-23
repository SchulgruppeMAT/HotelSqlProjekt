$(document).ready(function () {
    
    const $body = $('body');
    
    // bxslider Config
    $('.slider').bxSlider({
        slideWidth: 1600,
        slideHeight: 200,
        minSlides: 1,
        slideMargin: 0,
        controls: false,
        auto: true,
        pause: 3500,
        pager: false
    });
    
    //offerLayer
    

    //Login Sign up Moodle
    $body.find('div .openLogin').each(function() {
        let $popup = $(this);
        $popup.on('click', function() {

            $body.find('.login-Moodle').removeClass('is-hidden');
            //loginPopup.unfold($popup);
        });
    });

    $body.find('div .openSignup').each(function() {
        let $popup = $(this);
        $popup.on('click', function() {

            $body.find('.signUp-Moodle').removeClass('is-hidden');
            //loginPopup.unfold($popup);
        });
    });

    //global Closing Button
    $body.find('div .close-button').each(function(){
        let $closeBtn = $(this);
        $closeBtn.on('click', function(){
            $closeBtn.parent().addClass('is-hidden');
        });
    })

});