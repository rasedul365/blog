<div>
    <form wire:submit.prevent="submitFrom">
        <div class="mb-4">
            <label for="title" class="blog-label">Post Title</label>
            <input wire:model.lazy="title" id="title" type="text" class="blog-input" placeholder="Type category name">

            @error('title')
            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="blog-label">Post status</label>
            <select wire:model.lazy="status" name="status" id="status" class="blog-input">
                <option value="">Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>


        <div class="mb-4">
            <label for="category" class="blog-label">Select Category</label>
            <select wire:model.lazy="category" id="category" class="blog-input">
                <option value="">Select Category</option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        @if (!is_null($sub_categories))
        <div class="mb-4">
            <label for="sub_category" class="blog-label">Select Sub Category</label>
            <select wire:model.lazy="sub_category" id="sub_category" class="blog-input">
                <option value="-1">Select Sub Category</option>
                @foreach ($sub_categories as $sub_category)
                <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                @endforeach
            </select>
        </div>
        @endif

        <div class="mb-4">
            <label for="description" class="blog-label">Post description</label>
            <textarea wire:model.lazy='description' id="description" rows="7" class="blog-input"></textarea>

            @error('description')
            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <button class="blog-btn" type="submit">Create Post</button>
    </form>
</div>

{{-- @push('scripts')
<script src="{{ asset('ckeditor5/ckeditor.js') }}"></script>
<script>
        ClassicEditor
            .create( document.querySelector( '#description' ) )
            .catch( error => {
                    console.error( error );
                } );
</script>



@endpush --}}
