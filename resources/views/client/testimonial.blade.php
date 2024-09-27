@extends('layout.client')
@section('content')
    <!--Strat Image with CTA button  -->
    <div class="relative overflow-hidden mt-[40px] lg:mt-0">
        <section class="mt-8 aspect-video  bg-center bg-gray-600 bg-blend-multiply"
            style="
            background-image: url('assets/img/bg/bg3.png');
            clip-path: polygon(0 0, 100% 0, 100% 49%, 0 55%);
            background-size: cover;
        ">
        </section>

        <!-- Responsive container for content -->
        <div
            class="absolute top-14 z-[20]  right-1/2 transform translate-x-1/2 items-center mx-auto max-w-screen-xl xl:gap-5 md:grid grid sm:pt-16 ">
            <div class="md:mt-0">
                <div class="text-center">
                    <h2
                        class="text-4xl mb-3 sm:text-5xl md:text-6xl lg:text-6xl tracking-tight font-costum1 text-[#11ace3] uppercase">
                        TESTIMONIALS
                    </h2>
                </div>
            </div>

            <div class="relative  overflow-hidden rounded-md">
                <img class="mx-auto rounded-md aspect-video object-cover  cursor-pointer"
                    src="{{ asset('assets/img/videos/image.png') }}" alt="Book Cover" />
                <div class="absolute inset-0 flex items-center justify-center">
                    <a class="inline-flex items-center px-4 py-3 text-xs sm:text-sm lg:text-base font-semibold text-red-600 bg-white border-gray-200 rounded-full shadow-sm gap-x-2 hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                        href="{{ asset('assets/img/videos/6.RPG Video.mp4') }}" data-gallery="gallery1">
                        <svg class="flex-shrink-0 w-4 h-4 sm:w-6 sm:h-6 lg:w-8 lg:h-8" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round">
                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                        </svg>
                        Play Video
                    </a>
                </div>
            </div>

        </div>
    </div>


    <!--End Image with CTA button  -->

    <!-- strat uor locations -->
    <section class="overflow-hidden">
        <div class="my-24 py-20  md:py-[80px]  bg-center bg-gray-800 bg-repeat bg-blend-multiply lg:mt-28"
            style="
                background-position: center;
                background-image: url(assets/img/bg/bg4.png);
                background-size: cover; /* Or use contain or a specific value */
            ">
            <div class="text-center flex justify-center -mt-28 ">
                <p class="sm:text-3xl text-2xl bg-[#11abe323] p-4 px-7 mb-10 text-[#11ace3] rounded-xl font-koluen">
                    កម្មវីធីប្រកួតសម្រក​គីឡូ នៅក្លឹបហាត់ប្រាណ រីភីត
                </p>
            </div>
            <div class="max-w-screen-xl mx-auto gap-10 px-7 grid md:grid-cols-2 lg:grid-cols-3 justify-center items-center">
                <!-- Item 1 -->
                <div
                    class="p-4 cursor-pointer transform transition-transform bg-[#11abe31b] rounded-lg overflow-hidden border border-transparent hover:border-[#4fd0ff] over:transition hover:cursor-pointer hover:opacity-100 opacity-60">
                    <img src="{{ asset('assets/img/logo/IMG_2435-Enhanced-NR.jpg') }}" class="w-full rounded-lg" />
                    <div class="text-center font-koluen space-y-5 mt-4">
                        <p class="font-nokora text-2xl">អបអរសាទរ</p>
                        <p class="text-4xl text-[#11ace3]">
                            ប្អូនស្រី​ ចាន់លីមាន
                        </p>
                        <p class="max-w-60 mx-auto font-nokora text-xl leading-loose">
                            ស្រកគីឡូបានច្រើនជាងគេ ក្នុងការប្រកួត
                            កម្មវិធីសម្រកគីឡូ
                        </p>
                        <p class="text-yellow-500 font-nokora text-lg">
                            ចំណាប់ថ្នាក់លេខ​ 1
                        </p>
                    </div>
                </div>
                <!-- Item 2 -->
                <div
                    class="p-4 cursor-pointer transform transition-transform bg-[#11abe31b] rounded-lg overflow-hidden border border-transparent hover:border-[#4fd0ff] hover:opacity-100 opacity-60 hover:transition hover:cursor-pointer">
                    <img src="{{ asset('assets/img/logo/IMG_2439-Enhanced-NR.jpg') }}" class="w-full rounded-lg" />
                    <div class="text-center font-koluen space-y-5 mt-4">
                        <p class="font-nokora text-2xl">អបអរសាទរ</p>
                        <p class="text-4xl text-[#11ace3]">
                            បងប្រុស សុធារ៉ា
                        </p>
                        <p class="max-w-60 mx-auto font-nokora text-xl leading-loose">
                            ស្រកគីឡូបានច្រើនជាងគេ ក្នុងការប្រកួត
                            កម្មវិធីសម្រកគីឡូ
                        </p>
                        <p class="text-yellow-500 font-nokora text-lg">
                            ចំណាប់ថ្នាក់លេខ 1
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div
                    class="p-4 cursor-pointer transform transition-transform bg-[#11abe31b] rounded-lg overflow-hidden border border-transparent hover:border-[#4fd0ff] hover:transition hover:cursor-pointer hover:opacity-100 opacity-60">
                    <img src="{{ asset('assets/img/logo/IMG_2452-Enhanced-NR.jpg') }}" class="w-full rounded-lg" />
                    <div class="text-center font-koluen space-y-5 mt-4">
                        <p class="font-nokora text-2xl">អបអរសាទរ</p>
                        <p class="text-4xl text-[#11ace3]">បងស្រី ម៉ាឡែន</p>
                        <p class="max-w-60 mx-auto font-nokora text-xl leading-loose">
                            ស្រកគីឡូបានច្រើនជាងគេ ក្នុងការប្រកួត
                            កម្មវិធីសម្រកគីឡូ
                        </p>
                        <p class="text-yellow-500 font-nokora text-lg">
                            ចំណាប់ថ្នាក់លេខ​ 1
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End uor locations -->

    <!-- Strat video play -->
    <section class="py-10 overflow-hidden">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <!-- video 1 -->
                <div class="grid gap-10" data-aos="fade-right" data-aos-offset="500" data-aos-easing="ease-in-sine">
                    <div
                        class="relative aspect-w-16 aspect-h-9 h-full w-full object-cover overflow-hidden rounded-md border border-transparent hover:border-[#4fd0ff] transition hover:cursor-pointer">
                        <img class="mx-auto rounded-mdaspect-video object-cover cursor-pointer"
                            src="{{ asset('assets/img/videos/imageVideo5.png') }}" alt="Video Thumbnail" />

                        <div class="absolute inset-0 flex items-center justify-center">
                            <a class="inline-flex items-center px-4 py-3 text-sm font-semibold text-red-600 bg-white border-gray-200 rounded-full shadow-sm glightbox3 gap-x-2 hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                href="{{ asset('assets/img/videos/5.vdo sale client chhay.mp4') }}" data-gallery="gallery1">
                                <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                </svg>
                                Play Video
                            </a>
                        </div>
                    </div>
                    <div
                        class="relative aspect-w-16 aspect-h-9 h-full w-full object-cover overflow-hidden rounded-md border border-transparent hover:border-[#4fd0ff] transition hover:cursor-pointer">
                        <img class="mx-auto rounded-md aspect-video object-cover cursor-pointer"
                            src="{{ asset('assets/img/videos/imageVideo3.png') }}" alt="Video Thumbnail" />

                        <div class="absolute inset-0 flex items-center justify-center">
                            <a class="inline-flex items-center px-4 py-3 text-sm font-semibold text-red-600 bg-white border-gray-200 rounded-full shadow-sm glightbox3 gap-x-2 hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                href="{{ asset('assets/img/videos/6.RPG Video.mp4') }}" data-gallery="gallery1">
                                <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                </svg>
                                Play Video
                            </a>
                        </div>
                    </div>
                </div>
                <!-- video 2 -->
                <div class="flex items-center justify-center" data-aos="fade-left" data-aos-offset="500"
                    data-aos-easing="ease-in-sine">
                    <div
                        class="relative aspect-w-16 aspect-h-9 h-full w-full object-cover overflow-hidden rounded-md border border-transparent hover:border-[#4fd0ff] transition hover:cursor-pointer">
                        <img class="mx-auto rounded-md aspect-[16/19] object-cover cursor-pointer"
                            src="{{ asset('assets/img/videos/imageVideo4.png') }}" alt="Video Thumbnail" />

                        <div class="absolute inset-0 flex items-center justify-center">
                            <a class="inline-flex items-center px-4 py-3 text-sm font-semibold text-red-600 bg-white border-gray-200 rounded-full shadow-sm glightbox3 gap-x-2 hover:bg-gray-50 dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                href="{{ asset('assets/img/videos/7.vdo sale client rath.mp4') }}"
                                data-gallery="gallery1">
                                <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                </svg>
                                Play Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- End video play -->
    <!-- Start Join Now -->
    <section class="text-center uppercase" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
        <a href="{{ url('contact_us') }}"
            class="sm:px-8 sm:py-3 px-4 py-2 gradient-bg text-white font-bold text-sm sm:text-lg rounded-full transition duration-300">
            Join Us Now!
        </a>
    </section>
    <!-- End Join Now -->
@endsection
