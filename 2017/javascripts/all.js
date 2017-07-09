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
    scheduleSwitch();
    openScheduleDetail();
    closeDetailBox();
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

function scheduleSwitch() {
    $('.btn-switch').on('click', function () {
        var switchContent = $(this).attr('data-switch');
        $(this).addClass('is-active').siblings().removeClass('is-active');
        $("." + switchContent).removeClass('hide').siblings().addClass('hide');
    });
}

function openScheduleDetail() {
    $('td[role="content-col"]').click(function () {
        $('.detailBox').fadeIn();
    });
}

function closeDetailBox() {
    $('.detailBox_content_cancel').click(function () {
        $('.detailBox').fadeOut();
    });
}
//# sourceMappingURL=all.js.map
