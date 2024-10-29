<div class="flex space-x-8 max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <div class="w-1/2">
        <p class="text-lg font-semibold text-gray-700 mb-4">Livewire:</p>

        <div class="flex items-center space-x-4">
            <span class="text-xl font-bold">{{ $count }}</span>
            <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-200" wire:click="increment(1)">+</button>
        </div>
    </div>

    <div class="w-1/2" x-data="{ count: 0 }">
        <p class="text-lg font-semibold text-gray-700 mb-4">Alpine.js:</p>

        <div class="flex items-center space-x-4">
            <span class="text-xl font-bold" x-text="count"></span>
            <button class="px-4 py-2 bg-blue-500 text-white font-semibold rounded hover:bg-blue-600 transition duration-200" x-on:click="count++">+</button>
        </div>
    </div>
</div>
