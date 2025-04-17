<div class="card border-0 shadow-sm rounded-0">
    <div class="card-header bg-white border-bottom border-dark py-3">
        <h5 class="mb-0 fw-light text-uppercase letter-spacing-1">Statistik Alumni per Tahun Lulus</h5>
    </div>
    <div class="card-body">
        <?php if (empty($statistik)): ?>
            <p class="text-center text-muted py-4">Tidak ada data statistik</p>
        <?php else: ?>
            <!-- Chart moved to the top -->
            <div class="chart-container mb-4" style="height: 400px;">
                <canvas id="statistikChart"></canvas>
            </div>

            <!-- Table moved below the chart -->
            <div class="row g-2">
                <?php foreach ($statistik as $item): ?>
                    <div class="col-md-4 col-sm-6">
                        <div class="card border-dark rounded-0 shadow-sm h-100">
                            <div class="card-body p-2 d-flex justify-content-between align-items-center">
                                <div class="fw-medium"><?= $item->tahun_lulus ?></div>
                                <div class="badge bg-dark rounded-0 px-2 py-1"><?= $item->jumlah ?> Alumni</div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const ctx = document.getElementById('statistikChart').getContext('2d');
                    const labels = <?= json_encode(array_column($statistik, 'tahun_lulus')) ?>;
                    const data = <?= json_encode(array_column($statistik, 'jumlah')) ?>;
                    
                    new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: labels,
                            datasets: [{
                                label: 'Jumlah Alumni',
                                data: data,
                                backgroundColor: 'rgba(33, 37, 41, 0.7)',
                                borderColor: 'rgba(33, 37, 41, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        stepSize: 1
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });
                });
            </script>
        <?php endif; ?>
    </div>
</div>