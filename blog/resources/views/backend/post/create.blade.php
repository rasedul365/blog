<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <form>
                        <div class="mb-4">
                            <label for="title" class="blog-label">Post Title</label>
                            <input name="title" id="title" type="text" class="blog-input" placeholder="Type category name">

                            @error('title')
                            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="status" class="blog-label">Post status</label>
                            <select name="status" id="status" class="blog-input">
                                <option value="">Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label for="category_id" class="blog-label">Select Category</label>
                            <select name="category_id" id="category" class="blog-input">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="sub_category" class="blog-label">Select Sub Category</label>
                            <select name="sub_category_id" id="sub_category" class="blog-input">
                                <option value="">Select Sub Category</option>
                                <option value=""></option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="description" class="blog-label">Post description</label>
                            <textarea id="description" rows="7" class="blog-input"></textarea>

                            @error('description')
                            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <button class="blog-btn" type="submit">Create Post</button>
                    </form> --}}

                    <livewire:post-create >
                    
                </div>
            </div>
        </div>
    </div>

</x-app-layout>




