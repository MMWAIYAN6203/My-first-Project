<x-layout>
  <x-slot:title>
    Home
  </x-slot:title>
  <!-- Hero Section -->
  <!-- Hero Section -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="object-fill opacity-65 w-full sm:h-[400px] md:h-[400px] lg:h-[550px]" src="./images/hero1.webp" />
        <div class="flex flex-col items-center absolute inset-0  mt-[80px] md:mt-[160px] lg:mt-[200px] xl:mt-[220px]">
          <div class="font-semibold text-[9px] xl:text-3xl md:text-lg w-[50%]">
            {{ __('We warmly welcome you to work with us,for timly fast and reliable trading') }}
          </div>
          <a class="btn1 font-semibold mt-[10px] xl:mt-[20px] text-[9px] lg:text-xl md:text-lg sm:text-sm  w-[7.2em] h-[2em] xl:w-[7em] xl:h-[2em] lg:w-[6em] lg:h-[2em] lg:pt-[4px] md:w-[6em] md:h-[1em] md:pb-[33px] pt-[1px] xl:text-center md:pt-[3px] " href="/contactus">{{__("Contact Us") }}</a>
        </div>
      </div>
      <div class="swiper-slide">
        <img class="object-fill opacity-70 w-full sm:h-[400px] md:h-[400px] lg:h-[550px]" src="./images/hero2.jpg" />
        <div class="flex flex-col items-center absolute inset-0 mt-[80px] md:mt-[160px] lg:mt-[200px] xl:mt-[220px]">
          <div class="font-semibold text-[9px] xl:text-3xl md:text-lg w-[50%]">
            {{ __('We invite you to work with ROSE IMPORT EXPORT COMPANY LIMITED, which always provides the best services') }}
          </div>
          <a class="btn1 font-semibold mt-[10px] xl:mt-[20px] text-[8px] lg:text-xl md:text-lg sm:text-sm  w-[7.2em] h-[2em] xl:w-[7em] xl:h-[2em] lg:w-[6em] lg:h-[2em] lg:pt-[4px] md:w-[6em] md:h-[1em] md:pb-[33px] pt-[1px] xl:txe-center md:pt-[3px] " href="/contactus">{{ __("Contact Us") }}</a>
        </div>
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- Blog Intro -->
  <div class="">
    <h1 class="text-xl my-8 font-semibold text-[color:var(--nav-color)] sm:text-4xl md:text-2xl lg:text-[36px] text-center">
      {{__("Recently Updated Blogs") }}
    </h1>
  </div>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <div>
    <section class="hero-section">
      <div class="card-grid">
        <a class="card" href="/blog_detail">
          <div class="card__background" style="background-image: url(/blog-images/business_networking.jpg)"></div>
          <div class="card__content">
            <h3 class="card__heading mt-[50px] w-full">Example Card Heading</h3>
          </div>
        </a>
        <a class="card" href="/blog_detail">
          <div class="card__background" style="background-image: url(/blog-images/balance-life.jpg)"></div>
          <div class="card__content">
            <h3 class="card__heading mt-[50px] w-full">Example Card Heading</h3>
          </div>
        </a>
        <a class="card" href="/blog_detail">
          <div class="card__background" style="background-image: url(/blog-images/essential-for-IT.png)"></div>
          <div class="card__content">
            <h3 class="card__heading mt-[50px] w-full">Example Card Heading</h3>
          </div>
        </a>
        <a class="card" href="/blog_detail">
          <div class="card__background" style="background-image: url(/blog-images/financial.jpg"></div>
          <div class="card__content">
            <h3 class="card__heading mt-[50px] w-full">Example Card Heading</h3>
          </div>
        </a>
        <div>
    </section>
    <a class="btn1 font-semibold float-right me-[20px] xl:float-right xl:me-[20px] text-[10px]  md:text-[14px] lg:text-lg w-[5.5em] h-[2em] pt-[2px] lg:w-[5em] lg:h-[2em] lg:pt-[px] xl:w-[5em] xl:h-[2em] xl:pt-[2px]" href="/blog"> {{__("See All") }} </a>
  </div>

  <!-- Service Intro -->
  <div>
    <h1 class="mx-12 py-8 md:mt-[50px] mt-[50px] xl:mt-[50px] lg:mt-[100px] font-semibold text-[color:var(--nav-color)] text-xl sm:text-4xl md:text-2xl lg:text-[36px] text-center">
    {{__("Our Services") }}
    </h1>
    <a href="/service"><img class="object-fill m-auto xl:h-[480px] sm:h-[300px] md:h-[380px]" src="/images/services.png" alt="service-image"></a>
  </div>



  <!-- About intro -->

  <div class="flex flex-row gap-2 lg:gap-4 sm:gap-3 sm w-full justify-center lg:text-lg p-[10px]">
    <div class="flex flex-col items-center lg:mt-[25px] md:mt-[25px] mt-[32px] xl:mt-[30px] w-[200px] sm:w-[300px] lg:w-[400px] lg:mt-[100px]">
      <h1 class="md:text-2xl xl:text-4xl text-center sm:py-3 text-[color:var(--nav-color)] font-semibold">
        {{__("About ROSE") }}
      </h1>
      <p class="xl:text-lg text-[10px] md:text-[14px] lg:text-lg">{{ __("We are Rose Import Export Co.,Ltd who deliver your goods from Thailand's airports and seaports to their destination quickly and without damage.") }}</p>
      
      <a class="btn1 mt-[10px] lg:mt-[-10px] md:mt-[5px] xl:mt-[15px] xl:h-[2em] lg:text-xl md:text-lg text-[10px] md:text-[14px] w-[7em] h-[2em] xl:pb-[0px] pt-[1px] lg:w-[6em] lg:h-[2em] lg:pt-[3px] md:w-[7em] md:h-[2em] md:pt-[2px] sm:w-[7em] sm:h-[2em] sm:p-[2px]" href="/aboutus"> {{ __("Read More") }} </a>
    </div>
    <img class="xl:w-[300px] w-[150px] sm:w-[250px] sm:h-[300px] py-[30px] rounded-xl" src="/images/Rose_logo.png" alt="">
  </div>



  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
      centeredSlides: true,
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
  <script src="/script.js"></script>

</x-layout>