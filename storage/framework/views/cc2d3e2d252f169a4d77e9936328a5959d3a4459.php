<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">product</div>

                    <div class="card-body">
                        <div class="row">
                            <?php $__currentLoopData = /*that is come from the cotition' 'in reviewController*/ $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div class=" alert alert-danger">

                                        <p><?php echo e($product ->title); ?> </p>
                                        <p> category: <?php echo e($product->category->name); ?></p>
                                        <p><?php echo e($product ->price); ?> <?php echo e(''.$currency_code); ?> }}</p>

                                        <?php echo (count( $product->images)>0)? '<img  class="img-thumbnail card-img" src="'. $product->images[0]->url .'"/>':''; ?>

                                    </div>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php echo e($products   ->links()); ?>


                    </div>

                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\generalshope\resources\views/admin/products/product.blade.php ENDPATH**/ ?>