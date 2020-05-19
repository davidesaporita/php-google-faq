$(document).ready(function() {
    
    // Refs
    var hamburger = $('.navbar__top__hamburger');
    var navHidden = $('.navbar__hidden');
    var navHiddenBg = $('.navbar__hidden__bg');

    // vars
    var timing = 300; // ms

    hamburger.click( () => {
        navHidden.animate({left: '0px'}, timing);
        navHiddenBg.fadeIn(timing);
        navHiddenBg.click( () => {
            navHidden.animate({left: '-305px'}, timing);
            navHiddenBg.fadeOut(timing);
        });
    });
});