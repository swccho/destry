<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destry</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="/Icon-font-7-stroke-PIXEDEN-v-1.2.0/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    @vite('resources/scss/style.scss')
</head>
<body>
@include('front.shared.header')
@yield('content')
@include('front.shared.footer')

<script>
    const swiper1= new Swiper('.hero-slider', {
        loop: true,
        slidesPerView: 1,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    const swiper2 = new Swiper('.brand-slider', {
        loop: true,
        slidesPerView: 5,
        // autoplay: {
        //     delay: 2000,
        // },
    });
    const swiper3 = new Swiper('.daily-product-slider', {
        loop: true,
        slidesPerView: 2,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    const swiper4 = new Swiper('.best-product-slider', {
        loop: true,
        slidesPerView: 1,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    const swiper5 = new Swiper('.best-offer-slider', {
        loop: true,
        slidesPerView: 1,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    const swiper6 = new Swiper('.new-product-slider', {
        loop: true,
        slidesPerView: 1,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    const swiper7 = new Swiper('.best-seller-slider', {
        loop: true,
        slidesPerView: 1,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    const swiper8 = new Swiper('.product-tabs-slider', {
        loop: true,
        slidesPerView: 4,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    const swiper9 = new Swiper('.single-product-slider', {
        loop: true,
        slidesPerView: 4,
        // autoplay: {
        //     delay: 2000,
        // },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
    window.onload = () => {
        window.addEventListener('scroll', ()=>{
            if(window.pageYOffset > 145){
                document.querySelector('.header-bottom').classList.add('fixed');
                document.querySelector('.scroll-top').classList.add('active');
            }else{
                document.querySelector('.scroll-top').classList.remove('active');
                document.querySelector('.header-bottom').classList.remove('fixed');
            }
            document.querySelector('.scroll-top').addEventListener('click', () => {
                window.scrollTo(0, 0);
            })
        })
    }
</script>
</body>
</html>
