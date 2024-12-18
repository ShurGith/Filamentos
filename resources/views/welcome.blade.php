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
    </head>
    <body class="bg-black font-sans text-white/50 antialiased">
        <section class="text-gray-600 body-font">
                <div class="mt-4 flex h-full w-full flex-col items-end gap-12 pr-24 font-bold text-blue-600 font-[asar]">
                   <div class="relative flex flex-col items-start justify-center gap-6">
                      <div class="flex w-full justify-center">
                         <button class="w-full menu-animacion"><span class="linea linea1"></span><span class="linea linea2"></span><span class="linea linea3"></span></button>
                      </div>
                      <div class="flex flex-col gap-2">
                          <a href="/app" class="cursor-pointer bg-white inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-[#F5F5F5] hover:text-[#06B6D4] h-9 px-3">
                              <svg class="text-cyan-500 dark:text-cyan-400" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#06B6D4" fill="none" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"></path><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"></path></svg>
                              Dahsboard
                          </a>
                          <a href="{{ route('conference-signup') }}"  class="cursor-pointer bg-white inline-flex items-center justify-center gap-2 rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-[#F5F5F5] hover:text-[#60A5FA] h-9 px-3">
                              <svg class="text-blue-400 dark:text-blue-600" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#60A5FA" fill="none" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                              <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"></path>
                              <path d="M18 14h-8"></path><path d="M15 18h-5"></path><path d="M10 6h8v4h-8V6Z"></path></svg>
                              Articles
                          </a>
                          <button class="cursor-pointer bg-white inline-flex items-center justify-center gap-2 text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-[#F5F5F5] hover:text-[#FACC14] h-9 rounded-md px-3">
                              <svg class="text-yellow-400 dark:text-yellow-600" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#FACC14" fill="none" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.5 3H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V8.5L15.5 3Z"></path><path d="M15 3v6h6"></path></svg>
                              Notes
                          </button>
                          <button class="cursor-pointer bg-white inline-flex items-center justify-center gap-2 text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 hover:bg-[#F5F5F5] hover:text-[#FB923C] h-9 rounded-md px-3">
                              <svg class="text-orange-400 dark:text-orange-600" stroke-linejoin="round" stroke-linecap="round" stroke-width="2" stroke="#FB923C" fill="#FB923C" viewBox="0 0 24 24" height="22" width="22" xmlns="http://www.w3.org/2000/svg">
                              <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
                              Reviews
                          </button>
                      </div>
                    </div>
                </div>
        </section>
        <section class="text-gray-600 body-font">
            <div class="container mx-auto px-5 py-24">
                <div class="container">
                    <div class="bubble"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="bubble"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="bubble"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="bubble"><span></span><span></span><span></span><span></span><span></span></div>
                    <div class="bubble"><span></span><span></span><span></span><span></span><span></span></div>
                 </div>
            </div>
        </section>
    </body>
</html>
