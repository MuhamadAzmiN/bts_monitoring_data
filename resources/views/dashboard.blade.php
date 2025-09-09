<x-layouts.app>

    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">{{ __('Dashboard')}}</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-1">{{ __('Welcome to the dashboard') }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mb-1">
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <div class="flex flex-col items-start gap-6">
                    <div class="flex flex-row items-center gap-3">
                        <svg class="h-6 w-6 text-gray-500 dark:text-gray-300 cf-icon-svg" fill="none" viewBox="-1 0 19 19"  stroke="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path d="M16.417 9.57a7.917 7.917 0 1 1-8.144-7.908 1.758 1.758 0 0 1 .451 0 7.913 7.913 0 0 1 7.693 7.907zM5.85 15.838q.254.107.515.193a11.772 11.772 0 0 1-1.572-5.92h-3.08a6.816 6.816 0 0 0 4.137 5.727zM2.226 6.922a6.727 6.727 0 0 0-.511 2.082h3.078a11.83 11.83 0 0 1 1.55-5.89q-.249.083-.493.186a6.834 6.834 0 0 0-3.624 3.622zm8.87 2.082a14.405 14.405 0 0 0-.261-2.31 9.847 9.847 0 0 0-.713-2.26c-.447-.952-1.009-1.573-1.497-1.667a8.468 8.468 0 0 0-.253 0c-.488.094-1.05.715-1.497 1.668a9.847 9.847 0 0 0-.712 2.26 14.404 14.404 0 0 0-.261 2.309zm-.974 5.676a9.844 9.844 0 0 0 .713-2.26 14.413 14.413 0 0 0 .26-2.309H5.903a14.412 14.412 0 0 0 .261 2.31 9.844 9.844 0 0 0 .712 2.259c.487 1.036 1.109 1.68 1.624 1.68s1.137-.644 1.623-1.68zm4.652-2.462a6.737 6.737 0 0 0 .513-2.107h-3.082a11.77 11.77 0 0 1-1.572 5.922q.261-.086.517-.194a6.834 6.834 0 0 0 3.624-3.621zM11.15 3.3a6.82 6.82 0 0 0-.496-.187 11.828 11.828 0 0 1 1.55 5.89h3.081A6.815 6.815 0 0 0 11.15 3.3z"></path>
                            </g>
                        </svg>
                        <p class="text-2xl font-medium text-gray-500 dark:text-gray-400">{{ __('IP ADDRESS') }}</p>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 dark:text-gray-100 mt-1">--</p>
                    <p class="text-xs text-gray-500 flex items-center mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        {{ __('No data') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- IMSI Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <div class="flex flex-col items-start gap-6">
                    <div class="flex flex-row items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-grey-500 dark:text-grey-300"
                            fill="none" viewBox="0 0 24 24" stroke="#6a7282">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16.2429 5.75732C18.586 8.10047 18.586 11.8995 16.2429 14.2426M7.75758 14.2426C5.41443 11.8995 5.41443 8.10047 7.75758 5.75732M4.92893 17.0711C1.02369 13.1658 1.02369 6.8342 4.92893 2.92896M19.0715 2.92896C22.9768 6.8342 22.9768 13.1658 19.0715 17.0711M12.0002 12C13.1048 12 14.0002 11.1046 14.0002 10C14.0002 8.89543 13.1048 8 12.0002 8C10.8957 8 10.0002 8.89543 10.0002 10C10.0002 11.1046 10.8957 12 12.0002 12ZM12.0002 12V21"/>
                        </svg>
                        <p class="text-2xl font-medium text-gray-500 dark:text-gray-400">{{ __('IMSI REACON STATUS') }}</p>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 dark:text-gray-100 mt-1">--</p>
                    <p class="text-xs text-gray-500 flex items-center mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        {{ __('No data') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Target Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <div class="flex flex-col items-start gap-6">
                    <div class="flex flex-row items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-grey-500 dark:text-grey-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier"> 
                                <path d="M22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12Z" stroke-width="1.5"></path> 
                                <path d="M2 12L5 12" stroke-width="1.5" stroke-linecap="round"></path> 
                                <path d="M19 12L22 12" stroke-width="1.5" stroke-linecap="round"></path> 
                                <path d="M12 22L12 19" stroke-width="1.5" stroke-linecap="round"></path> 
                                <path d="M12 5L12 2" stroke-width="1.5" stroke-linecap="round"></path> 
                                <path d="M10 12H12H14" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> 
                                <path d="M12 14L12 12L12 10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> 
                            </g>
                        </svg>
                        <p class="text-2xl font-medium text-gray-500 dark:text-gray-400">{{ __('TARGET NOW') }}</p>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 dark:text-gray-100 mt-1">--</p>
                    <p class="text-xs text-gray-500 flex items-center mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                        {{ __('No data') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Sniff Total Card -->
        <div class="bg-white dark:bg-gray-800 rounded-lg shadow-sm p-6 border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between">
                <div class="flex flex-col items-start gap-6">
                    <div class="flex flex-row items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-grey-500 dark:text-grey-300"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier"> 
                                <path d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> 
                            </g>
                        </svg>
                        <p class="text-2xl font-medium text-gray-500 dark:text-gray-400">{{ __('TOTAL SNIFF') }}</p>
                    </div>
                    <p class="text-2xl font-bold text-gray-800 dark:text-gray-100 mt-1">--</p>
                    <p class="text-xs text-gray-500 flex items-center mt-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        {{ __('No data') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <p style="font-size: 20px!important;" class="font-medium text-gray-500 dark:text-gray-400 mb-3 mt-3">Status : </p>

    <div class="d-flex flex-row">
        <button style="width: 8rem; background-color: #16a34a;"  onmouseover="this.style.backgroundColor='#15803d'" onmouseout="this.style.backgroundColor='#16a34a'" class="text-white py-2 px-4 rounded">
            Start
        </button>
        <button style="width: 8rem" class="text-white py-2 px-4 rounded bg-red-600 hover:bg-red-700 ml-3">
            Stop
        </button>
    </div>

</x-layouts.app>
