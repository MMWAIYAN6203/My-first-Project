<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/blog_design.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-slate-550 leading-normal tracking-wide">
    <!-- navbar -->
    <header class="bg-slate-500">
        <nav class="flex justify-between items-center w-[92%] mx-auto ">
            <div>
                <a href="#">
                    <Span class="text-3xl text-cyan-950">ROSE</Span>
                </a>
            </div>
            <div class="item md:static absolute  md:min-h-fit min-h-[60vh] left-0 top-[-100%] md:w-auto w-full sm:text-[20px] lg:text-[20px] md:text-[20px] flex items-center px-5 transition-all duration 600">
                <ul class="flex z-[2] md:flex-row flex-col md:item-center md:gap-[4vw] gap-8">
                    <li>
                        <a class="hover:text-gray-600" href="/">Home</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-600" href="/blog">Blog</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-600" href="/service">Service</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-600" href="aboutus">About</a>
                    </li>
                    <li>
                        <a class="hover:text-gray-600 md:hidden lg:hidden" href="/contactus">Contact Us</a>
                    </li>
                </ul>

            </div>
            <div class="overlay bg-white opacity-[0] z-[1] invisible fixed top-0 right-0 bottom-0 left-0 transition-all duration 500">
            </div>
            <div class="flex items-center gap-6">
                <i class="fa-solid fa-magnifying-glass bg-[#f3f4f6] p-[7px] mb-px rounded text-sm inline-block"></i>
                <i class="fa-solid fa-bars bars text-3xl hover:cursor-pointer md:hidden"></i>
            </div>
        </nav>
    </header>
   
    <!-- footer -->
    <footer class="w-full lg:h-[220px] sm:h-[190px] bg-black text-white">
        <div class="flex justify-around">
            <div class="flex flex-col gap-3">
                <a class="text-2xl mt-[20px]" href="#">
                    <p>ROSE</p>
                </a>

                <div class="flex flex-col gap-1 sm:text-[12px] lg:text-[16px]">
                    <span><i class="fa-solid fa-location-dot me-3"></i>1/53 Buakoon Road, Mae Sot District,Tak 63110 Thailand</span>
                    <span><i class="fa-solid fa-phone me-3"></i>082-149-9251</span>
                    <span><i class="fa-regular fa-envelope me-3"></i>rose.imex.2023@gamil.com</span>
                </div>
                <div class="flex gap-5 text-[12px] lg:text-[16px]">
                    <div class="hover:cursor-pointer hover:text-red-400">Home</div>
                    <div class="hover:cursor-pointer hover:text-red-400">About</div>
                    <div class="hover:cursor-pointer hover:text-red-400">Contact</div>
                    <div class="hover:cursor-pointer hover:text-red-400">Service</div>
                    <div class="hover:cursor-pointer hover:text-red-400">Blog</div>
                </div>
            </div>
            <div class="sm:mt-[100px] lg:mt-[113px]">

                <div class="sm:px-7 lg:ms-5 flex gap-[20px] text-white lg:text-[20px]">
                    <i class="fa-brands fa-square-facebook hover:cursor-pointer hover:text-red-400"></i>
                    <i class="fa-brands fa-twitter hover:cursor-pointer hover:text-red-400"></i>
                    <i class="fa-brands fa-square-pinterest hover:cursor-pointer hover:text-red-400"></i>
                    <i class="fa-brands fa-instagram hover:cursor-pointer hover:text-red-400"></i>
                </div>
                <br />
                <div class="text-white text-[10px] lg:text-[14px]">
                    © 2020 Rose. All rights reserved.
                </div>
            </div>
        </div>
    </footer>
    <script src="/script.js"></script>
</body>