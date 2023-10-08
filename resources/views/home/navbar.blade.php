<div>
    <div>


        <nav class="bg-purple-300 border-gray-200 dark:bg-gray-900">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <span class="self-center text-4xl font-bold whitespace-nowrap">VoyageWise</span>

                <button data-collapse-toggle="navbar-default" type="button"
                    class="inline-flex items-center p-2 sm:w-32 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                    <ul
                        class="text-2xl flex flex-col p-4 md:p-0 mt-4 border  md:flex-row md:space-x-8 md:mt-0 md:border-0  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block py-2 pl-3 pr-4 textwhite- bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="{{url('aboutus')}}"
                                class="block py-2 pl-3 pr-4  text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">About
                                Us</a>
                        </li>
                        <li>
                            <a href="{{url('destination')}}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Destination</a>
                        </li>
                        <li>
                            <a href="{{url('show_book')}}"
                                class="block py-2 pl-3 pr-4 text-gray-900 rounded md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Book</a>
                        </li>

                        @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <x-app-layout>
                                </x-app-layout>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ route('login') }}" id="loginid">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-success" href="{{ route('register') }}">Register</a>
                            </li>

                        @endauth
                    @endif




                    </ul>
                </div>




    </div>
    </nav>



    </div>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
