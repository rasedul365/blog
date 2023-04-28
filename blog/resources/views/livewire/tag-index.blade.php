<div>
    <div class="mb-6 overflow-x-auto">
        <div class="flex justify-between mb-6">
            <div class="p-2">
                <input wire:model='' type="search" placeholder="Search"
                    class="w-full px-3 py-2 leading-tight text-gray-700 border rounded whadow apperance-none focus:outline-none focus:shadow-outline">
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
                @foreach ($tags as $data)
                <tr>
                    <td class="px-4 py-2 border">{{ $loop->index+1 }}</td>
                    <td class="px-4 py-2 border">{{ $data->name }}</td>
                    <td class="px-4 py-2 border">{{ $data->status==1? 'Active':'Inactive' }}</td>
                    <td class="px-4 py-2 border">{{ $data->created_at }}</td>
                    <td class="px-4 py-2 border">{{ $data->updated_at }}</td>
                    <td class="px-4 py-2 text-center border ">
                        <div class="flex justify-center">
                            <a class="mr-2"
                                href="{{ route('tag.edit', $data->id) }}">@include('components.icons.edit')</a>
                            <a class="mr-2"
                                href="{{ route('tag.show', $data->id) }}">@include('components.icons.eye')</a>
                            <form wire:submit.prevent='tagDelete({{ $data->id }})'>
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
            {{ $tags->links() }}
        </div>

    </div>
</div>
