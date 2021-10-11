<main class="bg-gray-100 dark:bg-gray-800 h-screen overflow-hidden relative">
    <div class="flex items-start justify-between">
        {{-- Left mainMenu--}}
        <x-cabinet.cabinetLeftMainMenu x/>
        <div class="flex flex-col w-full md:space-y-4">
            {{-- mainContentShow --}}
            <x-cabinet.cabinetMainContentShow x/>
        </div>
    </div>
</main>
