<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Based Presentation App</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #181a1b;
            color: #f1f1f1;
        }

        .navbar-classy {
            background-color: #23272b;
        }

        .navbar-classy .navbar-brand,
        .navbar-classy .nav-link {
            color: #f1f1f1;
        }

        .navbar-classy .nav-link:hover {
            color: #ffc107;
        }

        main {
            padding: 2rem 0;
            min-height: 85vh;
        }

        footer {
            background-color: #23272b;
            border-top: 1px solid #343a40;
            padding: 1rem 0;
            text-align: center;
            font-size: 0.9rem;
            color: #b0b0b0;
        }

        .navbar-nav {
            align-items: center;
        }

        .navbar-nav .nav-item {
            margin-left: 10px;
        }

        .logout-btn {
            background: none;
            border: none;
            color: #ffc107;
            padding: 0 10px;
            font-weight: 600;
            cursor: pointer;
            font-size: 1rem;
            transition: color 0.2s;
        }

        .logout-btn.logout-hover-red:hover,
        .logout-btn.logout-hover-red:focus {
            color: #e53e3e !important;
            /* Font merah saat hover */
            background: none !important;
            border: none !important;
        }

        .card,
        .modal-content,
        .table,
        .form-control,
        .form-select,
        .alert {
            background-color: #23272b !important;
            color: #f1f1f1 !important;
            border-color: #343a40 !important;
        }

        .table-dark {
            background-color: #181a1b !important;
            color: #ffc107 !important;
        }

        .btn-primary {
            background-color: #4a90e2;
            border-color: #4a90e2;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #357ab7;
            border-color: #357ab7;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #23272b;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #e0a800;
            color: #23272b;
        }

        .btn-danger {
            background-color: #e53e3e;
            border-color: #e53e3e;
            color: #fff;
        }

        .btn-danger:hover {
            background-color: #a71d2a;
            border-color: #a71d2a;
        }

        .alert-success {
            background-color: #22543d !important;
            border-color: #38a169 !important;
            color: #e6ffe6 !important;
        }

        .alert-danger {
            background-color: #742a2a !important;
            border-color: #e53e3e !important;
            color: #ffe6e6 !important;
        }

        .form-control::placeholder {
            color: #b0c4de;
            opacity: 1;
        }

        .modal-header,
        .modal-footer {
            border-color: #343a40;
        }

        .btn-close {
            filter: invert(1);
        }

        .table-yellow th {
            background-color: #ffc107 !important;
            color: #23272b !important;
            border-color: #343a40 !important;
            text-align: center;
            vertical-align: middle;
        }

        .btn-warning.logout-hover-red:hover,
        .btn-warning.logout-hover-red:focus {
            background-color: #e53e3e !important;
            border-color: #e53e3e !important;
            color: #fff !important;
        }

        /* Hanya untuk tombol logout di navbar */
        .navbar .btn-warning.logout-hover-red:hover,
        .navbar .btn-warning.logout-hover-red:focus {
            color: #e53e3e !important;
            /* Font merah saat hover */
            background-color: #ffc107 !important;
            /* Tetap kuning */
            border-color: #ffc107 !important;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-classy shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="/tutorial">Web Presentation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (session()->get('refreshToken')): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/tutorial">Daftar Tutorial</a>
                        </li>
                        <li class="nav-item">
                             <button class="logout-btn logout-hover-red" data-bs-toggle="modal" data-bs-target="#logoutModal">Logout</button>
                        </li>

                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                    <?php endif ?>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
    </main>

    <footer>
        WebPresentationApp
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logoutModalLabel">Konfirmasi Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Yakin ingin logout?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <form action="/logout" method="post" class="d-inline" id="logoutForm">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-warning logout-hover-red">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>