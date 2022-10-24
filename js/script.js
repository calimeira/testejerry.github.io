/* ESCENCIALES */
//@prepros-prepend jquery-latest.min.js

/* BOOTSTRAP */
//@prepros-prepend bootstrap.bundle.min.js

/* RECOMENDABLES */
//@prepros-prepend aos.min.js
//@prepros-prepend picturefill.min.js
//@prepros-prepend fancybox.min.js

/* HEADER CLASS ON SCROLL */
function initScrollFunction() {
    
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $("header").addClass("smaller");
        } else {
            $("header").removeClass("smaller").removeClass('fade').removeClass('nav-up').removeClass('nav-down');
        }
        
        $('#menu').collapse('hide');
       

    });
    
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function(event){
        didScroll = true;
    });

    setInterval(function() {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);
    
    function hasScrolled() {
        var st = $(this).scrollTop();

        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        if (st > lastScrollTop && st > navbarHeight){
            $('header').removeClass('nav-down').addClass('nav-up');
        } else {
            if(st + $(window).height() < $(document).height()) {
                $('header').removeClass('nav-up').addClass('nav-down');
            }
        }

        lastScrollTop = st;
    }
    
}
initScrollFunction();

/* TOOLTIPS */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
$(function () {
  $('[data-bs-toggle="tooltip"]').tooltip();
});


/* AOS JS */
AOS.init({
    once: true,
});


/* LAZY LOADING */
if ('loading' in HTMLImageElement.prototype) {
    const images = document.querySelectorAll("img.lazyload");
        images.forEach(img => {
            img.src = img.dataset.src;
    });
} else {
     // Dynamically import the LazySizes library
    let script = document.createElement("script");
    script.async = true;
    script.src =
      "https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.8/lazysizes.min.js";
    document.body.appendChild(script);
}

/* PICTURE FILL */
document.createElement( "picture" );