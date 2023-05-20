
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Active Orders')); ?>

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
                        <div class="col-lg-12">
                            <div class="dashboard-settings margin-top-40">
                                <h2 class="dashboards-title"><?php echo e(__('Order Status')); ?></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 margin-top-40">
                            <div class="dashboard-status-list">
                                <ul class="tabs status-order-list margin-bottom-10">
                                    
                                    <?php echo $__env->make('frontend.user.seller.partials.tab-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                </ul>
                            </div>
                            <div>
                                <div class="table-responsive table-responsive--md table-responsive-lg">
                                    <table id="active_order_table" class="custom--table">
                                        <thead>
                                            <tr>
                                                <th> <?php echo e(__('Order ID')); ?> </th>
                                                <th> <?php echo e(__('Customer Name')); ?> </th>
                                                <th> <?php echo e(__('Service Date')); ?> </th>
                                                <th> <?php echo e(__('Service Time')); ?> </th>
                                                <th> <?php echo e(__('Order Pricing')); ?> </th>
                                                <th> <?php echo e(__('Order Status')); ?> </th>
                                                <th> <?php echo e(__('Action')); ?> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $active_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td> <?php echo e($order->id); ?> </td>
                                                    <td> <?php echo e($order->name); ?> </td>
                                                    <td> <?php echo e(Carbon\Carbon::parse($order->date)->format('d/m/y')); ?> </td>
                                                    <td> <?php echo e($order->schedule); ?></td>
                                                    <td> <?php echo e(float_amount_with_currency_symbol($order->total)); ?></td>
                                                    <?php if( $order->status==1): ?> <td class="order-active"><span><?php echo e(__('Active')); ?></span></td><?php endif; ?>
                                                    <td data-label="Action">
                                                        <a href="<?php echo e(route('seller.order.details', $order->id)); ?>" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('View Details')); ?>">
                                                            <span class="icon eye-icon"><i class="las la-eye"></i></span>
                                                        </a>
                                                        <a href="#0" 
                                                            class="edit_status_modal" 
                                                            data-toggle="modal"
                                                            data-target="#editStatusModal"
                                                            data-id="<?php echo e($order->id); ?>">
                                                            <span class="dash-icon color-1" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Change Status')); ?>"> 
                                                                <i class="las la-edit"></i> 
                                                            </span>
                                                        </a>
                                                        <a href="<?php echo e(route('seller.order.invoice.details',$order->id)); ?>">
                                                            <span class="icon print-icon" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Print Pdf')); ?>"> 
                                                                <i class="las la-print"></i>
                                                            </span>
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="blog-pagination margin-top-55">
                                    <div class="custom-pagination mt-4 mt-lg-5">
                                        <?php echo $active_orders->links(); ?>

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
    <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <form action="<?php echo e(route('seller.order.status')); ?>" method="post">
            <input type="hidden" id="order_id" name="order_id" >
            <?php echo csrf_field(); ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModal"><?php echo e(__('Change Status')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                            <label for="up_day_id"><?php echo e(__('Select Status')); ?></label>
                            <select name="status" id="status" class="form-control nice-select">
                                <option value=""><?php echo e(__('Select Status')); ?></option>
                                <option value="0"><?php echo e(__('Pending')); ?></option>
                                <option value="1"><?php echo e(__('Active')); ?></option>
                                <option value="2"><?php echo e(__('Completed')); ?></option>
                                <option value="3"><?php echo e(__('Delivered')); ?></option>
                                <option value="4"><?php echo e(__('Cancelled')); ?></option>
                            </select>
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

                $(document).on('click','.edit_status_modal',function(e){
                    e.preventDefault();
                    let order_id = $(this).data('id');
                    $('#order_id').val(order_id);
                    $('.nice-select').niceSelect('update');
                });

            });

        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.user.seller.seller-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/user/seller/order/active-orders.blade.php ENDPATH**/ ?>