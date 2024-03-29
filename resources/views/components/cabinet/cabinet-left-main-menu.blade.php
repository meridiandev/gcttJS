<div class="flex bg-white dark:bg-gray-800">
    <div class="flex flex-col sm:flex-row sm:justify-around">
        <div class="w-72 h-screen">
            <div class="flex items-center justify-start mx-6 mt-10">
{{--                 <img class="h-10" src="/icons/rocket.svg" />--}}
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
{{--                 views/components/cabinet/left-menu/direction.blade.php--}}
                <x-cabinet.left-menu.direction />

                <div class="w-full flex  border-b-2 pb-2 border-gray-100items-center justify-between mb-6">
                    <p class="text-gray-800 dark:text-white  text-2xl font-bold">
                        {{ __('Сервисы') }}
                    </p>
                </div>
{{--                 views/components/cabinet/left-menu/tasks-list.blade.php--}}
                <x-cabinet.left-menu.tasksList />
{{--                 views/components/cabinet/left-menu/virtual-calss.blade.php--}}
                <x-cabinet.left-menu.virtualClass />

{{--                 views/components/cabinet/left-menu/students-chats.blade.php--}}
                <x-cabinet.left-menu.studentsChats />

                <div class="w-full flex  border-b-2 pb-2 border-gray-100items-center justify-between mb-6">
                    <p class="text-gray-800 dark:text-white  text-1xl font-bold">
                        {{ __('Профессиональное развитие') }}
                    </p>
                </div>

{{--                 views/components/cabinet/left-menu/webinar-and-curses.blade.php--}}
                <x-cabinet.left-menu.webinarAndCurses />
{{--                 views/components/cabinet/left-menu/portfolio.blade.php--}}
                <x-cabinet.left-menu.portfolio />

            </nav>
            <div class="absolute bottom-0 my-10">
{{--                 views/components/cabinet/left-menu/support.blade.php--}}
                <x-cabinet.left-menu.support />
            </div>
        </div>
    </div>
</div>


{{--<aside class="w-64" aria-label="Sidebar">--}}
{{--    <div class="overflow-y-auto py-4 px-3 bg-gray-50 rounded dark:bg-gray-800">--}}
{{--        <ul class="space-y-2">--}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                    <svg aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>--}}
{{--                    <span class="ml-3">Dashboard</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>--}}
{{--                    <span class="flex-1 ml-3 whitespace-nowrap">Kanban</span>--}}
{{--                    <span class="inline-flex justify-center items-center px-2 ml-3 text-sm font-medium text-gray-800 bg-gray-200 rounded-full dark:bg-gray-700 dark:text-gray-300">Pro</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path><path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>--}}
{{--                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>--}}
{{--                    <span class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path></svg>--}}
{{--                    <span class="flex-1 ml-3 whitespace-nowrap">Users</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path></svg>--}}
{{--                    <span class="flex-1 ml-3 whitespace-nowrap">Products</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path></svg>--}}
{{--                    <span class="flex-1 ml-3 whitespace-nowrap">Sign In</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">--}}
{{--                    <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z" clip-rule="evenodd"></path></svg>--}}
{{--                    <span class="flex-1 ml-3 whitespace-nowrap">Sign Up</span>--}}
{{--                </a>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <div id="dropdown-cta" class="p-4 mt-6 bg-blue-50 rounded-lg dark:bg-blue-900" role="alert">--}}
{{--            <div class="flex items-center mb-3">--}}
{{--                <span class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>--}}
{{--                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 inline-flex h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800" data-collapse-toggle="dropdown-cta" aria-label="Close">--}}
{{--                    <span class="sr-only">Close</span>--}}
{{--                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <p class="mb-3 text-sm text-blue-900 dark:text-blue-400">--}}
{{--                Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a limited time in your profile.--}}
{{--            </p>--}}
{{--            <a class="text-sm text-blue-900 underline hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300" href="#">Turn new navigation off</a>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</aside>--}}
