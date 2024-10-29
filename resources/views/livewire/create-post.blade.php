<div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">New Post:</h2>

{{--    Clear Title:<button x-on:click="$wire.title = ''" class="btn border border-black rounded font-semibold p-1 bg-red-500">Clear</button>--}}
{{--    Submit: <button x-on:click="$wire.create()" class="btn border border-black rounded font-semibold p-1 bg-green-300">Submit</button>--}}

    <form wire:submit="create">

        {{-- Title --}}
        <label class="block mb-4">
            <span class="text-gray-600 font-semibold">Title</span>
            <input wire:model="title" type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" placeholder="Enter post title">
            @error('title')<em class="text-red-600">{{ $message }}</em>@enderror
        </label>

        {{-- Content --}}
        <label class="block mb-4">
            <span class="text-gray-600 font-semibold">Content</span>
            <textarea wire:model="content" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" rows="4" placeholder="Enter post content"></textarea>
            @error('content')<em class="text-red-600">{{ $message }}</em>@enderror
        </label>

        <small>
            Your content has:
                <span x-text="$wire.content.length" class="font-semibold"></span>
            letters
        </small>
        |
        <small>
            <span x-text="$wire.content.split(' ').length - 1" class="font-semibold"></span>
            words
        </small>


        {{-- Submit --}}
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 rounded-md transition duration-200">Save</button>
    </form>
</div>
