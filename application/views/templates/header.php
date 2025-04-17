<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            padding-top: 0;
            background-color: #f8f9fa;
        }
        
        .navbar-monochrome {
            background-color: white !important;
            border-bottom: 1px solid #212529;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .navbar-brand-monochrome {
            color: #212529 !important;
            font-weight: 300;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        
        .nav-link-monochrome {
            color: #212529 !important;
            font-weight: 300;
            letter-spacing: 0.5px;
            padding: 0.5rem 1rem;
            border-bottom: 2px solid transparent;
            transition: all 0.3s ease;
        }
        
        .nav-link-monochrome:hover,
        .nav-link-monochrome:focus {
            border-bottom-color: #212529;
        }
        
        .alert-monochrome {
            background-color: white;
            color: #212529;
            border: 1px solid #212529;
            border-radius: 0;
        }
        
        .btn-close-monochrome {
            filter: invert(1);
        }
        
        .letter-spacing-1 {
            letter-spacing: 0.5px;
        }
        
        .border-dark {
            border-color: #212529 !important;
        }
        
        .bg-light {
            background-color: #f8f9fa !important;
        }
        
        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }
    </style>
</head>
<body>
    <div class="container-fluid px-0">
        <nav class="navbar navbar-expand-lg navbar-monochrome">
            <div class="container">
                <a class="navbar-brand navbar-brand-monochrome" href="<?= site_url('alumni') ?>">Aplikasi Alumni</a>
                <button class="navbar-toggler border-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link nav-link-monochrome <?= ($this->uri->segment(1) )== 'alumni' && $this->uri->segment(2) == '' ? 'active' : '' ?>" href="<?= site_url('alumni') ?>">Daftar Alumni</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-monochrome <?= $this->uri->segment(2) == 'statistik' ? 'active' : '' ?>" href="<?= site_url('alumni/statistik') ?>">Statistik</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container mt-4">
            <?php if ($this->session->flashdata('success')): ?>
                <div class="alert alert-monochrome alert-dismissible fade show rounded-0" role="alert">
                    <?= $this->session->flashdata('success') ?>
                    <button type="button" class="btn-close btn-close-monochrome" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>