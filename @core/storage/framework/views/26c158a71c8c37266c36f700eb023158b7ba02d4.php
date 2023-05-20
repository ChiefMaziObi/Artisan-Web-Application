
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Payout Request')); ?>

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
                    <div class="row">
                        <div class="col-xl-3 col-md-6 margin-top-30 orders-child">
                            <div class="single-orders">
                                <div class="orders-shapes">
                                    <img src="<?php echo e(asset('assets/frontend/img/static/orders-shapes.png')); ?>" alt="">
                                </div>
                                <div class="orders-flex-content">
                                    <div class="icon">
                                        <i class="las la-tasks"></i>
                                    </div>
                                    <div class="contents">
                                        <h2 class="order-titles"> <?php echo e($pending_order); ?> </h2>
                                        <span class="order-para"><?php echo e(__('Order Pending')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 margin-top-30 orders-child">
                            <div class="single-orders">
                                <div class="orders-shapes">
                                    <img src="<?php echo e(asset('assets/frontend/img/static/orders-shapes2.png')); ?>" alt="">
                                </div>
                                <div class="orders-flex-content">
                                    <div class="icon">
                                        <i class="las la-handshake"></i>
                                    </div>
                                    <div class="contents">
                                        <h2 class="order-titles"> <?php echo e($complete_order); ?> </h2>
                                        <span class="order-para"><?php echo e(__('Order Completed ')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 margin-top-30 orders-child">
                            <div class="single-orders">
                                <div class="orders-shapes">
                                    <img src="<?php echo e(asset('assets/frontend/img/static/orders-shapes3.png')); ?>" alt="">
                                </div>
                                <div class="orders-flex-content">
                                    <div class="icon">
                                        <i class="las la-dollar-sign"></i>
                                    </div>
                                    <div class="contents">
                                        <h2 class="order-titles"> <?php echo e(float_amount_with_currency_symbol($total_earnings)); ?> </h2>
                                        <span class="order-para"><?php echo e(__('Total Withdraw')); ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 margin-top-30 orders-child">
                            <div class="single-orders">
                                <div class="orders-shapes">
                                    <img src="<?php echo e(asset('assets/frontend/img/static/orders-shapes4.png')); ?>" alt="">
                                </div>
                                <div class="orders-flex-content">
                                    <div class="icon">
                                        <i class="las la-file-invoice-dollar"></i>
                                    </div>
                                    <div class="contents">
                                        <h2 class="order-titles"> <?php echo e(float_amount_with_currency_symbol($remaning_balance-$total_earnings)); ?> </h2>
                                        <span class="order-para"><?php echo e(__('Remaining Balance')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="dashboard-settings">
                                <div class="mt-3"> <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.error','data' => []]); ?>
<?php $component->withName('msg.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?></div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="dashboard-settings margin-top-55">
                                <h2 class="dashboards-title"><?php echo e(__('Payout History')); ?> </h2>
                                <small class="text-danger"><?php echo e(__('You can create a request for withdraw your earnings.')); ?></small>

                            </div>
                        </div>
                        <div class="col-lg-6 text-right">
                            <div class="dashboard-settings margin-top-55">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payoutRequestModal"><?php echo e(__('Request A Payment')); ?></button>
                            </div>
                        </div>
                        <div class="col-lg-12 margin-top-20">
                            <div class="single-dashboard-order">
                                <div class="table-responsive table-responsive--md">
                                    <table class="custom--table">
                                        <thead>
                                            <tr>
                                                <th> <?php echo e(__('ID')); ?></th>
                                                <th> <?php echo e(__('Payment Gateway')); ?> </th>
                                                <th> <?php echo e(__('Request Date')); ?> </th>
                                                <th> <?php echo e(__('Request Amount')); ?> </th>
                                                <th> <?php echo e(__('Request Status')); ?> </th>
                                                <th> <?php echo e(__('Downloads')); ?> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $all_payout_request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pay_request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td data-label="<?php echo e(__('ID')); ?>"><?php echo e($pay_request->id); ?> </td>
                                                <td data-label="<?php echo e(__('Payment Gateway')); ?>"><?php echo e($pay_request->payment_gateway); ?></td>
                                                <td data-label="<?php echo e(__('Request Date')); ?>"><?php echo e($pay_request->created_at->diffForHumans()); ?> </td>
                                                <td data-label="<?php echo e(__('Request Amount')); ?>"> <?php echo e(float_amount_with_currency_symbol($pay_request->amount)); ?> </td>
                                                <td data-label="<?php echo e(__('Request Status')); ?>">
                                                    <?php if($pay_request->status==0): ?> <span class="text-danger"><?php echo e(__('Pending')); ?></span><?php endif; ?>
                                                    <?php if($pay_request->status==1): ?> <span class="text-primary"><?php echo e(__('Completed')); ?></span><?php endif; ?>
                                                 </td>
                                                <td data-label="<?php echo e(__('Downloads')); ?>"> 
                                                    <a href="<?php echo e(route('seller.payout.request.details', $pay_request->id)); ?>">
                                                        <span class="icon eye-icon"><i class="las la-eye"></i></span>
                                                    </a>
                                                    <a href="<?php echo e(route('seller.payout.invoice.details',$pay_request->id)); ?>"><span class="icon color-three"> <i class="las la-file-pdf"></i> </span><?php echo e(__('Download PDF')); ?></a>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="blog-pagination margin-top-55">
                                    <div class="custom-pagination mt-4 mt-lg-5">
                                        <?php echo $all_payout_request->links(); ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Status Modal -->
    <div class="modal fade" id="payoutRequestModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <form action="<?php echo e(route('seller.create.payout.request')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModal"><?php echo e(__('Payout Request')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="amount"><?php echo e(__('Amount')); ?></label>
                            <input type="number" class="form-control" name="amount" id="amount">
                        </div>
                        <div class="form-group">
                            <label for="payment_gateway"><?php echo e(__('Payment Gateway')); ?></label>
                            <select name="payment_gateway" id="payment_gateway" class="form-control nice-select">
                                <option value=""><?php echo e(__('Select Payment gateway')); ?></option>
                                <option value="manual_payment"><?php echo e(__('Manual payment')); ?></option>
                                <option value="paypal"><?php echo e(__('Paypal')); ?></option>
                                <option value="mollie"><?php echo e(__('Mollie')); ?></option>
                                <option value="paytm"><?php echo e(__('Paytm')); ?></option>
                                <option value="stripe"><?php echo e(__('Stripe')); ?></option>
                                <option value="razorpay"><?php echo e(__('Razorpay')); ?></option>
                                <option value="flutterwave"><?php echo e(__('Flutterwave')); ?></option>
                                <option value="Paystack"><?php echo e(__('Paystack')); ?></option>
                                <option value="midtrans"><?php echo e(__('Midtrans')); ?></option>
                                <option value="payfast"><?php echo e(__('Payfast')); ?></option>
                                <option value="payfast"><?php echo e(__('Cashfree')); ?></option>
                                <option value="instamojo"><?php echo e(__('Instamojo')); ?></option>
                                <option value="mercadopago"><?php echo e(__('Mercadopago')); ?></option>
                            </select>
                        </div>
                        <div class="form-group mt-5">
                            <label class="payout-request-note d-block pt-4" for="amount"><?php echo e(__('Note (your payment account details)')); ?></label>
                            <small style="color:red"><?php echo e(__('You can make a request only if your remaining balance in a range set by the site admin. Like admin set minimum request amount 50 and maximum request amount 500. than you can request a payment between 50 to 500.')); ?></small>
                            <textarea class="form-control" name="seller_note" id="seller_note" cols="30" rows="7"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('Save changes')); ?></button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('assets/backend/js/sweetalert2.js')); ?>"></script>
    <script>
        (function($) {
            "use strict";

            $(document).ready(function() {

                $(document).on('click', '.edit_status_modal', function(e) {
                    e.preventDefault();
                    let order_id = $(this).data('id');
                    let status = $(this).data('status');

                    $('#order_id').val(order_id);
                    $('#status').val(status);
                    $('.nice-select').niceSelect('update');
                });

            });

        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.user.seller.seller-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/beta/@core/resources/views/frontend/user/seller/payout/payout-request.blade.php ENDPATH**/ ?>