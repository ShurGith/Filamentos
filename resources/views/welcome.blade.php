<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=asar:400|bad-script:400|figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
<style>
        .bubble {
        position: absolute;
        width: 200px;
        height: 200px;
        border-radius: 50%;
        box-shadow: inset 0 0 25px rgba (255, 255, 255, 0.25);
        animation: animate_4010 8s ease-in-out infinite;
        }

        .bubble:nth-child(2) {
        position: relative;
        zoom: 0.45;
        left: -10px;
        top: -100px;
        animation-delay: -4s;
        }

        .bubble:nth-child(3) {
        position: relative;
        zoom: 0.45;
        right: -80px;
        top: -300px;
        animation-delay: -6s;
        }

        .bubble:nth-child(4) {
        position: relative;
        zoom: 0.35;
        left: -120px;
        bottom: -200px;
        animation-delay: -3s;
        }

        .bubble:nth-child(5) {
        position: relative;
        zoom: 0.5;
        left: 0px;
        top: 200px;
        animation-delay: -5s;
        }

        @keyframes animate_4010 {
            0%,100% {
                transform: translateY(-20px);
            }

            50% {
                transform: translateY(20px);
            }
        }

        .bubble::before {
        content: '';
        position: absolute;
        top: 50px;
        left: 45px;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #fff;
        z-index: 10;
        filter: blur(2px);
        }

        .bubble::after {
        content: '';
        position: absolute;
        top: 80px;
        left: 80px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background: #fff;
        z-index: 10;
        filter: blur(2px);
        }

        .bubble span {
        position: absolute;
        border-radius: 50%;
        }

        .bubble span:nth-child(1) {
        inset: 10px;
        border-left: 15px solid #0fb4ff;
        filter: blur(8px);
        }

        .bubble span:nth-child(2) {
        inset: 10px;
        border-right: 15px solid #ff4484;
        filter: blur(8px);
        }

        .bubble span:nth-child(3) {
        inset: 10px;
        border-top: 15px solid #ffeb3b;
        filter: blur(8px);
        }

        .bubble span:nth-child(4) {
        inset: 30px;
        border-left: 15px solid #ff4484;
        filter: blur(12px);
        }

        .bubble span:nth-child(5) {
        inset: 10px;
        border-bottom: 10px solid #fff;
        filter: blur(8px);
        transform: rotate(330deg);
        }
</style>
    </head>
    <body class="font-sans antialiased bg-black text-white/50">
        <section class="text-gray-600 body-font">
        <div class="flex justify-end gap-8 pr-20">
            <div class="flex gap-8 font-[asar] text-blue-600 font-bold mt-4">
                <div class="flex items-center gap-2">
                    <a href="/app"
                        class="cursor-pointer bg-white relative inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-[#F5F5F5] hover:text-[#06B6D4] h-9 rounded-md px-3"
                    >
                        <svg
                        class="lucide lucide-rocket text-cyan-500 dark:text-cyan-400"
                        stroke-linejoin="round"
                        stroke-linecap="round"
                        stroke-width="2"
                        stroke="#06B6D4"
                        fill="none"
                        viewBox="0 0 24 24"
                        height="22"
                        width="22"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"
                        ></path>
                        <path
                            d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"
                        ></path>
                        <path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path>
                        <path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path>
                        </svg>
                        Dahsboard
                    </a>

                    <a href="{{ route('conference-signup') }}"  class="cursor-pointer bg-white relative inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-[#F5F5F5] hover:text-[#60A5FA] h-9 rounded-md px-3"
                    >
                        <svg
                        class="text-blue-400 lucide lucide-newspaper dark:text-blue-600"
                        stroke-linejoin="round"
                        stroke-linecap="round"
                        stroke-width="2"
                        stroke="#60A5FA"
                        fill="none"
                        viewBox="0 0 24 24"
                        height="22"
                        width="22"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"
                        ></path>
                        <path d="M18 14h-8"></path>
                        <path d="M15 18h-5"></path>
                        <path d="M10 6h8v4h-8V6Z"></path>
                        </svg>
                        Articles
                    </a>
                    <button
                        class="cursor-pointer bg-white relative inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-[#F5F5F5] hover:text-[#FACC14] h-9 rounded-md px-3"
                    >
                        <svg
                        class="text-yellow-400 lucide lucide-sticky-note dark:text-yellow-600"
                        stroke-linejoin="round"
                        stroke-linecap="round"
                        stroke-width="2"
                        stroke="#FACC14"
                        fill="none"
                        viewBox="0 0 24 24"
                        height="22"
                        width="22"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M15.5 3H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V8.5L15.5 3Z"
                        ></path>
                        <path d="M15 3v6h6"></path>
                        </svg>
                        Notes
                    </button>
                    <button
                        class="cursor-pointer bg-white relative inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-[#F5F5F5] hover:text-[#FB923C] h-9 rounded-md px-3"
                    >
                        <svg
                        class="text-orange-400 lucide lucide-star dark:text-orange-600"
                        stroke-linejoin="round"
                        stroke-linecap="round"
                        stroke-width="2"
                        stroke="#FB923C"
                        fill="#FB923C"
                        viewBox="0 0 24 24"
                        height="22"
                        width="22"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <polygon
                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"
                        ></polygon>
                        </svg>
                        Reviews
                    </button>
                            </div>
                </div>
            </section>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <div class="container">
                <div class="bubble">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="bubble">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="bubble">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="bubble">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="bubble">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
             </div>
            </section>
    </body>
</html>
