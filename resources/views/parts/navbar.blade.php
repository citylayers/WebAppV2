 <nav class="fixed top-0 z-20 w-full px-2 mx-2">
     <div class="flex flex-wrap items-center justify-between pb-4 mx-2 mr-2 border-b border-gray-400 lg:mx-16 bg-white pt-4 md:pt-8">
         <a href="#" class="flex items-center">

         </a>
         <a href="/" class="prevent"> <span
                 class="self-center pl-8 text-3xl font-bold text-center text-gray-800 whitespace-nowrap">City
                 Layers</span></a>
         <div x-data="{ modelOpen: false }">
             <button @click="modelOpen =!modelOpen"
                 class="inline-flex items-center p-2 ml-3 text-sm text-gray-400 rounded-lg focus:outline-none focus:ring-2 hover:bg-gray-700 focus:ring-gray-600">
                 <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                     <path fill-rule="evenodd"
                         d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                         clip-rule="evenodd"></path>
                 </svg>
             </button>


             <div x-cloak x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title"
                 role="dialog" aria-modal="true">
                 <div
                     class="flex justify-center min-h-screen px-4 text-center items-center sm:block sm:p-0">
                     <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                         x-transition:enter="transition ease-out duration-300 transform"
                         x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                         x-transition:leave="transition ease-in duration-200 transform"
                         x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                         class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
                     </div>

                     <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                         x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                         x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                         x-transition:leave="transition ease-in duration-200 transform"
                         x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                         x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                         class="inline-block w-full max-w-xl p-8 overflow-hidden transition-all transform z-50">

                         <div class="w-full">
                             <ul
                                 class="flex flex-col p-4 mt-4 font-bold bg-[#B8E7EB] shadow rounded-lg mynav">
                                 <li>
                                     <a href="/"
                                         class="block py-2 pl-3 pr-4 text-gray-500 rounded  hover:text-blue-500 prevent">Home</a>
                                 </li>
                                 <li>
                                     <a href="dashboard"
                                         class="block py-2 pl-3 pr-4 text-gray-500 rounded  hover:text-blue-500 prevent">Dashboard</a>
                                 </li>
                                 <li>
                                     <a href="profile"
                                         class="block py-2 pl-3 pr-4 text-gray-500 rounded  hover:text-blue-500 prevent">Profile</a>
                                 </li>
                                 <li>
                                     <a href="admin/logout"
                                         class="block py-2 pl-3 pr-4 text-gray-500 rounded  hover:text-blue-500 prevent">Log-out</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </nav>
 <script>
     document.addEventListener('DOMContentLoaded', function() {

         const currentLocation = location.href;
         const menuItem = document.querySelectorAll('.mynav a');
         const menuLength = menuItem.length;
         for (let i = 0; i < menuLength; i++) {
             if (menuItem[i].href === currentLocation) {
                 menuItem[i].className =
                     'block py-2 pl-3 pr-4 rounded border border-gray-600 bg-gray-500 text-white prevent';
             }
         }
     });
 </script>
