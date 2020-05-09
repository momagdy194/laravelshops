<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">review</div>

                    <div class="card-body">
                        <div class="row">
                            <?php $__currentLoopData = /*that is come from the cotition' 'in reviewController*/ $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-4">
                                    <div class=" alert alert-danger">
                                        <p><?php echo e($review->customer->format_name()); ?></p>
                                        <P><?php echo e($review->product->title); ?></P>
                                        <p><?php echo e($review ->review); ?> </p>
                                        <?php
                                        $totalStar=5;
                                        $curantStar=$review->stars;
                                        $reminingStar=$totalStar-$curantStar;
                                        ?>
                                        <P>
                                        <?php for($i=0 ;$i <$review->stars;$i ++): ?>
                                                <i class="fas fa-star"></i>

                                                <?php endfor; ?>
                                            <?php for($i=0 ;$i <$reminingStar;$i ++): ?>
                                                <i class="far fa-star"></i>

                                            <?php endfor; ?>

                                        </P>

                                        <P><?php echo e($review->humanTime()); ?></P>

                                    </div>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php echo e($reviews   ->links()); ?>


                    </div>

                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\generalshope\resources\views/admin/reviews/review.blade.php ENDPATH**/ ?>