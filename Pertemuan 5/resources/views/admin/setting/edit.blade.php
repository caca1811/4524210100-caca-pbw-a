<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Edit Pengaturan</h2>
    </x-slot>

    <div class="py-12 max-w-xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST">
                @csrf @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 font-semibold mb-2">Key: {{ $setting->key }}</label>
                    <input type="text" name="value" value="{{ old('value', $setting->value) }}" class="w-full border rounded px-3 py-2" required>
                    <small class="text-gray-500">{{ $setting->description }}</small>
                </div>
                <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Perbarui</button>
            </form>
        </div>
    </div>
</x-app-layout>