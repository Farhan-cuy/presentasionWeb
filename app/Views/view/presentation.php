
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= esc($tutorial['judul']) ?> - Presentation</title>
    <meta http-equiv="refresh" content="5">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #191919;
            color: #ececec;
            font-family: 'Inter', 'Segoe UI', Arial, sans-serif;
        }
        .container {
            background: #23272b;
            border-radius: 14px;
            box-shadow: 0 4px 32px rgba(0,0,0,0.25);
            padding: 2rem 2.5rem;
            margin-top: 2rem;
        }
        h1, h4 {
            color: #fff;
            font-weight: 600;
        }
        hr {
            border-color: #333;
        }
        .mb-4 {
            background: #23272b;
            border-radius: 10px;
            padding: 1.2rem 1rem 1rem 1rem;
            margin-bottom: 2rem !important;
            border: 1px solid #282828;
        }
        pre {
            background: #181a1b;
            color: #e6e6e6;
            padding: 14px;
            border-radius: 8px;
            font-size: 1rem;
            margin-top: 1rem;
            margin-bottom: 1rem;
            overflow-x: auto;
            border: 1px solid #23272b;
        }
        a {
            color: #ffc107;
            text-decoration: underline;
        }
        a:hover {
            color: #ffe066;
        }
        img.responsive-img {
            max-width: 100%;
            height: auto;
            max-height: 300px;
            display: block;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #282828;
        }
        p {
            color: #e0e0e0;
        }
    </style>
</head>
<body class="p-4">
    <div class="container">
        <h1><?= esc($tutorial['judul']) ?></h1>
        <p><strong>Kode Matkul:</strong> <?= esc($tutorial['kode_matkul']) ?></p>
        <hr>

        <?php if (!empty($details)): ?>
            <?php $i = 1; ?>
            <?php foreach ($details as $d): ?>
                <?php if ($d['status'] === 'show'): ?>
                    <div class="mb-4 border-bottom pb-3">
                        <h4>Langkah <?= $i++ ?>.</h4>

                        <?php if (!empty($d['text'])): ?>
                            <p><?= esc($d['text']) ?></p>
                        <?php endif; ?>

                        <?php if (!empty($d['url'])): ?>
                            <p><a href="<?= esc($d['url']) ?>" target="_blank"><?= esc($d['url']) ?></a></p>
                        <?php endif; ?>

                        <?php if (!empty($d['image'])): ?>
                            <p>
                                <img src="<?= base_url('uploads/images/' . esc($d['image'])) ?>" alt="Gambar" class="responsive-img">
                            </p>
                        <?php endif; ?>

                        <?php if (!empty($d['code'])): ?>
                            <pre><code><?= esc($d['code']) ?></code></pre>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada detail tutorial untuk ditampilkan.</p>
        <?php endif; ?>
    </div>
</body>
</html>
