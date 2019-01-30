$(function () {
    
    signUpLogInPopup = signUpLogInPopup;

        const $body = $('body');       
    
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
            $closeBtn.on('click', function() {
                $closeBtn = $(this);
                signUpLogInPopup.closingBtn($closeBtn);
            });
        });
        
        $body.find('.bookingPopup').each(function(){
            let $bookingButton = $(this);
            $bookingButton.on('click', function (){
                const $parentID = $bookingButton.parent().attr('id');
                console.log('jo');
                $body.find('.bookingPopup[id="' + $parentID + '-bookingPopup"]').removeClass('is-hidden');
            });
        });

        $body.find('.logged-user'.each(function(){
            let $loggedUsr = (this);
            console.log($loggedUsr);
            $loggedUsr.removeClass('.is-hidden');
        }));
});
