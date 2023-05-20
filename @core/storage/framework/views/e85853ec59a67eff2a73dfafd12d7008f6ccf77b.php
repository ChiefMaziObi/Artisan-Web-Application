
<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Service Coupons')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/common/css/flatpickr.min.css')); ?>">
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
                                <h2 class="dashboards-title"> <?php echo e(__('All Coupons')); ?> </h2>
                                <small class="text-danger"><?php echo e(__('Coupon will applicable only for your services and coupon amount will be reduce from your earnings.')); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapper margin-top-50 text-right">
                        <button class="cmn-btn btn-bg-1" data-toggle="modal" data-target="#addCouponModal"><?php echo e(__('Add Coupon')); ?></button>
                    </div>
                    
                    <div class="mt-5"> <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
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
<?php endif; ?> </div>
                    <div class="dashboard-service-single-item border-1 margin-top-40">
                        <div class="rows dash-single-inner">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('No')); ?></th>
                                        <th><?php echo e(__('Code')); ?></th>
                                        <th><?php echo e(__('Discount')); ?></th>
                                        <th><?php echo e(__('Discount Type')); ?></th>
                                        <th><?php echo e(__('Expire Date')); ?></th>
                                        <th><?php echo e(__('Status')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($data->code); ?></td>
                                        <td><?php echo e($data->discount); ?></td>
                                        <td><?php echo e(__($data->discount_type)); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($data->expire_date)->format('d/m/Y')); ?></td>
                                        <td>
                                            <?php if($data->status==1): ?> 
                                            <span class="text-success"><?php echo e(__('Active')); ?></span>
                                            <?php else: ?> 
                                            <span class="text-danger"><?php echo e(__('Inactive')); ?></span>
                                            <?php endif; ?> 
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.seller-coupon-status','data' => ['url' => route('seller.service.coupon.status',$data->id)]]); ?>
<?php $component->withName('seller-coupon-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('seller.service.coupon.status',$data->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                        </td>
                                        <td>
                                            <div class="dashboard-switch-single">
                                            <a href="#0" class="edit_coupon_modal" 
                                            data-toggle="modal" 
                                            data-target="#editCouponModal"
                                            data-id="<?php echo e($data->id); ?>"
                                            data-code="<?php echo e($data->code); ?>"
                                            data-discount="<?php echo e($data->discount); ?>"
                                            data-discount_type="<?php echo e(__($data->discount_type)); ?>"
                                            data-expire_date="<?php echo e($data->expire_date); ?>"
                                            >
                                            <span style="font-size:16px;" class="dash-icon color-1"> <i class="las la-edit"></i> </span>
                                            </a>
                                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.seller-delete-popup','data' => ['url' => route('seller.service.coupon.delete',$data->id)]]); ?>
<?php $component->withName('seller-delete-popup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('seller.service.coupon.delete',$data->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Add Modal -->
    <div class="modal fade" id="addCouponModal" tabindex="-1" role="dialog" aria-labelledby="couponModal" aria-hidden="true">
        <form action="<?php echo e(route('seller.service.coupon.add')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <div class="modal-header d-block ">
                        <h5 class="modal-title" id="couponModal"><?php echo e(__('Add New Coupon')); ?></h5>
                        <small class="text-info"><?php echo e(__('Be careful while create a coupon. if the service price less than the admin charge after apply coupon than admin charge will cut from your main balance.')); ?></small>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group mt-3">
                            <label for="code"><?php echo e(__('Coupon Code')); ?></label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="<?php echo e(__('Coupon Code')); ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label for="discount"><?php echo e(__('Coupon Discount')); ?></label>
                            <input type="number" name="discount" id="discount" class="form-control" placeholder="<?php echo e(__('Discount')); ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label for="discount_type"><?php echo e(__('Coupon Type')); ?></label>
                            <select name="discount_type" id="discount_type" class="form-control mb-3">
                                <option value=""><?php echo e(__('Select Type')); ?></option>
                                <option value="percentage"><?php echo e(__('Percentage')); ?></option>
                                <option value="amount"><?php echo e(__('Amount')); ?></option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="expire_date"><?php echo e(__('Expire Date')); ?></label>
                            <input type="date" name="expire_date" id="expire_date" class="form-control" placeholder="<?php echo e(__('Expire Date')); ?>">
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


    
    <!-- Edit Modal -->
    <div class="modal fade" id="editCouponModal" tabindex="-1" role="dialog" aria-labelledby="editCouponModal" aria-hidden="true">
        <form action="<?php echo e(route('seller.service.coupon.update')); ?>" method="post">
            <input type="hidden" id="up_id" name="up_id" >
            <?php echo csrf_field(); ?>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCouponModal"><?php echo e(__('Edit Coupon')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group mt-3">
                            <label for="up_code"><?php echo e(__('Coupon Code')); ?></label>
                            <input type="text" name="up_code" id="up_code" class="form-control" placeholder="<?php echo e(__('Coupon Code')); ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label for="up_discount"><?php echo e(__('Coupon Discount')); ?></label>
                            <input type="number" name="up_discount" id="up_discount" class="form-control" placeholder="<?php echo e(__('Discount')); ?>">
                        </div>
                        <div class="form-group mt-3">
                            <label for="up_discount_type"><?php echo e(__('Coupon Type')); ?></label>
                            <select name="up_discount_type" id="up_discount_type" class="form-control nice-select mb-3">
                                <option value=""><?php echo e(__('Select Type')); ?></option>
                                <option value="percentage"><?php echo e(__('Percentage')); ?></option>
                                <option value="amount"><?php echo e(__('Amount')); ?></option>
                            </select>
                        </div>
                        <div class="form-group mt-3">
                            <label for="up_expire_date"><?php echo e(__('Expire Date')); ?></label>
                            <input type="date" name="up_expire_date" id="up_expire_date" class="form-control" placeholder="<?php echo e(__('Expire Date')); ?>">
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
<script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
<script src="<?php echo e(asset('assets/common/js/flatpickr.js')); ?>"></script>
    <script>
        (function($){
            "use strict";
            $(document).ready(function(){

                $(document).on('click','.edit_coupon_modal',function(e){
                    e.preventDefault();
                    let coupon_id = $(this).data('id');
                    let code = $(this).data('code');
                    let discount = $(this).data('discount');
                    let discount_type = $(this).data('discount_type');
                    let expire_date = $(this).data('expire_date');

                    $('#up_id').val(coupon_id);
                    $('#up_code').val(code);
                    $('#up_discount').val(discount);
                    $('#up_discount_type').val(discount_type);
                    $('#up_expire_date').val(expire_date);
                    $('.nice-select').niceSelect('update');
                });

                $(document).on('click','.swal_status_button',function(e){
                    e.preventDefault();
                        Swal.fire({
                        title: '<?php echo e(__("Are you sure to change status?")); ?>',
                        text: '<?php echo e(__("You will change it anytime!")); ?>',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: "<?php echo e(__('Yes, delete it!')); ?>"
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).next().find('.swal_form_submit_btn').trigger('click');
                        }
                        });
                    });


                $(document).on('click','.swal_delete_button',function(e){
                    e.preventDefault();
                        Swal.fire({
                        title: '<?php echo e(__("Are you sure?")); ?>',
                        text: '<?php echo e(__("You would not be able to revert this item!")); ?>',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: "<?php echo e(__('Yes, delete it!')); ?>"
                        }).then((result) => {
                        if (result.isConfirmed) {
                            $(this).next().find('.swal_form_submit_btn').trigger('click');
                        }
                    });
                });

                $("#expire_date").flatpickr({
                    dateFormat: "Y-m-d",
                });
                $("#up_expire_date").flatpickr({
                    dateFormat: "Y-m-d",
                });

            });
            
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.user.seller.seller-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\qixer\@core\resources\views/frontend/user/seller/coupons/coupons.blade.php ENDPATH**/ ?>