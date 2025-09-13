            <aside :class="{ 'w-full md:w-64': sidebarOpen, 'w-0 md:w-16 hidden md:block': !sidebarOpen }"
                class="bg-sidebar text-sidebar-foreground border-r border-gray-200 dark:border-gray-700 sidebar-transition overflow-hidden">
                <!-- Sidebar Content -->
                <div class="h-full flex flex-col">
                    <!-- Sidebar Menu -->
                    <nav class="flex-1 overflow-y-auto custom-scrollbar py-4">
                        <ul class="space-y-1 px-2">
                            <!-- Dashboard -->
                            <x-layouts.sidebar-link href="{{ route('dashboard') }}" icon='fas-house'
                                :active="request()->routeIs('dashboard*')">DASHBOARD</x-layouts.sidebar-link>

                            <!-- Edit BTS -->
                            <x-layouts.sidebar-link href="{{ route('bts.index') }}" icon='fas-pen-to-square'
                                :active="request()->routeIs('bts*')">IMSI</x-layouts.sidebar-link>

                            <!-- SMS / Broadcast / Telephony -->
                            <x-layouts.sidebar-link href="{{ route('sms.index') }}" icon='fas-comment'
                                :active="request()->routeIs('sms*')">TAKEOVER MODE</x-layouts.sidebar-link>

                            <!-- Sniff Result -->
                            <x-layouts.sidebar-link href="{{ route('sniff_result') }}" icon='fas-message'
                                :active="request()->routeIs('sniff*')">SNIFF RESULT</x-layouts.sidebar-link>

                            <!-- Config -->
                            <x-layouts.sidebar-link href="{{ route('config') }}" icon='fas-gear'
                                :active="request()->routeIs('config*')">CONFIG</x-layouts.sidebar-link>
                        </ul>
                    </nav>
                </div>
            </aside>
