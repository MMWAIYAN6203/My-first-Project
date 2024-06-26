  <x-layout>
    <x-slot:title>
      {{ __("About Us") }}
    </x-slot:title>
    <div class="">
      <img class="w-full h-[260px] md:w-full md:h-[] lg:w-full lg:h-[] xl:w-full xl:h-[] object-fill rounded-b-lg shadow-md shadow-black " src="/images/Logistic1.jpg" alt="">
      <h1 class="text-xl xl:text-[36px] lg:text-[2.6rem] md:text-[2rem] sm:text-3xl text-center my-[30px] font-semibold pb-[40px] text-[color:var(--nav-color)]"> {{ __("About Us") }} </h1>
    </div>
    <div class="flex flex-row gap-[15px] md:gap-[20px] lg:gap-[20px] xl:gap-[20px]  justify-evenly">
      <div class="card5 w-[280px] xl:w-[60vh] lg:w-[50vh] md:w-[55vh] sm:w-[60vh]">
        <div class="content5 text-black">
          <p class="heading5 font-semibold text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl text-black">{{__("Who We Are !") }}</p>
          <p class="para5 text-[9px] xl:text-[18px] md:text-[14px] sm:text-[12px] text-black">
            {{ __('Welcome to ROSE Import Export Company Ltd, your gateway to seamless global trade. Established in 2020, we are a leading export-import firm dedicated to facilitating international commerce with efficiency, reliability, and integrity. Our company is driven by a passion for connecting businesses around the world, helping them to expand their horizons and achieve unparalleled growth.') }}
          </p>
        </div>
      </div>
      <img class="object-fill xl:w-[400px] xl:h-[350px] lg:w-[400px] lg:h-[350px] md:w-[350px] md:h-[300px]  w-[130px] h-[200px] mt-[20px] xl:mt-[30px] lg:mt-[12px] md:mt-[20px] " src="/images/who we are!.jpg" alt="">
    </div><br>



    <!-- Mission/Vission -->
    <div class="relative z-[-1] flex flex-col w-full items-center mt-[25px] ">
      <div>
        <img class="w-full h-[20vh] xl:w-full xl:h-[28vh] " src="/images/visionmission.png" alt="mission vision img">
      </div>
      <div>
        <div class="w-full h-[25vh] xl:w-[90vh] xl:h-[30vh] lg:w-[70vh] lg:h-[30vh] md:w-[75vh] md:h-[30vh] sm:w-[70vh] sm:h-[25vh] cursor-pointer relative transition-all duration-500 hover:translate-y-2 bg-neutral-50 rounded-xl shadow-2xl flex flex-row items-center justify-evenly gap-2 p-2 before:absolute before:w-full hover:before:top-0 before:duration-500 before:-top-1 before:h-1 before:bg-purple-300">
          <div class="mySlides fade">
            <h1 class="font-bold text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl text-center"> {{__("Our Mission !") }} </h1>
            <p class="line-clamp-3 xl:w-full pt-3 text-center xl:text-[18px] lg:text-[16px] md:text-[13px] sm:text-[12px] text-[9px]">
              {{ __('To simplify international trade for businesses of all sizes by providing expert guidance, comprehensive  services, and unwavering support, ensuring a smooth and successful trading experience.') }}
            </p>
          </div>
          <div class="mySlides fade">
            <h1 class="font-bold text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl text-center"> {{__("Our Vision !") }} </h1>
            <p class="line-clamp-3 xl:w-full pt-3 text-center xl:text-[18px] lg:text-[16px] md:text-[13px] sm:text-[12px] text-[9px]">
              {{ __('To be the most trusted and reliable partner in global trade, fostering economic growth and cross-cultural exchange through our dedicated services.') }}
            </p>
          </div>
        </div>

      </div>
    </div><br><br>
    <x-founder></x-founder>
    <!-- core -->
    <div class="relative">
      <img class="w-full xl:h-[400px] lg:h-[370px] md:h-[300px] h-[200px] opacity-50" src="/images/history.jpg" alt="">
      <div class="absolute inset-0 z-[1] my-[2vh] text-black mx-auto  lg:mt-[30px] sm:mt-[-10px] mt-[-30px] md:mt-[10px]">
        <h1 class="text-center font-bold xl:text-2xl lg:text-2xl md:text-xl sm:text-xl text-md p-[3px]">{{__ ("Our History") }}</h1>
        <p class="text-[9px] his w-[320px] font-semibold p-1 xl:text-[16px] lg:text-[16px] xl:w-[800px] lg:w-[700px] md:text-[13px] md:w-[700px] m-auto leading-[1.8] ">
          {{ __("We, Rose Export Import Co., Ltd was established in 2020. For the first time, we delivered some containers from Lanchabang Port to Mae Sot Mae Sot to Myawaddy smoothly. There were only 2 warehouses in Yangon and Myawaddy in 2020. We implemented according to our core and got the customer's satisfaction feedback. By 2022, we have expanded to 3 warehouses with one office each in Yangon and Myawaddy. With the trust of customers, I was able to grow my business and expand to a total of 6 warehouses and a large number of transport trucks. In addition, in 2023, the head office was expanded and built in Mae Sot, Thailand. So now, due to my hard work and the trust of you guys, I will be called Rose in the import and export company and have achieved success.") }}
        </p>
      </div>

    </div>
    <script src="/script.js"></script>
  </x-layout>
  