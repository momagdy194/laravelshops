<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">roles</div>

                    <div class="card-body">
                        <div class="row">
                            <?php $__currentLoopData = /*that is come from the cotition' 'in reviewController*/ $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div class=" alert alert-danger">
                                        <p><?php echo e($rol->role); ?> </p>
                                    </div>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php echo e($roles->links()); ?>


                    </div>

                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\generalshope\resources\views/admin/roles/roles.blade.php ENDPATH**/ ?>