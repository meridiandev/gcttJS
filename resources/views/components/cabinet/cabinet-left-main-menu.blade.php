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
                {{-- views/components/cabinet/left-menu/direction.blade.php--}}
                <x-cabinet.left-menu.direction />

                <div class="w-full flex  border-b-2 pb-2 border-gray-100items-center justify-between mb-6">
                    <p class="text-gray-800 dark:text-white  text-2xl font-bold">
                        {{ __('Сервисы') }}
                    </p>
                </div>
                {{-- views/components/cabinet/left-menu/tasks-list.blade.php--}}
                <x-cabinet.left-menu.tasksList />
                {{-- views/components/cabinet/left-menu/virtual-calss.blade.php--}}
                <x-cabinet.left-menu.virtualClass />

                {{-- views/components/cabinet/left-menu/students-chats.blade.php--}}
                <x-cabinet.left-menu.studentsChats />

                <div class="w-full flex  border-b-2 pb-2 border-gray-100items-center justify-between mb-6">
                    <p class="text-gray-800 dark:text-white  text-1xl font-bold">
                        {{ __('Профессиональное развитие') }}
                    </p>
                </div>

                {{-- views/components/cabinet/left-menu/webinar-and-curses.blade.php--}}
                <x-cabinet.left-menu.webinarAndCurses />
                {{-- views/components/cabinet/left-menu/portfolio.blade.php--}}
                <x-cabinet.left-menu.portfolio />

            </nav>
            <div class="absolute bottom-0 my-10">
                {{-- views/components/cabinet/left-menu/support.blade.php--}}
                <x-cabinet.left-menu.support />
            </div>
        </div>
    </div>
</div>
