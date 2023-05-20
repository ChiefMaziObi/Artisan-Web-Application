
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Orders')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <style>
        .table-td-padding {
            border-collapse: separate;
            border-spacing: 10px 20px;
        }
    </style>
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
                <?php if($orders->count() >= 1): ?>
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
                                <div class="table-responsive table-responsive--md">
                                    <table id="all_order_table" class="custom--table table-td-padding">
                                        <thead>
                                            <tr>
                                                <th> <?php echo e(__('Order ID')); ?> </th>
                                                <th> <?php echo e(__('Customer Name')); ?> </th>
                                                <th> <?php echo e(__('Service Date')); ?> </th>
                                                <th> <?php echo e(__('Service Time')); ?> </th>
                                                <th> <?php echo e(__('Order Pricing')); ?> </th>
                                                <th> <?php echo e(__('Payment Status')); ?> </th>
                                                <th> <?php echo e(__('Order Status')); ?> </th>
                                                <th> <?php echo e(__('Order Type')); ?> </th>
                                                <th> <?php echo e(__('Order Complete Request')); ?> </th>
                                                <th> <?php echo e(__('Action')); ?> </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td data-label="Order ID"> <?php echo e($order->id); ?> </td>
                                                    <td data-label="Customer Name"> <?php echo e($order->name); ?> </td>
                                                    <td data-label="Service Date"> <?php echo e(Carbon\Carbon::parse($order->date)->format('d/m/y')); ?> </td>
                                                    <td data-label="Service Time"> <?php echo e($order->schedule); ?></td>
                                                    <td data-label="Order Pricing"> <?php echo e(float_amount_with_currency_symbol($order->total)); ?></td>
                                                    <td data-label="Payment Status"> 
                                                        <?php if($order->payment_status == 'pending'): ?><span class="text-danger"><?php echo e(__('Pending')); ?></span><?php endif; ?>
                                                        <?php if($order->payment_status == 'complete'): ?><span class="text-success"><?php echo e(__('Complete')); ?></span><?php endif; ?>
                                                    </td>

                                                    <?php if($order->status == 0): ?> <td data-label="Order Status" class="pending"><span><?php echo e(__('Pending')); ?></span></td><?php endif; ?>
                                                    <?php if($order->status == 1): ?> <td data-label="Order Status" class="order-active"><span><?php echo e(__('Active')); ?></span></td><?php endif; ?>
                                                    <?php if($order->status == 2): ?> <td data-label="Order Status" class="completed"><span><?php echo e(__('Completed')); ?></span></td><?php endif; ?>
                                                    <?php if($order->status == 3): ?> <td data-label="Order Status" class="order-deliver"><span><?php echo e(__('Delivered')); ?></span></td><?php endif; ?>
                                                    <?php if($order->status == 4): ?> <td data-label="Order Status" class="canceled"><span><?php echo e(__('Cancelled')); ?></span></td><?php endif; ?>

                                                    <td data-label="Order Pricing">
                                                        <?php if($order->is_order_online==1): ?>
                                                        <span class="btn btn-success"><?php echo e(__('Online')); ?></span>
                                                        <?php else: ?>
                                                        <span class="btn btn-info"><?php echo e(__('OffLine')); ?></span>
                                                        <?php endif; ?>
                                                    </td>

                                                    <?php if($order->order_complete_request == 0): ?> <td data-label="Order Status" class="pending"><span><?php echo e(__('No Request Create')); ?></span></td><?php endif; ?>
                                                        <?php if($order->order_complete_request == 1): ?> 
                                                        <td data-label="Order Status" class="pending">
                                                            <span><?php echo e(__('Request Pending')); ?></span>
                                                        </td>
                                                        <?php endif; ?>
                                                        <?php if($order->order_complete_request == 2): ?> <td data-label="Order Status" class="completed"><span><?php echo e(__('Completed')); ?></span></td><?php endif; ?>

                                                    <td data-label="Action">
                                                        <a href="<?php echo e(route('seller.order.details', $order->id)); ?>">
                                                            <span class="icon eye-icon" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('View Details')); ?>">
                                                                <i class="las la-eye"></i>
                                                            </span>
                                                        </a>
                                                       
                                                        <?php if($order->is_order_online != 1): ?>
                                                             <a href="<?php echo e(route('seller.support.ticket.new', $order->id)); ?>">
                                                            <span class="icon eye-icon" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Create Ticket')); ?>">
                                                             <i class="las la-ticket-alt"></i>
                                                            </span>
                                                            </a>
                                                        <?php else: ?> 
                                                             <a href="<?php echo e(route('seller.support.ticket.view',optional($order->online_order_ticket)->id)); ?>">
                                                                <span class="icon eye-icon" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('View Ticket')); ?>">
                                                                    <i class="las la-eye-slash"></i>
                                                                </span>
                                                            </a>
                                                        <?php endif; ?>
                                                        <a href="#0" class="edit_status_modal" 
                                                            data-toggle="modal"
                                                            data-target="#editStatusModal" 
                                                            data-id="<?php echo e($order->id); ?>"
                                                            data-status="<?php echo e($order->status); ?>"
                                                            >
                                                            <span class="dash-icon color-1" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Change Status')); ?>"> 
                                                                <i class="las la-edit"></i>
                                                            </span>
                                                        </a>
                                                        <?php if($order->payment_gateway === 'cash_on_delivery' && $order->payment_status === 'pending'): ?>
                                                                <a href="javascript:void(0)"
                                                                   class="edit_payment_status_modal"
                                                                   data-toggle="modal"
                                                                   data-target="#editPaymentStatusModal"
                                                                   data-id="<?php echo e($order->id); ?>">
                                                                    <span class="dash-icon color-1" data-toggle="tooltip" data-placement="top" title="<?php echo e(__('Change Payment Status')); ?>">
                                                                        <i class="las la-money-check-alt"></i>
                                                                    </span>
                                                                </a>
                                                        <?php endif; ?>
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
                                        <?php echo $orders->links(); ?>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php else: ?> 
                <h2 class="no_data_found"><?php echo e(__('No Orders Found')); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!--Status Modal -->
    <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <form action="<?php echo e(route('seller.order.status')); ?>" method="post">
            <input type="hidden" id="order_id" name="order_id">
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
                        <ul class="mb-3 text-danger">
                            <li><strong><?php echo e(__('Status Meaning:')); ?></strong></li>
                            <li><?php echo e(__('Pending: Did not start the job yet.')); ?></li>
                            <li><?php echo e(__('Active: Job already started.')); ?></li>
                            <li><?php echo e(__('Delivered: Order Deliverd For Checking.')); ?></li>
                            <li><?php echo e(__('Completed: Order is completed and closed.')); ?></li>
                        </ul>

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

    <div class="modal fade" id="editPaymentStatusModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
         aria-hidden="true">
        <form action="<?php echo e(route('seller.order.payment.status')); ?>" method="post">
            <input type="hidden"  name="order_id">
            <?php echo csrf_field(); ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModal"><?php echo e(__('Change Payment Status')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="up_day_id"><?php echo e(__('Select Status')); ?></label>
                            <select name="status" id="status" class="form-control nice-select">
                                <option value=""><?php echo e(__('Select Status')); ?></option>
                                <option value="complete"><?php echo e(__('Completed')); ?></option>
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

                $(document).on('click', '.edit_payment_status_modal', function(e) {
                    e.preventDefault();
                    let modalContainer = $('#editPaymentStatusModal');
                    let order_id = $(this).data('id');
                    modalContainer.find('input[name="order_id"]').val(order_id);
                    $('.nice-select').niceSelect('update');
                });


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

<?php echo $__env->make('frontend.user.seller.seller-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\qixer_bytesed_laravel\@core\resources\views/frontend/user/seller/order/orders.blade.php ENDPATH**/ ?>