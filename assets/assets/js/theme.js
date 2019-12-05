setTimeout(function () {
    $("#bigSlider").owlCarousel({

        autoplay: true,
        autoPlaySpeed: 2000,
        autoPlayTimeout: 1000,
        autoplayHoverPause: false,
   
        responsive: {
            // breakpoint from 0 up
            0: {
                autoWidth: false,
                items: 2,
            },
            // breakpoint from 480 up
            480: {
                autoWidth: false,
                items: 1,
            },
            300: {
                autoWidth: false,
                items: 1,
            },
            // breakpoint from 768 up
            767: {
                autoWidth: false,
                items: 2,
            }
        }

    });
    $(".mobileSlider").owlCarousel({
        autoWidth: true,
        items: 1,
//        autoplay: true,
    });
    $("#reviewSlider").owlCarousel({
        autoWidth: true,
        items: 2,
                        autoplay: true,
    });
    function hideMenufunction(obj) {
        $(document).on('click', '.hideMenuClass', function () {
            $(".hideMenuClass").removeClass("active hideMenuClass");
            $(".hmbrgrMenuData ").hide();
        });
    }
    $(document).on('click', '.hmbrgrMenu', function () {
        $(this).addClass("active hideMenuClass");
        $(".hmbrgrMenuData ").show();
        hideMenufunction(this);
    });
}, 1000)

