<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Pengaturan Website</h2>
    </x-slot>

    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            @if(session('success'))
                <div class="bg-green-100 text-green-700 p-3 rounded mb-4">{{ session('success') }}</div>
            @endif

            <table class="w-full border-collapse border border-gray-200">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="border border-gray-200 px-4 py-2">Key</th>
                        <th class="border border-gray-200 px-4 py-2">Value</th>
                        <th class="border border-gray-200 px-4 py-2">Deskripsi</th>
                        <th class="border border-gray-200 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($settings as $setting)
                        <tr>
                            <td class="border border-gray-200 px-4 py-2 font-mono">{{ $setting->key }}</td>
                            <td class="border border-gray-200 px-4 py-2 font-semibold">{{ $setting->value }}</td>
                            <td class="border border-gray-200 px-4 py-2 text-gray-600">{{ $setting->description }}</td>
                            <td class="border border-gray-200 px-4 py-2 text-center">
                                <a href="{{ route('admin.setting.edit', $setting->id) }}" class="text-yellow-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>