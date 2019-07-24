var nav = document.getElementById('main-nav');
nav.addEventListener('click', function(){
    'use strict';
    nav.classList.toggle('to-show');
});

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [980,1],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,

            // Navigation
        navigation : true,
        navigationText : ["prev","next"],
        rewindNav : true,
        scrollPerPage : false,

        //Pagination
        pagination : true,
        paginationNumbers: false
    });
});