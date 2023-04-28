<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Edit Category') }}
            </h2>
            <a class="blog-btn" href="{{ route('category.index') }}">Category</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <div>
                        <h4 class="mb-4 text-lg font-bold">Edit Catecory</h4>
                        <form action="{{ route('category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="name" class="blog-label">Category Name</label>
                                <input name="name" id="name" type="text" class="blog-input" placeholder="Enter category" value="{{ $category->name }}">

                                @error('name')
                                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="blog-label">Category status</label>
                                <select name="status" id="status" class="blog-input" value="">
                                    <option value="{{ $category->status }}">{{ $category->status==1? 'Active':'Inactive' }}</option>
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="blog-btn">Update Category</button>
                        </form>
                    </div> --}}
                    <livewire:category-edit :category_id='$category_id'/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
