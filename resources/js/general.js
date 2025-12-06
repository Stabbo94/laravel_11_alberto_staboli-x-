document.addEventListener('DOMContentLoaded', function () {
    
    // Slider recensioni
    new Splide('#image-slider', {
        type: 'loop',
        perPage: 3,
        autoplay: true,
        interval: 0,
        speed: 40000,
        pauseOnHover: true,
        pauseOnFocus: false,
        arrows: false,
        pagination: false,
        gap: '1rem',
        easing: 'linear',
    }).mount();
    
    // Slider icone paesi
    new Splide('#countries-slider', {
        type: 'loop',
        perPage: 4,
        autoplay: true,
        interval: 0,
        speed: 50000,
        pauseOnHover: true,
        arrows: false,
        pagination: false,
        gap: '2rem',
        easing: 'linear',
    }).mount();
    
});