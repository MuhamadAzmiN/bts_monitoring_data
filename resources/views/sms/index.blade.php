@extends('layouts.app')

@section('content')
<div class="max-w-8xl mx-auto p-0 bg-gray-900 rounded shadow text-white">
    <h1 class="text-2xl font-bold mb-4">TAKEOVER MODE</h1>
    <p class="mb-6 text-gray-400 border-b border-gray-700 pb-6">A control page to configure BTS settings and manage targeted network operations.</p>

    <div class="bg-[#0e1630] p-6 rounded mt-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Start System</h2>
        <form class="flex flex-col gap-4">
            <div>
                <label for="arfcn" class="block mb-1 text-white">ARFCN</label>
                <input type="text" id="arfcn" name="arfcn" class="w-full rounded px-3 py-2 text-white " placeholder="Enter ARFCN">
            </div>
            <div>
                <label for="band" class="block mb-1 text-white ">BAND</label>
                <input type="text" id="band" name="band" class="w-full rounded px-3 py-2 text-white" placeholder="Enter BAND">
            </div>
            <div>
                <label for="mcc" class="block mb-1 text-white">MCC</label>
                <input type="text" id="mcc" name="mcc" class="w-full rounded px-3 py-2 text-white" placeholder="Enter MCC">
            </div>
            <div>
                <label for="mnc" class="block mb-1 text-white">MNC</label>
                <input type="text" id="mnc" name="mnc" class="w-full rounded px-3 py-2 text-white" placeholder="Enter MNC">
            </div>
            <div class="flex gap-4">
                <button type="button" class="bg-orange-600 hover:bg-orange-700 text-white font-semibold px-4 py-2 rounded">Fast TX</button>
                <button type="button" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold px-4 py-2 rounded">Start</button>
            </div>
        </form>
    </div>

    <div style="margin-top: 2.5rem; padding: 1.5rem 0; background-color: #0B1739; border-radius: 1rem;">
        <h2 style="margin: 0.5rem 0 2rem 1.5rem;" class="text-gray-400 text-xl font-normal">Imsi Recon’s Tabel</h2>
        <div class="overflow-x-auto">
            <table class="w-full text-left text-white border-collapse">
                <thead>
                    <tr>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">IMSI</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">TMSI</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">CREATED</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-[#0e1630] text-white">
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">510011134589830</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">3666363282</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">2025-06-28 13:51:31</td>
                    </tr>
                    <tr>
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">510011134589830</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">3666363282</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">2025-06-28 13:51:31</td>
                    </tr>
                    <tr class="bg-[#0e1630] text-white">
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">510011134589830</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">3666363282</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg bg-transparent">2025-06-28 13:51:31</td>
                    </tr>
                    <tr class="bg-[#4a1f2e] text-[#f16e7e] font-semibold">
                        <td style="padding: 1.5em;" class="py-3 text-lg">510011134589830</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">3666363282</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">2025-06-28 13:51:31</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
