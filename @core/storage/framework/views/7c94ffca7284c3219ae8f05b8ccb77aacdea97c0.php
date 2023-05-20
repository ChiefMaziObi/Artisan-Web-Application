
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Order Success')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <?php 
    $page_info = request()->url();
    $str = explode("/",request()->url());
    $page_info = $str[count($str)-2];
    ?>  
    <?php echo e(ucfirst($page_info)); ?>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('inner-title'); ?>
    <?php echo e(__('Order')); ?>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
   <!-- Location Overview area starts -->
 <section class="location-overview-area padding-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form id="msform" class="msform">
                    <!-- Successful Complete -->
                    <fieldset class="padding-top-80 padding-bottom-100">
                        <div class="form-card successful-card">
                            <h2 class="title-step"> <?php echo e(get_static_option('success_title') ?? __('SUCCESSFULL')); ?></h2>
                            <a href="<?php echo e(route('homepage')); ?>" class="succcess-icon">
                                <i class="las la-check"></i>
                            </a>
                            <h5 class="purple-text text-center"><?php echo e(get_static_option('success_subtitle') ?? __('Your Order Successfully Completed')); ?></h5>
                            <div class="btn-wrapper margin-top-35">
                                <h4 class="mb-3"><?php echo e(get_static_option('success_details_title') ?? __('Your Order Details')); ?></h4>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th><?php echo e(__('Date & Schedule')); ?></th>
                                            <th><?php echo e(__('Amount Details')); ?></th>
                                            <th><?php echo e(__('Order Status')); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label><strong><?php echo e(__('Date:')); ?> </strong><?php echo e($order_details->date); ?></label> <br>
                                                <label><strong><?php echo e(__('Schedule:')); ?> </strong><?php echo e($order_details->schedule); ?></label>
                                            </td>
                                            <td>
                                                <label><strong><?php echo e(__('Package Fee:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->package_fee)); ?></label> <br>
                                                <?php if($order_details->extra_service >=1): ?>
                                                <label><strong><?php echo e(__('Extra Service:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->extra_service)); ?></label> <br>
                                                <?php endif; ?>
                                                <label><strong><?php echo e(__('Sub Total: ')); ?></strong><?php echo e(float_amount_with_currency_symbol($order_details->sub_total)); ?></label> <br>
                                                <label><strong><?php echo e(__('Tax:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->tax)); ?></label> <br>
                                                <?php if(!empty($order_details->coupon_amount)): ?>
                                                    <label><strong><?php echo e(__('Coupon Amount:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->coupon_amount)); ?></label> <br>
                                                <?php endif; ?>
                                                <label><strong><?php echo e(__('Total:')); ?> </strong><?php echo e(float_amount_with_currency_symbol($order_details->total)); ?></label> <br>
                                                <label><strong><?php echo e(__('Payment Gateway:')); ?> </strong><?php echo e(ucwords(str_replace("_", " ", $order_details->payment_gateway))); ?></label> <br>
                                                <label><strong><?php echo e(__('Payment Status:')); ?> </strong><?php echo e(ucfirst($order_details->payment_status)); ?></label> <br>
                                            </td>
                                            <td>
                                                <label><strong><?php echo e(__('Order Status: ')); ?></strong>
                                                    <?php if($order_details->status == 0): ?> <span><?php echo e(__('Pending')); ?></span><?php endif; ?>
                                                    <?php if($order_details->status == 1): ?> <span><?php echo e(__('Active')); ?></span><?php endif; ?>
                                                    <?php if($order_details->status == 2): ?> <span><?php echo e(__('Completed')); ?></span><?php endif; ?>
                                                    <?php if($order_details->status == 3): ?> <span><?php echo e(__('Delivered')); ?></span><?php endif; ?>
                                                    <?php if($order_details->status == 4): ?> <span><?php echo e(__('Cancelled')); ?></span><?php endif; ?>
                                                </label>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="btn-wrapper text-center margin-top-35">
                                <a href="<?php echo e(get_static_option('button_url') ?? route('homepage')); ?>" class="cmn-btn btn-bg-1"><?php echo e(get_static_option('button_title') ?? __('Back To Home')); ?></a>
                                <?php if(auth('web')->check()): ?>
                                    <?php
                                    $user_details = auth('web')->user();
                                    $route_prefix = $user_details->user_type === 0 ? 'seller' : 'buyer';
                                    ?>
                                    <a href="<?php echo e(route($route_prefix.'.dashboard')); ?>" class="cmn-btn btn-bg-1"><?php echo e(__('Go To Dashboard')); ?></a>
                                    <a href="<?php echo e(route($route_prefix.'.orders')); ?>" class="cmn-btn btn-bg-1"><?php echo e(__('All Orders')); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Location Overview area end -->
<?php $__env->stopSection(); ?>






<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/beta/@core/resources/views/frontend/payment/payment-success.blade.php ENDPATH**/ ?>