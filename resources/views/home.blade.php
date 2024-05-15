<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="/style.css" />
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
    <!-- Hero Section -->
    <div class="relative z-[-1]">

        <div class="mySlides fade">
            <img class="w-full sm:h-[400px] md:h-[400px] lg:h-[550px]" src="/images/hero1.webp">
            <div class="flex flex-col gap-4 sm:w-[380px] lg:w-[600px] ">
                <div class="sm:text-lg md:text-lg lg:text-3xl z-[1] sm:w-[300px] lg:w-[500px] sm:ms-[80px] md:ms-[120px] lg:ms-[100px] sm:mt-[-300px] md:mt-[-300px] lg:mt-[-400px]">"We warmly welcome you to work with us,for timly fast and reliable trading"</div>
                <a class="sm:text-lg md:text-lg lg:text-xl z-[1] sm:ms-[170px] md:ms-[210px] lg:ms-[265px] rounded-full bg-slate-300 p-1 sm:w-[120px] md:w-[120px] lg:w-[150px] sm:ps-3 md:ps-3 lg:ps-5 " href="/contactus">Contact Us</a>
            </div>

        </div>

        <div class="mySlides fade">
            <img class="w-full sm:h-[400px] md:h-[400px] lg:h-[550px]" src="/images/hero2.jpg">
            <div class="flex flex-col gap-3 sm:w-[550px] lg:w-[850px] ">
                <div class="sm:text-lg md:text-lg lg:text-3xl z-[1] sm:w-[550px] lg:w-[800px] sm:ms-[35px] md:ms-[70px] sm:mt-[-300px] md:mt-[-300px] lg:mt-[-400px]">"We invite you to work with ROSE IMPORT EXPORT COMPANY LIMITED, which always provides the best services"</div>
                <a class="sm:text-lg md:text-lg lg:text-xl z-[1] sm:mx-auto md:ms-[253px] lg:ms-[400px] rounded-full bg-slate-300 p-1 sm:w-[120px] md:w-[120px] lg:w-[150px] sm:ps-3 md:ps-3 lg:ps-5 " href="/contactus">Contact Us</a>
            </div>
        </div>
    </div>
    <!-- Blog Intro -->
    <div class="">
        <h1 class="lg:ms-[] md:ms-[] sm:ms-[] my-8 text-gray-700 sm:text-4xl md:text-5xl lg:text-6xl text-center">
            Recently Updated Blogs
        </h1>
        <a href="/blog" class="rounded-md border border-solid border-black lg:ms-[850px] md:ms-[650px] sm:ms-[550px] h-[25px] w-[75px] m-auto pt-[1px] text-center hover:bg-black hover:text-red-400">
            See All
        </a>
    </div>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <section class="hero-section">
        <div class="card-grid">
            <a class="card" href="/blog_detail">
                <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557177324-56c542165309?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80)"></div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Example Card Heading</h3>
                </div>
            </a>
            <a class="card" href="/blog_detail">
                <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Example Card Heading</h3>
                </div>
            </a>
            <a class="card" href="/blog_detail">
                <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Example Card Heading</h3>
                </div>
            </a>
            <a class="card" href="/blog_detail">
                <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
                <div class="card__content">
                    <p class="card__category">Category</p>
                    <h3 class="card__heading">Example Card Heading</h3>
                </div>
            </a>
            <div>
    </section>

    <!-- Service Intro -->
    <h1 class="mx-12 my-10 text-gray-700 sm:text-4xl md:text-5xl lg:text-6xl text-center">
        Our Services
    </h1>
    <div class="flex items-center flex-col gap-3">
        <img class="sm:h-[150px] sm:w-[150px] lg:h-[300px] lg:w-[300px] rounded-full" src="/images/truck-for service.avif" alt="">
        <div class="flex flex-col lg:gap-3 sm:gap-2">
            <h3 class="sm:text-xl md:text-3xl lg:text-4xl text-center">Transpotation Service</h3>
            <p class="lg:w-[400px] md:w-[400px] sm:w-[300px] text-center sm:text-md md:text-lg lg:text-xl">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat sunt quaerat officia ipsum ullam! Ad odio, eligendi, fugiat nisi laborum mollitia, perspiciatis incidunt officia earum eaque totam impedit blanditiis pariatur?
            </p>
            <a href="/service" class="mt-4 mb-2 m-auto bg-teal-400 rounded-full px-12 py-1 text-gray-100 font-semibold hover:bg-teal-300 focus:outline-none">More detail</a>

        </div>
    </div>

    <!-- About intro -->
    <h1 class="mx-12 my-10 text-gray-700 sm:text-4xl md:text-5xl lg:text-6xl text-center ">
        About ROSE
    </h1>
    <div class="flex flex-row lg:gap-4 sm w-full justify-center lg:text-lg">
        <img class="sm:w-[320px] sm:h-[320px] sm:p-[20px]" src="/images/Rose Pf1.jpg" alt="">
        <div class="sm:mt-[50px] sm:w-[300px] lg:w-[400px] lg:mt-[100px]">
            <p>We are Rose Import Export Co.,Ltd who deliver your goods from Thailand's airports and seaports to their destination quickly and without damage.</p>
            <br>
            <a href="/aboutus"> >>--Read More--<< </a>
        </div>
    </div>

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

</html>