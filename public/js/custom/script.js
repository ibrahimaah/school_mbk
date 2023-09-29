	//* //////////// Make academin image responsive *///////////////
    $(document).ready(function() {
        $('.carousel-item img').css('max-height',$(window). height());
        // $('#sidebar-wrapper.active').css('height',$(window). height());
        const img_container = $('.img-academic,.student-life .left,.school-profile .left');
        let img_container_width = img_container.width();
        img_container.css('height',img_container_width);

    //* //////////// Make carousel image responsive *///////////////
        $(window).resize(function() {
            $('.carousel-item img').css('max-height',$(window). height());
            let img_container_width = img_container.width();
            img_container.css('height',img_container_width);
        });
        
        ///*****  Back to Top    ******//////
        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });

        //For owl carousel
        $('.owl-carousel').owlCarousel({
            items:3,
            margin:20,
            loop:true,
            center: true,
            autoplay: true,
            autoplayTimeout: 4000,
            dots: true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:2,
                },
                1000:{
                    items:3,
                }
            }	
        });

    });
    ////////////////////////////////////////////////////////////////

    //For the Header Slider
    window.addEventListener('DOMContentLoaded', event => {

        const sidebarWrapper = document.getElementById('sidebar-wrapper');
        let scrollToTopVisible = false;
        // Closes the sidebar menu
        const menuToggle = document.body.querySelector('.menu-toggle');
        menuToggle.addEventListener('click', event => {
            event.preventDefault();
            sidebarWrapper.classList.toggle('active');
            _toggleMenuIcon();
            menuToggle.classList.toggle('active');
        })
        
        // Closes responsive menu when a scroll trigger link is clicked
        var scrollTriggerList = [].slice.call(document.querySelectorAll('#sidebar-wrapper .js-scroll-trigger'));
        scrollTriggerList.map(scrollTrigger => {
            scrollTrigger.addEventListener('click', () => {
                sidebarWrapper.classList.remove('active');
                menuToggle.classList.remove('active');
                _toggleMenuIcon();
            })
        });

        function _toggleMenuIcon() {
            const menuToggleBars = document.body.querySelector('.menu-toggle > .fa-bars');
            const menuToggleTimes = document.body.querySelector('.menu-toggle > .fa-times');
            if (menuToggleBars) {
                menuToggleBars.classList.remove('fa-bars');
                menuToggleBars.classList.add('fa-times');
            }
            if (menuToggleTimes) {
                menuToggleTimes.classList.remove('fa-times');
                menuToggleTimes.classList.add('fa-bars');
            }
        }
    });

    //The bottom navbar
	$('#navbar').bootnavbar();