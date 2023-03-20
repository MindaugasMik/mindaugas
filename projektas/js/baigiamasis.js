let slider = tns ({
    container: '.karusele',
    items: 1,
    gutter: 10,
    autoplay: true,
    mouseDrag: true,
    swipeAngle: false,
    speed: 400,
    controls: false,
    autoplayButtonOutput:false,
    nav: false,
    responsive: {
        640: {
            items: 2,

        },
        760: {
            items: 3,
        }
    }

})

// pagrindiniame puslapyje karuselė veikia 
// bandžiau padaryti DUK accordioną, bet nepavyko, paspaudus turėtų + pasikeisti į -, ir vėliau išsiskleisti (dar nebaigta)

const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

accordionItemHeaders.forEach(accordionItemHeader => {
accordionItemHeader.addEventListener("click", event => {
    accordionItemHeader.classList.toggle("active");
});
});