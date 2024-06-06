<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3 row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email Anda" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password Anda" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <p class="m-auto text-center p-2">Jika Belum punya akun silahkan Daftar</p>
          <button type="submit" class="btn btn-secondary">Login</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#register">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
