<div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Login</h5>
            <form wire:submit='login'>
                <div class="mb-4">
                    <label for="email" class="fomr-label">Email</label>
                    <input class="form-control" type="email" name="email" id="email">
                    @error('email')
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror


                </div>

                <div class="mb-4">
                    <label for="password" class="fomr-label">Password</label>
                    <input class="form-control" type="password" name="password" id="password">
                    @error('email')
                        <small class="d-block mt-1 text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
