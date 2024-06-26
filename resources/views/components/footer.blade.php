

<footer class="w-full h-[340px] md:h-[240px] lg:h-[270px]  xl:h-[260px] xl:mt-[100px] bg-[color:var(--nav-color)] text-white">
    <div class="flex flex-col items-center sm:flex sm:flex-row sm:justify-evenly md:flex md:flex-row md:justify-between lg:flex lg:flex-row lg:justify-between">


        <div class="flex flex-col gap-3 sm:px-[20px]">
            <a href="/">
                <img class="object-fill rounded-full w-[70px] h-[70px] mt-[20px]" src="/images/Rose logo.jpg" alt="">
            </a>


            <div class="flex flex-col gap-1 text-[11px] sm:text-[11px] md:text-[14px] lg:text-[16px] xl:text-[16px] text-gray-400 leading-6">
                <span><i class="fa-solid fa-location-dot me-3"></i>{{__ ("1/53 Buakoon Road, Mae Sot District,Tak 63110,Thailand") }}</span>

                <span><i class="fa-solid fa-phone me-3"></i>+66-82-149-9251 , +66-98-801-7134</span>
                <span><i class="fa-regular fa-envelope me-3"></i>rose.imex.2023@gmail.com</span>
            </div>
            <ul class="flex gap-4 text-[10px] md:text-[12px] xl:text-[18px] lg:text-[16px]">
            <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === '/' ? 'text-[var(--hover-color)]' : 'text-white' }}" href="/">{{__("Home") }}</a>
                    </li>
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'blog' ? 'text-[var(--hover-color)]' : 'text-white' }}" href="/blog">{{__("Blog") }}</a>
                    </li>
                    {{-- <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'team' ? 'text-[var(--hover-color)]' : 'text-white' }}"
                    href="/team">Team</a>
                    </li> --}}
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'service' ? 'text-[var(--hover-color)]' : 'text-white' }}" href="/service">{{__("Services") }}</a>
                    </li>
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'aboutus' ? 'text-[var(--hover-color)]' : 'text-white' }}" href="aboutus">{{__("About") }}</a>
                    </li>
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'contactus' ? 'text-[var(--hover-color)]' : 'text-white' }}" href="/contactus">{{__("Contact Us") }}</a>
                    </li>
            </ul>
        </div>
        <div class=" mt-[20px] xl:mt-[90px] sm:mt-[71px]">

            <ul class="xl:ms-[50px]  flex gap-[20px] sm:gap-[10px] lg:text-[20px] xl:text-[23px] sm:text-[14px] wrapper w-[19rem]">
                <li class="item sm:ms-[35px] ms-[60px] md:ms-[62px] lg:ms-[65px] xl:ms-[38px] w-[3rem] h-[3rem]"><a class="iconic w-[3rem] h-[3rem]" href="https://www.facebook.com/Rose.imex.2023?mibextid=ZbWKwL"><i class="icon fa-brands fa-facebook"></i></a></li>
                <li class="item w-[3rem] h-[3rem]"><a class="iconic w-[3rem] h-[3rem]" href="viber://chat?number=%2B66988017134"><i class="icon fa-brands fa-viber"></i></a></li>
                <li class="item w-[3rem] h-[3rem]"><a class="iconic w-[3rem] h-[3rem]" href="line://ti/p/npgmg"><i class="icon fa-brands fa-line"></i></a></li>
            </ul>
            <br />
            <div class="text-gray-400 text-center text-[10px] xl:text-[16px] sm:text-[12px] md:text-[12px] lg:text-[14px] sm:ms-[-10px]">


                © 2020 Rose. All rights reserved.
            </div>
        </div>
    </div>
</footer>

