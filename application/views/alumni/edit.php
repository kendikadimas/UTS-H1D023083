<div class="card border-0 shadow-sm rounded-0">
    <div class="card-header bg-white border-bottom border-dark py-3">
        <h5 class="mb-0 fw-light text-uppercase letter-spacing-1">Edit Data Alumni</h5>
    </div>
    <div class="card-body">
        <form action="<?= site_url('alumni/update') ?>" method="post">
            <input type="hidden" name="id" value="<?= $alumni->id ?>">
            <div class="mb-3">
                <label for="nama" class="form-label small text-uppercase letter-spacing-1">Nama Lengkap</label>
                <input type="text" class="form-control rounded-0 border-dark" id="nama" name="nama" value="<?= htmlspecialchars($alumni->nama ?? '') ?>" required>
                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label small text-uppercase letter-spacing-1">Email</label>
                <input type="email" class="form-control rounded-0 border-dark" id="email" name="email" value="<?= htmlspecialchars($alumni->email ?? '') ?>" required>
                <?= form_error('email', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="tahun_lulus" class="form-label small text-uppercase letter-spacing-1">Tahun Lulus</label>
                <input type="number" class="form-control rounded-0 border-dark" id="tahun_lulus" name="tahun_lulus" value="<?= $alumni->tahun_lulus ?? '' ?>" required>
                <?= form_error('tahun_lulus', '<small class="text-danger">', '</small>') ?>
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label small text-uppercase letter-spacing-1">Pekerjaan</label>
                <input type="text" class="form-control rounded-0 border-dark" id="pekerjaan" name="pekerjaan" value="<?= htmlspecialchars($alumni->pekerjaan ?? '') ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label small text-uppercase letter-spacing-1">Alamat</label>
                <textarea class="form-control rounded-0 border-dark" id="alamat" name="alamat" rows="3"><?= htmlspecialchars($alumni->alamat ?? '') ?></textarea>
            </div>
            <div class="mb-3">
                <label for="telepon" class="form-label small text-uppercase letter-spacing-1">Telepon</label>
                <input type="text" class="form-control rounded-0 border-dark" id="telepon" name="telepon" value="<?= htmlspecialchars($alumni->telepon ?? '') ?>">
            </div>
            <div class="d-flex justify-content-between">
                <a href="<?= site_url('alumni') ?>" class="btn btn-outline-dark rounded-0">Batal</a>
                <button type="submit" class="btn btn-dark rounded-0">Update</button>
            </div>
        </form>
    </div>
</div>