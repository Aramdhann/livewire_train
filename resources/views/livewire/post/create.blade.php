<div>
    <x-flash-message />

    <form wire:submit="save">
        <div class="mb-2">
            <label for="body" class="visually-hidden">Body</label>
            <textarea wire:model="form.body" class="form-control" id="body" placeholder="What's on your mind?"></textarea>
            @error('form.body')
            <div class="text-danger d-block mt-1">{{ $message }}</div>
            @enderror
        </div>
        <div class="d-flex justify-content-end mb-3">
            <button class="btn btn-primary" type="post">Post</button>
        </div>
    </form>
</div>
