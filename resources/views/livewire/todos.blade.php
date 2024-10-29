<div>
    Write more things to do:
    <form wire:submit="add">
        <input class="bg-gray-50 border border-black" type="text" wire:model="todo">
        <button class="btn bg-blue-400 rounded p-0.5 " type="submit">Add</button>
    </form>

    <ul>
        @foreach($todos as $todo)
            <li> * {{ $todo }} </li>
        @endforeach
    </ul>
</div>
