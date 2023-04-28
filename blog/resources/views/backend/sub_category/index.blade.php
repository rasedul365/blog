<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Sub Category') }}
            </h2>
            <a class="blog-btn" href="{{ route('sub-category.create') }}">Add Sub category</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h4 class="mb-4 text-lg font-bold">Show all Catecory</h4>
                    {{-- <div class="mb-6 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left border">ID</th>
                                    <th class="px-4 py-2 text-left border">Category Name</th>
                                    <th class="px-4 py-2 text-left border">Sub Category Name</th>
                                    <th class="px-4 py-2 text-left border">Status</th>
                                    <th class="px-4 py-2 text-left border">Created At</th>
                                    <th class="px-4 py-2 text-left border">Updated At</th>
                                    <th class="px-4 py-2 border">Actions</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sub_categories as $sub_category)
                                <tr>
                                    <td class="px-4 py-2 border">{{ $loop->index+1 }}</td>
                                    <td class="px-4 py-2 border">{{ $sub_category->category->name }}</td>
                                    <td class="px-4 py-2 border">{{ $sub_category->name }}</td>
                                    <td class="px-4 py-2 border">{{ $sub_category->status==1? 'Active':'Inactive' }}</td>
                                    <td class="px-4 py-2 border">{{ $sub_category->created_at->toDayDateTimeString() }}</td>
                                    <td class="px-4 py-2 border">{{ $sub_category->created_at != $sub_category->updated_at ? $sub_category->updated_at->toDayDateTimeString() : 'Not Updated' }}</td>
                                    <td class="px-4 py-2 text-center border ">
                                        <div class="flex justify-center">
                                            <a class="mr-1" href="{{ route('sub-category.edit', $sub_category->id) }}">@include('components.icons.edit')</a>

                                            <a href="{{ route('sub-category.show', $sub_category->id) }}">@include('components.icons.eye')</a>

                                            <form action="{{ route('sub-category.destroy', $sub_category->id) }}" class="ml-1" onsubmit="return confirm('Are you sure ?')" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">
                                                    @include('components.icons.trash')
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div> --}}

                    <livewire:sub-category-index>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
