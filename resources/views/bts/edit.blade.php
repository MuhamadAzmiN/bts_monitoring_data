@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-6">Edit BTS</h1>
    <table class="min-w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-200">
            <tr class="text-left text-gray-700">
                <th class="px-6 py-3 font-semibold">Nama BTS</th>
                <th class="px-6 py-3 font-semibold">Frekuensi</th>
                <th class="px-6 py-3 font-semibold">Parameter Lain</th>
                <th class="px-6 py-3 font-semibold">Status</th>
                <th class="px-6 py-3 font-semibold">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ([
                ['name' => 'BTS Jakarta 1', 'freq' => '900 MHz', 'param' => 'Power: 20W, Antenna: Omni', 'status' => 'Aktif'],
                ['name' => 'BTS Bandung 2', 'freq' => '1800 MHz', 'param' => 'Power: 15W, Antenna: Directional', 'status' => 'Nonaktif'],
                ['name' => 'BTS Surabaya 3', 'freq' => '2100 MHz', 'param' => 'Power: 25W, Antenna: Omni', 'status' => 'Aktif'],
                ['name' => 'BTS Medan 4', 'freq' => '900 MHz', 'param' => 'Power: 18W, Antenna: Directional', 'status' => 'Aktif'],
                ['name' => 'BTS Makassar 5', 'freq' => '1800 MHz', 'param' => 'Power: 20W, Antenna: Omni', 'status' => 'Nonaktif'],
            ] as $bts)
            <tr class="border-b border-gray-300">
                <td class="px-6 py-4 font-semibold">{{ $bts['name'] }}</td>
                <td class="px-6 py-4">{{ $bts['freq'] }}</td>
                <td class="px-6 py-4">{{ $bts['param'] }}</td>
                <td class="px-6 py-4">
                    @if ($bts['status'] === 'Aktif')
                        <span class="text-green-600 font-semibold">Aktif</span>
                    @else
                        <span class="text-red-600 font-semibold">Nonaktif</span>
                    @endif
                </td>
                <td class="px-6 py-4">
                    <button class="bg-yellow-400 px-3 py-1 rounded text-black font-semibold">Edit</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
