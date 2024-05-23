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
                    <a class="hover:[color:var(--hover-color)]" href="/">Home</a>
                </li>
                <li class="">
                    <a class="hover:[color:var(--hover-color)]" href="/blog">Blog</a>
                </li>
                <li class="">
                    <a class="hover:[color:var(--hover-color)]" href="/service">Services</a>
                </li>
                <li class="">
                    <a class="hover:[color:var(--hover-color)]" href="aboutus">About</a>
                </li>
                <li class="">
                    <a class="hover:[color:var(--hover-color)]" href="/contactus">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="flex items-center gap-6">
            <i
                class="fa-solid fa-magnifying-glass text-black bg-[#6a85ee] p-[7px] mb-px rounded text-[14px] inline-block"></i>
            <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
        </div>
</header>

<script>
    const navLinks = document.querySelector('.nav-links')

    function onToggleMenu(e) {
        e.name = e.name === 'menu' ? 'close' : 'menu'
        navLinks.classList.toggle('top-[9%]')
    }
</script>
