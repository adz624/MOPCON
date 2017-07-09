'use strict';

$(function () {
    $('.navbar-toggle').on('click', function () {
        $('.navbar-collapse').slideToggle();
    });

    window.set_language = function (lang) {
        $.post("set_language", { lang: lang }, function (res) {
            window.location = "./";
        });
    };

    positionMap();
    carousel();
});

function positionMap() {
    var positionContentBoxHeight = $('.position_content_box').height();
    $('.position_map').css('top', positionContentBoxHeight);
    $('.position_content').css('height', positionContentBoxHeight + $('.position_map').height());
}

function carousel() {
    $('.carouselGroup').owlCarousel({
        center: true,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        pagination: false,
        margin: 40,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            767: {
                items: 3
            }
        }
    });
}
//# sourceMappingURL=all.js.map
