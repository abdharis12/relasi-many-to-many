<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-slate-950 dark:border-gray-700">
    <div class="p-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            {{-- brand --}}
            <div class="flex items-center justify-start">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-cyan-500 rounded-lg sm:hidden hover:bg-cyan-100 focus:outline-none focus:ring-2 focus:ring-cyan-200 dark:text-cyan-400 dark:hover:bg-cyan-700 dark:focus:ring-cyan-600">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                    </svg>
                </button>
                <a href="https://flowbite.com" class="flex ml-2 md:mr-24">
                    <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="FlowBite Logo" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
                </a>
            </div>
            {{-- end brand --}}
            {{-- user profile --}}
            <div class="flex items-center">
                <div class="flex items-center ml-3">
                    {{-- button dark mode --}}
                    <div>
                        <button id="theme-toggle" type="button" class="flex bg-gray-100 dark:bg-slate-800 text-cyan-500 dark:text-gray-400 hover:bg-cyan-500 hover:text-cyan-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-cyan-600 dark:focus:ring-cyan-500 rounded-full text-sm p-2.5 mx-5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                    {{-- end button dark mode --}}

                    <div>
                        <button type="button" data-dropdown-offset-distance="-40" data-dropdown-offset-skidding="140" data-dropdown-placement="left" class="flex text-sm bg-cyan-800 rounded-full focus:ring-2 focus:ring-cyan-600 dark:focus:ring-cyan-300" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                        <span class="sr-only">Open user menu</span>
                        <img class="w-12 h-w-12 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo">
                        </button>
                    </div>

                    <div class="z-50 hidden my-4 text-base list-none bg-cyan-600 divide-y divide-cyan-500 rounded shadow dark:bg-cyan-300 dark:divide-cyan-400" id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-white dark:text-white" role="none">
                                Abdul Haris
                            </p>
                            <p class="text-sm font-medium text-white truncate dark:text-cyan-500" role="none">
                                abdul.haris@flowbite.com
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-cyan-700 dark:text-white dark:hover:bg-cyan-500 dark:hover:text-white" role="menuitem">Dashboard</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-cyan-700 dark:text-white dark:hover:bg-cyan-500 dark:hover:text-white" role="menuitem">Profile</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-cyan-700 dark:text-white dark:hover:bg-cyan-500 dark:hover:text-white" role="menuitem">Settings</a>
                        </li>
                        <li>
                            <a href="#" class="block px-4 py-2 text-sm text-white hover:bg-cyan-700 dark:text-white dark:hover:bg-cyan-500 dark:hover:text-white" role="menuitem">Sign out</a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- end user profile --}}
        </div>
    </div>
</nav>
