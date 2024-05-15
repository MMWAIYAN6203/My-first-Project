<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/style.css" />

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
    <!-- title -->
    <h1 class="text-center sm:text-xl lg:text-3xl ">--------> Contact For Any Assist <-------- </h1>
            <!-- address box -->
            <div class="lg:flex lg:flex-row  mt-[60px]">
                <div class=" sm:w-[300px] lg:w-[350px] sm:m-auto rounded-lg border-solid border-2 border-indigo-600 bg-black text-white">
                    <div class="w-full py-4">
                        <h1 class="sm:text-lg md:text-lg lg:text-2xl text-center ">Our Address</h1><br>
                        <div class="flex flex-col gap-1 sm:text-[12px] lg:text-[14px] sm:ms-3 lg:ms-[25px]">
                            <span><i class="fa-solid fa-location-dot me-3"></i>1/53 Buacoon Road, Mae Sot District,</span>
                            <span class="sm:ms-[23px]">Tak 63110 Thailand</span>
                            <span><i class="fa-solid fa-phone me-3"></i>082-149-9251</span>
                            <span><i class="fa-regular fa-envelope me-3"></i>rose.imex.2023@gamil.com</span>
                        </div>
                    </div>
                    <iframe class="sm:w-[260px] sm:h-[200px] lg:w-[320px] lg:h-[280px] rounded-md shadow-lg shadow-slate-700 m-auto sm:mb-3" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d238.83719213218!2d98.56646962090396!3d16.707127957765767!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30dd9f80d29339af%3A0xa29807245b60be4f!2sROSE%20IMPORT%20EXPORT%20CO.%2C%20LTD.!5e0!3m2!1sen!2sth!4v1715328899517!5m2!1sen!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><br>
                <!-- form -->
                <div class="sm:w-[300px] md:w-[300px] lg:w-[350px] sm:m-auto md:m-auto lg:rounded-lg lg:border-solid lg:border-2 lg:border-indigo-600">
                    <div class="text-center sm:text-xl mt-4">
                        <h1>Get In Touch With Us</h1>
                    </div><br>
                    <div class="flex justify-center items-center">
                        <form action="" class=" w-full space-y-5 p-[10px] bg-gray-500 rounded-lg shadow-lg shadow-slate-700 box-border">

                            <div><label for="" class="block">Your Name</label>
                                <input class="bg-gray-200 p-1 w-[100%] rounded-md focus:border-none focus:outline-none" type="text">
                            </div>
                            <div><label for="" class="block">Your Gmail</label>
                                <input class="bg-gray-200 p-1 w-[100%] rounded-md focus:border-none focus:outline-none" type="text">
                            </div>
                            <div><label for="" class="block">Your Phone</label>
                                <input class="bg-gray-200 p-1 w-[100%] rounded-md focus:border-none focus:outline-none" type="text">
                            </div>
                            <div><label for="" class="block">Write a message</label>
                                <input class="bg-gray-200 p-1 w-[100%]  rounded-md focus:border-none focus:outline-none" type="text">
                            </div>

                            <button class="block bg-red-500 w-[100%] p-2 hover:cursor-pointer hover:bg-blue-200 ">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <br>
            <!-- footer -->
            <footer class="w-full h-[80px] bg-black text-white lg:mt-[120px]">
                <div class="flex justify-between mx-10">
                    <div class="text-white sm:text-[12px] mt-[30px]">
                        © 2020 Rose. All rights reserved.
                    </div>
                    <div class="px-7 flex sm:gap-[30px] text-white mt-[30px] sm:text-xl">
                        <i class="fa-brands fa-square-facebook hover:cursor-pointer hover:text-red-400"></i>
                        <i class="fa-brands fa-twitter hover:cursor-pointer hover:text-red-400"></i>
                        <i class="fa-brands fa-square-pinterest hover:cursor-pointer hover:text-red-400"></i>
                        <i class="fa-brands fa-instagram hover:cursor-pointer hover:text-red-400"></i>
                    </div>
                </div>
                </div>
            </footer>



            <script src="/script.js"></script>
</body>