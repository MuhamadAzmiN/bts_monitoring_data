@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6 bg-white rounded shadow" x-data="{ editDialogOpen: false, currentBts: null }" x-cloak>
    <h1 class="text-2xl font-bold mb-6">Edit BTS (Dummy Data Table)</h1>
    <table class="min-w-full border border-gray-300">
        <thead class="bg-gray-200">
            <tr>
                <th class="border px-4 py-2 text-left">Nama BTS</th>
                <th class="border px-4 py-2 text-left">Frekuensi</th>
                <th class="border px-4 py-2 text-left">Parameter Lain</th>
                <th class="border px-4 py-2 text-left">Status</th>
                <th class="border px-4 py-2 text-left">Aksi</th>
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
            <tr class="border-b">
                <td class="border px-4 py-2">{{ $bts['name'] }}</td>
                <td class="border px-4 py-2">{{ $bts['freq'] }}</td>
                <td class="border px-4 py-2">{{ $bts['param'] }}</td>
                <td class="border px-4 py-2">
                    @if ($bts['status'] === 'Aktif')
                        <span class="text-green-600 font-semibold">Aktif</span>
                    @else
                        <span class="text-red-600 font-semibold">Nonaktif</span>
                    @endif
                </td>
                <td class="border px-4 py-2 flex flex-wrap gap-2">
                    <button @click="editDialogOpen = true; currentBts = {{ json_encode($bts) }}" class="bg-yellow-400 px-3 py-1 rounded text-black font-semibold whitespace-nowrap">Edit</button>
                    <button class="bg-gray-300 px-3 py-1 rounded text-black font-semibold whitespace-nowrap">SMS</button>
                    <button class="bg-gray-300 px-3 py-1 rounded text-black font-semibold whitespace-nowrap">Broadcast</button>
                    <button class="bg-gray-300 px-3 py-1 rounded text-black font-semibold whitespace-nowrap">Call</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>


    <!-- Modal Dialog -->
    <div x-show="editDialogOpen" x-transition.opacity class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-30 backdrop-blur-sm" style="display: none;">
        <div x-transition x-on:click.stop class="bg-white rounded-lg shadow-lg max-w-md w-full p-6" @click.away="editDialogOpen = false">
            <h2 class="text-xl font-bold mb-4">Edit BTS</h2>
            <form>
                <div class="mb-4">
                    <label for="name" class="block font-semibold mb-1">Nama BTS</label>
                    <input type="text" id="name" name="name" x-model="currentBts.name" class="w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label for="freq" class="block font-semibold mb-1">Frekuensi</label>
                    <input type="text" id="freq" name="freq" x-model="currentBts.freq" class="w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label for="param" class="block font-semibold mb-1">Parameter Lain</label>
                    <input type="text" id="param" name="param" x-model="currentBts.param" class="w-full border border-gray-300 rounded px-3 py-2" />
                </div>
                <div class="mb-4">
                    <label for="status" class="block font-semibold mb-1">Status</label>
                    <select id="status" name="status" x-model="currentBts.status" class="w-full border border-gray-300 rounded px-3 py-2">
                        <option>Aktif</option>
                        <option>Nonaktif</option>
                    </select>
                </div>
                <div class="flex justify-end space-x-2">
                    <button type="button" @click="editDialogOpen = false" class="px-4 py-2 rounded border border-gray-300">Batal</button>
                    <button type="submit" class="px-4 py-2 rounded bg-yellow-400 text-black font-semibold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
