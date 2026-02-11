<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Modul 1 Laravel 12</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Arial, sans-serif;
            background: linear-gradient(135deg, #f5e6d3, #e8d2b8);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: #fffaf3;
            width: 650px;
            max-width: 95%;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 12px 30px rgba(92, 64, 51, 0.25);
            text-align: center;
            border: 2px solid #e0c3a3;
        }

        h1 {
            margin-top: 0;
            color: #5c4033;
        }

        .badge {
            display: inline-block;
            background: #8b5e3c;
            color: #fff;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 14px;
            margin-bottom: 15px;
        }

        p {
            color: #6b4f3a;
            font-size: 16px;
        }

        .mk-box {
            margin-top: 25px;
            text-align: left;
        }

        .mk-box h3 {
            color: #7a5230;
            margin-bottom: 12px;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: #f3e3cf;
            margin-bottom: 10px;
            padding: 12px 14px;
            border-radius: 10px;
            border-left: 6px solid #8b5e3c;
            color: #4b3621;
            transition: 0.2s;
        }

        li:hover {
            transform: translateX(6px);
            background: #ead7bf;
        }

        .footer {
            margin-top: 25px;
            font-size: 13px;
            color: #8a6a55;
        }
    </style>
</head>

<body>

    <div class="card">

        <div class="badge">Laravel 12</div>

        <h1>Selamat Datang, <?php echo e($nama); ?>!</h1>

        <p>
            Ini adalah halaman pertama saya di Laravel 12 
            dengan bantuan AI
        </p>

        <div class="mk-box">
            <h3>📚 Daftar Mata Kuliah</h3>

            <ul>
                <?php $__currentLoopData = $mataKuliah; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($mk); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>

        <div class="footer">
            Modul Praktikum — Khusnah Qurrotul A'eni
        </div>

    </div>

</body>
</html><?php /**PATH C:\xampp\htdocs\modul1-web-lanjut-khusnah\resources\views/welcome_mahasiswa.blade.php ENDPATH**/ ?>