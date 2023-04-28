<div>
    <form wire:submit.prevent="submitFrom">
        <div class="mb-4">
            <label for="name" class="blog-label">Name</label>
            <input wire:model.lazy="name" id="name" type="text" class="blog-input" placeholder="Type category name">

            @error('name')
            <div class="mt-2 text-sm text-red-500">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="status" class="blog-label">Tag status</label>
            <select wire:model.lazy="status" name="status" id="status" class="blog-input">
                <option value="">Select Status</option>
                <option value="1">Active</option>
                <option value="0">Inactive</option>
            </select>
        </div>
        <button class="blog-btn" type="submit">Create</button>
    </form>
</div>
