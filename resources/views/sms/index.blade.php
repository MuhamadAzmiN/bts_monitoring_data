@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6 bg-white rounded shadow">
    <h1 class="text-2xl font-bold mb-6">SMS / Broadcast / Telephony</h1>
    <table class="min-w-full border border-gray-300 divide-y divide-gray-300">
        <thead class="bg-gray-100">
            <tr class="text-left text-gray-700">
                <th class="px-6 py-3 font-semibold">Patient ID</th>
                <th class="px-6 py-3 font-semibold">Patient Name</th>
                <th class="px-6 py-3 font-semibold">Type</th>
                <th class="px-6 py-3 font-semibold">Time</th>
                <th class="px-6 py-3 font-semibold">Mobile Number</th>
                <th class="px-6 py-3 font-semibold">Status</th>
                <th class="px-6 py-3 font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach ([
                ['id' => '#123', 'name' => 'Oliver Smith', 'avatar' => 'https://randomuser.me/api/portraits/men/1.jpg', 'type' => 'Clinic Visit', 'time' => '08:00 AM - 08:30 AM', 'mobile' => '+447123456789', 'status' => 'Completed', 'status_color' => 'text-green-600'],
                ['id' => '#124', 'name' => 'William Harris', 'avatar' => 'https://randomuser.me/api/portraits/men/2.jpg', 'type' => 'Home Visit', 'time' => '08:30 AM - 09:30 AM', 'mobile' => '+447123987654', 'status' => 'Accepted', 'status_color' => 'text-blue-600'],
                ['id' => '#125', 'name' => 'Sophia Taylo', 'avatar' => 'https://randomuser.me/api/portraits/women/3.jpg', 'type' => 'Home Visit', 'time' => '09:00 AM - 09:30 AM', 'mobile' => '+447123678945', 'status' => 'Accepted', 'status_color' => 'text-blue-600'],
                ['id' => '#126', 'name' => 'Henry Wilson', 'avatar' => 'https://randomuser.me/api/portraits/men/4.jpg', 'type' => 'Clinic Visit', 'time' => '09:30 AM - 10:00 AM', 'mobile' => '+447123543216', 'status' => 'Rescheduled', 'status_color' => 'text-yellow-600'],
                ['id' => '#127', 'name' => 'Alexa Carey', 'avatar' => 'https://randomuser.me/api/portraits/women/5.jpg', 'type' => 'Clinic Visit', 'time' => '10:00 AM - 10:30 AM', 'mobile' => '+447123678912', 'status' => 'Accepted', 'status_color' => 'text-blue-600'],
                ['id' => '#128', 'name' => 'Olivia Johnson', 'avatar' => 'https://randomuser.me/api/portraits/women/6.jpg', 'type' => 'Clinic Visit', 'time' => '10:30 AM - 11:00 AM', 'mobile' => '+447123234567', 'status' => 'Cancelled', 'status_color' => 'text-red-600'],
                ['id' => '#129', 'name' => 'George Thompson', 'avatar' => 'https://randomuser.me/api/portraits/men/7.jpg', 'type' => 'Home Visit', 'time' => '11:00 AM - 11:30 AM', 'mobile' => '+44712367890', 'status' => 'Accepted', 'status_color' => 'text-blue-600'],
            ] as $patient)
            <tr class="divide-x divide-gray-300">
                <td class="px-6 py-4 font-semibold">{{ $patient['id'] }}</td>
                <td class="px-6 py-4 flex items-center space-x-3">
                    <img src="{{ $patient['avatar'] }}" alt="{{ $patient['name'] }}" class="w-10 h-10 rounded-full object-cover">
                    <span>{{ $patient['name'] }}</span>
                </td>
                <td class="px-6 py-4">{{ $patient['type'] }}</td>
                <td class="px-6 py-4 whitespace-pre-line">{{ $patient['time'] }}</td>
                <td class="px-6 py-4">{{ $patient['mobile'] }}</td>
                <td class="px-6 py-4 {{ $patient['status_color'] }} font-semibold">{{ $patient['status'] }}</td>
                <td class="px-6 py-4 space-x-2 whitespace-nowrap">
                    <button class="bg-gray-300 px-3 py-1 rounded text-black font-semibold">SMS</button>
                    <button class="bg-gray-300 px-3 py-1 rounded text-black font-semibold">Broadcast</button>
                    <button class="bg-gray-300 px-3 py-1 rounded text-black font-semibold">Call</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
