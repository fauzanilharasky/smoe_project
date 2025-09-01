<section class="container-lg mt-5 mb-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Tambah Data Intern</h4>
        </div>
        <div class="card-body">
            <form action="<?= base_url('intern/store'); ?>" method="post">
                <div class="mb-3">
                    <label for="no_badge" class="form-label">No. Badge</label>
                    <input type="text" class="form-control" id="no_badge" name="no_badge" required>
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="nama_departemen" class="form-label">Departemen</label>
                    <input type="text" class="form-control" id="nama_departemen" name="nama_departemen" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="alamat_pt" class="form-label">Alamat Company</label>
                    <input type="text" class="form-control" id="alamat_pt" name="alamat_pt" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="<?= base_url('home'); ?>" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</section>
