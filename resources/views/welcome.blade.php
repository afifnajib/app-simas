<!DOCTYPE html>
<html class="dark" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>App SIMAS</title>
        @vite('resources/css/app.css')

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        {{-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0"> --}}
        <div class="isolate md:pb-[10%]">
            {{-- <div class="absolute inset-x-0 top-[-20rem] -z-10 transform-gpu overflow-hidden sm:top-[-20rem]">
                
            </div> --}}
            <div class="px-6 pt-6 lg:px-8">
                <nav class="flex items-center justify-between" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button" class="toggle-open -m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200 cursor-pointer ease-out duration-300">
                    <span class="sr-only">Open main menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-2xl font-semibold leading-6 text-gray-300">Product</a>

                    <a href="#" class="text-2xl font-semibold leading-6 text-gray-300">Features</a>

                    <a href="#" class="text-2xl font-semibold leading-6 text-gray-300">Marketplace</a>

                    <a href="#" class="text-2xl font-semibold leading-6 text-gray-300">Company</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    @if (Route::has('login'))
                        <div class="hidden top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="text-xl font-semibold leading-6 text-gray-300">Dashboard <span aria-hidden="true">&rarr;</span></a>
                            @else
                                <a href="{{ route('login') }}" class="text-xl font-semibold leading-6 text-gray-300">Log in <span aria-hidden="true">&rarr;</span></a>

                                {{-- @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="text-sm font-semibold leading-6 text-gray-900">Register <span aria-hidden="true">&rarr;</span></a>
                                @endif --}}
                            @endauth
                        </div>
                    @endif
                </div>
                </nav>
                <!-- Mobile menu, show/hide based on menu open state. -->
                <div role="dialog" aria-modal="true">
                <div focus="true" class="div-close hidden fixed inset-0 z-10 overflow-y-auto bg-white px-6 py-6">
                    <div class="flex items-center justify-between">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Your Company</span>
                        <img class="h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                    </a>
                    <button type="button" class="toggle-close -m-2.5 rounded-md p-2.5 text-gray-700 cursor-pointer">
                        <span class="sr-only">Close menu</span>
                        <!-- Heroicon name: outline/x-mark -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                    </div>
                    <div class="mt-6 flow-root">
                    <div class="-my-6 divide-y divide-gray-500/10">
                        <div class="space-y-2 py-6">
                        <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Product</a>

                        <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Features</a>

                        <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Marketplace</a>

                        <a href="#" class="-mx-3 block rounded-lg py-2 px-3 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-400/10">Company</a>
                        </div>
                        <div class="py-6">
                        <a href="#" class="-mx-3 block rounded-lg py-2.5 px-3 text-base font-semibold leading-6 text-gray-900 hover:bg-gray-400/10">Log in</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <main>
                <div class="relative px-6 lg:px-8">
                <div class="mx-auto max-w-[50rem] py-20 sm:py-25 lg:py-32">
                    <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                        <div class="relative rounded-full py-1 px-3 text-xl leading-6 text-gray-200 ring-1 ring-gray-400/10 hover:ring-gray-400/20">
                            Announcing our next round of funding. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>
                    <div class="text-center">
                    <h1 class="md:text-[4.75rem] font-bold tracking-tight text-gray-100 sm:text-6xl">Application for managing school data</h1>
                    <p class="mt-8 text-2xl leading-8 text-gray-300">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.</p>
                    <div class="mt-12 flex items-center justify-center gap-x-6">
                        <a href="{{ route('register') }}" class="rounded-md bg-indigo-600 px-3.5 py-1.5 text-2xl font-semibold leading-9 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get started</a>
                        <a href="#" class="text-2xl font-semibold leading-9 text-gray-300">Learn more <span aria-hidden="true">→</span></a>
                    </div>
                    </div>
                </div>
                <div class="absolute inset-x-0 md:top-[calc(100%-50rem)] -z-10 transform-gpu overflow-hidden sm:top-[calc(100%-30rem)]">
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="2000" height="1250" preserveAspectRatio="none" viewBox="0 0 2000 1250">
                        <g mask="url(&quot;#SvgjsMask1304&quot;)" fill="none">
                            <rect width="2000" height="1250" x="0" y="0" fill="url(#SvgjsLinearGradient1305)"></rect>
                            <path d="M-111.26 844.65L-111.26 844.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-111.26 844.65L-90.6 952.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-111.26 844.65L51.07 819.48" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-111.26 844.65L62.34 981.92" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-111.26 844.65L-106.34 1128.79" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-111.26 844.65L198.17 943.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-111.26 844.65L76.4 1132.38" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-90.6 952.53L-90.6 952.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-90.6 952.53L62.34 981.92" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-90.6 952.53L-106.34 1128.79" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-106.34 1128.79L-106.34 1128.79" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-106.34 1128.79L-108.16 1255.99" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-106.34 1128.79L76.4 1132.38" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-106.34 1128.79L77.35 1244.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-108.16 1255.99L-108.16 1255.99" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-108.16 1255.99L77.35 1244.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-108.16 1255.99L-68.22 1442.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-68.22 1442.49L-68.22 1442.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-68.22 1442.49L107.4 1414.6" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-68.22 1442.49L77.35 1244.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-68.22 1442.49L210.61 1387.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-68.22 1442.49L-106.34 1128.79" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M-68.22 1442.49L229.97 1310.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M51.07 819.48L51.07 819.48" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M51.07 819.48L62.34 981.92" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M51.07 819.48L238.26 794.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M51.07 819.48L198.17 943.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M51.07 819.48L-90.6 952.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M51.07 819.48L344.96 859.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M62.34 981.92L62.34 981.92" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M62.34 981.92L198.17 943.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M62.34 981.92L76.4 1132.38" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M76.4 1132.38L76.4 1132.38" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M76.4 1132.38L77.35 1244.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M77.35 1244.9L77.35 1244.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M77.35 1244.9L202.23 1152.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M77.35 1244.9L229.97 1310.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M107.4 1414.6L107.4 1414.6" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M107.4 1414.6L210.61 1387.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M107.4 1414.6L229.97 1310.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M107.4 1414.6L77.35 1244.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M238.26 794.05L238.26 794.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M238.26 794.05L344.96 859.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M238.26 794.05L198.17 943.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M198.17 943.81L198.17 943.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M198.17 943.81L344.96 859.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M202.23 1152.14L202.23 1152.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M202.23 1152.14L76.4 1132.38" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M202.23 1152.14L229.97 1310.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M202.23 1152.14L198.17 943.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M202.23 1152.14L62.34 981.92" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M202.23 1152.14L399.81 1268.54" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M229.97 1310.65L229.97 1310.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M229.97 1310.65L210.61 1387.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M210.61 1387.9L210.61 1387.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M210.61 1387.9L374.93 1447.66" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M210.61 1387.9L77.35 1244.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M210.61 1387.9L399.81 1268.54" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M210.61 1387.9L202.23 1152.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M344.96 859.05L344.96 859.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M344.96 859.05L525.92 971.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M344.96 859.05L560.64 832.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M344.96 859.05L62.34 981.92" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M399.81 1268.54L399.81 1268.54" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M399.81 1268.54L519.29 1240.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M399.81 1268.54L229.97 1310.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M399.81 1268.54L374.93 1447.66" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M399.81 1268.54L533.72 1145.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M399.81 1268.54L494.48 1430.72" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M374.93 1447.66L374.93 1447.66" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M374.93 1447.66L494.48 1430.72" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M560.64 832.11L560.64 832.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M560.64 832.11L663.38 830.12" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M560.64 832.11L642.61 945.43" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M525.92 971.11L525.92 971.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M525.92 971.11L642.61 945.43" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M525.92 971.11L560.64 832.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M525.92 971.11L533.72 1145.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M525.92 971.11L663.38 830.12" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M533.72 1145.17L533.72 1145.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M533.72 1145.17L519.29 1240.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M533.72 1145.17L669.87 1149.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M533.72 1145.17L709.65 1240.27" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M533.72 1145.17L642.61 945.43" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M519.29 1240.69L519.29 1240.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M519.29 1240.69L669.87 1149.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M494.48 1430.72L494.48 1430.72" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M494.48 1430.72L519.29 1240.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M494.48 1430.72L706.88 1415.71" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M494.48 1430.72L210.61 1387.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M656.89 672.54L656.89 672.54" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M656.89 672.54L663.38 830.12" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M656.89 672.54L560.64 832.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M656.89 672.54L836.3 842.58" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M656.89 672.54L642.61 945.43" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M656.89 672.54L810.74 941.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M663.38 830.12L663.38 830.12" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M663.38 830.12L642.61 945.43" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M663.38 830.12L836.3 842.58" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M642.61 945.43L642.61 945.43" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M642.61 945.43L810.74 941.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M642.61 945.43L669.87 1149.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M642.61 945.43L836.3 842.58" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M669.87 1149.17L669.87 1149.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M669.87 1149.17L709.65 1240.27" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M669.87 1149.17L827.85 1089.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M709.65 1240.27L709.65 1240.27" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M709.65 1240.27L832.96 1311.77" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M709.65 1240.27L706.88 1415.71" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M709.65 1240.27L519.29 1240.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M706.88 1415.71L706.88 1415.71" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M706.88 1415.71L853.08 1438.36" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M706.88 1415.71L832.96 1311.77" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M836.3 842.58L836.3 842.58" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M836.3 842.58L810.74 941.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M836.3 842.58L953.55 833.41" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M836.3 842.58L982.39 985.03" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M810.74 941.14L810.74 941.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M810.74 941.14L827.85 1089.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M827.85 1089.05L827.85 1089.05" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M827.85 1089.05L963.53 1100.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M832.96 1311.77L832.96 1311.77" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M832.96 1311.77L853.08 1438.36" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M853.08 1438.36L853.08 1438.36" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M853.08 1438.36L961.91 1423.77" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M853.08 1438.36L984.32 1280.33" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M968.3 522.96L968.3 522.96" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M968.3 522.96L1010.54 663.93" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M968.3 522.96L1124 514.04" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1010.54 663.93L1010.54 663.93" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1010.54 663.93L1147.05 681.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1010.54 663.93L953.55 833.41" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1010.54 663.93L1124 514.04" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M953.55 833.41L953.55 833.41" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M953.55 833.41L982.39 985.03" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M953.55 833.41L810.74 941.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M982.39 985.03L982.39 985.03" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M982.39 985.03L963.53 1100.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M982.39 985.03L1104.23 966.32" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M963.53 1100.18L963.53 1100.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M984.32 1280.33L984.32 1280.33" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M984.32 1280.33L1118.8 1244.3" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M984.32 1280.33L961.91 1423.77" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M984.32 1280.33L832.96 1311.77" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M984.32 1280.33L1100.79 1418.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M961.91 1423.77L961.91 1423.77" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M961.91 1423.77L1100.79 1418.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1159.2 381.91L1159.2 381.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1159.2 381.91L1251.63 406.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1159.2 381.91L1124 514.04" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1159.2 381.91L1277.68 244.94" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1124 514.04L1124 514.04" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1124 514.04L1251.63 406.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1124 514.04L1286.72 556.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1124 514.04L1147.05 681.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1147.05 681.89L1147.05 681.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1147.05 681.89L1254.49 694.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1104.23 966.32L1104.23 966.32" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1104.23 966.32L1113.05 1119.52" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1113.05 1119.52L1113.05 1119.52" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1113.05 1119.52L1118.8 1244.3" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1113.05 1119.52L1244.6 1118.48" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1113.05 1119.52L963.53 1100.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1118.8 1244.3L1118.8 1244.3" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1118.8 1244.3L1249.91 1252.37" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1118.8 1244.3L1100.79 1418.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1118.8 1244.3L1244.6 1118.48" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1118.8 1244.3L963.53 1100.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1100.79 1418.65L1100.79 1418.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1244.24 -53.7L1244.24 -53.7" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1244.24 -53.7L1286.03 78.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1244.24 -53.7L1411.97 -61.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1244.24 -53.7L1442.7 64.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1286.03 78.88L1286.03 78.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1286.03 78.88L1442.7 64.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1286.03 78.88L1277.68 244.94" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1277.68 244.94L1277.68 244.94" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1277.68 244.94L1392.96 247.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1277.68 244.94L1401.6 349.71" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1277.68 244.94L1251.63 406.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1277.68 244.94L1442.7 64.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1251.63 406.59L1251.63 406.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1251.63 406.59L1286.72 556.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1286.72 556.49L1286.72 556.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1286.72 556.49L1254.49 694.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1254.49 694.9L1254.49 694.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1254.49 694.9L1273.69 841.79" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1254.49 694.9L1443.95 673.33" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1254.49 694.9L1430.81 801.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1273.69 841.79L1273.69 841.79" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1273.69 841.79L1430.81 801.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1273.69 841.79L1391.98 1003.5" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1273.69 841.79L1147.05 681.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1273.69 841.79L1104.23 966.32" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1273.69 841.79L1443.95 673.33" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1244.6 1118.48L1244.6 1118.48" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1244.6 1118.48L1249.91 1252.37" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1249.91 1252.37L1249.91 1252.37" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1250.68 1412.13L1250.68 1412.13" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1250.68 1412.13L1100.79 1418.65" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1250.68 1412.13L1249.91 1252.37" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1250.68 1412.13L1426.3 1451.09" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1411.97 -61.89L1411.97 -61.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1411.97 -61.89L1442.7 64.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1411.97 -61.89L1547.36 -44.96" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1411.97 -61.89L1286.03 78.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1411.97 -61.89L1603.9 47.22" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1442.7 64.18L1442.7 64.18" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1442.7 64.18L1547.36 -44.96" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1442.7 64.18L1603.9 47.22" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1442.7 64.18L1392.96 247.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1392.96 247.02L1392.96 247.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1392.96 247.02L1401.6 349.71" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1392.96 247.02L1540.49 357.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1401.6 349.71L1401.6 349.71" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1401.6 349.71L1540.49 357.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1401.6 349.71L1251.63 406.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1436.6 520.03L1436.6 520.03" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1436.6 520.03L1566.09 525.2" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1436.6 520.03L1443.95 673.33" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1436.6 520.03L1286.72 556.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1443.95 673.33L1443.95 673.33" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1443.95 673.33L1430.81 801.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1443.95 673.33L1595.85 650.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1430.81 801.49L1430.81 801.49" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1430.81 801.49L1604.77 847.31" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1430.81 801.49L1391.98 1003.5" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1430.81 801.49L1595.85 650.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1391.98 1003.5L1391.98 1003.5" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1391.98 1003.5L1388.26 1131.58" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1391.98 1003.5L1244.6 1118.48" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1391.98 1003.5L1594.99 977.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1391.98 1003.5L1586.82 1093.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1388.26 1131.58L1388.26 1131.58" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1388.26 1131.58L1456.94 1243.44" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1388.26 1131.58L1244.6 1118.48" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1456.94 1243.44L1456.94 1243.44" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1456.94 1243.44L1574.93 1242.93" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1426.3 1451.09L1426.3 1451.09" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1426.3 1451.09L1546.31 1421.15" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1547.36 -44.96L1547.36 -44.96" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1547.36 -44.96L1603.9 47.22" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1603.9 47.22L1603.9 47.22" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1603.9 47.22L1709.68 107.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1603.9 47.22L1598.66 229.19" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1598.66 229.19L1598.66 229.19" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1598.66 229.19L1540.49 357.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1540.49 357.89L1540.49 357.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1540.49 357.89L1700.79 390.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1566.09 525.2L1566.09 525.2" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1566.09 525.2L1595.85 650.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1566.09 525.2L1540.49 357.89" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1595.85 650.81L1595.85 650.81" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1595.85 650.81L1752.78 700.08" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1595.85 650.81L1604.77 847.31" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1595.85 650.81L1436.6 520.03" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1595.85 650.81L1753.21 498.63" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1604.77 847.31L1604.77 847.31" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1604.77 847.31L1594.99 977.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1604.77 847.31L1749.63 823.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1604.77 847.31L1689.29 977.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1594.99 977.68L1594.99 977.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1594.99 977.68L1689.29 977.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1594.99 977.68L1586.82 1093.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1594.99 977.68L1743.42 1123.4" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1594.99 977.68L1749.63 823.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1586.82 1093.68L1586.82 1093.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1586.82 1093.68L1574.93 1242.93" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1574.93 1242.93L1574.93 1242.93" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1574.93 1242.93L1706.19 1269.34" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1574.93 1242.93L1546.31 1421.15" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1574.93 1242.93L1743.42 1123.4" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1574.93 1242.93L1388.26 1131.58" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1546.31 1421.15L1546.31 1421.15" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1546.31 1421.15L1456.94 1243.44" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1546.31 1421.15L1706.19 1269.34" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1709.68 107.14L1709.68 107.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1709.68 107.14L1849.81 61.52" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1700.79 390.88L1700.79 390.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1700.79 390.88L1753.21 498.63" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1700.79 390.88L1876.05 361.35" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1700.79 390.88L1566.09 525.2" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1700.79 390.88L1598.66 229.19" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1700.79 390.88L1905.55 534.76" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1753.21 498.63L1753.21 498.63" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1753.21 498.63L1905.55 534.76" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1753.21 498.63L1876.05 361.35" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1753.21 498.63L1566.09 525.2" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1752.78 700.08L1752.78 700.08" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1752.78 700.08L1749.63 823.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1752.78 700.08L1878.91 707.56" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1749.63 823.53L1749.63 823.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1749.63 823.53L1902.66 793.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1689.29 977.88L1689.29 977.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1689.29 977.88L1586.82 1093.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1689.29 977.88L1743.42 1123.4" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1689.29 977.88L1749.63 823.53" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1689.29 977.88L1841.45 1106.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1743.42 1123.4L1743.42 1123.4" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1743.42 1123.4L1841.45 1106.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1743.42 1123.4L1706.19 1269.34" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1706.19 1269.34L1706.19 1269.34" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1706.19 1269.34L1881.31 1252.09" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1706.19 1269.34L1841.45 1106.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1876.5 -98.11L1876.5 -98.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1876.5 -98.11L1996.48 -56.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1876.5 -98.11L1849.81 61.52" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1876.5 -98.11L2051.55 74.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1876.5 -98.11L1709.68 107.14" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1849.81 61.52L1849.81 61.52" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1849.81 61.52L1867.31 201.75" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1849.81 61.52L1996.48 -56.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1849.81 61.52L2051.55 74.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1849.81 61.52L2035.48 219.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1867.31 201.75L1867.31 201.75" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1867.31 201.75L1876.05 361.35" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1876.05 361.35L1876.05 361.35" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1876.05 361.35L1905.55 534.76" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1905.55 534.76L1905.55 534.76" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1905.55 534.76L2003.06 512.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1878.91 707.56L1878.91 707.56" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1878.91 707.56L1902.66 793.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1902.66 793.02L1902.66 793.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1902.66 793.02L2041.14 851.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1902.66 793.02L2019.16 672.47" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1902.66 793.02L1752.78 700.08" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1894.24 987.41L1894.24 987.41" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1894.24 987.41L1995.41 998.28" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1894.24 987.41L1841.45 1106.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1894.24 987.41L1902.66 793.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1841.45 1106.68L1841.45 1106.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1881.31 1252.09L1881.31 1252.09" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1881.31 1252.09L2027.73 1270.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1881.31 1252.09L1841.45 1106.68" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1881.31 1252.09L2030.72 1160.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1904.34 1461.03L1904.34 1461.03" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1904.34 1461.03L1881.31 1252.09" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1904.34 1461.03L2027.73 1270.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1904.34 1461.03L2145.72 1446.21" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1904.34 1461.03L1706.19 1269.34" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1904.34 1461.03L2174.68 1288.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1996.48 -56.69L1996.48 -56.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2051.55 74.91L2051.55 74.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2051.55 74.91L2174.11 107.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2051.55 74.91L1996.48 -56.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2051.55 74.91L2035.48 219.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2035.48 219.11L2035.48 219.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2035.48 219.11L2173.78 241.73" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2035.48 219.11L2054.84 378.31" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2035.48 219.11L1867.31 201.75" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2035.48 219.11L2174.11 107.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2054.84 378.31L2054.84 378.31" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2054.84 378.31L2163.67 363.86" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2054.84 378.31L2003.06 512.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2003.06 512.17L2003.06 512.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2019.16 672.47L2019.16 672.47" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2019.16 672.47L2137.85 655.01" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2019.16 672.47L1878.91 707.56" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2019.16 672.47L2003.06 512.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2019.16 672.47L1905.55 534.76" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2019.16 672.47L2041.14 851.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2041.14 851.91L2041.14 851.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2041.14 851.91L1995.41 998.28" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2041.14 851.91L2198.33 859.83" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2041.14 851.91L2140.09 974.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2041.14 851.91L1894.24 987.41" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1995.41 998.28L1995.41 998.28" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M1995.41 998.28L2140.09 974.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2030.72 1160.91L2030.72 1160.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2030.72 1160.91L2027.73 1270.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2030.72 1160.91L2158.56 1157.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2027.73 1270.88L2027.73 1270.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.45 -53.76L2173.45 -53.76" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.45 -53.76L2174.11 107.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.45 -53.76L1996.48 -56.69" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.45 -53.76L2051.55 74.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.45 -53.76L2173.78 241.73" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.45 -53.76L1876.5 -98.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.45 -53.76L2035.48 219.11" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2174.11 107.02L2174.11 107.02" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2174.11 107.02L2173.78 241.73" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.78 241.73L2173.78 241.73" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.78 241.73L2163.67 363.86" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2173.78 241.73L2054.84 378.31" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2163.67 363.86L2163.67 363.86" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2163.67 363.86L2185.55 500.95" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2185.55 500.95L2185.55 500.95" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2185.55 500.95L2137.85 655.01" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2185.55 500.95L2054.84 378.31" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2185.55 500.95L2003.06 512.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2185.55 500.95L2019.16 672.47" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2137.85 655.01L2137.85 655.01" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2137.85 655.01L2003.06 512.17" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2137.85 655.01L2198.33 859.83" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2137.85 655.01L2041.14 851.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2137.85 655.01L1905.55 534.76" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2198.33 859.83L2198.33 859.83" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2198.33 859.83L2140.09 974.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2198.33 859.83L1995.41 998.28" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2140.09 974.59L2140.09 974.59" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2140.09 974.59L2158.56 1157.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2140.09 974.59L2030.72 1160.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2158.56 1157.88L2158.56 1157.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2158.56 1157.88L2174.68 1288.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2174.68 1288.9L2174.68 1288.9" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2174.68 1288.9L2027.73 1270.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2174.68 1288.9L2145.72 1446.21" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2174.68 1288.9L2030.72 1160.91" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2174.68 1288.9L1881.31 1252.09" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2145.72 1446.21L2145.72 1446.21" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <path d="M2145.72 1446.21L2027.73 1270.88" stroke="rgba(16, 58, 102, 1)" stroke-width="1.5"></path>
                            <circle r="5" cx="-111.26" cy="844.65" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="-90.6" cy="952.53" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="-106.34" cy="1128.79" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="-108.16" cy="1255.99" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="-68.22" cy="1442.49" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="51.07" cy="819.48" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="62.34" cy="981.92" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="76.4" cy="1132.38" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="77.35" cy="1244.9" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="107.4" cy="1414.6" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="238.26" cy="794.05" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="198.17" cy="943.81" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="202.23" cy="1152.14" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="229.97" cy="1310.65" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="210.61" cy="1387.9" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="344.96" cy="859.05" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="399.81" cy="1268.54" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="374.93" cy="1447.66" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="560.64" cy="832.11" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="525.92" cy="971.11" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="533.72" cy="1145.17" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="519.29" cy="1240.69" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="494.48" cy="1430.72" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="656.89" cy="672.54" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="663.38" cy="830.12" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="642.61" cy="945.43" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="669.87" cy="1149.17" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="709.65" cy="1240.27" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="706.88" cy="1415.71" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="836.3" cy="842.58" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="810.74" cy="941.14" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="827.85" cy="1089.05" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="832.96" cy="1311.77" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="853.08" cy="1438.36" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="968.3" cy="522.96" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1010.54" cy="663.93" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="953.55" cy="833.41" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="982.39" cy="985.03" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="963.53" cy="1100.18" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="984.32" cy="1280.33" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="961.91" cy="1423.77" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1159.2" cy="381.91" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1124" cy="514.04" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1147.05" cy="681.89" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1104.23" cy="966.32" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1113.05" cy="1119.52" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1118.8" cy="1244.3" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1100.79" cy="1418.65" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1244.24" cy="-53.7" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1286.03" cy="78.88" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1277.68" cy="244.94" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1251.63" cy="406.59" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1286.72" cy="556.49" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1254.49" cy="694.9" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1273.69" cy="841.79" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1244.6" cy="1118.48" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1249.91" cy="1252.37" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1250.68" cy="1412.13" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1411.97" cy="-61.89" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1442.7" cy="64.18" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1392.96" cy="247.02" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1401.6" cy="349.71" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1436.6" cy="520.03" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1443.95" cy="673.33" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1430.81" cy="801.49" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1391.98" cy="1003.5" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1388.26" cy="1131.58" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1456.94" cy="1243.44" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1426.3" cy="1451.09" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1547.36" cy="-44.96" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1603.9" cy="47.22" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1598.66" cy="229.19" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1540.49" cy="357.89" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1566.09" cy="525.2" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1595.85" cy="650.81" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1604.77" cy="847.31" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1594.99" cy="977.68" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1586.82" cy="1093.68" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1574.93" cy="1242.93" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1546.31" cy="1421.15" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1709.68" cy="107.14" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1700.79" cy="390.88" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1753.21" cy="498.63" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1752.78" cy="700.08" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1749.63" cy="823.53" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1689.29" cy="977.88" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1743.42" cy="1123.4" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1706.19" cy="1269.34" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1876.5" cy="-98.11" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1849.81" cy="61.52" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1867.31" cy="201.75" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1876.05" cy="361.35" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1905.55" cy="534.76" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1878.91" cy="707.56" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1902.66" cy="793.02" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1894.24" cy="987.41" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1841.45" cy="1106.68" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1881.31" cy="1252.09" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1904.34" cy="1461.03" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1996.48" cy="-56.69" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2051.55" cy="74.91" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2035.48" cy="219.11" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2054.84" cy="378.31" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2003.06" cy="512.17" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2019.16" cy="672.47" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2041.14" cy="851.91" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="1995.41" cy="998.28" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2030.72" cy="1160.91" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2027.73" cy="1270.88" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2173.45" cy="-53.76" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2174.11" cy="107.02" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2173.78" cy="241.73" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2163.67" cy="363.86" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2185.55" cy="500.95" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2137.85" cy="655.01" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2198.33" cy="859.83" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2140.09" cy="974.59" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2158.56" cy="1157.88" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2174.68" cy="1288.9" fill="rgba(16, 58, 102, 1)"></circle>
                            <circle r="5" cx="2145.72" cy="1446.21" fill="rgba(16, 58, 102, 1)"></circle>
                            <path d="M-60.33 1309.13L-60.33 1309.13" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-60.33 1309.13L58.64 1264.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-60.33 1309.13L-87.59 1162.5" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-60.33 1309.13L-49.3 1458.01" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M529.22 1274.08L529.22 1274.08" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M529.22 1274.08L544.45 1420.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M529.22 1274.08L683.48 1274.89" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M544.45 1420.27L544.45 1420.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M657.41 990.52L657.41 990.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M657.41 990.52L561.03 1005.77" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M657.41 990.52L640.5 1099.09" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M657.41 990.52L803.96 971.36" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M956.35 961.38L956.35 961.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M956.35 961.38L1103.92 946.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M956.35 961.38L803.96 971.36" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M956.35 961.38L988.44 1123.24" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1136.58 1134.11L1136.58 1134.11" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1136.58 1134.11L1099 1267.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1136.58 1134.11L988.44 1123.24" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1136.58 1134.11L1294.13 1136.5" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1136.58 1134.11L1103.92 946.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1136.58 1134.11L1278.94 1279.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1136.58 1134.11L1312.19 981.11" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1312.19 981.11L1312.19 981.11" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1312.19 981.11L1426.52 1012.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1312.19 981.11L1300.87 847.91" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1294.13 1136.5L1294.13 1136.5" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1294.13 1136.5L1278.94 1279.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1294.13 1136.5L1444.75 1117.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1294.13 1136.5L1312.19 981.11" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1294.13 1136.5L1404.58 1266.04" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1278.94 1279.54L1278.94 1279.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1278.94 1279.54L1404.58 1266.04" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1278.94 1279.54L1099 1267.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.65 260.42L1739.65 260.42" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.65 260.42L1699.56 360.85" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.65 260.42L1610.71 355.58" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.65 260.42L1845.17 410.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.65 260.42L1699.9 65.18" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.65 260.42L1862.14 40.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1733.68 961.05L1733.68 961.05" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1733.68 961.05L1746.74 820.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1842.29 -57.13L1842.29 -57.13" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1842.29 -57.13L1754.48 -49.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1842.29 -57.13L1862.14 40.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1842.29 -57.13L1699.9 65.18" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1848.38 673.52L1848.38 673.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1848.38 673.52L1727.65 702.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1848.38 673.52L1846.5 806.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2036.28 1004.57L2036.28 1004.57" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2036.28 1004.57L2052.9 1131.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2036.28 1004.57L1878.85 986.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2036.28 1004.57L1994.35 818.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2036.28 1004.57L2187.55 1127.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2036.28 1004.57L1841.65 1147.21" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2036.28 1004.57L2180.24 803.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2185.9 540.42L2185.9 540.42" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2185.9 540.42L2137.53 639.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2185.9 540.42L2018.5 537.6" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2185.9 540.42L2011.6 665.95" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2185.9 540.42L2014.61 360.93" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2185.9 540.42L2180.24 803.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2185.9 540.42L1855.7 519.92" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2180.24 803.03L2180.24 803.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2180.24 803.03L2137.53 639.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2180.24 803.03L1994.35 818.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2180.24 803.03L2011.6 665.95" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2180.24 803.03L2018.5 537.6" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2187.55 1127.07L2187.55 1127.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2187.55 1127.07L2052.9 1131.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2187.55 1127.07L2139.87 1286.94" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2187.55 1127.07L2021.32 1265.93" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-87.59 1162.5L-87.59 1162.5" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-87.59 1162.5L58.64 1264.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-87.59 1162.5L87.86 1117.87" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-49.3 1458.01L-49.3 1458.01" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M-49.3 1458.01L55.18 1428.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M87.86 1117.87L87.86 1117.87" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M87.86 1117.87L58.64 1264.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M87.86 1117.87L259.57 1093.57" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M58.64 1264.74L58.64 1264.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M58.64 1264.74L55.18 1428.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M55.18 1428.74L55.18 1428.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M55.18 1428.74L210.52 1400.15" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M259.57 1093.57L259.57 1093.57" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M259.57 1093.57L370.84 1140.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M259.57 1093.57L369.69 990.29" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M217.49 1311.31L217.49 1311.31" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M217.49 1311.31L210.52 1400.15" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M217.49 1311.31L356.23 1246.56" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M217.49 1311.31L58.64 1264.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M217.49 1311.31L348.74 1453.4" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M217.49 1311.31L55.18 1428.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M210.52 1400.15L210.52 1400.15" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M210.52 1400.15L348.74 1453.4" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M369.69 990.29L369.69 990.29" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M369.69 990.29L370.84 1140.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M370.84 1140.07L370.84 1140.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M370.84 1140.07L356.23 1246.56" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M370.84 1140.07L487.5 1101.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M356.23 1246.56L356.23 1246.56" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M356.23 1246.56L529.22 1274.08" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M356.23 1246.56L259.57 1093.57" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M356.23 1246.56L487.5 1101.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M356.23 1246.56L348.74 1453.4" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M348.74 1453.4L348.74 1453.4" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M348.74 1453.4L544.45 1420.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M348.74 1453.4L529.22 1274.08" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M561.03 1005.77L561.03 1005.77" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M561.03 1005.77L487.5 1101.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M487.5 1101.23L487.5 1101.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M640.5 1099.09L640.5 1099.09" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M640.5 1099.09L561.03 1005.77" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M640.5 1099.09L487.5 1101.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M683.48 1274.89L683.48 1274.89" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M683.48 1274.89L696.41 1407.32" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M683.48 1274.89L841.1 1290.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M683.48 1274.89L640.5 1099.09" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M683.48 1274.89L544.45 1420.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M696.41 1407.32L696.41 1407.32" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M696.41 1407.32L544.45 1420.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M696.41 1407.32L855.99 1403.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M696.41 1407.32L841.1 1290.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M696.41 1407.32L529.22 1274.08" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M803.96 971.36L803.96 971.36" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M803.96 971.36L816.96 1098.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M803.96 971.36L640.5 1099.09" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M803.96 971.36L988.44 1123.24" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M803.96 971.36L561.03 1005.77" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M816.96 1098.98L816.96 1098.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M816.96 1098.98L988.44 1123.24" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M816.96 1098.98L640.5 1099.09" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M816.96 1098.98L657.41 990.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M816.96 1098.98L841.1 1290.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M841.1 1290.76L841.1 1290.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M841.1 1290.76L942.2 1290.01" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M841.1 1290.76L855.99 1403.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M841.1 1290.76L979.64 1404.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M855.99 1403.98L855.99 1403.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M855.99 1403.98L979.64 1404.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M855.99 1403.98L942.2 1290.01" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M993.35 791.46L993.35 791.46" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M993.35 791.46L1137.39 846.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M993.35 791.46L956.35 961.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M993.35 791.46L1103.92 946.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M993.35 791.46L803.96 971.36" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M993.35 791.46L1253.46 640.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M988.44 1123.24L988.44 1123.24" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M988.44 1123.24L942.2 1290.01" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M988.44 1123.24L1099 1267.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M988.44 1123.24L1103.92 946.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M942.2 1290.01L942.2 1290.01" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M942.2 1290.01L979.64 1404.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M942.2 1290.01L1099 1267.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M942.2 1290.01L816.96 1098.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M979.64 1404.76L979.64 1404.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M979.64 1404.76L1135.82 1424.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1137.39 846.22L1137.39 846.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1137.39 846.22L1103.92 946.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1103.92 946.82L1103.92 946.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1099 1267.76L1099 1267.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1135.82 1424.52L1135.82 1424.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1135.82 1424.52L1099 1267.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1135.82 1424.52L1278.94 1279.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1253.46 640.07L1253.46 640.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1253.46 640.07L1458.48 639.63" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1253.46 640.07L1300.87 847.91" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1253.46 640.07L1137.39 846.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1300.87 847.91L1300.87 847.91" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1300.87 847.91L1137.39 846.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1300.87 847.91L1426.52 1012.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1458.48 639.63L1458.48 639.63" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1458.48 639.63L1562.64 650.58" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1458.48 639.63L1543.07 501.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1458.48 639.63L1543.38 792.02" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1458.48 639.63L1300.87 847.91" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1458.48 639.63L1727.65 702.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1426.52 1012.43L1426.52 1012.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1426.52 1012.43L1444.75 1117.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1426.52 1012.43L1548.89 1098.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1426.52 1012.43L1294.13 1136.5" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1444.75 1117.43L1444.75 1117.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1444.75 1117.43L1548.89 1098.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1404.58 1266.04L1404.58 1266.04" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1404.58 1266.04L1444.75 1117.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1404.58 1266.04L1430.05 1441.79" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1404.58 1266.04L1548.89 1098.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1404.58 1266.04L1601.33 1393.18" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1430.05 1441.79L1430.05 1441.79" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1430.05 1441.79L1601.33 1393.18" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1430.05 1441.79L1278.94 1279.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1430.05 1441.79L1721.04 1452.78" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1610.71 355.58L1610.71 355.58" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1610.71 355.58L1699.56 360.85" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1610.71 355.58L1543.07 501.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1610.71 355.58L1739.12 530.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1610.71 355.58L1845.17 410.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1610.71 355.58L1855.7 519.92" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.07 501.54L1543.07 501.54" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.07 501.54L1562.64 650.58" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.07 501.54L1739.12 530.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.07 501.54L1699.56 360.85" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1562.64 650.58L1562.64 650.58" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1562.64 650.58L1543.38 792.02" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1562.64 650.58L1727.65 702.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1562.64 650.58L1739.12 530.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.38 792.02L1543.38 792.02" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.38 792.02L1727.65 702.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.38 792.02L1746.74 820.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.38 792.02L1300.87 847.91" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1543.38 792.02L1426.52 1012.43" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1548.89 1098.27L1548.89 1098.27" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1548.89 1098.27L1707.71 1106.06" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1548.89 1098.27L1733.68 961.05" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1601.33 1393.18L1601.33 1393.18" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1601.33 1393.18L1721.04 1452.78" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1754.48 -49.86L1754.48 -49.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1754.48 -49.86L1699.9 65.18" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1754.48 -49.86L1862.14 40.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1699.9 65.18L1699.9 65.18" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1699.9 65.18L1862.14 40.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1699.56 360.85L1699.56 360.85" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1699.56 360.85L1845.17 410.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1699.56 360.85L1739.12 530.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.12 530.03L1739.12 530.03" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.12 530.03L1855.7 519.92" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.12 530.03L1845.17 410.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.12 530.03L1727.65 702.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1739.12 530.03L1848.38 673.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1727.65 702.86L1727.65 702.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1727.65 702.86L1746.74 820.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1727.65 702.86L1846.5 806.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1746.74 820.22L1746.74 820.22" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1746.74 820.22L1846.5 806.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1746.74 820.22L1848.38 673.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1707.71 1106.06L1707.71 1106.06" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1707.71 1106.06L1841.65 1147.21" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1707.71 1106.06L1733.68 961.05" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1707.71 1106.06L1725.46 1273.79" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1707.71 1106.06L1878.85 986.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1707.71 1106.06L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1725.46 1273.79L1725.46 1273.79" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1725.46 1273.79L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1725.46 1273.79L1841.65 1147.21" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1721.04 1452.78L1721.04 1452.78" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1721.04 1452.78L1878.46 1456.77" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1721.04 1452.78L1725.46 1273.79" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1721.04 1452.78L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1721.04 1452.78L2040.24 1447.53" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1862.14 40.82L1862.14 40.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1862.14 40.82L2001.09 91.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1845.17 410.74L1845.17 410.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1845.17 410.74L1855.7 519.92" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1855.7 519.92L1855.7 519.92" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1855.7 519.92L1848.38 673.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1846.5 806.86L1846.5 806.86" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1846.5 806.86L1994.35 818.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1846.5 806.86L1878.85 986.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1878.85 986.98L1878.85 986.98" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1878.85 986.98L1733.68 961.05" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1878.85 986.98L1841.65 1147.21" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1841.65 1147.21L1841.65 1147.21" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1841.65 1147.21L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1841.65 1147.21L2052.9 1131.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1845.6 1294L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1878.46 1456.77L1878.46 1456.77" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1878.46 1456.77L2040.24 1447.53" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1878.46 1456.77L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1878.46 1456.77L2021.32 1265.93" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2045.19 -101.32L2045.19 -101.32" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2045.19 -101.32L2169.61 -79.24" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2045.19 -101.32L2001.09 91.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2045.19 -101.32L2156.96 68.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2045.19 -101.32L1842.29 -57.13" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2001.09 91.07L2001.09 91.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2001.09 91.07L2038.08 228.72" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2001.09 91.07L2156.96 68.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2038.08 228.72L2038.08 228.72" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2038.08 228.72L2145.34 192.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2038.08 228.72L2014.61 360.93" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2038.08 228.72L2156.96 68.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2038.08 228.72L1862.14 40.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2014.61 360.93L2014.61 360.93" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2014.61 360.93L1845.17 410.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2014.61 360.93L2018.5 537.6" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2018.5 537.6L2018.5 537.6" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2018.5 537.6L2011.6 665.95" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2018.5 537.6L2137.53 639.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2018.5 537.6L1855.7 519.92" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2011.6 665.95L2011.6 665.95" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2011.6 665.95L2137.53 639.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2011.6 665.95L1994.35 818.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2011.6 665.95L1848.38 673.52" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M1994.35 818.76L1994.35 818.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2052.9 1131.38L2052.9 1131.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2021.32 1265.93L2021.32 1265.93" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2021.32 1265.93L2139.87 1286.94" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2021.32 1265.93L2052.9 1131.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2021.32 1265.93L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2021.32 1265.93L2040.24 1447.53" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2021.32 1265.93L1841.65 1147.21" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2040.24 1447.53L2040.24 1447.53" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2040.24 1447.53L2147.51 1461.13" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2040.24 1447.53L2139.87 1286.94" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2040.24 1447.53L1845.6 1294" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2040.24 1447.53L2052.9 1131.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2169.61 -79.24L2169.61 -79.24" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2169.61 -79.24L2156.96 68.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2169.61 -79.24L2001.09 91.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2169.61 -79.24L2145.34 192.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2156.96 68.23L2156.96 68.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2156.96 68.23L2145.34 192.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2156.96 68.23L1862.14 40.82" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2145.34 192.74L2145.34 192.74" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2137.53 639.23L2137.53 639.23" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2137.53 639.23L1994.35 818.76" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2139.87 1286.94L2139.87 1286.94" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2139.87 1286.94L2147.51 1461.13" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2139.87 1286.94L2052.9 1131.38" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2147.51 1461.13L2147.51 1461.13" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2147.51 1461.13L2021.32 1265.93" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2147.51 1461.13L1878.46 1456.77" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <path d="M2147.51 1461.13L2187.55 1127.07" stroke="hsl(228.5, 97.2%, 54.8%)" stroke-width="1.5"></path>
                            <circle r="25" cx="-60.33" cy="1309.13" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="529.22" cy="1274.08" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="544.45" cy="1420.27" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="657.41" cy="990.52" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="956.35" cy="961.38" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1136.58" cy="1134.11" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1312.19" cy="981.11" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1294.13" cy="1136.5" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1278.94" cy="1279.54" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1739.65" cy="260.42" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1733.68" cy="961.05" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1842.29" cy="-57.13" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="1848.38" cy="673.52" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="2036.28" cy="1004.57" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="2185.9" cy="540.42" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="2180.24" cy="803.03" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="25" cx="2187.55" cy="1127.07" fill="url(#SvgjsRadialGradient1306)"></circle>
                            <circle r="5" cx="-87.59" cy="1162.5" fill="#8195ea"></circle>
                            <circle r="5" cx="-49.3" cy="1458.01" fill="#8195ea"></circle>
                            <circle r="5" cx="87.86" cy="1117.87" fill="#8195ea"></circle>
                            <circle r="5" cx="58.64" cy="1264.74" fill="#8195ea"></circle>
                            <circle r="5" cx="55.18" cy="1428.74" fill="#8195ea"></circle>
                            <circle r="5" cx="259.57" cy="1093.57" fill="#8195ea"></circle>
                            <circle r="5" cx="217.49" cy="1311.31" fill="#8195ea"></circle>
                            <circle r="5" cx="210.52" cy="1400.15" fill="#8195ea"></circle>
                            <circle r="5" cx="369.69" cy="990.29" fill="#8195ea"></circle>
                            <circle r="5" cx="370.84" cy="1140.07" fill="#8195ea"></circle>
                            <circle r="5" cx="356.23" cy="1246.56" fill="#8195ea"></circle>
                            <circle r="5" cx="348.74" cy="1453.4" fill="#8195ea"></circle>
                            <circle r="5" cx="561.03" cy="1005.77" fill="#8195ea"></circle>
                            <circle r="5" cx="487.5" cy="1101.23" fill="#8195ea"></circle>
                            <circle r="5" cx="640.5" cy="1099.09" fill="#8195ea"></circle>
                            <circle r="5" cx="683.48" cy="1274.89" fill="#8195ea"></circle>
                            <circle r="5" cx="696.41" cy="1407.32" fill="#8195ea"></circle>
                            <circle r="5" cx="803.96" cy="971.36" fill="#8195ea"></circle>
                            <circle r="5" cx="816.96" cy="1098.98" fill="#8195ea"></circle>
                            <circle r="5" cx="841.1" cy="1290.76" fill="#8195ea"></circle>
                            <circle r="5" cx="855.99" cy="1403.98" fill="#8195ea"></circle>
                            <circle r="5" cx="993.35" cy="791.46" fill="#8195ea"></circle>
                            <circle r="5" cx="988.44" cy="1123.24" fill="#8195ea"></circle>
                            <circle r="5" cx="942.2" cy="1290.01" fill="#8195ea"></circle>
                            <circle r="5" cx="979.64" cy="1404.76" fill="#8195ea"></circle>
                            <circle r="5" cx="1137.39" cy="846.22" fill="#8195ea"></circle>
                            <circle r="5" cx="1103.92" cy="946.82" fill="#8195ea"></circle>
                            <circle r="5" cx="1099" cy="1267.76" fill="#8195ea"></circle>
                            <circle r="5" cx="1135.82" cy="1424.52" fill="#8195ea"></circle>
                            <circle r="5" cx="1253.46" cy="640.07" fill="#8195ea"></circle>
                            <circle r="5" cx="1300.87" cy="847.91" fill="#8195ea"></circle>
                            <circle r="5" cx="1458.48" cy="639.63" fill="#8195ea"></circle>
                            <circle r="5" cx="1426.52" cy="1012.43" fill="#8195ea"></circle>
                            <circle r="5" cx="1444.75" cy="1117.43" fill="#8195ea"></circle>
                            <circle r="5" cx="1404.58" cy="1266.04" fill="#8195ea"></circle>
                            <circle r="5" cx="1430.05" cy="1441.79" fill="#8195ea"></circle>
                            <circle r="5" cx="1610.71" cy="355.58" fill="#8195ea"></circle>
                            <circle r="5" cx="1543.07" cy="501.54" fill="#8195ea"></circle>
                            <circle r="5" cx="1562.64" cy="650.58" fill="#8195ea"></circle>
                            <circle r="5" cx="1543.38" cy="792.02" fill="#8195ea"></circle>
                            <circle r="5" cx="1548.89" cy="1098.27" fill="#8195ea"></circle>
                            <circle r="5" cx="1601.33" cy="1393.18" fill="#8195ea"></circle>
                            <circle r="5" cx="1754.48" cy="-49.86" fill="#8195ea"></circle>
                            <circle r="5" cx="1699.9" cy="65.18" fill="#8195ea"></circle>
                            <circle r="5" cx="1699.56" cy="360.85" fill="#8195ea"></circle>
                            <circle r="5" cx="1739.12" cy="530.03" fill="#8195ea"></circle>
                            <circle r="5" cx="1727.65" cy="702.86" fill="#8195ea"></circle>
                            <circle r="5" cx="1746.74" cy="820.22" fill="#8195ea"></circle>
                            <circle r="5" cx="1707.71" cy="1106.06" fill="#8195ea"></circle>
                            <circle r="5" cx="1725.46" cy="1273.79" fill="#8195ea"></circle>
                            <circle r="5" cx="1721.04" cy="1452.78" fill="#8195ea"></circle>
                            <circle r="5" cx="1862.14" cy="40.82" fill="#8195ea"></circle>
                            <circle r="5" cx="1845.17" cy="410.74" fill="#8195ea"></circle>
                            <circle r="5" cx="1855.7" cy="519.92" fill="#8195ea"></circle>
                            <circle r="5" cx="1846.5" cy="806.86" fill="#8195ea"></circle>
                            <circle r="5" cx="1878.85" cy="986.98" fill="#8195ea"></circle>
                            <circle r="5" cx="1841.65" cy="1147.21" fill="#8195ea"></circle>
                            <circle r="5" cx="1845.6" cy="1294" fill="#8195ea"></circle>
                            <circle r="5" cx="1878.46" cy="1456.77" fill="#8195ea"></circle>
                            <circle r="5" cx="2045.19" cy="-101.32" fill="#8195ea"></circle>
                            <circle r="5" cx="2001.09" cy="91.07" fill="#8195ea"></circle>
                            <circle r="5" cx="2038.08" cy="228.72" fill="#8195ea"></circle>
                            <circle r="5" cx="2014.61" cy="360.93" fill="#8195ea"></circle>
                            <circle r="5" cx="2018.5" cy="537.6" fill="#8195ea"></circle>
                            <circle r="5" cx="2011.6" cy="665.95" fill="#8195ea"></circle>
                            <circle r="5" cx="1994.35" cy="818.76" fill="#8195ea"></circle>
                            <circle r="5" cx="2052.9" cy="1131.38" fill="#8195ea"></circle>
                            <circle r="5" cx="2021.32" cy="1265.93" fill="#8195ea"></circle>
                            <circle r="5" cx="2040.24" cy="1447.53" fill="#8195ea"></circle>
                            <circle r="5" cx="2169.61" cy="-79.24" fill="#8195ea"></circle>
                            <circle r="5" cx="2156.96" cy="68.23" fill="#8195ea"></circle>
                            <circle r="5" cx="2145.34" cy="192.74" fill="#8195ea"></circle>
                            <circle r="5" cx="2137.53" cy="639.23" fill="#8195ea"></circle>
                            <circle r="5" cx="2139.87" cy="1286.94" fill="#8195ea"></circle>
                            <circle r="5" cx="2147.51" cy="1461.13" fill="#8195ea"></circle>
                        </g>
                        <defs>
                            <mask id="SvgjsMask1304">
                                <rect width="2000" height="1250" fill="#ffffff"></rect>
                            </mask>
                            <linearGradient x1="9.37%" y1="-15%" x2="90.63%" y2="115%" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1305">
                                <stop stop-color="#0e2a47" offset="0"></stop>
                                <stop stop-color="rgba(0, 0, 0, 0.86)" offset="1"></stop>
                            </linearGradient>
                            <radialGradient id="SvgjsRadialGradient1306">
                                <stop stop-color="#ffffff" offset="0.1"></stop>
                                <stop stop-color="rgba(3, 43, 212, 1)" offset="0.2"></stop>
                                <stop stop-color="rgba(3, 43, 212, 0)" offset="1"></stop>
                            </radialGradient>
                        </defs>
                    </svg>
                </div>
                <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-2xl sm:top-[calc(100%-30rem)]">
                    <svg class="relative left-[calc(50%+3rem)] h-[21.1875rem] max-w-none -translate-x-1/2 sm:left-[calc(50%+36rem)] sm:h-[42.375rem]" viewBox="0 0 1155 678" xmlns="http://www.w3.org/2000/svg">
                    <path fill="url(#ecb5b0c9-546c-4772-8c71-4d3f06d544bc)" fill-opacity=".3" d="M317.219 518.975L203.852 678 0 438.341l317.219 80.634 204.172-286.402c1.307 132.337 45.083 346.658 209.733 145.248C936.936 126.058 882.053-94.234 1031.02 41.331c119.18 108.451 130.68 295.337 121.53 375.223L855 299l21.173 362.054-558.954-142.079z" />
                    <defs>
                        <linearGradient id="ecb5b0c9-546c-4772-8c71-4d3f06d544bc" x1="1155.49" x2="-78.208" y1=".177" y2="474.645" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#9089FC"></stop>
                        <stop offset="1" stop-color="#FF80B5"></stop>
                        </linearGradient>
                    </defs>
                    </svg>
                </div>
                </div>
                <svg class="absolute top-[74rem]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#131c3b" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,160C274.3,149,343,171,411,176C480,181,549,171,617,154.7C685.7,139,754,117,823,122.7C891.4,128,960,160,1029,149.3C1097.1,139,1166,85,1234,74.7C1302.9,64,1371,96,1406,112L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
                </svg>
                <div class="mx-auto max-w-7xl px-6 lg:px-8 lg:mt-[45rem]">
                    <div class="mx-auto max-w-2xl lg:text-center">
                      <h2 class="text-xl font-semibold leading-8 tracking-tight text-indigo-400">Deploy faster</h2>
                      <p class="mt-2 text-3xl font-bold tracking-tight text-gray-200 sm:text-4xl">Everything you need to deploy your app</p>
                      <p class="mt-6 text-lg leading-8 text-gray-200">Quis tellus eget adipiscing convallis sit sit eget aliquet quis. Suspendisse eget egestas a elementum pulvinar et feugiat blandit at. In mi viverra elit nunc.</p>
                    </div>
                    <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-4xl">
                      <dl class="grid max-w-xl grid-cols-1 gap-y-10 gap-x-8 lg:max-w-none lg:grid-cols-2 lg:gap-y-16">
                        <div class="relative pl-16">
                          <dt class="text-base font-semibold leading-7 text-gray-200">
                            <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                              <!-- Heroicon name: outline/cloud-arrow-up -->
                              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 16.5V9.75m0 0l3 3m-3-3l-3 3M6.75 19.5a4.5 4.5 0 01-1.41-8.775 5.25 5.25 0 0110.233-2.33 3 3 0 013.758 3.848A3.752 3.752 0 0118 19.5H6.75z" />
                              </svg>
                            </div>
                            Push to deploy
                          </dt>
                          <dd class="mt-2 text-base leading-7 text-gray-300">Morbi viverra dui mi arcu sed. Tellus semper adipiscing suspendisse semper morbi. Odio urna massa nunc massa.</dd>
                        </div>
                
                        <div class="relative pl-16">
                          <dt class="text-base font-semibold leading-7 text-gray-200">
                            <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                              <!-- Heroicon name: outline/lock-closed -->
                              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                              </svg>
                            </div>
                            SSL certificates
                          </dt>
                          <dd class="mt-2 text-base leading-7 text-gray-300">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget. Sem sodales gravida quam turpis enim lacus amet.</dd>
                        </div>
                
                        <div class="relative pl-16">
                          <dt class="text-base font-semibold leading-7 text-gray-200">
                            <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                              <!-- Heroicon name: outline/arrow-path -->
                              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                              </svg>
                            </div>
                            Simple queues
                          </dt>
                          <dd class="mt-2 text-base leading-7 text-gray-300">Quisque est vel vulputate cursus. Risus proin diam nunc commodo. Lobortis auctor congue commodo diam neque.</dd>
                        </div>
                
                        <div class="relative pl-16">
                          <dt class="text-base font-semibold leading-7 text-gray-200">
                            <div class="absolute top-0 left-0 flex h-10 w-10 items-center justify-center rounded-lg bg-indigo-600">
                              <!-- Heroicon name: outline/finger-print -->
                              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                              </svg>
                            </div>
                            Advanced security
                          </dt>
                          <dd class="mt-2 text-base leading-7 text-gray-300">Arcu egestas dolor vel iaculis in ipsum mauris. Tincidunt mattis aliquet hac quis. Id hac maecenas ac donec pharetra eget.</dd>
                        </div>
                      </dl>
                    </div>
                  </div>
            </main>
        </div>
        <div class="relative bg-white dark:bg-black py-40 sm:py-40 md:top-0 isolate">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#131c3b" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,160C274.3,149,343,171,411,176C480,181,549,171,617,154.7C685.7,139,754,117,823,122.7C891.4,128,960,160,1029,149.3C1097.1,139,1166,85,1234,74.7C1302.9,64,1371,96,1406,112L1440,128L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path>
            </svg> --}}
            {{-- <div class="absolute inset-x-0 md:top-[56rem] -z-10 transform-gpu overflow-hidden sm:top-[56rem]">
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="1500" height="560" preserveAspectRatio="none" viewBox="0 0 1440 560">
                    <g clip-path="url(&quot;#SvgjsClipPath1147&quot;)" fill="none">
                        <circle r="14.485" cx="373.12" cy="454.51" fill="url(#SvgjsLinearGradient1148)"></circle>
                        <circle r="38.15" cx="733.88" cy="29.28" fill="url(#SvgjsLinearGradient1149)"></circle>
                        <circle r="54.84" cx="9.29" cy="213.75" fill="url(#SvgjsLinearGradient1150)"></circle>
                        <circle r="38.63" cx="383.05" cy="469.33" fill="url(#SvgjsLinearGradient1151)"></circle>
                        <circle r="30.74" cx="1394.14" cy="18.43" fill="url(#SvgjsLinearGradient1152)"></circle>
                        <circle r="41.47" cx="898.85" cy="515.61" fill="#43468b"></circle>
                        <circle r="39.05" cx="329.84" cy="528.56" fill="#43468b"></circle>
                        <circle r="14.8" cx="1105.52" cy="397.96" fill="url(#SvgjsLinearGradient1153)"></circle>
                        <circle r="30.495" cx="57.69" cy="62.63" fill="url(#SvgjsLinearGradient1154)"></circle>
                        <circle r="55.59" cx="837.84" cy="305.74" fill="url(#SvgjsLinearGradient1155)"></circle>
                        <circle r="36.225" cx="1244.1" cy="148.57" fill="url(#SvgjsLinearGradient1156)"></circle>
                        <circle r="28.975" cx="1265.86" cy="470.99" fill="url(#SvgjsLinearGradient1157)"></circle>
                    </g>
                    <defs>
                        <clipPath id="SvgjsClipPath1147">
                            <rect width="1440" height="560" x="0" y="0"></rect>
                        </clipPath>
                        <linearGradient x1="344.15" y1="454.51" x2="402.09" y2="454.51" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1148">
                            <stop stop-color="#84b6e0" offset="0.1"></stop>
                            <stop stop-color="#464a8f" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="657.58" y1="29.28" x2="810.1800000000001" y2="29.28" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1149">
                            <stop stop-color="#84b6e0" offset="0.1"></stop>
                            <stop stop-color="#464a8f" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="-100.39000000000001" y1="213.75" x2="118.97" y2="213.75" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1150">
                            <stop stop-color="#84b6e0" offset="0.1"></stop>
                            <stop stop-color="#464a8f" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="305.79" y1="469.33" x2="460.31000000000006" y2="469.33" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1151">
                            <stop stop-color="#84b6e0" offset="0.1"></stop>
                            <stop stop-color="#464a8f" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="1332.66" y1="18.43" x2="1455.6200000000001" y2="18.43" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1152">
                            <stop stop-color="#f29b7c" offset="0.1"></stop>
                            <stop stop-color="#7e6286" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="1075.92" y1="397.96" x2="1135.1200000000001" y2="397.96" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1153">
                            <stop stop-color="#e298de" offset="0.1"></stop>
                            <stop stop-color="#484687" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="-3.3000000000000043" y1="62.63" x2="118.68" y2="62.63" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1154">
                            <stop stop-color="#32325d" offset="0.1"></stop>
                            <stop stop-color="#424488" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="726.6600000000001" y1="305.74" x2="949.0200000000001" y2="305.74" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1155">
                            <stop stop-color="#ab3c51" offset="0.1"></stop>
                            <stop stop-color="#4f4484" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="1171.6499999999999" y1="148.57" x2="1316.55" y2="148.57" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1156">
                            <stop stop-color="#f29b7c" offset="0.1"></stop>
                            <stop stop-color="#7e6286" offset="0.9"></stop>
                        </linearGradient>
                        <linearGradient x1="1207.9099999999999" y1="470.99" x2="1323.81" y2="470.99" gradientUnits="userSpaceOnUse" id="SvgjsLinearGradient1157">
                            <stop stop-color="#ab3c51" offset="0.1"></stop>
                            <stop stop-color="#4f4484" offset="0.9"></stop>
                        </linearGradient>
                    </defs>
                </svg>
            </div> --}}
          </div>
          
        {{-- </div> --}}
    </body>
</html>
<script>
    const tClose = document.querySelector(".toggle-close")
    const dClose = document.querySelector(".div-close")
    const tOpen = document.querySelector(".toggle-open")
    tOpen.addEventListener('click', () => {
        tOpen.click ? dClose.classList.remove("hidden") && tOpen.classList.add("hidden") : dClose.classList.add("visibility");
    });
    tClose.addEventListener('click', () => {
        tClose.click ? dClose.classList.add("hidden") : dClose.classList.remove("visibility");
    })
</script>