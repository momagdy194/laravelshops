<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">unites</div>

                    <div class="card-body">

                        <form action="<?php echo e(route('unites')); ?>" method="post" class="row">
                            <?php echo csrf_field(); ?>
                            <div class="form-group col-md-6">
                                <label for="unites_name">Unit Name</label>
                                <input type="text" class="form-control" id="unites_name" name="unites_name"
                                       placeholder="Unit Name" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="unites_code">Unit Code</label>
                                <input type="text" class="form-control" id="unites_code" name="unites_code"
                                       placeholder="Unit Code" required>
                            </div>

                            <div class="form-group col-md-6 col-md-12 ">
                                <button type="submit" class="btn btn-outline-danger">see new danger</button>
                            </div>
                        </form>
                    </div>

                    <form action="<?php echo e(route('search-units')); ?> " method="get">
                        <?php echo csrf_field(); ?>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="units_search" name="units_search"
                                       placeholder="Search">
                            </div>
                            <div class="form-group col-md-6">
                                <button class="btn btn-outline-danger ">sss</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <?php $__currentLoopData = $unites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Unit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class=" alert alert-danger">
                               <span class="buttons-span">
                                     <span>
                                         <form action="<?php echo e(route('unites')); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="id" value="<?php echo e($Unit->id); ?>">
                                                <button type="submit" class="delete-btn"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                     </span>
                                </span>
                                    <p><?php echo e($Unit->unites_name); ?> =><?php echo e($Unit->unites_code); ?> </p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php echo e((!$unites instanceof collection)?$unites->links():''); ?>

                </div>
            </div>
        </div>
    </div>
    


    

    <div class="modal delete-window" tabindex="-1" role="dialog" id="delete-window">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


    <div class="modal edit-window" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        $(document).ready(function () {
            var $deleteunit = $('.delete-unit');
            var $deletewindow = $('#delete-window');
            $deleteunit.on('click', function (element) {
                $deletewindow.modal('show');
                element.preventDefault();
            });
        });
    </script>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\generalshope\resources\views/admin/units/units.blade.php ENDPATH**/ ?>