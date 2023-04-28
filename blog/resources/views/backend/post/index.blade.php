<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('View all Post') }}
            </h2>
            <a class="blog-btn" href="{{ route('post.create') }}">Add Post</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-9xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">


                    <livewire:post-index>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
