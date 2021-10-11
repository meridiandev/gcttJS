<main class="bg-gray-100 dark:bg-gray-800 h-screen overflow-hidden relative">
    <div class="flex items-start justify-between">
        <div class="relative bg-white dark:bg-gray-800">
            <div class="flex flex-col sm:flex-row sm:justify-around">
                <div class="w-72 h-screen">
                    <div class="flex items-center justify-start mx-6 mt-10">
                        {{-- <img class="h-10" src="/icons/rocket.svg" /> --}}
                        <span class="text-gray-600 dark:text-gray-300 ml-4 text-5xl font-bold">
                            {{ __('Eduedu') }}
                        </span>
                    </div>
                    <nav class="mt-10 px-6 ">

                        <div class="w-full flex  border-b-2 pb-2 border-gray-100items-center justify-between mb-6">
                            <p class="text-gray-800 dark:text-white  text-2xl font-bold">
                                {{ __('Направления') }}
                            </p>
                            <button
                                class="flex items-center hover:text-black dark:text-gray-50 dark:hover:text-white text-gray-800 border-0 focus:outline-none">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 1792 1792"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1600 736v192q0 40-28 68t-68 28h-416v416q0 40-28 68t-68 28h-192q-40 0-68-28t-28-68v-416h-416q-40 0-68-28t-28-68v-192q0-40 28-68t68-28h416v-416q0-40 28-68t68-28h192q40 0 68 28t28 68v416h416q40 0 68 28t28 68z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="w-full flex  border-b-2 pb-2 border-gray-100items-center justify-between mb-6">
                            <p class="text-gray-800 dark:text-white  text-2xl font-bold">
                                {{ __('Сервисы') }}
                            </p>
                        </div>

                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                           href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="mx-4  text-1xl font-bold">
                                {{ __('Мои задания') }}
                            </span>
                            <span class="flex-grow text-right">
                            </span>
                        </a>
                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-800 dark:text-gray-100 rounded-lg bg-gray-100 dark:bg-gray-600"
                           href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M3 5a2 2 0 012-2h10a2 2 0 012 2v8a2 2 0 01-2 2h-2.22l.123.489.804.804A1 1 0 0113 18H7a1 1 0 01-.707-1.707l.804-.804L7.22 15H5a2 2 0 01-2-2V5zm5.771 7H5V5h10v7H8.771z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="mx-4  text-1xl font-bold">
                                {{ __('Виртуальный класс') }}
                            </span>
                            <span class="flex-grow text-right">
                            </span>
                        </a>
                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                           href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                      clip-rule="evenodd" />
                            </svg>
                            <span class="mx-4  text-1xl font-bold">
                                {{ __('Чаты с учениками') }}
                            </span>
                            <span class="flex-grow text-right">
                            </span>

                        </a>

                        <div class="w-full flex  border-b-2 pb-2 border-gray-100items-center justify-between mb-6">
                            <p class="text-gray-800 dark:text-white  text-1xl font-bold">
                                {{ __('Профессиональное развитие') }}
                            </p>
                        </div>

                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                           href="#">
                            {{-- https://heroicons.com/ --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                            <span class="mx-4 text-1xl font-bold">
                                {{ __('Вебинары и курсы') }}
                            </span>
                            <span class="flex-grow text-right">
                            </span>

                        </a>

                        <a class="hover:text-gray-800 hover:bg-gray-100 flex items-center p-2 my-6 transition-colors dark:hover:text-white dark:hover:bg-gray-600 duration-200  text-gray-600 dark:text-gray-400 rounded-lg "
                           href="#">
                            {{-- https://heroicons.com/ --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                      clip-rule="evenodd" />
                                <path d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                            </svg>
                            <span class="mx-4 text-1xl font-bold">
                                {{ __('Портфолио') }}
                            </span>
                            <span class="flex-grow text-right">
                            </span>

                        </a>
                        {{-- </p> --}}
                    </nav>
                    <div class="absolute bottom-0 my-10">
                        <a class="text-gray-600 dark:text-gray-300 hover:text-gray-800 dark:hover:text-gray-100 transition-colors duration-200 flex items-center py-2 px-8"
                           href="#">
                            <svg width="20" fill="currentColor" height="20" class="h-5 w-5"
                                 viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1088 1256v240q0 16-12 28t-28 12h-240q-16 0-28-12t-12-28v-240q0-16 12-28t28-12h240q16 0 28 12t12 28zm316-600q0 54-15.5 101t-35 76.5-55 59.5-57.5 43.5-61 35.5q-41 23-68.5 65t-27.5 67q0 17-12 32.5t-28 15.5h-240q-15 0-25.5-18.5t-10.5-37.5v-45q0-83 65-156.5t143-108.5q59-27 84-56t25-76q0-42-46.5-74t-107.5-32q-65 0-108 29-35 25-107 115-13 16-31 16-12 0-25-8l-164-125q-13-10-15.5-25t5.5-28q160-266 464-266 80 0 161 31t146 83 106 127.5 41 158.5z">
                                </path>
                            </svg>
                            <span class="mx-4 text-2xl font-bold">
                                {{ __('Поддержка') }}
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col w-full md:space-y-4">
            {{-- Content --}}
            <div class="overflow-auto h-screen pb-24 px-4 md:px-6">
                <h1 class="text-4xl font-semibold text-gray-800 dark:text-white">
                    Добро пожаловать, #name
                </h1>
                <h2 class="text-md text-gray-400">
                    {{ __('Учительская доска') }}
                </h2>
                <div class="flex my-6 items-center w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
                    <div class="w-full md:w-6/12">
                        <div class="shadow-lg w-full bg-white dark:bg-gray-700 relative overflow-hidden">
                            <a href="#" class="w-full h-full block">
                                <div class="flex items-center justify-between px-4 py-6 space-x-4">
                                    <div class="flex items-center">
                                        <span class="rounded-full relative p-5 bg-yellow-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <p
                                            class="text-sm text-gray-700 dark:text-white ml-2 text-1xl font-bold">
                                            {{ __('Мои задания') }}
                                        </p>
                                    </div>
                                    <div
                                        class="border-b border-gray-200 mt-6 md:mt-0 text-black dark:text-white font-bold text-xl">
                                        22
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12">
                        <div class="shadow-lg w-full bg-white dark:bg-gray-700 relative overflow-hidden">
                            <a href="#" class="w-full h-full block">
                                <div class="flex items-center justify-between px-4 py-6 space-x-4">
                                    <div class="flex items-center">
                                        <span class="rounded-full relative p-5 bg-yellow-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                            </svg>
                                        </span>
                                        <p
                                            class="text-sm text-gray-700 dark:text-white ml-2 text-1xl font-bold">
                                            {{ __('Мои группы') }}
                                        </p>
                                    </div>
                                    <div
                                        class="border-b border-gray-200 mt-6 md:mt-0 text-black dark:text-white font-bold text-xl">
                                        8
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="flex items-center w-full md:w-1/2 space-x-4">
                        <div class="w-1/2">
                            <div class="shadow-lg px-4 py-6 w-full bg-white dark:bg-gray-700 relative">
                                <p class="text-2xl text-black dark:text-white font-bold">
                                    68
                                </p>
                                <p class="text-gray-400 text-1xl font-bold">
                                    {{ __('У меня всего учеников') }}
                                </p>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="shadow-lg px-4 py-6 w-full bg-white dark:bg-gray-700 relative">
                                <p class="text-2xl text-black dark:text-white font-bold">
                                    4
                                </p>
                                <p class="text-gray-400 text-1xl font-bold">
                                    {{ __('У меня всего групп') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <div class="w-full md:w-6/12">
                        <div class="shadow-lg w-full bg-white dark:bg-gray-700 relative overflow-hidden">
                            <a href="#" class="w-full h-full block">
                                <div class="flex items-center justify-between px-4 py-6 space-x-4">
                                    <div class="flex items-center">
                                        <span class="rounded-full relative p-5 bg-yellow-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M2 6a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1H8a3 3 0 00-3 3v1.5a1.5 1.5 0 01-3 0V6z"
                                                      clip-rule="evenodd" />
                                                <path
                                                    d="M6 12a2 2 0 012-2h8a2 2 0 012 2v2a2 2 0 01-2 2H2h2a2 2 0 002-2v-2z" />
                                            </svg>
                                        </span>
                                        <p
                                            class="text-sm text-gray-700 dark:text-white ml-2 text-1xl font-bold">
                                            {{ __('Портфолио') }}
                                        </p>
                                    </div>
                                    <p class="text-gray-400 text-1xl font-bold">
                                        {{ __('Награды, дипломы, как ваши так и учеников') }}
                                    </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="w-full md:w-6/12">
                        <div class="shadow-lg w-full bg-white dark:bg-gray-700 relative overflow-hidden">
                            <a href="#" class="w-full h-full block">
                                <div class="flex items-center justify-between px-4 py-6 space-x-4">
                                    <div class="flex items-center">
                                        <span class="rounded-full relative p-5 bg-yellow-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                 viewBox="0 0 20 20" fill="currentColor">
                                                <path
                                                    d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z" />
                                            </svg>
                                        </span>
                                        <p
                                            class="text-sm text-gray-700 dark:text-white ml-2 text-1xl font-bold">
                                            {{ __('Вебинары и курсы') }}
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
