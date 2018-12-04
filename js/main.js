jQuery(document).ready(function ($) {

    $(".smooth").on('click', function (event) {

        if (this.hash !== "") {
            event.preventDefault();
            var hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });

    /*scroll count*/
    function animateFlipBox() {
        if ($(window).scrollTop() >= 623) {
            $('.card__counter').each(function () {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).attr('data-text')
                }, {
                    duration: 3000,
                    easing: 'swing',
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        }
    };

    $(window).scroll(function () {
        animateFlipBox();
    });

    // RODO COOKIES

    function PopUp(hideOrshow) {
        if (hideOrshow == 'hide') {
            document.querySelector('.rodo-cookies').style.display = "none";
        } else if (localStorage.getItem("popupWasShown") == null) {
            localStorage.setItem("popupWasShown", 1);
            document.querySelector('.rodo-cookies').removeAttribute('style');
        }
    }
    window.onload = function () {
        setTimeout(function () {
            PopUp('show');
        }, 0);
    }


    const closeLink = document.querySelector('.rodo-cookies__close-link');
    const closeBtn = document.querySelector('.rodo-cookies__button');


    closeLink.addEventListener('click', function () {
        PopUp('hide');
    });
    closeBtn.addEventListener('click', function () {
        PopUp('hide');
    });

    //open privacy policy


    $("a.link").on("click", function () {
        window.open('https://corner.com.pl/polityka.html', '_blank');
    });




});