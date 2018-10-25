signUpLogInPopup = {

    //Popup Window for the Login
    popupLogIn: function() {
        const $body = $('body');

        $body.find('.login-Popup').removeClass('is-hidden');    // removing the CSS class is-hidden from the Login-Popup so the Popup is Visible
        $body.find('.overlay').removeClass('is-hidden');        // css class is-hidden getting removed so the darkisch overlay is visible
        $body.css('overflow', 'hidden');                        // the overflow is taken to hidden so the Scroll function is disabled
    },

    //Popup Window for the Sign up
    popupSignUp: function (){
        const $body = $('body');

        $body.find('.signUp-Popup').removeClass('is-hidden');   //removing the CSS class is-hidden from the Signup-Popup so the Popup is Visible
        $body.find('.overlay').removeClass('is-hidden');        // css class is-hidden getting removed so the darkisch overlay is visible
        $body.css('overflow', 'hidden');                        // the overflow is taken to hidden so the Scroll function is disabled
    },

    // Switch to Signup
    // this Function is used to switch from the Login Popup to the Signup Popup
    switchToSignUp: function(){
        const $body = $('body');

        $body.find('.login-Popup').addClass('is-hidden');       // the Login Popup get the css class is-hidden so it is not visible
        $body.find('.signUp-Popup').removeClass('is-hidden');   // the Signup Popup is removing the class is-hidden to get visible
    },

    // Switch zo Login
    // this Function is used to switch from the Signup Popup to the Login Popup
    switchToLogIn: function(){
        const $body = $('body');

        $body.find('.signUp-Popup').addClass('is-hidden');      // the Signup Popup get the css class is-hidden so it is not visible
        $body.find('.login-Popup').removeClass('is-hidden');    // the Login Popup is removing the class is-hidden to get visible
    },

    //Closing button (X-button)
    closingBtn: function($closeBtn) {
        const $body = $('body');

        $closeBtn.parent().addClass('is-hidden');               // the Parent domelement get adding the class is-hidden. So it is invisible
        $body.find('.overlay').addClass('is-hidden');           // Overlay adding the class is-hidden so the overlay is not visible any more
        $body.css('overflow', 'visible');                       // body get the function overflow visible so scroling is back activated
    }            
};