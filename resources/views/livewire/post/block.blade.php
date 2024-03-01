<div>
    <div class="d-flex gap-2 align-items-center">
        <h5 class="text-primary">
            {{ $post->user->name }}
        </h5>
        <small class="text-body-tertiary">
            {{ $post->created_at }}
        </small>
    </div>
    <p>
        {{ $post->body }}
    </p>
</div>
