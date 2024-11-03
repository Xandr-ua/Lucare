import '../css/app.scss';
import Swiper from 'swiper/bundle';


const heroSlider = new Swiper(".hero__slider", {
    slidesPerView: 1,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    watchOverflow: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});


const textItems = document.querySelectorAll('.service__content-item');
const imageItems = document.querySelectorAll('.service__images-item');

function activateItem(index) {
    // Remove 'active' class from all items
    textItems.forEach(item => item.classList.remove('active'));
    imageItems.forEach(item => item.classList.remove('active'));

    // Add 'active' class to the clicked item
    textItems[index].classList.add('active');
    imageItems[index].classList.add('active');
}

// Set the default active item (first element)
activateItem(0);

// Add click event to each text item
textItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        activateItem(index);
    });
});

document.addEventListener('DOMContentLoaded', function() {

    function cloneTickerItems(tickerWrapperSelector, tickerListSelector, tickerItemSelector) {
        const tickerWrapper = document.querySelector(tickerWrapperSelector);
        const tickerList = document.querySelector(tickerListSelector);
        const tickerItems = document.querySelectorAll(tickerItemSelector);

        if (tickerWrapper && tickerList && tickerItems.length > 0) {
            const tickerListWidth = tickerList.scrollWidth;
            const tickerWrapperWidth = tickerWrapper.offsetWidth;
            let iterationCount = 0;
            const maxIterations = 20;

            if (tickerListWidth < tickerWrapperWidth * 2) {
                while (tickerList.scrollWidth < tickerWrapperWidth * 2 && iterationCount < maxIterations) {
                    tickerItems.forEach(item => {
                        const clone = item.cloneNode(true);
                        tickerList.appendChild(clone);
                    });
                    iterationCount++;
                }
            }
        }
    }

    cloneTickerItems('.gallery__inner', '.gallery', '.gallery__item');
});



const slider = document.getElementById('before-after-slider');
const before = document.getElementById('before-image');
const beforeImage = before.getElementsByTagName('img')[0];
const resizer = document.getElementById('resizer');

let active = false;

//Sort overflow out for Overlay Image
document.addEventListener("DOMContentLoaded", function() {
    let width = slider.offsetWidth;
    console.log(width);
    beforeImage.style.width = width + 'px';
});

//Adjust width of image on resize
window.addEventListener('resize', function() {
    let width = slider.offsetWidth;
    console.log(width);
    beforeImage.style.width = width + 'px';
})

resizer.addEventListener('mousedown',function(){
    active = true;
    resizer.classList.add('resize');

});

document.body.addEventListener('mouseup',function(){
    active = false;
    resizer.classList.remove('resize');
});

document.body.addEventListener('mouseleave', function() {
    active = false;
    resizer.classList.remove('resize');
});

document.body.addEventListener('mousemove',function(e){
    if (!active) return;
    let x = e.pageX;
    x -= slider.getBoundingClientRect().left;
    slideIt(x);
    pauseEvent(e);
});

resizer.addEventListener('touchstart',function(){
    active = true;
    resizer.classList.add('resize');
});

document.body.addEventListener('touchend',function(){
    active = false;
    resizer.classList.remove('resize');
});

document.body.addEventListener('touchcancel',function(){
    active = false;
    resizer.classList.remove('resize');
});

//calculation for dragging on touch devices
document.body.addEventListener('touchmove',function(e){
    if (!active) return;
    let x;

    let i;
    for (i=0; i < e.changedTouches.length; i++) {
        x = e.changedTouches[i].pageX;
    }

    x -= slider.getBoundingClientRect().left;
    slideIt(x);
    pauseEvent(e);
});

function slideIt(x){
    let transform = Math.max(0,(Math.min(x,slider.offsetWidth)));
    before.style.width = transform+"px";
    resizer.style.left = transform-0+"px";
}

//stop divs being selected.
function pauseEvent(e){
    if(e.stopPropagation) e.stopPropagation();
    if(e.preventDefault) e.preventDefault();
    e.cancelBubble=true;
    e.returnValue=false;
    return false;
}

const reviewsSlider = new Swiper(".reviews__slider", {
    slidesPerView: 1,
    loop: true,
    autoplay: true,
    watchOverflow: false,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

document.addEventListener('wpcf7mailsent', function (event) {
    const form = event.target;
    const successMessage = document.createElement('p');
    successMessage.classList.add('success-message');
    successMessage.textContent = 'Thank you! Your form has been successfully submitted.';

    form.style.display = 'none';

    form.parentNode.appendChild(successMessage);
}, false);
