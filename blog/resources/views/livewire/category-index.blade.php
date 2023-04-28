<div>
    <div class="mb-6 overflow-x-auto">
        <div class="flex justify-between mb-6">
            <div class="p-2">
                <input wire:model='' type="search" placeholder="Search" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded whadow apperance-none focus:outline-none focus:shadow-outline">
            </div>
            <div class="p-2 mr-2">
                <input type="checkbox" class="mr-6 leading-tight" wire:model='active'>Active Only ?
            </div>
        </div>

        <table class="w-full whitespace-nowrap">
            <thead>
                <tr>
                    <th class="px-4 py-2 text-left border">ID</th>
                    <th class="px-4 py-2 text-left border">Category Name</th>
                    <th class="px-4 py-2 text-left border">Status</th>
                    <th class="px-4 py-2 text-left border">Created At</th>
                    <th class="px-4 py-2 text-left border">Updated At</th>
                    <th class="px-4 py-2 border">Actions</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td class="px-4 py-2 border">{{ $loop->index+1 }}</td>
                    <td class="px-4 py-2 border">{{ $category->name }}</td>
                    <td class="px-4 py-2 border">{{ $category->status==1? 'Active':'Inactive' }}</td>
                    <td class="px-4 py-2 border">{{ $category->created_at }}</td>
                    <td class="px-4 py-2 border">{{ $category->updated_at }}</td>
                    <td class="px-4 py-2 text-center border ">
                        <div class="flex justify-center">
                            <a class="mr-2" href="{{ route('category.edit', $category->id) }}">@include('components.icons.edit')</a>
                            <a class="mr-2" href="{{ route('category.show', $category->id) }}">@include('components.icons.eye')</a>
                            <form wire:submit.prevent='categoryDelete({{ $category->id }})'>
                                <button onclick="return confirm('Are you sure ?')" type="submit">
                                    @include('components.icons.trash')
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        <div class="mt-6">
            {{ $categories->links() }}
        </div>

    </div>
</div>
