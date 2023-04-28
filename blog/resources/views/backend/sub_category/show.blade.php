<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Show Sub Category') }}
            </h2>
            <a class="blog-btn" href="{{ route('sub-category.index') }}">Back</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h4 class="mb-4 text-lg font-bold">Show Sub Category</h4>
                    <div class="mb-6 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tbody>
                                <tr>
                                    <th class="px-4 py-2 text-left border">ID</th>
                                    <td class="px-4 py-2 border">{{ $subCategory->id }}</td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 text-left border">Category Name</th>
                                    <td class="px-4 py-2 border">{{ $subCategory->categories->name }}</td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 text-left border">Sub Category Name</th>
                                    <td class="px-4 py-2 border">{{ $subCategory->name }}</td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 text-left border">Slug</th>
                                    <td class="px-4 py-2 border">{{ $subCategory->slug }}</td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 text-left border">Status</th>
                                    <td class="px-4 py-2 border">{{ $subCategory->status == 1 ? 'Active' : 'Inactive' }}</td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 text-left border">Created At</th>
                                    <td class="px-4 py-2 border">{{ $subCategory->created_at }}</td>
                                </tr>
                                <tr>
                                    <th class="px-4 py-2 text-left border">Updated At</th>
                                    <td class="px-4 py-2 border">
                                        {{ $subCategory->updated_at }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
