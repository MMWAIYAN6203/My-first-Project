<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/style.css" />
    <link rel="stylesheet" href="/blog_design.css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
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

    header {
        background-color: var(--nav-color);
    }

    body {
        background-color: #6a85ee;
    }
</style>
</head>


<body class="font-[Poppins] ">
    <x-navbar />

    {{ $slot }}

    <x-footer />
</body>

</html>
