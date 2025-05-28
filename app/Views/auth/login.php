<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #181a1b;
            font-family: 'Arial', sans-serif;
            color: #f1f1f1;
        }

        .card {
            background-color: #23272b;
            border: 1px solid #343a40;
            border-radius: 12px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.4);
        }

        .card h4 {
            font-size: 24px;
            font-weight: 600;
            color: #f1f1f1;
            text-align: center;
            margin-bottom: 20px;
            letter-spacing: 1px;
        }

        .form-control::placeholder {
            color: #b0c4de;
            opacity: 1;
        }

        .form-label {
            color: #e0e0e0;
        }

        .form-control {
            background-color: #181a1b;
            color: #f1f1f1;
            border: 1px solid #343a40;
            border-radius: 8px;
            box-shadow: none;
        }

        .form-control:focus {
            background-color: #23272b;
            color: #fff;
            border-color: #4a90e2;
            box-shadow: 0 0 0 2px #4a90e2;
        }

        .btn-primary {
            background-color: #4a90e2;
            border-color: #4a90e2;
            font-weight: 500;
            border-radius: 8px;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #357ab7;
            border-color: #357ab7;
        }

        .alert {
            background-color: #2d333b;
            border-color: #444c56;
            color: #f1f1f1;
            border-radius: 8px;
        }

        .alert-success {
            background-color: #22543d;
            border-color: #38a169;
            color: #e6ffe6;
        }

        .alert-danger {
            background-color: #742a2a;
            border-color: #e53e3e;
            color: #ffe6e6;
        }

        .btn-close {
            filter: invert(1);
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        <h4>LOGIN</h4>

        <!-- pesan sukses  -->
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('success') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <!-- pesan error  -->
        <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <?= session()->getFlashdata('error') ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>

        <form method="post" action="/login">
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>

</body>

</html>