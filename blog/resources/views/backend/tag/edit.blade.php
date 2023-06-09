<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __('Edit Tag') }}
            </h2>
            <a class="blog-btn" href="{{ route('tag.index') }}">Tag</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <livewire:tag-edit :tag_id='$tag_id'/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
