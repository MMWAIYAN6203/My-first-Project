<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/blog_design.css" />
    <link class="rounded-full" rel="stylesheet" href="/style.css" />
    <!-- Link Swiper's CSS -->
    <link rel="icon" href="/images/Rose logo.jpg">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    @vite('resources/css/app.css')
    <title>{{ $title ? "Rose | $title" : 'Rose' }}</title>
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

        .no-tailwindcss-base h1 {
            font-size: 25px;
            line-height: 2.1rem;
        }

        .no-tailwindcss-base h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: revert;
            font-weight: revert;
            margin: revert;
        }

        .no-tailwindcss-base p {
            font-size: 18px;
            line-height: 2.1rem;
        }

        .no-tailwindcss-base ul,
        .no-tailwindcss-base ol {
            list-style: revert;
            margin: revert;
            padding: revert;
        }

        /* always center the embed iframe in blog body  */
        .no-tailwindcss-base iframe {
            margin: 10px auto;
        }

        @media only screen and (max-width: 600px) {
            .no-tailwindcss-base iframe {
                width: 350px;
                height: 200px;
            }
        }

        header {
            background-color: var(--nav-color);
        }

        body {
            background-color: whitesmoke;
        }
        
    </style>
</head>


<body class="font-[Poppins] ">
    <x-navbar />

    {{ $slot }}

    @if (!request()->routeIs('contactus'))
        <x-footer />
    @endif
</body>

</html>
