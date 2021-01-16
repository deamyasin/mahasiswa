<?php $__env->startSection('content'); ?>
  <div class="container-fluid">
    <div class="row">
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
        <th> Action </th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $mahasiswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td><?php echo e($item->npm); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->class); ?></td>
            <td><?php echo e($item->organization->nama); ?></td>
            <td><?php echo e($item->alamat); ?></td>
            <td> <a href="/list/detail1/<?php echo e($item->slug); ?>" class="btn btn-success btn-sm">edit </a></td>
            <td> <form action="/list/delete/<?php echo e($item->slug); ?>" method="post">
            <?php echo method_field('delete'); ?>
              <?php echo csrf_field(); ?>
              <button type="submit" class="btn btn-danger btn-sm">Delete</button>
              </form> </td>
            
          </tr>         
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>

  

  <div class='row'>
    <a href="/createmhs" class="btn btn-success btn-sm">Create</a>
  </div>
  
  
</div>

</div>
<div class="d-flex justify-content-center">
  <?php echo $mahasiswa->links('pagination'); ?>

</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayout/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laprak8\pweb\pweb\resources\views/list.blade.php ENDPATH**/ ?>