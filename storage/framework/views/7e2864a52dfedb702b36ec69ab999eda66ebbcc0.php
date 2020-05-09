<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Tags</div>


                    <div class="card-body">

                        <form action="<?php echo e(route('tags')); ?>" method="post" class="row">
                            <?php echo csrf_field(); ?>
                            <div class="form-group col-md-6">
                                <label for="tag_name">Unit Name</label>
                                <input type="text" class="form-control" id="tag_name" name="tag_name"
                                       placeholder="Tag Name" required>
                            </div>

                            <div class="form-group col-md-6 col-md-12 ">
                                <button type="submit" class="btn btn-outline-danger">see new danger</button>
                            </div>
                        </form>


                        <div class="row">
                            <?php $__currentLoopData = /*that is come from the cotition' 'in reviewController*/ $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div class=" alert alert-danger">
                                        <p><?php echo e($tag ->tag); ?> </p>
                                    </div>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php echo e($tags->links()); ?>


                    </div>

                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\generalshope\resources\views/admin/tags/tags.blade.php ENDPATH**/ ?>