<x-layouts.app>

    <style>
        tbody tr:nth-child(odd) td {
            background-color: #0e1630;
        }
        tbody tr:nth-child(even) td {
            background-color: #131c3a;
        }
    </style>


    <div class="mb-6">
        <h1 class="text-2xl font-medium text-gray-800 dark:text-gray-100">{{ __('CONFIG')}}</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-1">{{ __('A control page to configure BTS settings, launch broadcasts, and manage targeted network operations.') }}</p>
    </div>

    <div class="w-full border-b-1 pb-4 relative left-1/2 -translate-x-1/2" style="border-color: hsl(var(--sidebar-background));"></div>

    <div style="margin-top: 3em; padding: 1em 0; background-color: #0B1739; border-radius: 1em;">
        <div class="overflow-x-auto">
            <form action="config" method="POST" style="padding: 0.5em 0 2em 1.5em;">
                @csrf
                <div style="margin-bottom: 2em;">
                    <h2 style="margin: 0.5em 0 1em 0;" class="text-gray-400 text-xl font-normal">SMS</h2>
                    <div class="flex items-center" style="gap: 5em; padding-right: 2em; margin-bottom: 1em;">
                        <label for="sender" class="text-lg font-medium">Sender</label>
                        <input type="text" id="sender" name="sender" style="border: 1px #343B4F solid; width: 100%;" class="rounded-sm px-3 py-2 text-sm">
                    </div>
                    <div class="flex items-center" style="gap: 3.5em; padding-right: 2em;">
                        <label for="message" class="text-lg font-medium">Messange</label>
                        <input type="text" id="message" name="message" style="border: 1px #343B4F solid; width: 100%;" class="rounded-sm px-3 py-2 text-sm">
                    </div>
                </div>
                <div style="margin-bottom: 2em;">
                    <h2 style="margin: 0.5em 0 1em 0;" class="text-gray-400 text-xl font-normal">Broadcasts</h2>
                    <div class="flex items-center" style="gap: 5.5em; padding-right: 2em; margin-bottom: 1em;">
                        <label for="form" class="text-lg font-medium">Form</label>
                        <input type="text" id="form" name="form" style="border: 1px #343B4F solid; width: 100%;" class="rounded-sm px-3 py-2 text-sm">
                    </div>
                    <div class="flex items-center" style="gap: 3.5em; padding-right: 2em;">
                        <label for="message_broadcast" class="text-lg font-medium">Message</label>
                        <input type="text" id="message_broadcast" name="message_broadcast" style="border: 1px #343B4F solid; width: 100%;" class="rounded-sm px-3 py-2 text-sm">
                    </div>
                </div>
                <div style="margin-bottom: 4em;">
                    <h2 style="margin: 0.5em 0 1em 0;" class="text-gray-400 text-xl font-normal">Call</h2>
                    <div class="flex items-center" style="gap: 5em; padding-right: 2em; margin-bottom: 1em;">
                        <label for="form" class="text-lg font-medium">Caller</label>
                        <input type="text" id="form" name="form" style="border: 1px #343B4F solid; width: 100%;" class="rounded-sm px-3 py-2 text-sm">
                    </div>
                    <div class="flex items-center" style="gap: 3em; padding-right: 2em;">
                        <label for="message" class="text-lg font-medium inline-block whitespace-nowrap">Voice File</label>
                        <input type="text" id="message" name="message" style="border: 1px #343B4F solid; width: 100%;" class="rounded-sm px-3 py-2 text-sm">
                    </div>
                </div>

                <div class="flex flex-row justify-end gap-6" style="padding-right: 2em">
                    <button style="width: 6rem; background-color: #DC2B2B;" class="text-white py-2 px-4 rounded-lg">
                        Reset
                    </button>
                    <button type="submit" style="width: 5rem; background-color: #CB3CFF;" class="text-white py-2 px-4 rounded-lg">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>


</x-layouts.app>