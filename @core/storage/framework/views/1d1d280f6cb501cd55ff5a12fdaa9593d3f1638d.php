
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Order Details')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <?php if(!empty($order_details)): ?>
            
            <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="checkbox-inlines">
                                <label><strong><?php echo e(__('Order ID:')); ?> </strong>#<?php echo e($order_details->id); ?></label>
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
                                    <label><strong><?php echo e(__('Name:')); ?> </strong><?php echo e(optional($order_details->seller)->name); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Email:')); ?> </strong><?php echo e(optional($order_details->seller)->email); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Phone:')); ?> </strong><?php echo e(optional($order_details->seller)->phone); ?></label>
                                </div>
                                <?php if($order_details->is_order_online !=1): ?>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Address:')); ?> </strong><?php echo e(optional($order_details->seller)->address); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('City:')); ?> </strong><?php echo e(optional(optional($order_details->seller)->city)->service_city); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Area:')); ?> </strong><?php echo e(optional(optional($order_details->seller)->area)->service_area); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Post Code:')); ?> </strong><?php echo e(optional($order_details->seller)->post_code); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Country:')); ?> </strong><?php echo e(optional(optional($order_details->seller)->country)->country); ?></label>
                                </div>
                                <?php endif; ?>
                            </div>

                        </div>
                    </div>   
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">

                            <div class="border-bottom mb-3">
                                <h5><?php echo e(__('Service Details')); ?></h5>
                            </div>
                            <div class="single-checbox">
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Title:')); ?> </strong><?php echo e(optional($order_details->service)->title); ?></label>
                                </div>
                                <br>
                                <div class="checkbox-inlines">
                                    <?php echo render_image_markup_by_attachment_id(optional($order_details->service)->image,'','thumb'); ?>

                                </div>
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
                                <h5><?php echo e(__('Buyer Details')); ?></h5>
                            </div>
                            <div class="single-checbox">
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Name:')); ?> </strong><?php echo e($order_details->name); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Email:')); ?> </strong><?php echo e($order_details->email); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Phone:')); ?> </strong><?php echo e($order_details->phone); ?></label>
                                </div>
                                <?php if($order_details->is_order_online !=1): ?>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Address:')); ?> </strong><?php echo e($order_details->address); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('City:')); ?> </strong><?php echo e(optional($order_details->service_city)->service_city); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Area:')); ?> </strong><?php echo e(optional($order_details->service_area)->service_area); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Post Code:')); ?> </strong><?php echo e($order_details->post_code); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Country:')); ?> </strong><?php echo e(optional($order_details->service_country)->country); ?></label>
                                </div>
                               <?php endif; ?>
                            </div>

                            <?php if($order_details->is_order_online !=1): ?>
                            <div class="border-bottom mb-3 mt-4">
                                <h5><?php echo e(__('Date & Schedule')); ?></h5>
                            </div>
                            <div class="single-checbox">
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Date:')); ?> </strong><?php echo e($order_details->date); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Schedule:')); ?> </strong><?php echo e($order_details->schedule); ?></label>
                                </div>
                            </div>
                            <?php endif; ?>

                            <div class="border-bottom mb-3 mt-4">
                                <h5><?php echo e(__('Amount Details')); ?></h5>
                            </div>
                            <div class="single-checbox">
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Package Fee:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->package_fee)); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Extra Service:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->extra_service)); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Sub Total:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->sub_total)); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Tax:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->tax)); ?></label>
                                </div>
                                <?php if(!empty($order_details->coupon_amount)): ?>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Coupon Amount:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->coupon_amount)); ?></label>
                                </div>
                                <?php endif; ?>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Total:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->total)); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Admin Commission:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->commission_amount)); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Payment Gateway:')); ?> </strong><?php echo e(ucwords(str_replace("_", " ", $order_details->payment_gateway))); ?></label>
                                </div>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Payment Status:')); ?> </strong><?php echo e(ucfirst($order_details->payment_status)); ?></label>
                                    <span>
                                        <?php if($order_details->payment_status=='pending'): ?> 
                                        <span><?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.status-change','data' => ['url' => route('admin.order.change.status',$order_details->id)]]); ?>
<?php $component->withName('status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.order.change.status',$order_details->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?></span>
                                        <?php endif; ?>
                                    </span>
                                </div>
                                <?php if($order_details->payment_gateway=='manual_payment'): ?>
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Manual Payment Attachment:')); ?> </strong></label>
                                    <img src="<?php echo e(asset('assets/uploads/manual-payment/'.$order_details->manual_payment_image)); ?>" alt="">
                                </div>
                                <?php endif; ?>
                            </div>

                            <div class="border-bottom mb-3 mt-4">
                                <h5><?php echo e(__('Order Status')); ?></h5>
                            </div>
                            <div class="single-checbox">
                                <div class="checkbox-inlines">
                                    <label><strong><?php echo e(__('Order Status: ')); ?></strong>
                                        <?php if($order_details->status == 0): ?> <span><?php echo e(__('Pending')); ?></span><?php endif; ?>
                                        <?php if($order_details->status == 1): ?> <span><?php echo e(__('Active')); ?></span><?php endif; ?>
                                        <?php if($order_details->status == 2): ?> <span><?php echo e(__('Completed')); ?></span><?php endif; ?>
                                        <?php if($order_details->status == 3): ?> <span><?php echo e(__('Delivered')); ?></span><?php endif; ?>
                                        <?php if($order_details->status == 4): ?> <span><?php echo e(__('Cancelled')); ?></span><?php endif; ?>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </div>   
                </div>
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">

                            <h4><?php echo e(__('Include Details:')); ?></h4> <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <?php if($order_details->is_order_online !=1): ?>
                                        <th><?php echo e(__('Unit Price')); ?></th>
                                        <th><?php echo e(__('Quantity')); ?></th>
                                        <th><?php echo e(__('Total')); ?></th>
                                        <?php endif; ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $package_fee =0; ?>
                                    <?php $__currentLoopData = $order_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($include->title); ?></td>
                                        <?php if($order_details->is_order_online !=1): ?>
                                        <td><?php echo e(float_amount_with_currency_symbol($include->price)); ?></td>
                                        <td><?php echo e($include->quantity); ?></td>
                                        <td><?php echo e(float_amount_with_currency_symbol($include->price * $include->quantity)); ?></td>
                                        <?php $package_fee += $include->price * $include->quantity ?>
                                        <?php endif; ?>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php if($order_details->is_order_online !=1): ?>
                                            <td colspan="3"><strong><?php echo e(__('Package Fee')); ?></strong></td>
                                            <td><strong><?php echo e(float_amount_with_currency_symbol($package_fee)); ?></strong></td>
                                        <?php else: ?>
                                            <td colspan="3"><strong><?php echo e(__('Package Fee ') .float_amount_with_currency_symbol($order_details->package_fee)); ?></strong></td>
                                        <?php endif; ?>

                                    </tr>
                                </tbody>
                            </table>                         

                            <?php if($order_additionals->count() >= 1): ?>
                            <h4><?php echo e(__('Additional Services:')); ?></h4> <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('Title')); ?></th>
                                        <th><?php echo e(__('Unit Price')); ?></th>
                                        <th><?php echo e(__('Quantity')); ?></th>
                                        <th><?php echo e(__('Total')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $extra_service =0; ?>
                                    <?php $__currentLoopData = $order_additionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($additional->title); ?></td>
                                        <td><?php echo e(float_amount_with_currency_symbol($additional->price)); ?></td>
                                        <td><?php echo e($additional->quantity); ?></td>
                                        <td><?php echo e(float_amount_with_currency_symbol($additional->price * $additional->quantity)); ?></td>
                                        <?php $extra_service += $additional->price * $additional->quantity ?>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td colspan="3"><strong><?php echo e(__('Extra Service')); ?></strong></td>
                                        <td><strong><?php echo e(float_amount_with_currency_symbol($extra_service)); ?></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php endif; ?>

                            <?php if(!empty($order_details->coupon_code)): ?>
                            <h4><?php echo e(__('Coupon Details:')); ?></h4> <br>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('Coupon Code')); ?></th>
                                        <th><?php echo e(__('Coupon Type')); ?></th>
                                        <th><?php echo e(__('Coupon Amount')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo e($order_details->coupon_code); ?></td>
                                        <td><?php echo e($order_details->coupon_type); ?></td>
                                        <td>
                                            <?php if(!empty($order_details->coupon_amount)): ?>
                                            <?php echo e(float_amount_with_currency_symbol($order_details->coupon_amount)); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.datatable.js','data' => []]); ?>
<?php $component->withName('datatable.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <script type="text/javascript">
        (function(){
            "use strict";
            $(document).ready(function(){

                $(document).on('click','.swal_status_change',function(e){
                e.preventDefault();
                    Swal.fire({
                    title: '<?php echo e(__("Are you sure to change status?")); ?>',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, change it!'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).next().find('.swal_form_submit_btn').trigger('click');
                    }
                    });
                });
                
              });
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\qixer\@core\resources\views/backend/pages/orders/order-details.blade.php ENDPATH**/ ?>