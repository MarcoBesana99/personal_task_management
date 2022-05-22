<aside
class="sidebar w-64 md:shadow transform -translate-x-full md:translate-x-0 transition-transform duration-150 ease-in bg-indigo-500"
>
    <div class="sidebar-header flex items-center justify-center py-4">
        <div class="inline-flex">
            <div class="sidebar-close-toggler flex justify-center items-center md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                </svg>
            </div>
            <a href="#" class="inline-flex flex-row items-center ml-3">
                <span class="leading-10 text-gray-100 text-xl font-bold ml-1 uppercase">Brandname</span>
            </a>
        </div>
    </div>
    <div class="sidebar-content px-4 py-6 flex flex-col">
        <ul class="flex flex-col w-full">
            <li class="my-px">
                <x-sidebar-link 
                    :href="route('dashboard')" 
                    :isActive="request()->routeIs('dashboard')" 
                    :text="__('Dashboard')"
                />
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">
                    {{ __('Areas') }}
                </span>
            </li>
            <li class="my-px">
                <x-sidebar-link 
                    :href="route('project.index')" 
                    :isActive="request()->routeIs('project.*')" 
                    :text="__('Projects')"
                    :badge="$projectsCount"
                />
            </li>
            <li class="my-px">
                <span class="flex font-medium text-sm text-gray-300 px-4 my-4 uppercase">Account</span>
            </li>
            <li class="my-px">
                <a
                    href="#"
                    class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"
                >
                    <span class="flex items-center justify-center text-lg text-gray-400">
                    <svg
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="h-6 w-6"
                    >
                        <path d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    </span>
                    <span class="ml-3">Profile</span>
                </a>
            </li>
            <li class="my-px">
            <a
                href="#"
                class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"
            >
                <span class="flex items-center justify-center text-lg text-gray-400">
                <svg
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="h-6 w-6"
                >
                    <path
                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                    />
                </svg>
                </span>
                <span class="ml-3">Notifications</span>
                <span
                class="flex items-center justify-center text-xs text-red-500 font-semibold bg-red-100 h-6 px-2 rounded-full ml-auto"
                >10</span>
            </a>
            </li>
            <li class="my-px">
            <a
                href="#"
                class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"
            >
                <span class="flex items-center justify-center text-lg text-gray-400">
                <svg
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="h-6 w-6"
                >
                    <path
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                    />
                    <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                </span>
                <span class="ml-3">Settings</span>
            </a>
            </li>
            <li class="my-px">
            <a
                href="#"
                class="flex flex-row items-center h-10 px-3 rounded-lg text-gray-300 hover:bg-gray-100 hover:text-gray-700"
            >
                <span class="flex items-center justify-center text-lg text-red-400">
                <svg
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    class="h-6 w-6"
                >
                    <path
                    d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z"
                    />
                </svg>
                </span>
                <span class="ml-3">Logout</span>
            </a>
            </li>
        </ul>
    </div>
</aside>
@push('scripts')
    <script type="text/javascript">
        $(document).ready(() => {
            $('.sidebar-close-toggler').click(() => {
                $('.sidebar').toggleClass('-translate-x-full')
                $('.sidebar-toggler').show()
            })
        })
    </script>
@endpush