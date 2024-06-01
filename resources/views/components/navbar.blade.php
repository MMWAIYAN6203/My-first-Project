<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>project1</title>
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="/blog_design.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        :root {
            --nav-color: #07182e;
            --card-color: #0a3cff;
            --logo-color: #55c9ed;
            --hover-color: #6a85ee;
        }

        header {
            background-color: var(--nav-color);
        }

        body {
            background-color: #6a85ee;
            position: relative;
            height: 100%;
        }
    </style>
</head>


<body class="font-[Poppins] ">
    <header class="bg-[color:var(--nav-color)] h-[80px]">
        <nav class="flex justify-between items-center w-full xl:px-[40px] sm:px-[30px] md:px-[20px] py-[20px] mx-auto">
            <div>
                <a href="/">
                    <Span class="text-4xl text-[color:var(--logo-color)] font-semibold">ROSE</Span>
                </a>
            </div>
            <div
                class="nav-links my duration-500 md:static fixed bg-[color:var(--nav-color)] z-[4] md:min-h-fit min-h-full left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
                <ul class="text-white flex md:flex-row flex-col m-auto md:items-center md:gap-[4vw] gap-8 text-[20px]">
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === '/' ? 'text-[var(--hover-color)]' : 'text-white' }}"
                            href="/">Home</a>
                    </li>
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'blog' ? 'text-[var(--hover-color)]' : 'text-white' }}"
                            href="/blog">Blog</a>
                    </li>
                    {{-- <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'team' ? 'text-[var(--hover-color)]' : 'text-white' }}"
                            href="/team">Team</a>
                    </li> --}}
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'service' ? 'text-[var(--hover-color)]' : 'text-white' }}"
                            href="/service">Services</a>
                    </li>
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'aboutus' ? 'text-[var(--hover-color)]' : 'text-white' }}"
                            href="aboutus">About</a>
                    </li>
                    <li class="">
                        <a class="hover:[color:var(--hover-color)] {{ request()->route()->uri === 'contactus' ? 'text-[var(--hover-color)]' : 'text-white' }}"
                            href="/contactus">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
                <div id='localSelector'
                    class="text-white relative md:py-5 md:px-7 py-4 px-5 rounded-lg bg-[#6A85EE] cursor-pointer">
                    <div class='flex items-center gap-4'>
                        <span class="select-none">Language</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                        <ion-icon onclick="onToggleMenu(this)" name="menu"
                            class="text-3xl cursor-pointer md:hidden"></ion-icon>
                    </div>
                </div>
                <div id='localList' class="text-white absolute top-[103%] left-0 bg-[#07182E] w-full hidden">
                    <form action="{{ route('localization') }}" method="POST" class="">
                        @csrf
                        <div class='flex items-center gap-2 px-3 border-b border-gray-800'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <path fill="#282646" d="M1 11H31V21H1z"></path>
                                <path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#992532"></path>
                                <path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z"
                                    transform="rotate(180 16 24)" fill="#992532"></path>
                                <path fill="#fff" d="M1 9H31V12H1z"></path>
                                <path fill="#fff" d="M1 20H31V23H1z"></path>
                                <path
                                    d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                    opacity=".15"></path>
                                <path
                                    d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                    fill="#fff" opacity=".2"></path>
                            </svg>
                            <input type='submit' name='locale' value="Thai"
                                class='hover:opacity-[0.8] w-full text-left px-3 py-4 block' />
                        </div>
                        <div class='flex items-center gap-2 px-3 border-b border-gray-800'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
                                <rect x="1" y="4" width="30" height="24" rx="4" ry="4"
                                    fill="#fff"></rect>
                                <path
                                    d="M1.638,5.846H30.362c-.711-1.108-1.947-1.846-3.362-1.846H5c-1.414,0-2.65,.738-3.362,1.846Z"
                                    fill="#a62842"></path>
                                <path
                                    d="M2.03,7.692c-.008,.103-.03,.202-.03,.308v1.539H31v-1.539c0-.105-.022-.204-.03-.308H2.03Z"
                                    fill="#a62842"></path>
                                <path fill="#a62842" d="M2 11.385H31V13.231H2z"></path>
                                <path fill="#a62842" d="M2 15.077H31V16.923000000000002H2z"></path>
                                <path fill="#a62842" d="M1 18.769H31V20.615H1z"></path>
                                <path
                                    d="M1,24c0,.105,.023,.204,.031,.308H30.969c.008-.103,.031-.202,.031-.308v-1.539H1v1.539Z"
                                    fill="#a62842"></path>
                                <path
                                    d="M30.362,26.154H1.638c.711,1.108,1.947,1.846,3.362,1.846H27c1.414,0,2.65-.738,3.362-1.846Z"
                                    fill="#a62842"></path>
                                <path d="M5,4h11v12.923H1V8c0-2.208,1.792-4,4-4Z" fill="#102d5e"></path>
                                <path
                                    d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                    opacity=".15"></path>
                                <path
                                    d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                    fill="#fff" opacity=".2"></path>
                                <path fill="#fff"
                                    d="M4.601 7.463L5.193 7.033 4.462 7.033 4.236 6.338 4.01 7.033 3.279 7.033 3.87 7.463 3.644 8.158 4.236 7.729 4.827 8.158 4.601 7.463z">
                                </path>
                                <path fill="#fff"
                                    d="M7.58 7.463L8.172 7.033 7.441 7.033 7.215 6.338 6.989 7.033 6.258 7.033 6.849 7.463 6.623 8.158 7.215 7.729 7.806 8.158 7.58 7.463z">
                                </path>
                                <path fill="#fff"
                                    d="M10.56 7.463L11.151 7.033 10.42 7.033 10.194 6.338 9.968 7.033 9.237 7.033 9.828 7.463 9.603 8.158 10.194 7.729 10.785 8.158 10.56 7.463z">
                                </path>
                                <path fill="#fff"
                                    d="M6.066 9.283L6.658 8.854 5.927 8.854 5.701 8.158 5.475 8.854 4.744 8.854 5.335 9.283 5.109 9.979 5.701 9.549 6.292 9.979 6.066 9.283z">
                                </path>
                                <path fill="#fff"
                                    d="M9.046 9.283L9.637 8.854 8.906 8.854 8.68 8.158 8.454 8.854 7.723 8.854 8.314 9.283 8.089 9.979 8.68 9.549 9.271 9.979 9.046 9.283z">
                                </path>
                                <path fill="#fff"
                                    d="M12.025 9.283L12.616 8.854 11.885 8.854 11.659 8.158 11.433 8.854 10.702 8.854 11.294 9.283 11.068 9.979 11.659 9.549 12.251 9.979 12.025 9.283z">
                                </path>
                                <path fill="#fff"
                                    d="M6.066 12.924L6.658 12.494 5.927 12.494 5.701 11.799 5.475 12.494 4.744 12.494 5.335 12.924 5.109 13.619 5.701 13.19 6.292 13.619 6.066 12.924z">
                                </path>
                                <path fill="#fff"
                                    d="M9.046 12.924L9.637 12.494 8.906 12.494 8.68 11.799 8.454 12.494 7.723 12.494 8.314 12.924 8.089 13.619 8.68 13.19 9.271 13.619 9.046 12.924z">
                                </path>
                                <path fill="#fff"
                                    d="M12.025 12.924L12.616 12.494 11.885 12.494 11.659 11.799 11.433 12.494 10.702 12.494 11.294 12.924 11.068 13.619 11.659 13.19 12.251 13.619 12.025 12.924z">
                                </path>
                                <path fill="#fff"
                                    d="M13.539 7.463L14.13 7.033 13.399 7.033 13.173 6.338 12.947 7.033 12.216 7.033 12.808 7.463 12.582 8.158 13.173 7.729 13.765 8.158 13.539 7.463z">
                                </path>
                                <path fill="#fff"
                                    d="M4.601 11.104L5.193 10.674 4.462 10.674 4.236 9.979 4.01 10.674 3.279 10.674 3.87 11.104 3.644 11.799 4.236 11.369 4.827 11.799 4.601 11.104z">
                                </path>
                                <path fill="#fff"
                                    d="M7.58 11.104L8.172 10.674 7.441 10.674 7.215 9.979 6.989 10.674 6.258 10.674 6.849 11.104 6.623 11.799 7.215 11.369 7.806 11.799 7.58 11.104z">
                                </path>
                                <path fill="#fff"
                                    d="M10.56 11.104L11.151 10.674 10.42 10.674 10.194 9.979 9.968 10.674 9.237 10.674 9.828 11.104 9.603 11.799 10.194 11.369 10.785 11.799 10.56 11.104z">
                                </path>
                                <path fill="#fff"
                                    d="M13.539 11.104L14.13 10.674 13.399 10.674 13.173 9.979 12.947 10.674 12.216 10.674 12.808 11.104 12.582 11.799 13.173 11.369 13.765 11.799 13.539 11.104z">
                                </path>
                                <path fill="#fff"
                                    d="M4.601 14.744L5.193 14.315 4.462 14.315 4.236 13.619 4.01 14.315 3.279 14.315 3.87 14.744 3.644 15.44 4.236 15.01 4.827 15.44 4.601 14.744z">
                                </path>
                                <path fill="#fff"
                                    d="M7.58 14.744L8.172 14.315 7.441 14.315 7.215 13.619 6.989 14.315 6.258 14.315 6.849 14.744 6.623 15.44 7.215 15.01 7.806 15.44 7.58 14.744z">
                                </path>
                                <path fill="#fff"
                                    d="M10.56 14.744L11.151 14.315 10.42 14.315 10.194 13.619 9.968 14.315 9.237 14.315 9.828 14.744 9.603 15.44 10.194 15.01 10.785 15.44 10.56 14.744z">
                                </path>
                                <path fill="#fff"
                                    d="M13.539 14.744L14.13 14.315 13.399 14.315 13.173 13.619 12.947 14.315 12.216 14.315 12.808 14.744 12.582 15.44 13.173 15.01 13.765 15.44 13.539 14.744z">
                                </path>
                            </svg>
                            <input type='submit' name='locale' value="En"
                                class='hover:opacity-[0.8] w-full text-left px-3 py-4 block' />
                        </div>
                        <div class='flex items-center gap-2 px-3 border-b border-gray-800'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                viewBox="0 0 32 32">
                                <path fill="#5cb145" d="M1 11H31V21H1z"></path>
                                <path d="M5,4H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z" fill="#f6ce46">
                                </path>
                                <path d="M5,20H27c2.208,0,4,1.792,4,4v4H1v-4c0-2.208,1.792-4,4-4Z"
                                    transform="rotate(180 16 24)" fill="#d83b3f"></path>
                                <path
                                    d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z"
                                    opacity=".15"></path>
                                <path fill="#fff"
                                    d="M18.578 16.974L22.75 13.943 17.593 13.943 16 9.039 14.407 13.943 9.25 13.943 13.422 16.974 11.828 21.878 16 18.847 20.172 21.878 18.578 16.974z">
                                </path>
                                <path
                                    d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z"
                                    fill="#fff" opacity=".2"></path>
                            </svg>
                            <input type='submit' name='locale' value="MM"
                                class='hover:opacity-[0.8] w-full text-left px-3 py-4 block' />
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <script>
        const navLinks = document.querySelector('.nav-links')

        function onToggleMenu(e) {
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }

        document.querySelector('#localSelector').addEventListener('click', () => {
            document.querySelector('#localList').classList.toggle('hidden')
        })
    </script>
