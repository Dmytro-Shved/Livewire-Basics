<tr class="{{ $post->archive ? 'bg-stone-300' : 'bg-gray-100' }}">
    <td class="py-3 px-4 border-b border-gray-200">{{ $post->title }}</td>
    <td class="py-3 px-4 border-b border-gray-200">{{ str($post->content)->words(10) }}</td>
    <td>
        @unless($post->archive)
            <button wire:click="archive"
                    wire:confirm="Are sure you wanna to archive this Post?"
                    type="button" class="btn text-white bg-stone-500 rounded p-0.5 mt-2">Archive
            </button>
        @endunless

        @if($post->archive)
            <small class="font-semibold">Archived</small>
            <small>✔</small>
        @endif

        <button wire:click="$parent.delete({{ $post->id  }})"
                wire:confirm="Are sure you wanna to delete this Post?"
                type="button" class="btn text-white bg-red-500 rounded p-0.5 mt-2">Delete
        </button>
    </td>
</tr>
