<?php if(!empty($services)): ?>
    <?php if(!empty($single_service)): ?>
    <input type="hidden" name="seller_id" id="seller_id" value="<?php echo e($single_service->seller_id); ?>">
    <?php endif; ?>
    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-lg-4 col-md-6 margin-top-30 all-services">
        <div class="single-service no-margin wow fadeInUp" data-wow-delay=".2s">
            <a href="<?php echo e(route('service.list.details',$service->slug)); ?>" class="service-thumb">
                <?php echo render_image_markup_by_attachment_id($service->image); ?>

                <div class="award-icons">
                    <i class="las la-award"></i>
                </div>
            </a>
            <div class="services-contents">
                <ul class="author-tag">
                    <li class="tag-list">
                        <a href="<?php echo e(route('about.seller.profile',optional($service->seller)->username)); ?>">
                            <div class="authors">
                                <div class="thumb">
                                    <?php echo render_image_markup_by_attachment_id(optional($service->seller)->image); ?>

                                    <span class="notification-dot"></span>
                                </div>
                                <span class="author-title"> <?php echo e(optional($service->seller)->name); ?> </span>
                            </div>
                        </a>
                    </li>
                    <li class="tag-list">
                        <?php if($service->reviews->count() >= 1): ?>
                        <a href="javascript:void(0)">
                            <span class="icon"><?php echo e(__('Rating:')); ?></span>
                            <span class="reviews">
                                <?php echo e(round(optional($service->reviews)->avg('rating'),1)); ?> 
                                (<?php echo e(optional($service->reviews)->count()); ?>)
                            </span>
                        </a>
                        <?php endif; ?>
                    </li>
                </ul>
                <h5 class="common-title"> <a href="<?php echo e(route('service.list.details',$service->slug)); ?> "> <?php echo e($service->title); ?> </a> </h5>
                <p class="common-para"> <?php echo e(Str::limit(strip_tags($service->description),100)); ?> </p>
                <div class="service-price">
                    <span class="starting"> <?php echo e(__('Starting at')); ?> </span>
                    <span class="prices"> <?php echo e(amount_with_currency_symbol($service->price)); ?> </span>
                </div>
                <div class="btn-wrapper d-flex flex-wrap">
                    <a href="<?php echo e(route('service.list.book',$service->slug)); ?>" class="cmn-btn btn-small btn-bg-1"> <?php echo e(__('Book Now')); ?> </a>
                    <a href="<?php echo e(route('service.list.details',$service->slug)); ?>" class="cmn-btn btn-small btn-outline-1 ml-auto"> <?php echo e(__('View Details')); ?> </a>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?> 
<h2><?php echo e(__('No Service Found')); ?></h2>    
<?php endif; ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/pages/services/partials/search-result.blade.php ENDPATH**/ ?>