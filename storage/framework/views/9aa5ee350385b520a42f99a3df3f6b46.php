<?php echo $__env->make('templates/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<div class="container p-3 my-3 ">
  <div class="d-flex justify-content-between align-items-center">
    <h2 class="w-100 text-center">Data Mahasiswa</h2>
  </div>
  <?php if(session('resp_msg')): ?>
      <div class="alert alert-success text-center mx-auto">
          <?php echo e(session('resp_msg')); ?>

      </div>
  <?php endif; ?>

  <?php if(session('err_msg')): ?>
      <div class="alert alert-danger text-center mx-auto">
          <?php echo e(session('err_msg')); ?>

      </div>
  <?php endif; ?>
  <a href="/add-mahasiswa" class="btn btn-success float-end mb-3">Tambah Data</a>
  <link rel="stylesheet" href="/DataTables/datatables.css" />
<table>
  <thead>
    <tr>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Action</th>
</thead>
<tbody>
  <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <tr>
      <td><?php echo e($item->nrp); ?></td>
      <td><?php echo e($item->nama); ?></td>
      <td><?php echo e($item->email); ?></td>
      <td>
      <a href="<?php echo e(url('/edit-mahasiswa/' . $item->nrp)); ?>" class="btn btn-primary btn-sm">Edit</a>
      <a href="<?php echo e(url('/delete-mahasiswa/'.$item->nrp)); ?>" class="btn btn-danger btn-sm">Delete</button>
      </td>
      </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>

</table>
<script src="/DataTables/datatables.js"></script>
</body>
</html><?php /**PATH C:\skeleton_laravel_10-main\resources\views/dashboard.blade.php ENDPATH**/ ?>