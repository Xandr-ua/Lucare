import '../css/app.scss';


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

// document.addEventListener('DOMContentLoaded', function() {
//
//     function cloneTickerItems(tickerWrapperSelector, tickerListSelector, tickerItemSelector) {
//         const tickerWrapper = document.querySelector(tickerWrapperSelector);
//         const tickerList = document.querySelector(tickerListSelector);
//         const tickerItems = document.querySelectorAll(tickerItemSelector);
//
//         if (tickerWrapper && tickerList && tickerItems.length > 0) {
//             const tickerListWidth = tickerList.scrollWidth;
//             const tickerWrapperWidth = tickerWrapper.offsetWidth;
//
//             if (tickerListWidth < tickerWrapperWidth * 2) {
//                 while (tickerList.scrollWidth < tickerWrapperWidth * 2) {
//                     tickerItems.forEach(item => {
//                         const clone = item.cloneNode(true);
//                         tickerList.appendChild(clone);
//                     });
//                 }
//             }
//         }
//     }
//     cloneTickerItems('.gallery__inner', '.gallery', '.gallery__item');
// });

document.addEventListener('DOMContentLoaded', function() {

    function cloneTickerItems(tickerWrapperSelector, tickerListSelector, tickerItemSelector) {
        const tickerWrapper = document.querySelector(tickerWrapperSelector);
        const tickerList = document.querySelector(tickerListSelector);
        const tickerItems = document.querySelectorAll(tickerItemSelector);

        if (tickerWrapper && tickerList && tickerItems.length > 0) {
            const tickerListWidth = tickerList.scrollWidth;
            const tickerWrapperWidth = tickerWrapper.offsetWidth;
            let iterationCount = 0; // Лічильник ітерацій для уникнення зациклення
            const maxIterations = 20; // Максимальна кількість ітерацій

            if (tickerListWidth < tickerWrapperWidth * 2) {
                while (tickerList.scrollWidth < tickerWrapperWidth * 2 && iterationCount < maxIterations) {
                    tickerItems.forEach(item => {
                        const clone = item.cloneNode(true);
                        tickerList.appendChild(clone);
                    });
                    iterationCount++; // Збільшуємо лічильник
                }
            }
        }
    }

    cloneTickerItems('.gallery__inner', '.gallery', '.gallery__item');
});
