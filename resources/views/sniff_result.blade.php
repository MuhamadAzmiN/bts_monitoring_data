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
        <h1 class="text-2xl font-medium text-gray-800 dark:text-gray-100">{{ __('SNIFF RESULT')}}</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-1">{{ __('A dedicated page to scan and identify IMSI numbers in the network with fast configuration and monitoring.') }}</p>
    </div>

    <div style="margin-top: 7rem; padding: 1.5rem 0; background-color: #0B1739; border-radius: 1rem;">
        <h2 style="margin: 0.5rem 0 2rem 1.5rem;" class="text-gray-400 text-xl font-normal">SMS SERVICE</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-300 border-collapse">
                <thead>
                    <tr>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">IMSI</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">TIME</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">DIRECTION</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">SMS CONTENT</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rows as $row)
                        <tr>
                            @foreach ($row as $cell)
                                <td  style="padding: 1.5em;" class="py-3 text-lg bg-transparent">{{ $cell }}</td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


</x-layouts.app>