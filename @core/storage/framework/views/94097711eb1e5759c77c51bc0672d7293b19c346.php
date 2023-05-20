
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Buyer Account Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
   
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.frontend.seller-buyer-preloader','data' => []]); ?>
<?php $component->withName('frontend.seller-buyer-preloader'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    <!-- Dashboard area Starts -->
    <div class="body-overlay"></div>
    <div class="dashboard-area dashboard-padding">
        <div class="container-fluid">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                <?php echo $__env->make('frontend.user.buyer.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard-right">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard-settings margin-top-40">
                                <h2 class="dashboards-title"> <?php echo e(__('Account Settings')); ?> </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 margin-top-50">
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.error-message','data' => []]); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <form action="<?php echo e(route('seller.account.settings')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="single-settings">
                                    <h4 class="input-title"> <?php echo e(__('Change Password')); ?> </h4>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label class="info-title"> <?php echo e(__('Current Password*')); ?> </label>
                                            <input class="form--control" type="password" name="current_password" id="current_password" placeholder="<?php echo e(__('Current Password')); ?>">
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label class="info-title"> <?php echo e(__('New Password*')); ?> </label>
                                            <input class="form--control" type="password" name="new_password" id="new_password" placeholder="<?php echo e(__('New Password')); ?>">
                                        </div>
                                    </div>
                                    <div class="single-dashboard-input">
                                        <div class="single-info-input margin-top-30">
                                            <label class="info-title"> <?php echo e(__('Re-Type Password*')); ?> </label>
                                            <input class="form--control" type="password" name="confirm_password" id="confirm_password" placeholder="<?php echo e(__('Retype Password')); ?>">
                                        </div>
                                    </div>
                                    <div class="btn-wrapper margin-top-40">
                                        <button class="cmn-button btn-bg-1" type="submit"> <?php echo e(__('Update Password')); ?> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard area end -->
    <?php $__env->stopSection(); ?>   
<?php echo $__env->make('frontend.user.seller.seller-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Artisanhelp\@core\resources\views/frontend/user/buyer/profile/buyer-account-settings.blade.php ENDPATH**/ ?>