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