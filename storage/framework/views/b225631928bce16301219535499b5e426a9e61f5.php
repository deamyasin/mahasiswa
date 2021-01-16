<?php $__env->startSection('content'); ?>
TABEL MAHASISWA
<table class="table table-striped table-light">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">NPM</th>
        <th scope="col">Nama</th>
        <th scope="col">Kelas</th>
        <th scope="col">Organisasi</th>
        <th scope="col">Alamat</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($item->npm); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->class); ?></td>
            <td><?php echo e($item->organization); ?></td>
            <td><?php echo e($item->alamat); ?></td>
            
          </tr>         
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laprak8\mahasiswa\resources\views/list.blade.php ENDPATH**/ ?>