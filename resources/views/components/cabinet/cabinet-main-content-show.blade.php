<div class="container mx-auto">
    <div class="overflow-auto h-screen pb-24 px-4 md:px-6">
        <h1 class="text-2xl font-semibold text-gray-800 dark:text-white">
            {{ __('Добро пожаловать,' ) }} {{ Auth::user()->name }}
        </h1>
        <h2 class="text-md text-gray-400">
            {{ __('Учительская доска') }}
        </h2>
        <div class="flex my-6 items-center w-full space-y-4 md:space-x-4 md:space-y-0 flex-col md:flex-row">
{{--             teacher tasks  views/components/cabinet/teacher/task-list--}}
            <x-cabinet.teacher.taskList />
{{--             teacher groups  views/components/cabinet/teacher/group-show-all--}}
            <x-cabinet.teacher.groupShowAll />
            <div class="flex items-center w-full md:w-1/2 space-x-4">
{{--                 teacher total all student group shows views/components/cabinet/teacher/total-students-shows--}}
                <x-cabinet.teacher.totalStudentsShow />
{{--                 teacher total all student group shows views/components/cabinet/teacher/total-groups-show--}}
                <x-cabinet.teacher.totalGroupsShow />
            </div>
        </div>
        <div class="flex items-center space-x-4">
{{--             teacher portfolio views/components/cabinet/teacher/portfolio--}}
            <x-cabinet.teacher.portfolio />
{{--             teacher webinar & curse views/components/cabinet/teacher/webinar-course--}}
            <x-cabinet.teacher.webinarCourse />
        </div>
    </div>

</div>
