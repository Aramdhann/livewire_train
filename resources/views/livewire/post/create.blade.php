<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Post</h5>
            <form wire:submit="save">
                <div class="mb-4">
                    <label for="title" class="form-label">Title</label>
                    <input wire:model="title" class="form-control">
                    @error('title')
                    <div class="text-danger d-block mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="body" class="form-label">Body</label>
                    <textarea wire:model="body" class="form-control" id="body" rows="3"></textarea>
                    @error('body')
                    <div class="text-danger d-block mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
