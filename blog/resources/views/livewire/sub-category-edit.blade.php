<div>
    <h4 class="mb-4 text-lg font-bold">Edit Sub Catecory</h4>
    <form wire:submit.prevent="submitFrom">
        <div class="mb-4">
            <label for="category_id" class="blog-label">Category</label>
            <select wire:model.lazy="category_id" id="category_id" class="blog-input">
                <option value="">Select Category</option>

                @foreach ($categories as $data)
                <option value="{{ $data->id }}">{{ $data->name }}</option>
                @endforeach
            </select>

            @error('category_id')
            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="name" class="blog-label">Sub Category Name</label>
            <input wire:model.lazy="name" id="name" type="text" class="blog-input" placeholder="Type Sub-category">

            @error('name')
            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="blog-label">Category status</label>
            <select wire:model.lazy="status" id="status" class="blog-input">
                <option value="">Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>

        <button type="submit" class="blog-btn">Update Category</button>
    </form>
</div>
