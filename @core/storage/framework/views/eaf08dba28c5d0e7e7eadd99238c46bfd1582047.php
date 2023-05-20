
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Payout Request Details')); ?>

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
                <?php echo $__env->make('frontend.user.seller.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="dashboard-right">
                    <?php if(!empty($request_details)): ?>
                    <div class="row">

                        <div class="col-md-4">
                            <div class="single-flex-middle">
                                <div class="single-flex-middle-inner">
                                    <div class="line-charts-wrapper margin-top-40">

                                        <div class="line-top-contents">
                                            <h5 class="earning-title"><?php echo e(__('Payout Request Details')); ?></h5>
                                        </div>
                                        <div class="single-checbox">
                                            <div class="checkbox-inlines">
                                                <label><strong><?php echo e(__('ID:')); ?> #</strong><?php echo e($request_details->id); ?></label>
                                            </div>
                                            <div class="checkbox-inlines">
                                                <label><strong><?php echo e(__('Amount:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($request_details->amount)); ?></label>
                                            </div>
                                            <div class="checkbox-inlines">
                                                <label><strong><?php echo e(__('Payment Gateway:')); ?> </strong><?php echo e($request_details->payment_gateway); ?></label>
                                            </div>
                                            <div class="checkbox-inlines">
                                                <label><strong><?php echo e(__('Request Date:')); ?> </strong><?php echo e($request_details->created_at->toFormattedDateString()); ?></label>
                                            </div>
                                            <div class="checkbox-inlines">
                                                <label><strong><?php echo e(__('Seller Note:')); ?> </strong><?php echo e($request_details->seller_note); ?></label>
                                            </div>
                                            <div class="checkbox-inlines">
                                                <label><strong><?php echo e(__('Admin Note:')); ?> </strong><?php echo e($request_details->admin_note); ?></label>
                                            </div>
                                        </div>

                                        <div class="line-top-contents">
                                            <h5 class="earning-title"><?php echo e(__('Payout Request Status')); ?></h5>
                                        </div>
                                        <div class="single-checbox">
                                            <div class="checkbox-inlines">
                                                <label><strong><?php echo e(__('Status:')); ?> </strong>
                                                    <?php if($request_details->status == 0): ?> <span class="text-danger"><?php echo e(__('Pending')); ?></span><?php endif; ?>
                                                    <?php if($request_details->status == 1): ?> <span class="text-success"><?php echo e(__('Completed')); ?></span><?php endif; ?>
                                                </label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">

                            <div class="single-flex-middle">
                                <div class="single-flex-middle-inner">
                                    <div class="line-charts-wrapper margin-top-40">
                                        <div class="line-top-contents">
                                            <h5 class="earning-title"><?php echo e(__('Payout Receipt')); ?></h5>
                                            <hr>
                                        </div>
                                        <?php if(!empty($request_details->payment_receipt)): ?>
                                        <?php echo render_image_markup_by_attachment_id($request_details->payment_receipt); ?>

                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.user.seller.seller-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/user/seller/payout/payout-request-details.blade.php ENDPATH**/ ?>