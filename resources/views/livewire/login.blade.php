<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-3 text-center">LOGIN</h5>
            <form wire:submit='login'>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" wire:model='email' class="form-control" id="email">
                    @error('email')
                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" wire:model='password' class="form-control" id="password">
                    @error('password')
                    <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>
