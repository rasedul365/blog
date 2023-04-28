<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Create Tag') }}
            </h2>
            <a class="blog-btn" href="{{ route('tag.index') }}">Tag</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- <div>
                        <h4 class="mb-4 text-lg font-bold">Create Tag</h4>
                        <form action="{{ route('tag.store') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="blog-label">Tag Name</label>
                                <input name="name" id="name" type="text" class="blog-input" placeholder="Enter tag" value="{{ old('name') }}">

                                @error('name')
                                <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="status" class="blog-label">Tag status</label>
                                <select name="status" id="status" class="blog-input">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                            </div>

                            <button type="submit" class="blog-btn">Create Tag</button>
                        </form>
                    </div> --}}

                    <livewire:tag-create />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
