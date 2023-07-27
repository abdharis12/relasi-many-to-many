<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-cyan-600 border-r border-gray-200 sm:translate-x-0 dark:bg-slate-950 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 py-5 overflow-y-auto bg-cyan-600 dark:bg-slate-950">
       <ul class="space-y-2 font-medium">
          <li>
             <a href="/" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-cyan-700 group {{ Request::is('/*') ? 'bg-cyan-700' : '' }}">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-cyan-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25m18 0A2.25 2.25 0 0018.75 3H5.25A2.25 2.25 0 003 5.25m18 0V12a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 12V5.25" />
                  </svg>
                <span class="flex-1 ml-5 whitespace-nowrap">Dashboard</span>
             </a>
          </li>

          <li>
            <a href="{{ route('pegawai.index') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-cyan-700 group {{ Request::is('pegawai*') ? 'bg-cyan-700' : '' }}">
               <svg class="w-5 h-5 text-white transition duration-75 dark:text-cyan-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>

               <span class="flex-1 ml-5 whitespace-nowrap">Pegawai</span>
            </a>
         </li>

          <li>
             <a href="{{ route('sppd.index') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-cyan-700 group {{ Request::is('sppd*') ? 'bg-cyan-700' : '' }}">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-cyan-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                </svg>
                <span class="flex-1 ml-5 whitespace-nowrap">Sppd</span>
             </a>
          </li>

          <li>
            <a href="{{ route('pengikut.index') }}" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-cyan-700 dark:hover:bg-cyan-700 group {{ Request::is('pengikut*') ? 'bg-cyan-700' : '' }}">
                <svg class="w-5 h-5 text-white transition duration-75 dark:text-cyan-400 group-hover:text-white dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
                  </svg>

               <span class="flex-1 ml-5 whitespace-nowrap">Pengikut</span>
            </a>
         </li>
       </ul>
    </div>
</aside>
