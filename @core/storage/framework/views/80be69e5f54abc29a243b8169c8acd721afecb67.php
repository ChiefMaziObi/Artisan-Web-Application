
<?php $__env->startSection('page-title'); ?>

    <?php echo e(__('Order Cancelled')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="error-page-content padding-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="order-cancel-area">
                        <div class="alert alert-warning">
                            <h6 class="title"><?php echo e(__('Your Order has been canceled')); ?></h6>
                        </div>
                        <div class="btn-wrapper mt-5">
                            <a href="<?php echo e(url('/')); ?>" class="boxed-btn"><?php echo e(__('Back To Home')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/payment/payment-cancel-static.blade.php ENDPATH**/ ?>