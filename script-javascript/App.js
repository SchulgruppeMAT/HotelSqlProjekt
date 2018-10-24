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
            $body.find('.overlay').removeClass('is-hidden');
            $body.css('overflow', 'hidden');
            //loginPopup.unfold($popup);
        });
    });

    //Sign Up Moodle
    $body.find('div .openSignup').each(function() {
        let $popup = $(this);
        $popup.on('click', function() {

            $body.find('.signUp-Moodle').removeClass('is-hidden');
            $body.find('.overlay').removeClass('is-hidden');
            $body.css('overflow', 'hidden');
            //loginPopup.unfold($popup);
        });
    });

    //Login to SignUp
    $body.find('.toSignUp').each(function() {
        $(this).on('click', function() {
            $body.find('.login-Moodle').addClass('is-hidden');
            $body.find('.signUp-Moodle').removeClass('is-hidden');
        });        
    });

    //SignUp to Login
    $body.find('.toLogIn').each(function() {
        $(this).on('click', function() {
            $body.find('.signUp-Moodle').addClass('is-hidden');
            $body.find('.login-Moodle').removeClass('is-hidden');
        });
    });

    //global Closing Button
    $body.find('div .close-button').each(function(){
        let $closeBtn = $(this);
        $closeBtn.on('click', function(){
            $closeBtn.parent().addClass('is-hidden');
            $body.find('.overlay').addClass('is-hidden');
            $body.css('overflow', 'visible');
        });
    })


    //text
    $(function() {
        //----- OPEN
        $('[data-popup-open]').on('click', function(e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-open');
            $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
    
            e.preventDefault();
        });
    
        //----- CLOSE
        $('[data-popup-close]').on('click', function(e) {
            var targeted_popup_class = jQuery(this).attr('data-popup-close');
            $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
    
            e.preventDefault();
        });
    });
});