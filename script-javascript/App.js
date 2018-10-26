$(function () {
    
    signUpLogInPopup = signUpLogInPopup;

        const $body = $('body');
        
        // bxslider Options
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
    
        //Login Sign up Popup
        $body.find('div .openLogin').each(function() {
            let $popup = $(this);
            $popup.on('click', function() {
                signUpLogInPopup.popupLogIn();
            });
        });
    
        //Sign Up Popup
        $body.find('div .openSignup').each(function() {
            let $popup = $(this);
            $popup.on('click', function() {
                signUpLogInPopup.popupSignUp();
            });
        });
    
        //Login to SignUp
        $body.find('.toSignUp').each(function() {
            $(this).on('click', function() {
                signUpLogInPopup.switchToSignUp();
            });        
        });
    
        //SignUp to Login
        $body.find('.toLogIn').each(function() {
            $(this).on('click', function() {
                signUpLogInPopup.switchToLogIn();
            });
        });
    
        //global Closing Button
        $body.find('div .close-button').each(function(){
            let $closeBtn = $(this);
            $closeBtn.on('click', function(){
                $closeBtn = $(this);
                signUpLogInPopup.closingBtn($closeBtn);
            });
        });   
    });
