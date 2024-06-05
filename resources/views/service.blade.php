<x-layout>
    <x-slot:title>
        {{ __("Services") }}
    </x-slot:title>

    <div>
        <img class="w-full h-[30vh] md:w-full md:h-[50vh] lg:w-full lg:h-[50vh] xl:w-full xl:h-[65vh] object-fill rounded-b-lg shadow-md shadow-black " src="/images/logistic.jpg" alt="">
        <h1 class="text-xl xl:text-[36px] lg:text-[2.6rem] md:text-[2rem] text-center my-[30px] font-semibold">{{ __("Our Services") }}</h1>
    </div>
    <!-- Transit -->
    <div class="mt-[80px] mb-[60px]  p-[0px] relative ">
        <div class="card-container1 w-[250px] h-[220px] ms-[5px] xl:w-[550px] xl:h-[400px] xl:ms-[255px] lg:w-[400px] lg:h-[350px] lg:ms-[160px] md:w-[300px] md:h-[250px] md:ms-[120px] sm:w-[] sm:h-[]">
            <div class="card1 ">
                <div class="img-content1">
                    <h1 class="transportation text-center text-[10px] xl:text-2xl lg:text-lg md:text-md font-semibold">{{ __("Transit Container service") }}</h1>
                </div>
                <div class="content1 w-full">
                    <p class="heading1 w-full leading-4 xl:leading-9  lg:leading-6  md:leading-5 text-[9px] xl:text-lg lg:text-lg md:text-[12px] sm:text-[12px] pt-2">
                        {{ __("Cruise through seamless transit container services with us! Our comprehensive solutions ensure your cargo moves swiftly and securely from point A (where u want) to point B (where u want), whether it's a brief stopover or a multi-leg journey. With our expert handling and global network of partners, your shipments are in safe hands, ensuring timely delivery and peace of mind every step of the way.") }}
                    </p>
                </div>
            </div>
            
        </div>
        <img class=" w-[250px] h-[220px] xl:w-[550px] xl:h-[400px] lg:w-[400px] lg:h-[350px] md:w-[300px] md:h-[250px] object-fill rounded-xl ms-[] xl:ms-[650px] xl:mt-[300px] lg:ms-[450px] lg:mt-[250px]  md:ms-[340px] md:mt-[150px] ms-[120px] mt-[150px] absolute inset-0 z-[-1]" src="/images/Transit_container.jpg" alt="">
    </div>
    <!-- custom clearance -->
    <div class="flex flex-row gap-3 md:gap-4 lg:gap-4 xl:gap-4 mx-[3px]  xl:mt-[380px]  lg:mt-[320px]  md:mt-[260px] mt-[200px]"> 
        <img class="object-fill w-[150px] h-[150px] lg:w-[285px] lg:h-[285px] lg:ms-[90px] md:w-[250px] md:h-[250px] md:ms-[30px] xl:w-[320px] xl:h-[320px] xl:ms-[280px]" src="/images/custom-clearance.jpg" alt="img of clearance">
        <div class="xl:mt-[45px] xl:w-[550px] lg:mt-[50px] lg:w-[550px] md:mt-[40px] md:w-[450px] w-[280px] mt-[0]">
            <h1 class="text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl font-semibold">{{ __("Custom Clearance Service") }}</h1>
            <p class="text-[8px] xl:text-lg lg:text-lg leading-4 xl:leading-9 lg:leading-8 md:leading-6 md:text-[12px] sm:text-[12px] my-3  ">{{ __("Leave the hassle behind and entrust your cargo clearance to our seasoned professionals! Start your journey with us today, and we'll promptly initiate the clearance process on your behalf. Our knowledgeable agents will guide you through the necessary documentation needed to proceed smoothly.") }}</p>
        </div>
    </div>
    <!-- Import/Export -->
    <div class="flex flex-row justify-evenly">
        <div class="flex flex-col gap-[60px] my-[50px] md:my-[60px] lg:my-[60px] xl:my-[60px]">
            <div class="card2 w-[300px] h-[180px] sm:w-[360px] sm:h-[200px] md:w-[400px] md:h-[220px] lg:w-[450px] lg:h-[380px] xl:w-[550px] xl:h-[345px] ">
                <div class="content2 p-[20px] text-black sm:p-[30px] md:p-[20px] lg:p-[25px] xl:p-[36px] w-full h-full">
                    <h1 class="text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl font-semibold">{{__("Import Service !") }}</h1>
                    <p class="para {{ app()->getLocale() == 'thai' ? 'large-font' : 'normal-font' }} font-medium mt-[-10px] leading-4 xl:leading-9 lg:leading-8 md:leading-6 xl:text-lg lg:text-lg md:text-[12px] sm:text-[12px]">
                        {{ __("Whether you're importing small parcels or full container loads, our dedicated team is equipped to handle your cargo needs seamlessly from origin to destination. No matter the size or complexity, trust our professionals to navigate the logistics process efficiently, ensuring your goods reach their destination hassle-free.") }}
                    </p>
                </div>
            </div>
            <div class="card2 w-[300px] h-[230px] sm:w-[360px] sm:h-[250px] md:w-[400px] md:h-[270px] lg:w-[450px] lg:h-[450px] xl:w-[550px] xl:h-[450px]">
                <div class="content2 p-[20px] text-black sm:p-[30px] md:p-[20px] lg:p-[25px] xl:p-[36px] w-full h-full">
                    <h1 class="text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl font-semibold">{{__("Export Service !") }}</h1>
                    <p class="para {{ app()->getLocale() == 'thai' ? 'large-font' : 'normal-font' }} font-medium mt-[-10px] leading-4 xl:leading-9 lg:leading-8 md:leading-6 xl:text-lg lg:text-[16px] md:text-[12px] sm:text-[12px]">
                        {{ __("Unlock the global marketplace with our tailored export services designed to elevate your business to new heights. From meticulous documentation to strategic logistics planning, we handle every aspect of your export journey with precision and care. Our experienced team ensures seamless operations, allowing you to focus on what you do best – growing your business. Whether you're shipping small parcels or large-scale cargo, trust us to deliver excellence every step of the way.") }}
                    </p>
                </div>
            </div>
        </div>
        <!-- <img class="object-fill w-[27vh] h-[94vh] xl:w-[80vh] xl:h-[136vh] lg:w-[55vh] lg:h-[90vh] md:w-[50vh] md:h-[110vh]  xl:mt-[70px] lg:mt-[80px] md:mt-[61px] mt-[50px]" src="/images/import_export.jpg" alt=""> -->
    </div>

    <!-- Warehouse service -->
    <div class="relative">
        <img class="xl:mx-[250px] xl:mt-[280px] lg:mx-[85px] lg:mt-[250px] md:mx-[30px] md:mt-[250px] mx-[17px] mt-[230px] rounded-xl w-[250px] h-[220px] xl:w-[550px] xl:h-[450px] lg:w-[490px] lg:h-[390px] md:w-[430px] md:h-[320px] " src="/images/warehouse.jpg" alt="">
        <div class="card3 xl:ms-[650px] xl:mt-[-280px] lg:ms-[455px] lg:mt-[-250px] md:ms-[335px] md:mt-[-250px] mx-[95px] mt-[-230px] absolute inset-0 z-[2] w-[270px] h-[250px] xl:w-[550px] xl:h-[450px] lg:w-[490px] lg:h-[390px] md:w-[400px] md:h-[350px] text-white">
            <h1 class="xl:text-2xl lg:text-2xl md:text-2xl sm:text-xl py-[15px] sm:py-[10px] md:py-[15px] lg:py-[15px] xl:pt-[25px] text-center font-semibold">{{__("Warehouse Service !") }}</h1>
            <p class="{{ app()->getLocale() == 'thai' ? 'large-font' : 'normal-font' }} leading-4 xl:leading-9 lg:leading-7 md:leading-7 text-[8px] xl:text-[16px] lg:text-lg md:text-[11px]  text-center xl:w-full xl:px-[15px] lg:w-full lg:px-[20px] md:w-full md:px-[10px] w-full p-[5px]">{{ __('Efficient warehouse services are crucial for a successful supply chain, providing secure storage, inventory management, and seamless distribution. They optimize space, ensure timely order fulfillment, and accurately track inventory, reducing costs and boosting customer satisfaction. Utilizing advanced technologies like barcode scanning, RFID, and warehouse management systems (WMS), businesses achieve higher accuracy and efficiency, ensuring products are always available and promptly delivered.') }}</p>
        </div>
    </div><br><br>
    <script src="/script.js"></script>
</x-layout>