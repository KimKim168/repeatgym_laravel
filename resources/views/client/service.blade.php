@extends('layout.client')
@section('content')
    <!-- Strat slider -->
    <div id="controls-carousel" class="relative w-full mt-[75px] lg:mt-8 overflow-hidden"
        style="clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 95%)">
        <!-- Carousel wrapper -->
        <div class="relative aspect-[16/6] overflow-hidden ">
            <!-- Swiper -->
            <swiper-container class="mySwiper" centered-slides="true" autoplay-delay="3000"
                autoplay-disable-on-interaction="false">
                <!-- slide 1 -->
                <swiper-slide>
                    <div class="flex items-center justify-center h-full w-full bg-cover bg-center bg-blend-multiply"
                        data-carousel-item
                        style="
                                background-image: url(assets/img/services/1.slide.jpg);
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col items-center justify-center text-center text-white px-4">
                            <h1
                                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#11ace3] uppercase">
                                FIT <span class="text-white">& FUN</span>
                            </h1>
                        </div>

                    </div>
                </swiper-slide>
                <!-- slide 1 -->
                <swiper-slide>
                    <div class="flex items-center w-full h-full justify-center bg-cover bg-center bg-blend-multiply"
                        data-carousel-item
                        style="
                                background-image: url(assets/img/services/2.slide.jpg);
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col items-center justify-center text-center text-white px-4">
                            <h1
                                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#11ace3] uppercase">
                                FIT <span class="text-white">& FUN</span>
                            </h1>
                        </div>
                    </div>
                </swiper-slide>
                <!-- slide 1 -->
                <swiper-slide>
                    <div class="flex items-center justify-center h-full w-full bg-cover bg-center bg-blend-multiply"
                        data-carousel-item
                        style="
                                background-image: url(assets/img/services/3.slide.jpg);
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col items-center justify-center text-center text-white px-4">
                            <h1
                                class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold text-[#11ace3] uppercase">
                                FIT <span class="text-white">& FUN</span>
                            </h1>
                        </div>
                    </div>
                </swiper-slide>
            </swiper-container>
            <!-- Swiper JS -->
            <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
    </div>
    <!-- End slider -->


    <!--Strat​​ Image with CTA button  -->
    <section>
        <div class="overflow-hidden">
            <div class="md:mt-28 mt-14">
                <div class="flex flex-col justify-center items-center text-4xl font-bold md:mt-16" data-aos="fade-up"
                    data-aos-duration="1000">
                    <p
                        class="uppercase text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl px-3 sm:px-5 md:px-7 lg:px-9 p-2 sm:p-3 md:p-4 lg:p-5 bg-[#11abe323]">
                        Training Options
                    </p>

                </div>
                <div class="flex items-center justify-center py-5 md:py-10">
                    <button class="font-bold px-14 border-t-2 border-white"></button>
                </div>
            </div>
            <!-- group tranning -->
            <div class="bg-[#00000072] mb-20 bg-no-repeat bg-gray-700 bg-blend-multiply overflow-hidden"
                style="
                        background-image: url('assets/img/bg/young-man-sportswear-exercise-class-gym.jpg');
                        background-size: cover;
                    ">
                <!-- Item 1 -->
                <div
                    class="gap-8 py-8 items-center px-3 md:px-3 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 ">
                    <div class="transition duration-300 hover:cursor-pointer" data-aos="fade-up" data-aos-duration="600">
                        <!-- Swiper -->
                        <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
                            centered-slides="true" autoplay-delay="3000" autoplay-disable-on-interaction="false">
                            <!-- slide 1 -->
                            <swiper-slide>
                                <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                    data-carousel-item
                                    style="
                                            background-image: url(assets/img/services/4.Group\ Training\ slide1.jpg);
                                        ">
                                </div>
                            </swiper-slide>
                            <!-- slide 1 -->
                            <swiper-slide>
                                <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                    data-carousel-item
                                    style="
                                            background-image: url(assets/img/services/5.Group\ Training\ slide2.jpg);
                                        ">
                                </div>
                            </swiper-slide>
                            <!-- slide 1 -->
                            <swiper-slide>
                                <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                    data-carousel-item
                                    style="
                                            background-image: url(assets/img/services/6.Group\ Training\ slide3.jpg);
                                        ">
                                </div>
                            </swiper-slide>
                        </swiper-container>
                        <!-- Swiper JS -->
                        <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                    </div>
                    <div class="md:mt-0 mt-4 flex flex-col p-2">
                        <div class="text-center">
                            <h2
                                class="mb-2 md:mb-7 text-3xl md:text-5xl tracking-tight text-center font-costum5 text-[#11ace3] uppercase">
                                Group tranning
                            </h2>
                            <p class="md:mb-6 mb-2 font-costum4 text-white md:text-xl">
                                Exciting and motivating group workouts for
                                everyone
                            </p>
                        </div>
                        <div class="space-y-20">
                            <div class="flex justify-center items-end">
                                <div class="flex flex-col bg-[#000000] p-8" data-aos="fade-right" data-aos-duration="1000">
                                    <h4 class="font-extrabold text-[#11ace3] text-xl">
                                        Benefits
                                    </h4>
                                    <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                        Stay Motivated, and enjoy a variety
                                        of exercises
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-center items-end">
                                <div class="flex flex-col bg-[#000000] p-8" data-aos="fade-left" data-aos-duration="1000">
                                    <h4 class="font-extrabold text-[#11ace3] text-xl">
                                        Schedule
                                    </h4>
                                    <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                        Mention the frequency and timing of
                                        sessions
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-center items-end">
                                <div class="flex flex-col bg-[#000000] p-8" data-aos="fade-right" data-aos-duration="1000">
                                    <h4 class="font-extrabold text-[#11ace3] text-xl">
                                        Duration
                                    </h4>
                                    <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                        1 hour sessions
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Persion tranning -->
            <div class="bg-[#00000072] bg-no-repeat bg-gray-700 bg-blend-multiply overflow-hidden"
                style="
                        background-image: url('assets/img/bg/young-man-sportswear-exercise-class-gym.jpg');
                        background-size: cover;
                    ">
                <!-- Item 2 -->
                <div
                    class="gap-8 py-8 items-center px-3 md:px-3 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 overflow-hidden">
                    <div class="md:mt-0 flex flex-col p-2" data-aos="fade-right" data-aos-duration="600">
                        <div class="text-center">
                            <h2
                                class="mb-2 md:mb-7 text-3xl md:text-5xl tracking-tight text-center font-costum5 text-[#11ace3] uppercase">
                                Persional tranning
                            </h2>
                            <p class="md:mb-6 mb-2 font-costum4 text-white md:text-xl">
                                Customized one-on-one sessions to meet your
                                goals
                            </p>
                        </div>
                        <div class="space-y-20">
                            <div class="flex justify-center items-end">
                                <div class="flex flex-col bg-[#000000] p-8" data-aos="fade-right" data-aos-duration="1000">
                                    <h4 class="font-extrabold text-[#11ace3] text-xl">
                                        Benefits
                                    </h4>
                                    <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                        Individualized workout plans,
                                        dedicated trainer attention, and
                                        flexible scheduling.
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-center items-end">
                                <div class="flex flex-col bg-[#000000] p-8" data-aos="fade-left" data-aos-duration="1000">
                                    <h4 class="font-extrabold text-[#11ace3] text-xl">
                                        Focus Areas
                                    </h4>
                                    <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                        Weight loss, muscle building, sports
                                        conditioning, etc.
                                    </p>
                                </div>
                            </div>
                            <div class="flex justify-center items-end">
                                <div class="flex flex-col bg-[#000000] p-8" data-aos="fade-right"
                                    data-aos-duration="1000">
                                    <h4 class="font-extrabold text-[#11ace3] text-xl">
                                        Duration
                                    </h4>
                                    <p class="text-sm line-clamp-2 w-[300px] mt-2 font-costum4">
                                        1 hour sessions
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hover:cursor-pointer overflow-hidden" data-aos="fade-left" data-aos-duration="600">
                        <div class="transition duration-300 hover:cursor-pointer">
                            <!-- Swiper -->
                            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true"
                                space-between="30" centered-slides="true" autoplay-delay="3000"
                                autoplay-disable-on-interaction="false">
                                <!-- slide 1 -->
                                <swiper-slide>
                                    <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                        data-carousel-item
                                        style="
                                                background-image: url(assets/img/services/7.Personal\ Training\ slide1.jpg);
                                            ">
                                    </div>
                                </swiper-slide>
                                <!-- slide 1 -->
                                <swiper-slide>
                                    <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                        data-carousel-item
                                        style="
                                                background-image: url(assets/img/services/8.Personal\ Training\ slide2.jpg);
                                            ">
                                    </div>
                                </swiper-slide>
                                <!-- slide 1 -->
                                <swiper-slide>
                                    <div class="flex items-center justify-center h-[500px] w-full bg-cover bg-center bg-blend-multiply"
                                        data-carousel-item
                                        style="
                                                background-image: url(assets/img/services/9.Personal\ Training\ slide3.jpg);
                                            ">
                                    </div>
                                </swiper-slide>
                            </swiper-container>
                            <!-- Swiper JS -->
                            <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Image with CTA button  -->

    <!-- strat  -->
    <section>
        <!-- Button Section -->
        <div class="text-lg sm:text-xl md:text-2xl lg:text-2xl  relative -bottom-6 sm:-bottom-9  md:-bottom-24 lg:-bottom-28 z-10 text-white text-center overflow-hidden"
            data-aos="fade-up" data-aos-duration="600">
            <button
                class="uppercase px-4 sm:px-6 md:px-8 lg:px-10 p-3 sm:p-4 md:p-5 lg:p-3 rounded-full bg-[#11abe355] md:bg-[#11abe323] font-medium">
                Additional Facilities and Services
            </button>
        </div>


        <!-- Main Section -->
        <div class="lg:mt-20 p-4 pb-10 w-full h-full bg-gray-700 bg-no-repeat bg-center bg-contain bg-blend-multiply"
            style="
                    background-image: url('assets/img/bg/bg4.png');
                    background-size: cover;
                ">
            <div class="max-w-screen-xl mx-auto py-10">
                <!-- Responsive Grid -->
                <div
                    class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 md:gap-8 md:mt-20 lg:mt-36">
                    <!-- Item 1 -->
                    <div class="group relative">
                        <div
                            class="relative border-2 border-transparent hover:border-[#4fd0ff] md:hover:scale-110 hover:duration-1000 hover:transition transition duration-300 hover:cursor-pointer">
                            <img src="{{ asset('assets/img/services/10. SAUNA.jpg') }}" alt="Avatar"
                                class="block aspect-square object-cover w-full h-full" />
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-[#2946516b] overflow-hidden w-full h-0 transition-all duration-1000 ease-in-out group-hover:h-full">
                                <div
                                    class="whitespace-nowrap text-white text-[12px] sm:text-[17px] font-costum3 uppercase absolute overflow-hidden top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    SAUNA ROOM
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="group relative">
                        <div
                            class="relative lg:-top-24 hover:border-2 hover:border-[#4fd0ff] md:hover:scale-110 hover:duration-1000 hover:transition transition duration-300 hover:cursor-pointer">
                            <img src="{{ asset('assets/img/services/11. STEAM.jpg') }}" alt="Avatar"
                                class="block aspect-square object-cover w-full h-full" />
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-[#2946516b] overflow-hidden w-full h-0 transition-all duration-1000 ease-in-out group-hover:h-full">
                                <div
                                    class="whitespace-nowrap text-white text-[12px] sm:text-[17px] font-costum3 uppercase absolute overflow-hidden top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    STEAM ROOM
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="group relative">
                        <div
                            class="relative border-2 border-transparent hover:border-[#4fd0ff] md:hover:scale-110 hover:duration-1000 hover:transition transition duration-300 hover:cursor-pointer">
                            <img src="{{ asset('assets/img/services/12. big parking.jpg') }}" alt="Avatar"
                                class="block aspect-square object-cover w-full h-full" />
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-[#2946516b] overflow-hidden w-full h-0 transition-all duration-1000 ease-in-out group-hover:h-full">
                                <div
                                    class="whitespace-nowrap text-white text-[12px] sm:text-[17px] font-costum3 uppercase absolute overflow-hidden top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    BIG PARKING
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="group relative">
                        <div
                            class="relative lg:-top-24 hover:border-2 hover:border-[#4fd0ff] md:hover:scale-110 hover:duration-1000 hover:transition transition duration-300 hover:cursor-pointer">
                            <img src="{{ asset('assets/img/services/13.service.jpg') }}" alt="Avatar"
                                class="block aspect-square object-cover w-full h-full" />
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-[#2946516b] overflow-hidden w-full h-0 transition-all duration-1000 ease-in-out group-hover:h-full">
                                <div
                                    class="whitespace-nowrap text-white text-[12px] sm:text-[17px] font-costum3 uppercase absolute overflow-hidden top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    Great Services
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 5 -->
                    <div class="group relative">
                        <div
                            class="hover:border-2 hover:border-[#4fd0ff] md:hover:scale-110 hover:duration-1000 hover:transition transition duration-300 hover:cursor-pointer">
                            <img src="{{ asset('assets/img/services/14.yoga class.jpg') }}" alt="Avatar"
                                class="block aspect-square object-cover w-full h-full" />
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-[#2946516b] overflow-hidden w-full h-0 transition-all duration-1000 ease-in-out group-hover:h-full">
                                <div
                                    class="whitespace-nowrap text-white text-[12px] sm:text-[17px] font-costum3 uppercase absolute overflow-hidden top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    Yoga Class
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Item 6 -->
                    <div class="group relative">
                        <div
                            class="relative lg:-top-24 hover:border-2 hover:border-[#4fd0ff] md:hover:scale-110 hover:duration-1000 hover:transition transition duration-300 hover:cursor-pointer">
                            <img src="{{ asset('assets/img/services/15.sexy hip hop class.jpg') }}" alt="Avatar"
                                class="block aspect-square object-cover w-full h-full" />
                            <div
                                class="absolute bottom-0 left-0 right-0 bg-[#316a7e5d] overflow-hidden w-full h-0 transition-all duration-1000 ease-in-out group-hover:h-full">
                                <div
                                    class="whitespace-nowrap text-white text-[12px] sm:text-[17px] font-costum3 uppercase absolute overflow-hidden top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                                    sexy hip hop class
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End  -->
@endsection
