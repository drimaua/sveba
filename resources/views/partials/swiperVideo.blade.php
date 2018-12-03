<div class="swiper-container" style="  min-width: 90%;">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        <!-- Slides -->
        <div class="swiper-slide text-center">
            <iframe height="250px" src="https://www.youtube.com/embed/GBOphGpcJ2Q" frameborder="0"
                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="swiper-slide text-center">
            <iframe height="250px" src="https://www.youtube.com/embed/QQTkJf6wsAQ" frameborder="0"
                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="swiper-slide text-center">
            <iframe height="250px" src="https://www.youtube.com/embed/QQTkJf6wsAQ" frameborder="0"
                    allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>
</div>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        slidesPerView: 3,
        breakpoints: {
            767: {
                slidesPerView: 1
            },
            992: {
                slidesPerView: 2
            },
        }
    })
</script>