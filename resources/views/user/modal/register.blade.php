<div class="modal fade" id="register" tabindex="-1" aria-labelledby="registerLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Registrasi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="modal-body">
          <div class="mb-3 row">
            <label for="nama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Anda" required>
            </div>
          </div>
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
          <div class="mb-3 row">
            <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat Anda" required>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="tlp" class="col-sm-3 col-form-label">No Hp <span style="color: blue;">*</span></label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="tlp" name="tlp" placeholder="Masukan Nomor Handphone Anda" required>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <p class="m-auto text-center p-2">Jika Sudah Membuat Akun silahkan Login</p>
          <button type="submit" class="btn btn-secondary">Daftar</button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>
