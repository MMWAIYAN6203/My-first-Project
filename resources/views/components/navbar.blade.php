<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>project1</title>
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="/blog_design.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    :root {
  --nav-color: #07182e;
  --card-color: #0a3cff;
  --logo-color: #55c9ed;
  --hover-color: #6a85ee;
}
header{
    background-color: var(--nav-color);
}
body{
    background-color: #6a85ee;
}
</style>
</head>


<body class="font-[Poppins] ">
    <header class="bg-[color:var(--nav-color)] h-[80px]">
        <nav class="flex justify-between items-center w-[92%] py-[20px] mx-auto">
            <div>
                <a href="#">
                    <Span class="text-4xl text-[color:var(--logo-color)]">ROSE</Span>
                </a>
            </div>
            <div
            class="nav-links duration-500 md:static absolute bg-[color:var(--nav-color)] md:min-h-fit min-h-full z-[5] left-0 top-[-100%] md:w-auto  w-full flex items-center px-5">
            <ul class="flex md:flex-row flex-col m-auto md:items-center md:gap-[4vw] gap-8 text-[20px]">
                    <li>
                        <a class="hover:[color:var(--hover-color)]" href="/">Home</a>
                    </li>
                    <li>
                        <a class="hover:[color:var(--hover-color)]" href="/blog">Blog</a>
                    </li>
                    <li>
                        <a class="hover:[color:var(--hover-color)]" href="/service">Services</a>
                    </li>
                    <li>
                        <a class="hover:[color:var(--hover-color)]" href="aboutus">About</a>
                    </li>
                    <li>
                        <a class="hover:[color:var(--hover-color)]" href="/contactus">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="flex items-center gap-6">
            <i class="fa-solid fa-magnifying-glass text-black bg-[#6a85ee] p-[7px] mb-px rounded text-[14px] inline-block"></i>
                <ion-icon onclick="onToggleMenu(this)" name="menu" class="text-3xl cursor-pointer md:hidden"></ion-icon>
            </div>
    </header>



    <script>
        const navLinks = document.querySelector('.nav-links')
        function onToggleMenu(e){
            e.name = e.name === 'menu' ? 'close' : 'menu'
            navLinks.classList.toggle('top-[9%]')
        }
    </script>
</body>



   