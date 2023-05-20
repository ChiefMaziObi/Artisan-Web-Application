
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Payout Request Details')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.datatable.css','data' => []]); ?>
<?php $component->withName('datatable.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        
        <?php if(!empty($request_details)): ?>
            
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="checkbox-inlines">
                                <h5><strong><?php echo e(__('Payout Request ID: ')); ?></strong>#<?php echo e($request_details->id); ?></h5>
                                <p class="text-info"><small><?php echo e(__('checkout all the info of seller before process the payment. you should get seller payout request details which payment gateway seller want to get paid, and seller payment account details should show in place of seller note. you have to check these thing and have to pay seller manually, then you will change the payment status with a screenshort of proof of payment.')); ?></small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card">
                        <div class="card-body">

                            <div class="border-bottom mb-3">
                                <h5><?php echo e(__('Seller Details')); ?></h5>
                            </div>

                            <div class="single-checbox">
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Name:')); ?> </strong><?php echo e(optional($request_details->seller)->name); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Email:')); ?> </strong><?php echo e(optional($request_details->seller)->email); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Phone:')); ?> </strong><?php echo e(optional($request_details->seller)->phone); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Address:')); ?> </strong><?php echo e(optional($request_details->seller)->address); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('City:')); ?> </strong><?php echo e(optional(optional($request_details->seller)->city)->service_city); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Area:')); ?> </strong><?php echo e(optional(optional($request_details->seller)->area)->service_area); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Post Code:')); ?> </strong><?php echo e(optional($request_details->seller)->post_code); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Country:')); ?> </strong><?php echo e(optional(optional($request_details->seller)->country)->country); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Amount:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($request_details->amount)); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Payment Gateway:')); ?> </strong><?php echo e($request_details->payment_gateway); ?></label>
                                </div>                            
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Request Status:')); ?></strong></label>
                                        <?php if($request_details->status==0): ?> <span class="text-danger"><?php echo e(__('Pending')); ?></span><?php endif; ?>
                                        <?php if($request_details->status==1): ?> <span class="text-primary"><?php echo e(__('Completed')); ?></span><?php endif; ?>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Remaining Balance:')); ?> </strong><?php echo e($remaining_balance); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Request Date:')); ?> </strong><?php echo e($request_details->created_at->toFormattedDateString()); ?></label>
                                </div>
                                <br>
                                <div class="checkbox-inlines">
                                    <p><strong><?php echo e(__('Seller Note: ')); ?></strong><?php echo e($request_details->seller_note); ?></p>
                                </div>
                                
                            </div>

                        </div>
                    </div>

                    </div>

                
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">

                            <div class="border-bottom mb-3">
                                <h5><?php echo e(__('Payment Receipt')); ?></h5>
                            </div>
                            <div class="single-checbox">
                                <div class="checkbox-inlines">
                                    <?php if(!empty($request_details->payment_receipt)): ?>
                                    <?php echo render_image_markup_by_attachment_id($request_details->payment_receipt); ?>

                                    <?php endif; ?>
                                </div>
                            </div>           
                            
                        </div>
                    </div>
                </div>
            </div>

        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/beta/@core/resources/views/backend/pages/payout-request/payout-request-details.blade.php ENDPATH**/ ?>