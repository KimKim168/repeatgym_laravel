<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>REPEAT GYM</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Start Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Moul&family=Poppins:ital&family=Rubik+Doodle+Shadow&display=swap,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Siemreap&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/css/glightbox.css" />
    <style>
        @font-face {
            font-family: "Costum1";
            src: url('assets/fonts/Raleway-Black.ttf') format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum2";
            src: url("assets/fonts/Raleway-BlackItalic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum3";
            src: url("assets/fonts/Raleway-Bold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum4";
            src: url("assets/fonts/Raleway-Medium.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum5";
            src: url("assets/fonts/Raleway-ExtraBold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum6";
            src: url("assets/fonts/Raleway-ExtraBoldItalic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum7";
            src: url("assets/fonts/Raleway-ExtraLight.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum8";
            src: url("assets/fonts/Raleway-SemiBold.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum9";
            src: url("assets/fonts/Raleway-Italic.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: "Costum10";
            src: url("assets/fonts/FunlandParkOpenJLRegular.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        .light-color-gradient {
            position: relative;
            background-color: #f5f6f7;
            background-image: linear-gradient(54deg,
                    rgba(255, 131, 122, 0.25),
                    rgba(255, 131, 122, 0) 28%),
                linear-gradient(241deg,
                    rgba(239, 152, 207, 0.25),
                    rgba(239, 152, 207, 0) 36%);
        }

        .gradient-bg {
            background: linear-gradient(to right, #06b6d4, #3b82f6);
        }

        .shadow-custom {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1),
                0 2px 4px rgba(0, 0, 0, 0.06);
        }

        .layer {
            transition: transform 0.5s ease-out;
        }

        .layer:hover {
            transform: scale(1.05);
        }

        .image-container:hover .layer {
            transition: transform 0.1s ease-out;
            /* Manually defining the transition */
        }

        .layer {
            pointer-events: none;
            /* Ensuring the layer does not block cursor events */
        }

        .primary2 {
            background-color: #3a3e67;
        }

        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        swiper-container {
            width: 100%;
            height: 100%;
        }

        swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .image-container {
            position: relative;
            overflow: hidden;
        }

        .layer {
            transition: transform 0.3s ease;
        }
    </style>

    <script>
        tailwind.config = {
            darkMode: "class", // Enables dark mode based on class
            theme: {
                extend: {
                    colors: {
                        clifford: "#da373d",
                        primary1: "#43428d",
                        primary2: "#3a3e67",
                        primary3: "#565c6a",
                        text_color1: "#787e8c",
                        text_color2: "#565c6a",
                        warning: "#fab105",
                        warningHover: "#ffb915",
                    },
                },
                fontFamily: {
                    koluen: ["Koulen"],
                    costum1: ["Costum1", "sans-serif"],
                    costum2: ["Costum2", "sans-serif"],
                    costum3: ["Costum3", "sans-serif"],
                    costum4: ["Costum4", "sans-serif"],
                    costum5: ["Costum5", "sans-serif"],
                    costum6: ["Costum6", "sans-serif"],
                    costum7: ["Costum7", "sans-serif"],
                    costum8: ["Costum8", "sans-serif"],
                    costum9: ["Costum9", "sans-serif"],
                    rubik: ["Rubik Doodle Shadow"],
                    Costum10: ["FunlandParkOpen", "Rubik Doodle Shadow"],
                    poppin: ["Poppins"]
                },
            },
        };
    </script>
</head>

<body
    style="
            background-image: url('../img/logo/Background\ Home\ Page.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-position-x: center;
        "
    class="text-white bg-[#151515]">
    <!-- Start Navbar -->
    <nav class="bg-[#0b0b0c] text-white fixed w-full z-40 top-0 start-0">
        <div
            class="max-w-screen-xl flex flex-wrap justify-center items-center md:justify-between mx-auto p-4 border-b border-gray-400">
            <!-- Left Side - Contact Info -->
            <div class="flex flex-col-reverse gap-5 items-center space-x-3 md:flex-row rtl:space-x-reverse">
                <div class="flex gap-8">
                    <div class="flex items-center mx-auto justify-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24"
                            fill="none" stroke="#11ace3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-phone">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                        <span class="text-sm">010 / 011 - 88 00 67</span>
                    </div>
                    <div class="flex space-x-2 md:hidden justify-center items-center">
                        <img src="{{ asset('assets/img/facebook.png') }}" class="w-5" />
                        <img src="{{ asset('assets/img/play.png') }}" class="w-8" />
                        <img src="{{ asset('assets/img/telegram.png') }}" class="w-5" />
                        <img src="{{ asset('assets/img/phone-call.png') }}" class="w-5" />
                    </div>
                </div>

                <div class="flex items-center justify-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 24 24"
                        fill="none" stroke="#11ace3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-clock">
                        <circle cx="12" cy="12" r="10" />
                        <polyline points="12 6 12 12 16 14" />
                    </svg>
                    <span class="text-sm">Mon - Fri 6:00am - 9:00pm / Sat - Sun 8:00am -
                        8:00pm</span>
                </div>
            </div>

            <!-- Right Side - Social Media and Menu Button -->
            <div class="flex items-center lg:order-2 gap-2">
                <!-- <div>
                        <button
                            type="button"
                            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            data-drawer-target="drawer-navigation"
                            data-drawer-show="drawer-navigation"
                            aria-controls="drawer-navigation"
                        >
                            <span class="sr-only">Open main menu</span>
                            <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 17 14"
                            >
                                <path
                                    stroke="currentColor"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M1 1h15M1 7h15M1 13h15"
                                />
                            </svg>
                        </button>
                    </div> -->

                <!-- Social Media Icons (Hidden on Small Screens) -->
                <div class="hidden md:flex space-x-4 justify-center items-center">
                    <img src="{{ asset('assets/img/facebook.png') }}" class="w-5" />
                    <img src="{{ asset('assets/img/play.png') }}" class="w-8" />
                    <img src="{{ asset('assets/img/telegram.png') }}" class="w-5" />
                    <img src="{{ asset('assets/img/phone-call.png') }}" class="w-5" />
                </div>
            </div>
        </div>
    </nav>



    <!-- Strat hero -->
    <div class="mt-28 flex flex-col justify-center items-center">
        <!-- Logo Section -->
        <div>
            <img src="../img/logo/LOGO For Facebook Profile 02.png" class="w-28" />
        </div>

        <!-- Navigation Menu -->
        <div class="mt-4 md:mt-0">
            <ul class="flex flex-wrap justify-center space-x-4 gap-y-3 text-sm font-medium">
                <li>
                    <a href="index.html" class="text-blue-500 pl-2">HOME</a>
                </li>
                <li class="">
                    <a href="whyRepeatGym.html" class="text-white hover:text-blue-500 border-l pl-2">WHY REPEAT
                        GYM</a>
                </li>
                <li>
                    <a href="services.html" class="text-white hover:text-blue-500 border-l pl-2">OUR SERVICES</a>
                </li>
                <li>
                    <a href="testimonials.html" class="text-white hover:text-blue-500 border-l pl-2">TESTIMONIALS</a>
                </li>
                <li>
                    <a href="contactUs.html" class="text-white hover:text-blue-500 border-l pl-2">CONTACT US</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- End hero -->
    @yield('content')
    <footer class="bg-[#0b0b0c] mt-20 p-8">
        <div class="max-w-screen-xl mx-auto p-4">
            <div class="flex flex-col md:flex-row md:justify-between items-start md:space-y-0">
                <div class="flex items-center space-x-3 rtl:space-x-reverse">
                    <div class="space-y-3">
                        <!-- Phone Number -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                <path
                                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>
                            <span class="text-lg">010 / 011 - 88 00 67</span>
                        </div>
                        <!-- Email -->
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="#11ace3" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                <rect width="20" height="16" x="2" y="4" rx="2" />
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                            </svg>
                            <span class="text-[17px] font-costum9">info@repeatgyme.com</span>
                        </div>
                    </div>
                </div>

                <!-- Business Hours and Social Media -->
                <div class="flex flex-col items-center md:items-end mt-3">
                    <div class="flex items-center text-sm space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="#11ace3" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-clock">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                        <span class="text-lg">Mon - Fri 6:00am - 9:00pm / Sat - Sun 8:00am -
                            8:00pm</span>
                    </div>
                    <div class="flex space-x-4 justify-center items-center">
                        <div>
                            <img src="{{ asset('assets/img/facebook.png') }}" class="w-9" />
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/play.png') }}" class="w-14" />
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/telegram.png') }}" class="w-9" />
                        </div>
                        <div>
                            <img src="{{ asset('assets/img/phone-call.png') }}" class="w-9" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-3 border-gray-700 sm:mx-auto lg:my-6" />

        <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between items-center text-white">
            <div class="text-center md:text-left">
                <span class="text-sm font-costum9">Copyright © 2024 Repeat Gym. All Rights Reserved.</span>
            </div>
            <div class="mt-4 md:mt-0">
                <ul class="flex flex-wrap justify-center space-x-4 gap-y-3 text-sm font-medium">
                    <li>
                        <a href="index.html" class="text-blue-500 px-2">HOME</a>
                    </li>
                    <li class="">
                        <a href="whyRepeatGym.html" class="text-white hover:text-blue-500 border-l pl-2">WHY REPEAT
                            GYM</a>
                    </li>
                    <li>
                        <a href="services.html" class="text-white hover:text-blue-500 border-l pl-2">OUR SERVICES</a>
                    </li>
                    <li>
                        <a href="testimonials.html"
                            class="text-white hover:text-blue-500 border-l pl-2">TESTIMONIALS</a>
                    </li>
                    <li>
                        <a href="contactUs.html" class="text-white hover:text-blue-500 border-l pl-2">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.3.0/js/glightbox.min.js"></script>
    <script>
        var lightbox = GLightbox();
        lightbox.on("open", (target) => {
            console.log("lightbox opened");
        });
        var lightboxDescription = GLightbox({
            selector: ".glightbox2",
        });
        var lightboxVideo = GLightbox({
            selector: ".glightbox3",
        });
        lightboxVideo.on("slide_changed", ({
            prev,
            current
        }) => {
            console.log("Prev slide", prev);
            console.log("Current slide", current);

            const {
                slideIndex,
                slideNode,
                slideConfig,
                player
            } = current;

            if (player) {
                if (!player.ready) {
                    // If player is not ready
                    player.on("ready", (event) => {
                        // Do something when video is ready
                    });
                }

                player.on("play", (event) => {
                    console.log("Started play");
                });

                player.on("volumechange", (event) => {
                    console.log("Volume change");
                });

                player.on("ended", (event) => {
                    console.log("Video ended");
                });
            }
        });

        var lightboxInlineIframe = GLightbox({
            selector: ".glightbox4",
        });

        /* var exampleApi = GLightbox({ selector: null });
         exampleApi.insertSlide({
             href: 'https://picsum.photos/1200/800',
         });
         exampleApi.insertSlide({
             width: '500px',
             content: '<p>Example</p>'
         });
         exampleApi.insertSlide({
             href: 'https://www.youtube.com/watch?v=WzqrwPhXmew',
         });
         exampleApi.insertSlide({
             width: '200vw',
             content: document.getElementById('inline-example')
         });
         exampleApi.open(); */
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

</html>
