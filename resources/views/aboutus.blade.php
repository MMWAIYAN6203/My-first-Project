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
  <h1 class="text-center sm:text-2xl sm:text-3xl lg:text-4xl">------> About Us <------</h1>
      <!-- who we are -->
      <div class="relative">
        <div class="sm:w-[300px] lg:w-[400px] sm:ms-[50px] md:ms-[110px] lg:ms-[140px] sm:flex sm:flex-col sm:mt-[180px] lg:mt-[250px] justify-between rounded-lg border-solid border-2 border-black bg-black text-white ">
          <h1 class="text-center sm:text-lg lg:text-xl sm:pt-[15px]">Who We Are!</h1>
          <p class="sm:text-[12px] md:text-[13px] lg:text-[16px] text-center p-[25px]">We are Rose Import Export Co.,Ltd who deliver your goods from Thailand's airports and seaports to their destination quickly and without damage.</p>
        </div>
        <img class="absolute inset-0 sm:w-[280px] sm:h-[180px] lg:w-[380px] lg:h-[240px]  rounded-lg shadow-md shadow-black sm:mt-[-110px] lg:mt-[-180px] sm:ms-[320px] md:ms-[380px] lg:ms-[500px]" src="/images/who we are!.avif" alt="">
      </div><br>
      
      <!-- Mission/Vission -->
      <div class="relative z-[-1] flex flex-col w-full items-center mt-[25px]">
        <div>
          <img class="sm:w-[220px] sm:h-[150px] md:w-[250px] md:h-[180px] lg:w-[350x] lg:h-[280px]" src="/images/mission vision.png" alt="mission vision img">
        </div>
        <div class="mySlides fade">
          <div class="flex flex-col sm:gap-4 md:gap-2 lg:gap-3 sm:p-3 lg:p-5 sm:w-[380px] lg:w-[450px] rounded-lg border-double border-4">
            <h1 class="text-center  sm:text-lg md:text-xl lg:text-[30px] lg:mt-[10px]">Mission</h1>
            <p class="sm:text-[12px] md:text-[14px] lg:text-[20px] text-center sm:w-[350px] lg:w-[400px] sm:h-[70px] md:h-[80px] lg:h-[140px] sm:m-auto md:pb-2 lg:mt-[15px]">To provide superior solutions and services helping customers increase productivity and efficiency, reduce downtime and optimize total cost of ownership</p>
          </div>
        </div>
        <div class="mySlides fade">
          <div class="flex flex-col sm:gap-4 md:gap-2 lg:gap-3 sm:p-3 lg:p-5 sm:w-[380px] lg:w-[450px] rounded-lg border-double border-4 ">
            <h1 class="text-center sm:text-lg md:text-xl lg:text-[30px] lg:mt-[10px]">Vision</h1>
            <p class="sm:text-[12px] md:text-[14px] lg:text-[20px] text-center sm:w-[350px] lg:w-[400px] sm:h-[70px] md:h-[80px] lg:h-[140px] sm:m-auto lg:mt-[15px]">Our vision is to create and deliver extraordinary customer value and experience.</p>
          </div>
        </div>
      </div>
      <!-- Trust -->
      <div class="relative">
        <img class="sm:ms-[90px] md:ms-[160px] lg:w-[650px] lg:h-[380px]" src="/images/core.png" alt="">
        <div class="flex flex-col sm:w-[250px] lg:w-[380px] absolute inset-0 text-center sm:ms-[220px] sm:mt-[90px]  md:ms-[290px] lg:ms-[340px]">
        <h1 class="sm:text-lg lg:text-[30px]">Our Core!</h1>
        <p class="sm:text-[12px] lg:text-[18px]">We believe the best partnerships are grounded in proactivity.If you are looking for reliable and fast delivery services, Rose Import Export Co.,Ltd is here</p>
        </div>
      </div>
      <!-- History -->
      <div class="sm:w-[500px] lg:w-[700px] border-solid border-2 m-auto p-4 ">
        <h1 class="text-center sm:text-lg md:text-xl lg:text-[30px]">Our History</h1>
        <div class="sm:text-[12px] md:text-[13px] lg:text-[18px] lg:pt-3">
          <ul>
            <li>✅ We, Rose Export Import Co.,Ltd was established in 2020. For the first time, we delivered some containers from Lanchabang Port to Mae Sot Mae Sot to Myawady smoothly</li>
            <li>✅ There were only 2 warehouses in Yangon and Myawady in 2020.We implemented according to our core and got the customer's satisfaction feedback.</li>
            <li>✅ By 2022, we have expanded to 3 warehouses with one office each in Yangon and Myawady. With the trust of customers, I was able to grow my business and expand to a total of 6 warehouses and a large number of transport trucks. In addition, in 2023, the head office was expanded and built in Mae Sot, Thailand.</li>
            <li>✅ So now, due to my hard work and the trust of you guys, I will be called Rose in the import and export company and have achieved success.</li>
          </ul>
        </div>
      </div><br>
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