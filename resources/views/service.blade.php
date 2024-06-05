<x-layout>
    <x-slot:title>
        Services
    </x-slot:title>

    <div>
        <img class="w-full h-[30vh] md:w-full md:h-[50vh] lg:w-full lg:h-[50vh] xl:w-full xl:h-[65vh] object-fill rounded-b-lg shadow-md shadow-black " src="/images/logistic.jpg" alt="">
        <h1 class="text-xl xl:text-[36px] lg:text-[2.6rem] md:text-[2rem] text-center my-[30px] font-semibold">{{ __("Our Services") }}</h1>
    </div>
    <!-- Transit -->
    <div class="my-[50px] mb-[60px]  p-[0px]  ">
        <div class="card-container1 m-auto  w-[35vh] h-[28vh] xl:w-[67vh] xl:h-[35vh] lg:w-[50vh] lg:h-[vh] md:w-[50vh] md:h-[35vh] sm:w-[45vh] sm:h-[35vh]">
            <div class="card1 ">
                <div class="img-content1">
                    <h1 class="transportation text-center text-[10px] xl:text-2xl lg:text-lg md:text-md font-semibold">{{ __("Transit Container service") }}</h1>
                </div>
                <div class="content1 w-full">
                    <p class="heading1 w-full leading-3 xl:leading-6  lg:leading-6  md:leading-5 text-[9px] xl:text-lg lg:text-lg md:text-[12px] sm:text-[12px] pt-2">
                        {{ __("Cruise through seamless transit container services with us! Our comprehensive solutions ensure your cargo moves swiftly and securely from point A (where u want) to point B (where u want), whether it's a brief stopover or a multi-leg journey. With our expert handling and global network of partners, your shipments are in safe hands, ensuring timely delivery and peace of mind every step of the way.") }}
                    </p>
                </div>
            </div>
            
        </div>
        <!-- <img class=" w-[33vh] h-[28vh] xl:w-[67vh] xl:h-[35vh] lg:w-[50vh] lg:h-[vh] md:w-[50vh] md:h-[35vh] sm:w-[45vh] sm:h-[35vh] object-fill rounded-xl ms-[15vh] xl:ms-[47vh] xl:mt-[-35px] lg:ms-[40vh] lg:mt-[-45px]  md:ms-[39vh] mt-[-45px] ms-[20vh]  z-[-1]" src="/images/Transit_container.jpg" alt=""> -->
    </div>
    <!-- custom clearance -->
    <div class="flex flex-row gap-4  mx-[3px]  xl:mx-[32vh]  lg:mx-[5vh]  md:mx-[5vh]">
        <img class="object-fill w-[25vh] h-[25vh] lg:w-[40vh] lg:h-[35vh] md:w-[40vh] md:h-[35vh] xl:w-[60vh] xl:h-[45vh] xl:ms-[5vh]" src="/images/custom-clearance.jpg" alt="img of clearance">
        <div class="xl:mt-[45px] xl:w-[550px] lg:mt-[50px] lg:w-[550px] md:mt-[40px] md:w-[450px]">
            <h1 class="text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl font-semibold">{{ __("Custom Clearance Service") }}</h1>
            <p class="text-[9px] xl:text-lg lg:text-lg leading-4 xl:leading-9 lg:leading-8 md:leading-6 md:text-[12px] sm:text-[12px] my-3  ">{{ __("Leave the hassle behind and entrust your cargo clearance to our seasoned professionals! Start your journey with us today, and we'll promptly initiate the clearance process on your behalf. Our knowledgeable agents will guide you through the necessary documentation needed to proceed smoothly.") }}</p>
        </div>
    </div>
    <!-- Import/Export -->
    <div class="flex flex-row justify-evenly">
        <div class="flex flex-col gap-[60px] my-[50px] md:my-[60px] lg:my-[60px] xl:my-[60px]">
            <div class="card2 w-[28vh] h-[35vh] sm:w-[50vh] md:w-[50vh] md:h-[42vh] lg:w-[55vh] lg:h-[40vh] xl:w-[65vh] xl:h-[55vh] ">
                <div class="content2 p-[20px] text-black sm:p-[30px] md:p-[20px] lg:p-[25px] xl:p-[36px] w-full h-full">
                    <h1 class="text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl font-semibold">{{__("Import Service !") }}</h1>
                    <p class="para {{ app()->getLocale() == 'thai' ? 'large-font' : 'normal-font' }} mt-[-10px] leading-4 xl:leading-9 lg:leading-8 md:leading-6 text-[8px] xl:text-lg lg:text-lg md:text-[12px] sm:text-[12px]">
                        {{ __("Whether you're importing small parcels or full container loads, our dedicated team is equipped to handle your cargo needs seamlessly from origin to destination. No matter the size or complexity, trust our professionals to navigate the logistics process efficiently, ensuring your goods reach their destination hassle-free.") }}
                    </p>
                </div>
            </div>
            <div class="card2 w-[28vh] h-[50vh] sm:w-[50vh] sm:h-[50vh] md:w-[50vh] md:h-[54vh] lg:w-[55vh] lg:h-[48vh] xl:w-[65vh] xl:h-[75vh]">
                <div class="content2 p-[20px] text-black sm:p-[30px] md:p-[20px] lg:p-[25px] xl:p-[36px] w-full h-full">
                    <h1 class="text-md xl:text-2xl lg:text-2xl md:text-xl sm:text-xl font-semibold">{{__("Export Service !") }}</h1>
                    <p class="para {{ app()->getLocale() == 'thai' ? 'large-font' : 'normal-font' }} mt-[-10px] leading-4 xl:leading-9 lg:leading-8 md:leading-6 text-[8px] xl:text-lg lg:text-[16px] md:text-[12px] sm:text-[12px]">
                        {{ __("Unlock the global marketplace with our tailored export services designed to elevate your business to new heights. From meticulous documentation to strategic logistics planning, we handle every aspect of your export journey with precision and care. Our experienced team ensures seamless operations, allowing you to focus on what you do best – growing your business. Whether you're shipping small parcels or large-scale cargo, trust us to deliver excellence every step of the way.") }}
                    </p>
                </div>
            </div>
        </div>
        <!-- <img class="object-fill w-[27vh] h-[94vh] xl:w-[80vh] xl:h-[136vh] lg:w-[55vh] lg:h-[90vh] md:w-[50vh] md:h-[110vh]  xl:mt-[70px] lg:mt-[80px] md:mt-[61px] mt-[50px]" src="/images/import_export.jpg" alt=""> -->
    </div>

    <!-- Warehouse service -->
    <div class="">
        <!-- <img class="ms-[2vh] mt-[23vh] xl:ms-[37vh] xl:mt-[35vh] lg:ms-[3vh] lg:mt-[30vh] md:ms-[10vh] md:mt-[30vh] rounded-xl w-[35vh] xl:w-[70vh] lg:w-[65vh] md:w-[55vh] w-[37vh]" src="/images/warehouse.jpg" alt=""> -->
        <div class="card3 m-auto w-[37vh] h-[29vh] xl:w-[70vh] xl:h-[48vh] lg:w-[65vh] lg:h-[42vh] md:w-[55vh] md:h-[43vh] text-white">
            <h1 class="xl:text-2xl lg:text-2xl md:text-2xl sm:text-xl py-[15px] sm:py-[10px] md:py-[15px] text-center font-semibold">{{__("Warehouse Service !") }}</h1>
            <p class="leading-3 xl:leading-7 lg:leading-7 md:leading-5 text-[8px] xl:text-[16px] lg:text-lg md:text-[11px]  text-center xl:w-full xl:px-[15px] lg:w-full lg:px-[20px] md:w-full md:px-[10px] w-full p-[5px]">{{ __('Efficient warehouse services are crucial for a successful supply chain, providing secure storage, inventory management, and seamless distribution. They optimize space, ensure timely order fulfillment, and accurately track inventory, reducing costs and boosting customer satisfaction. Utilizing advanced technologies like barcode scanning, RFID, and warehouse management systems (WMS), businesses achieve higher accuracy and efficiency, ensuring products are always available and promptly delivered.') }}</p>
        </div>
    </div><br><br>
    <script src="/script.js"></script>
</x-layout>