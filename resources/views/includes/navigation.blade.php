<header class="flex flex-wrap sm:justify-start sm:flex-nowrap z-50 w-full bg-white border-b border-white/[.5] py-5 sm:py-0 shadow-lg">
    <nav class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8" aria-label="Global">
        <div class="flex items-center justify-between">
            <a class="flex-none text-xl font-semibold text-black" href="/" aria-label="Brand">
                <img src="/images/summit_title_bw_logo.png" alt="Summit Title Logo" class="h-14">
            </a>
            <div class="sm:hidden">
                <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-2 rounded-md border border-white/[.5] font-medium text-black/[.5] shadow-sm align-middle hover:bg-white/[.1] hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                    <svg class="hs-collapse-open:hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                    <svg class="hs-collapse-open:block hidden w-4 h-4" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                        <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                    </svg>
                </button>
            </div>
        </div>
        <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
            <div class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
                <a class="font-medium text-black sm:py-6 {{\Illuminate\Support\Facades\Route::is('home') ? 'underline' : ''}}" href="{{route('home')}}" aria-current="page">Home</a>
                <a class="font-medium text-black sm:py-6 {{\Illuminate\Support\Facades\Route::is('services') ? 'underline' : ''}}" href="{{route('services')}}" aria-current="page">Services</a>
                <a class="font-medium text-black/[.8] hover:text-black sm:py-6 {{\Illuminate\Support\Facades\Route::is('contact') ? 'underline' : ''}}" href="{{route('contact')}}">Contact Us</a>

                <div class="hs-dropdown [--strategy:static] sm:[--strategy:fixed] [--adaptive:none] sm:[--trigger:hover] sm:py-4">
                    <button type="button" class="flex items-center w-full text-black/[.8] hover:text-black font-medium">
                        Resources
                        <svg class="ml-2 w-2.5 h-2.5" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                        </svg>
                    </button>

                    <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 bg-white sm:shadow-md rounded-lg p-2 sm:dark:border before:absolute top-full sm:border before:-top-5 before:left-0 before:w-full before:h-5">

                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="{{route('sellers_net_sheet')}}">
                            Seller Net Sheet
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="{{route('order_title_work')}}">
                            Order Title Work
                        </a>


                        {{--<div class="hs-dropdown relative [--strategy:static] sm:[--strategy:absolute] [--adaptive:none] sm:[--trigger:hover]">
                            <button type="button" class="w-full flex justify-between w-full items-center text-sm text-gray-800 rounded-md py-2 px-3 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500">
                                Sub Menu
                                <svg class="sm:-rotate-90 ml-2 w-2.5 h-2.5 text-gray-600" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
                                </svg>
                            </button>

                            <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] sm:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 sm:w-48 hidden z-10 sm:mt-2 bg-white sm:shadow-md rounded-lg p-2 sm:dark:border before:absolute sm:border before:-right-5 before:top-0 before:h-full before:w-5 top-0 right-full !mx-[10px]">
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                                    About
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                                    Downloads
                                </a>
                                <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                                    Team Account
                                </a>
                            </div>
                        </div>

                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                            Downloads
                        </a>
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 focus:ring-2 focus:ring-blue-500" href="#">
                            Team Account
                        </a>--}}
                    </div>
                </div>
                @if (Route::has('login'))

                        @auth
                        <a class="flex items-center gap-x-2 font-medium text-black/[.8] hover:text-blue-600 sm:border-l sm:border-white/[.3] sm:my-6 sm:pl-6 text-sm" href="/dashboard">
                            <svg class="w-4 h-4 te" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Welcome back {{auth()->user()->name}}
                        </a>                        @else
                        <a class="flex items-center gap-x-2 font-medium text-black/[.8] hover:text-blue-600 sm:border-l sm:border-white/[.3] sm:my-6 sm:pl-6" href="{{ route('login') }}">
                            <svg class="w-4 h-4 te" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg>
                            Log in
                        </a>
                            @if (Route::has('register'))
                            <a class="flex items-center gap-x-2 font-medium text-black/[.8] hover:text-blue-600 sm:border-l sm:border-white/[.3] sm:my-6 sm:pl-6" href="{{ route('register') }}">
                                Register
                            </a>
                            @endif
                        @endauth

                @endif

            </div>
        </div>
    </nav>
</header>
