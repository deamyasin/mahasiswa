
<?php $__env->startSection('content'); ?>
<section class="content">
    
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Masukan Data Mahasiswa</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form role="form" method="POST" action="/createmhs/store">
              <?php echo csrf_field(); ?>

            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">NPM</label>
                <input type="Text" class="form-control" id="npm" name="npm" placeholder="Masukan NPM">
              </div>
            
              <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="Text" class="form-control" id="name" name="name" placeholder="Masukan Nama">
                </div>
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Kelas</label>
                  <input type="Text" class="form-control" id="class" name="class" placeholder="Masukan Kelas">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="Text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                </div>

                <div class="form-group">
                  <label for="exampleSelectBorder">Pilih Organisasi</label>
                  <select class="custom-select form-control-border" name="organization_id" id="organization_id">
                      <option value="0">Kupu Kupu</option>
                      <?php $__currentLoopData = $org; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>"><?php echo e($item->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
                </div>
            <!-- /.card-body -->
            </div>
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>       
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminLayout/index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\laprak8\pweb\pweb\resources\views/createmhs.blade.php ENDPATH**/ ?>