@extends('layouts.app')

@section('content')
<div class="max-w-8xl mx-auto p-0 bg-gray-900 rounded shadow text-white">
    <h1 class="text-2xl font-bold mb-4">IMSI RECON</h1>
    <p class="mb-9 text-gray-400 border-b border-gray-700 pb-6">A dedicated page to scan and identify IMSI numbers in the network with fast configuration and monitoring.</p>

    <div class="bg-[#0e1630] p-6 rounded mt-6 mb-6">
        <h2 class="text-lg font-semibold mb-4">Start System</h2>
        <form class="flex flex-col gap-4">
            <div>
                <label for="target_imsi" class="block mb-1 text-white">Target Imsi</label>
                <input type="text" id="target_imsi" name="target_imsi" class="w-full rounded px-3 py-2 text-white" placeholder="Enter Target Imsi">
            </div>
            <div>
                <label for="arfcn" class="block mb-1 text-white">ARFCN</label>
                <input type="text" id="arfcn" name="arfcn" class="w-full rounded px-3 py-2 text-white" placeholder="Enter ARFCN">
            </div>
            <div class="flex gap-4">
                <button type="button" class="bg-orange-600 hover:bg-orange-700 text-white font-semibold px-4 py-2 rounded">Fast</button>
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
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">TMSI</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">IMSI</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">OPERATOR</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">MCC</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">MNC</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">LAC</th>
                        <th style="padding: 1.5em;" class="py-3 text-lg font-semibold">CELLID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-[#0e1630] text-white">
                        <td style="padding: 1.5em;" class="py-3 text-lg">3666363282</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510011134589830</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">telkomsel</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">10</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">3738</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">6271</td>
                    </tr>
                    <tr class="bg-[#131c3a] text-white">
                        <td style="padding: 1.5em;" class="py-3 text-lg">348797674</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510092029491462</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">indosat</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">21</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">3738</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">6271</td>
                    </tr>
                    <tr class="bg-[#0e1630] text-white">
                        <td style="padding: 1.5em;" class="py-3 text-lg">3909314863</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510092029491462</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">xl</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">11</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">3738</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">6271</td>
                    </tr>
                    <tr class="bg-[#4a1f2e] text-[#f16e7e] font-semibold">
                        <td style="padding: 1.5em;" class="py-3 text-lg">2338961376</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510108832192265</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">indosat</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">510</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">21</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">3738</td>
                        <td style="padding: 1.5em;" class="py-3 text-lg">6271</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
