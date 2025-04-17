<div class="card border-0 shadow-sm rounded-0">
    <div class="card-header bg-white border-0 d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-light text-uppercase letter-spacing-1">Daftar Alumni</h5>
        <div>
            <a href="<?= site_url('alumni/tambah') ?>" class="btn btn-outline-dark btn-sm rounded-0">
                <i class="bi bi-plus"></i> Tambah Alumni
            </a>
        </div>
    </div>
    <div class="card-body p-0">
        <form action="<?= site_url('alumni/cari') ?>" method="get" class="mb-4 p-3 border-bottom">
            <div class="row g-2">
                <div class="col-md-6">
                    <input type="text" name="keyword" class="form-control rounded-0 border-dark" placeholder="Cari nama alumni..." value="<?= isset($keyword) ? htmlspecialchars($keyword) : '' ?>">
                </div>
                <div class="col-md-4">
                    <input type="number" name="tahun_lulus" class="form-control rounded-0 border-dark" placeholder="Tahun lulus" value="<?= isset($tahun_lulus) ? htmlspecialchars($tahun_lulus) : '' ?>">
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-dark w-100 rounded-0">Cari</button>
                </div>
            </div>
        </form>

        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="bg-light">
                    <tr class="text-uppercase small letter-spacing-1">
                        <th class="py-3 border-dark">#</th>
                        <th class="py-3 border-dark">Nama</th>
                        <th class="py-3 border-dark">Email</th>
                        <th class="py-3 border-dark">Tahun Lulus</th>
                        <th class="py-3 border-dark">Pekerjaan</th>
                        <th class="py-3 border-dark text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($alumni)): ?>
                        <tr>
                            <td colspan="6" class="text-center py-4 text-muted">Tidak ada data alumni</td>
                        </tr>
                    <?php else: ?>
                        <?php foreach ($alumni as $key => $item): ?>
                            <tr class="border-top border-dark">
                                <td class="align-middle"><?= $key + 1 ?></td>
                                <td class="align-middle fw-medium"><?= htmlspecialchars($item->nama ?? '') ?></td>
                                <td class="align-middle text-muted"><?= htmlspecialchars($item->email ?? '') ?></td>
                                <td class="align-middle"><?= $item->tahun_lulus ?? '' ?></td>
                                <td class="align-middle"><?= htmlspecialchars($item->pekerjaan ?? '') ?></td>
                                <td class="align-middle text-end">
                                    <a href="<?= site_url('alumni/edit/' . $item->id) ?>" class="btn btn-sm btn-outline-dark rounded-0 border-0">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="<?= site_url('alumni/hapus/' . $item->id) ?>" class="btn btn-sm btn-outline-dark rounded-0 border-0" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="bi bi-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>  