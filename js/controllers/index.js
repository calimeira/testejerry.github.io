//@prepros-prepend ../jquery.waypoints.min.js
//@prepros-prepend ../jquery.counterup.min.js

/* PARALLAX ANIMATION HERO */
const ponzioCard1Container = document.getElementById('ponzioCard1Container');
const ponzioCard2Container = document.getElementById('ponzioCard2Container');
const ponzioCard3Container = document.getElementById('ponzioCard3Container');
const ponzioCard1Mobile = document.getElementById('ponzioCard1Mobile');
const ponzioCard2Mobile = document.getElementById('ponzioCard2Mobile');
const ponzioCard3Mobile = document.getElementById('ponzioCard3Mobile');

window.addEventListener('scroll', function(){
	let value = window.scrollY;
	ponzioCard1Container.style.transform = 'translateY(' + value * -0.1 + 'px)';
	ponzioCard2Container.style.transform = 'translateY(' + value * -0.2 + 'px)';
	ponzioCard3Container.style.transform = 'translateY(' + value * -0.3 + 'px)';
  ponzioCard1Mobile.style.transform = 'translateY(' + value * -0.1 + 'px)';
	ponzioCard2Mobile.style.transform = 'translateY(' + value * -0.2 + 'px)';
	ponzioCard3Mobile.style.transform = 'translateY(' + value * -0.3 + 'px)';
});

/* COUNTER UP */
function initCountUp() {
    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });
}

/* BENEFITS CAROUSEL */
const slider = document.querySelector('.carousel-benefits.one');
const slider2 = document.querySelector('.carousel-benefits.two');

let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener('mousedown', (e) => {
  isDown = true;
  slider.classList.add('active');
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener('mouseleave', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mouseup', () => {
  isDown = false;
  slider.classList.remove('active');
});
slider.addEventListener('mousemove', (e) => {
  if(!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 5; //scroll-fast
  slider.scrollLeft = scrollLeft - walk;
});

slider2.addEventListener('mousedown', (e) => {
    isDown = true;
    slider2.classList.add('active');
    startX = e.pageX - slider2.offsetLeft;
    scrollLeft = slider2.scrollLeft;
});
slider2.addEventListener('mouseleave', () => {
    isDown = false;
    slider2.classList.remove('active');
});
slider2.addEventListener('mouseup', () => {
    isDown = false;
    slider2.classList.remove('active');
});
slider2.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX - slider2.offsetLeft;
    const walk = (x - startX) * 5; //scroll-fast
    slider2.scrollLeft = scrollLeft - walk;
});

$( document ).ready(function() {
  $( "#carouselScrolledOne" ).scrollLeft( 500 );
  $( "#carouselScrolledTwo" ).scrollLeft( 200 );
});
