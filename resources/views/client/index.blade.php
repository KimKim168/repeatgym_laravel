@extends('layout.client')
@section('meta_data')
<link rel="apple-touch-icon" href="{{ asset('/assets/img/logo/LOGO%20For%20Facebook%20Profile%2002.png') }}">
    <link rel="icon" href="{{ asset('/assets/img/logo/LOGO%20For%20Facebook%20Profile%2002.png') }}">
<meta name="description" content="Join Repeat Gym, a top-rated fitness center designed to help you achieve your fitness goals. With certified personal trainers, diverse group classes, state-of-the-art equipment, and customized workout plans, Repeat Gym is here to support your journey to a healthier, stronger you.">
<meta name="keywords" content="repeat gym, repeat gyme cambodia, gym, gym cambodia, gym phnom penh, best gym cambodia, fitness center, personal trainer, workout classes, strength training, health club, free trial, fitness goals, cambodia top gym,">

<meta property="og:title" content="REPEAT GYM">
<meta property="og:description" content="Join Repeat Gym, a top-rated fitness center designed to help you achieve your fitness goals. With certified personal trainers, diverse group classes, state-of-the-art equipment, and customized workout plans, Repeat Gym is here to support your journey to a healthier, stronger you.">
<meta property="og:image" content="{{ asset('/assets/img/logo/1.slide.jpg') }}">
<meta property="og:type" content="website">
@endsection

@section('content')
    <!-- Strat transform -->
    <div id="controls-carousel" class="relative w-full lg:mt-8 mt-[75px]"
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
                                background-image: url('assets/img/logo/1.slide.jpg');
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col items-center justify-center text-c2nter text-w4ite px-4">
                            <h1
                                class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-costum1 text-[#11ace3] uppercase">
                                Transform
                            </h1>
                            <p class="sm:my-1 md:my-2 lg:my-3 xl:my-4 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum5 uppercase"
                                style="
                                -webkit-text-fill-color: rgba(255, 255, 255, 0.041);
                                -webkit-text-stroke-width: 1px;
                                -webkit-text-stroke-color: rgb(255, 255, 255);
                            ">
                                Your Body
                            </p>
                            <p
                                class=" lg:mt-2 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum1 text-[#11ace3] uppercase">
                                With Us
                            </p>
                            <div class="flex items-center justify-center py-2 lg:py-5">
                                <button
                                    class="font-bold px-3 sm:px-4 md:px-5 lg:px-10 xl:px-12 2xl:px-14 lg:border-t-2 border-t"></button>
                            </div>
                            <a href="{{ url('/contact_us') }}"
                                class="px-1 sm:px-2 py-1 gradient-bg uppercase text-white font-costum3 text-[5px] sm:text-[8px] md:text-[11px] lg:text-[14px] xl:text-[17px] 2xl:text-[20px] rounded-full transition duration-300">
                                Join Us Now!
                            </a>
                        </div>

                    </div>
                </swiper-slide>
                <!-- slide 2 -->
                <swiper-slide>
                    <div class="flex items-center justify-center h-full w-full bg-cover bg-center bg-blend-multiply"
                        data-carousel-item
                        style="
                                background-image: url('assets/img/logo/2.slide.jpg');
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col items-center justify-center text-c2nter text-w4ite px-4">
                            <h1
                                class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-costum1 text-[#11ace3] uppercase">
                                Transform
                            </h1>
                            <p class="sm:my-1 md:my-2 lg:my-3 xl:my-4 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum5 uppercase"
                                style="
                                -webkit-text-fill-color: rgba(255, 255, 255, 0.041);
                                -webkit-text-stroke-width: 1px;
                                -webkit-text-stroke-color: rgb(255, 255, 255);
                            ">
                                Your Body
                            </p>
                            <p
                                class=" lg:mt-2 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum1 text-[#11ace3] uppercase">
                                With Us
                            </p>
                            <div class="flex items-center justify-center py-2 lg:py-5">
                                <button
                                    class="font-bold px-3 sm:px-4 md:px-5 lg:px-10 xl:px-12 2xl:px-14 lg:border-t-2 border-t"></button>
                            </div>
                            <a href="{{ url('/contact_us') }}"
                                class="px-1 sm:px-2 py-1 gradient-bg uppercase text-white font-costum3 text-[5px] sm:text-[8px] md:text-[11px] lg:text-[14px] xl:text-[17px] 2xl:text-[20px] rounded-full transition duration-300">
                                Join Us Now!
                            </a>
                        </div>

                    </div>
                </swiper-slide>
                <!-- slide 3 -->
                <swiper-slide>
                    <div class="flex items-center justify-center h-full w-full bg-cover bg-center bg-blend-multiply"
                        data-carousel-item
                        style="
                                background-image: url('assets/img/logo/3.slide.jpg');
                            ">
                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-[#151516a6] bg-opacity-80"></div>

                        <!-- Content -->
                        <div class="relative z-10 flex flex-col items-center justify-center text-c2nter text-w4ite px-4">
                            <h1
                                class="text-2xl sm:text-3xl md:text-5xl lg:text-6xl xl:text-7xl 2xl:text-8xl font-costum1 text-[#11ace3] uppercase">
                                Transform
                            </h1>
                            <p class="sm:my-1 md:my-2 lg:my-3 xl:my-4 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum5 uppercase"
                                style="
                                -webkit-text-fill-color: rgba(255, 255, 255, 0.041);
                                -webkit-text-stroke-width: 1px;
                                -webkit-text-stroke-color: rgb(255, 255, 255);
                            ">
                                Your Body
                            </p>
                            <p
                                class=" lg:mt-2 text-xl sm:text-2xl md:text-4xl lg:text-5xl xl:text-6xl 2xl:text-7xl font-costum1 text-[#11ace3] uppercase">
                                With Us
                            </p>
                            <div class="flex items-center justify-center py-2 lg:py-5">
                                <button
                                    class="font-bold px-3 sm:px-4 md:px-5 lg:px-10 xl:px-12 2xl:px-14 lg:border-t-2 border-t"></button>
                            </div>
                            <a href="{{ url('/contact_us') }}"
                                class="px-1 sm:px-2 py-1 gradient-bg uppercase text-white font-costum3 text-[5px] sm:text-[8px] md:text-[11px] lg:text-[14px] xl:text-[17px] 2xl:text-[20px] rounded-full transition duration-300">
                                Join Us Now!
                            </a>
                        </div>

                    </div>
                </swiper-slide>
            </swiper-container>

            <!-- Swiper JS -->
            <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
        </div>
    </div>
    <!-- End transform -->

    <!-- strat middle -->
    <div class="mt-10">
        <div class="flex mx-5 flex-col justify-center items-center text-2xl md:text-3xl lg:text-4xl font-bold"
            data-aos="fade-up" data-aos-duration="2000">
            <h1 class="uppercase text-[#11ace3] font-costum3 text-center">
                REPEAT GYM HAS THE MOST
                <span class="p-2 bg-[#11abe326] text-[#ffffff] rounded-xl">COACHES</span>
                IN CAMBODIA,
            </h1>
            <p class="uppercase text-lg md:text-2xl lg:text-3xl font-costum3 mt-3 text-center">
                OFFERING YOU THE BEST SUPPORT AND GUIDANCE
            </p>
        </div>
        <div class="flex items-center justify-center py-6 md:py-8 lg:py-10">
            <button class="font-bold px-10 md:px-14 py-2 md:py-3 border-t-2 border-[#11ace3]"></button>
        </div>
        <div class="max-w-screen-xl mx-auto relative overflow-hidden">
            <div class="p-4 bg-[#2b2b2e] rounded-2xl">
                <img class="rounded-2xl aspect-[16/6] object-cover w-full"
                    src="{{ asset('assets/img/logo/4.all coach.jpg') }}" />
            </div>
        </div>
    </div>

    <!-- End middle -->

    <!-- Strat Section -->
    <section class="py-8 antialiased md:py-12 overflow-hidden">
        <div class="py-8 px-8 mx-auto max-w-screen-xl sm:py-12 lg:px-6">
            <div class="space-y-8 md:space-y-0 md:grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="bg-black p-4 border border-transparent hover:border-[#11ace3] transform hover:scale-105 mx-auto duration-700 transition-all w-full">
                    <img class="aspect-square object-cover" src="{{ asset('assets/img/logo/5.Result.jpg') }}"
                        alt="Image description" />
                    <div class="text-center">
                        <a href="#">
                            <h5 class="my-4 text-xl md:text-2xl font-bold tracking-tight text-[#11ace3] uppercase">
                                RESULT
                            </h5>
                        </a>
                        <p class="mb-8 uppercase text-sm md:text-xl dark:text-gray-400 font-costum7">
                            ACHIEVING REAL FITNESS RESULTS
                        </p>
                    </div>
                </div>
                <div
                    class="bg-black p-4 border border-transparent hover:border-[#11ace3] transform hover:scale-105 mx-auto duration-700 transition-all w-full">
                    <img class="aspect-square object-cover w-full" src="{{ asset('assets/img/logo/6.Service.jpg') }}"
                        alt="Image description" />
                    <div class="text-center">
                        <a href="#">
                            <h5 class="my-4 text-xl md:text-2xl font-bold tracking-tight text-[#11ace3] uppercase">
                                Service
                            </h5>
                        </a>
                        <p class="mb-8 uppercase text-sm md:text-xl dark:text-gray-400 font-costum7">
                            PROVIDING EXCEPTIONAL CUSTOMER SERVICE
                        </p>
                    </div>
                </div>
                <div
                    class="bg-black p-4 border border-transparent hover:border-[#11ace3] transform hover:scale-105 mx-auto duration-700 transition-all w-full">
                    <img class="aspect-square object-cover w-full" src="{{ asset('assets/img/logo/7.HYGIENE.jpg') }}"
                        alt="Image description" />
                    <div class="text-center">
                        <a href="#">
                            <h5 class="my-4 text-xl md:text-2xl font-bold tracking-tight text-[#11ace3] uppercase">
                                Hygiene
                            </h5>
                        </a>
                        <p class="mb-8 uppercase text-sm md:text-xl dark:text-gray-400 font-costum7">
                            WE KEEP OUR GYM SANITIZED AND SAFE, PRIORITIZING
                            MEMBERS' HEALTH.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--End Section  -->

    <!-- Strat section -->
    <section class="mt-20 w-full bg-black flex py-20 px-7 md:p-20 relative"
        style="
                background-image: url('assets/img/bg/bg1.jpg');
                background-size: cover;
                background-repeat: no-repeat;
            ">
        <div class="absolute inset-0 bg-[#000000] bg-opacity-85"></div>
        <div
            class="relative max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 sm:gap-16 md:gap-12 lg:gap-8 z-10">
            <div
                class="p-3 rounded-xl bg-[#393946] hover:scale-105 transition duration-300 hover:border-[#11ace3] border border-transparent opacity-60 hover:opacity-100">
                <img src="{{ asset('assets/img/logo/8.GROUP TRAINING0.jpg') }}"
                    class="w-full h-[500px] object-cover rounded-xl" />
                <p class="uppercase text-[#11ace3] text-2xl font-medium mt-2 text-center">
                    Group Training
                </p>
            </div>
            <div
                class="p-3 rounded-xl bg-[#393946] hover:scale-105 transition duration-300 hover:border-[#11ace3] border border-transparent opacity-60 hover:opacity-100">
                <img src="{{ asset('assets/img/logo/9.PERSONAL TRAINING.jpg') }}"
                    class="w-full h-[500px] object-cover rounded-xl" />
                <p class="uppercase text-[#11ace3] text-2xl font-medium mt-2 text-center">
                    Personal Training
                </p>
            </div>
            <div
                class="p-3 rounded-xl bg-[#393946] hover:scale-105 transition duration-300 hover:border-[#11ace3] border border-transparent opacity-60 hover:opacity-100">
                <img src="{{ asset('assets/img/logo/10.TEAM TRAINING.jpg') }}"
                    class="w-full h-[500px] object-cover rounded-xl" />
                <p class="uppercase text-[#11ace3] text-2xl font-medium mt-2 text-center">
                    Team Training
                </p>
            </div>
        </div>
    </section>
@endsection
