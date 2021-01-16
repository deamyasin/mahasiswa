<?php $__env->startSection('content'); ?> 
Tabel Dosen
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <td class="bg-success">NIP</td>
        <td class="bg-danger">NAMA</td>
        <td class="bg-info">MATA KULIAH</td>
        <td class="bg-primary">ALAMAT</td>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $Dosen; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
        <tr>
            <th scope="row"><?php echo e($loop->iteration); ?></th>
            <td class="bg-success"> <?php echo e($item->nip); ?> </td>
            <td class="bg-danger"> <?php echo e($item->name); ?></td>
            <td class="bg-info"> <?php echo e($item->matkul); ?></td>
            <td class="bg-primary"> <?php echo e($item->alamat); ?></td>
        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('adminLayout/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laprak8\mahasiswa\resources\views/Dosen.blade.php ENDPATH**/ ?>