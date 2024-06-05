<x-layout>
    <x-slot:title>
        Contact Us
    </x-slot:title>
    <div class="">
        <img class="absolute inset- z-[-2] w-full h-[175vh] lg:h-full xl:h-[106vh]" src="/images/herosection.jpg" alt="">
        <!-- title -->
        <h1 class="text-xl xl:text-[32px] lg:text-[2.6rem] md:text-[2rem]  text-center py-[30px] font-semibold text-white"> {{__("Contact For Any Assist") }} </h1>
        <div class="flex flex-col items-center  gap-5 mb-[50px] lg:flex lg:flex-row lg:justify-evenly lg:gap-5 mt-[50px]">
            <!-- address box -->
            <div class="e-card bg-white relative playing  w-[320px] h-[65vh] lg:w-[380px] lg:h-[59vh] xl:w-[50vh] xl:h-[65vh]">
                <div class="image"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="absolute z-[3] ">
                    <div class="w-full py-4">
                        <h1 class="text-lg xl:text-2xl lg:text-2xl md:text-xl text-center font-semibold text-white ">{{__("Our Address") }}</h1><br>
                        <div class="flex flex-col gap-1 text-[12px] lg:text-[16px] xl:text-[16px] ms-[35px] xl:ms-[30px] lg:ms-[25px]">
                            <span><i class="fa-solid fa-location-dot me-3"></i>{{ __("1/53 Buakoon Road, Mae Sot District,") }}</span>
                            <span class="ms-[24px]">{{ __("Tak 63110 Thailand") }}</span>
                            <span><i class="fa-solid fa-phone me-3"></i>+66-82-149-9251 , +66-98-801-7134</span>
                            <span><i class="fa-regular fa-envelope me-3"></i>rose.imex.2023@gmail.com</span>
                        </div>
                    </div>
                    <iframe class="w-[300px] h-[220px] xl:w-[320px] xl:h-[260px] mx-[10px] lg:w-[320px] lg:h-[280px] rounded-md shadow-lg shadow-slate-700 xl:ms-[25px] lg:ms-[30px]" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d238.83719213218!2d98.56646962090396!3d16.707127957765767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dd9f80d29339af%3A0xa29807245b60be4f!2sROSE%20IMPORT%20EXPORT%20CO.%2C%20LTD.!5e0!3m2!1sen!2sth!4v1715328899517!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div> 
            <!-- Form -->
            <div class="">
                <div class=" max-w-md space-y-8">
                    <div class="bg-[color:var(--nav-color)] text-white shadow-md w-[320px] lg:w-[380px] xl:w-[420px] rounded-lg p-6">
                        <h2 class="my-3 text-center text-lg xl:text-2xl lg:text-2xl md:text-xl font-semibold tracking-tight ">
                            {{__("Get In Touch With Us") }}
                        </h2>

                        <form class="space-y-6" method="POST">
                            <div>
                                <label for="new-password" class="block text-[13px] xl:text-lg lg:text-[16px] md:text-[12px] sm:text-[12px] font-medium ">{{__("Your Name") }}</label>
                                <div class="mt-1">
                                    <input placeholder="{{ __("Type Your Name") }}" required class="input text-black bg-gray-200 p-1 w-[100%] rounded-md focus:border-none focus:outline-none" />
                                </div>
                            </div>

                            <div>
                                <label class="block text-[13px] xl:text-lg lg:text-[16px] md:text-[12px] sm:text-[12px] font-medium ">{{__("Your Gmail") }}</label>
                                <div class="mt-1">
                                    <input placeholder="{{ __("Type Your Gmail") }}" class="input text-black bg-gray-200 p-1 w-[100%] rounded-md focus:border-none focus:outline-none" />
                                </div>
                            </div>

                            <div>
                                <label class="block text-[13px] xl:text-lg lg:text-[16px] md:text-[12px] sm:text-[12px] font-medium ">{{__("Your Phone") }}</label>
                                <div class="mt-1">
                                    <input placeholder="{{ __("Type Your Number") }}" class="input text-black bg-gray-200 p-1 w-[100%] rounded-md focus:border-none focus:outline-none" />
                                </div>
                            </div>

                            <div>
                                <label for="" class="block text-[13px] xl:text-lg lg:text-[16px] md:text-[12px] sm:text-[12px] font-medium ">{{__("Write a Message") }}</label>
                                <div class="mt-1">
                                    <input placeholder="{{ __("Type a message") }}" class="input text-black bg-gray-200 p-1 w-[100%] rounded-md focus:border-none focus:outline-none" />
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="flex w-full justify-center rounded-md border border-transparent bg-sky-400 py-2 px-4 text-[13px] xl:text-lg lg:text-[16px] md:text-[12px] sm:text-[12px] font-medium text-white shadow-sm hover:bg-opacity-75 focus:outline-none focus:ring-2 focus:ring-sky-400 focus:ring-offset-2">
                                {{__("Send Message") }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- footer -->
    <footer class="w-full h-[80px] lg:h-[90px] xl:h-[90px] bg-[color:var(--nav-color)] text-white lg:mt-[155px] xl:mt-[150px]">
        <div class="flex flex-row  justify-evenly px-[10px]">
            <div class="text-gray-400 text-[9px] w-[300px] xl:w-[300px] sm:text-[12px] lg:text-[16px] xl:text-[16px] mt-[35px]">
                © 2020 Rose. All rights reserved.
            </div>
            <ul class=" py-4 flex flex-row mt-[9px] gap-[10px] sm:gap-[30px] text-white lg:text-[20px] xl:text-[23px] sm:text-[14px] wrapper w-[19rem]">
                <li class="item sm:ms-[35px] ms-[40px] lg:w-[3rem] lg:h-[3rem] xl:ms-[8px] xl:w-[3rem] w-[2rem] xl:h-[3rem] h-[2rem]"><a class="iconic lg:w-[3rem] lg:h-[3rem] xl:w-[3rem] w-[2rem] xl:h-[3rem] h-[2rem]" href="https://www.facebook.com/Rose.imex.2023?mibextid=ZbWKwL"><i class="icon fa-brands fa-facebook"></i></a></li>
                <li class="item lg:w-[3rem] lg:h-[3rem] xl:w-[3rem] w-[2rem] xl:h-[3rem] h-[2rem]"><a class="iconic lg:w-[3rem] lg:h-[3rem] xl:w-[3rem] w-[2rem] xl:h-[3rem] h-[2rem]" href="viber://chat?number=%2B66988017134"><i class="icon fa-brands fa-viber"></i></a></li>
                <li class="item lg:w-[3rem] lg:h-[3rem] xl:w-[3rem] w-[2rem] xl:h-[3rem] h-[2rem]"><a class="iconic lg:w-[3rem] lg:h-[3rem] xl:w-[3rem] w-[2rem] xl:h-[3rem] h-[2rem]" href="line://ti/p/npgmg" target="_blank"><i class="icon fa-brands fa-line"></i></a></li>
            </ul>
        </div>
        </div>
    </footer>


    <script src="/script.js"></script>
</x-layout>