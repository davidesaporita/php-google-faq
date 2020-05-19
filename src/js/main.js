$(document).ready(function() {
    
    // Refs
    var hamburger = $('.navbar__top__hamburger');
    var navHidden = $('.navbar__hidden');
    var navHiddenBg = $('.navbar__hidden__bg');

    hamburger.click( () => {
        navHidden.show();
        navHiddenBg.show();

        navHiddenBg.click( () => {
            navHidden.hide();
            navHiddenBg.hide();
        });
    });

});