<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Create Sub Category') }}
            </h2>
            <a class="blog-btn" href="{{ route('sub-category.index') }}">Show Sub Category</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <div>
                        <h4 class="mb-4 text-lg font-bold">Create Sub Catecory</h4>
                        <form action="{{ route('sub-category.update', $subCategory->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-4">
                                <label for="name" class="blog-label">Sub Category Name</label>
                                <input name="name" id="name" type="text" class="blog-input" placeholder="Enter category"
                                    value="{{ $subCategory->name }}">

                                @error('name')
                                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="category_id" class="blog-label">Category</label>
                                <select name="category_id" id="category_id" class="blog-input">
                                    <option value="{{ $subCategory->category->id }}">{{ $subCategory->category->name }}</option>
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <label for="status" class="blog-label">Sub category status</label>
                                <select name="status" id="status" class="blog-input">
                                    <option value="{{ $subCategory->status }}">{{ $subCategory->status==1? 'Active':'Inactive' }}</option>
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="blog-btn">Update Sub Category</button>
                        </form>
                    </div> --}}

                    <livewire:sub-category-edit :sub_category_id='$sub_category_id' />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
