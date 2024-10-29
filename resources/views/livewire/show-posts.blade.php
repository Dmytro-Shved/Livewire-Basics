<div class="bg-white shadow-lg rounded-lg p-6 mb-8">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">Posts:</h2>

    <table class="min-w-full bg-white border border-gray-200 rounded-lg overflow-hidden">
        <thead class="bg-gray-200">
            <tr>
                <th class="py-3 px-4 text-left text-gray-600 font-semibold border-b border-gray-300">Title</th>
                <th class="py-3 px-4 text-left text-gray-600 font-semibold border-b border-gray-300">Content</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <!-- :post="$post" => :$post -->
                <livewire:post-row :key="$post->id" :post="$post">
            @endforeach
        </tbody>
    </table>
</div>
