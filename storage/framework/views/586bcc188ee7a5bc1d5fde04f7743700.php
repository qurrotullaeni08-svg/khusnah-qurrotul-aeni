<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .btn-tambah {
            border-radius: 12px;
            padding: 8px 16px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
    </style>
</head>

<body class="bg-light">

<div class="container mt-5">

    <h3 class="mb-4 text-center">Data Mahasiswa</h3>

    <!-- Tombol Tambah Versi Clean -->
    <div class="mb-3 text-start">
        <a href="<?php echo e(route('mahasiswa.create')); ?>" 
           class="btn btn-primary btn-tambah">
            <i class="bi bi-plus-lg me-1"></i>
            Tambah Mahasiswa
        </a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">

            <table class="table table-bordered table-striped">
                <thead class="table-dark text-center">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Matakuliah</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="text-center">
                        <td><?php echo e($m->nim); ?></td>
                        <td><?php echo e($m->nama); ?></td>
                        <td><?php echo e($m->kelas); ?></td>
                        <td><?php echo e($m->matakuliah); ?></td>

                        <td>
                            <a href="<?php echo e(route('mahasiswa.edit', $m->nim)); ?>"
                               class="btn btn-warning btn-sm me-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>

                            <form action="<?php echo e(route('mahasiswa.destroy', $m->nim)); ?>"
                                  method="POST"
                                  class="d-inline">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button onclick="return confirm('Yakin hapus data?')"
                                        class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\modul2-web-lanjut-khusnah\resources\views/mahasiswa/index.blade.php ENDPATH**/ ?>