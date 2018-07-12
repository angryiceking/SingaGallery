$(document).ready(function(e){
    $('.slick-gallery').slick({
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        // cssEase: 'linear'
    });

    $('.index-slick-gallery').slick({
        autoplay: true,
        infinite: true,
        dots: true,
        speed: 500,
        fade: true,
    })

    $('.gallery-slick-gallery').slick({
        autoplay: true,
        infinite: true,
        dots: true,
        speed: 500,
        fade: true,
    })

    $('.more-link').click(function(e){
        e.preventDefault();
        Snackbar.show({
            pos: 'bottom-center',
            text: 'Added to cart.',
            showAction: false,
            duration: 5000
        });
    });
});