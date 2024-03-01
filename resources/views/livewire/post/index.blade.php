<div class="row justify-content-center">
    <div class="col-12 col-md-6">
        <livewire:post.create></livewire:post.create>
    </div>
    <div class="card col-11 col-md-6 px-0">
        <div class="card-body px-0">
            <h5 class="card-title mb-3 px-3">Your post</h5>
            <hr />
            <div class="card-text px-3">
                @foreach ($posts as $post)
                <livewire:post.block :post="$post" wire:key="{{ $post->id }}" />
                @endforeach
            </div>
        </div>
    </div>
</div>
