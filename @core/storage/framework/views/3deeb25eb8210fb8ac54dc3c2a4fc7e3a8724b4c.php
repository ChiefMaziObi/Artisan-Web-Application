

<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Home')); ?>

    <?php $__env->stopSection(); ?>

    <?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Search')); ?>

    <?php $__env->stopSection(); ?> 

    <?php $__env->startSection('inner-title'); ?>
    <?php echo e(__('Services')); ?>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
    <!-- Category Service area starts -->
    <section class="category-services-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row margin-top-20">

                <?php if($services->count() >0): ?>
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                        <div class="col-lg-4 col-md-6 margin-top-30 all-services">
                            <div class="single-service no-margin wow fadeInUp" data-wow-delay=".2s">
                                <a href="<?php echo e(route('service.list.details',$service->slug)); ?>" class="service-thumb">
                                    <?php echo render_image_markup_by_attachment_id($service->image); ?>

                                    <div class="country_city_location">
                                        <span class="single_location"> <i class="las la-map-marker-alt"></i>
                                            <?php echo e(optional($service->serviceCity)->service_city); ?> ,
                                             <?php echo e(optional(optional($service->serviceCity)->countryy)->country); ?>

                                        </span>
                                    </div>
                                    <?php if($service->is_featured): ?>
                                    <div class="award-icons">
                                        <i class="las la-award"></i>
                                    </div>
                                    <?php endif; ?>
                                </a>
                                <div class="services-contents">
                                    <ul class="author-tag">
                                        <li class="tag-list">
                                            <a href="<?php echo e(route('about.seller.profile',optional($service->seller)->username)); ?>">
                                                <div class="authors">
                                                    <div class="thumb">
                                                        <?php echo render_image_markup_by_attachment_id(optional($service->seller)->image); ?>

                                                        
                                                    </div>
                                                    <span class="author-title"> <?php echo e(optional($service->seller)->name); ?></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <span class="icon"> <i class="las la-star"></i> </span>
                                                <span class="reviews"> 
                                                    <?php echo e(round(optional($service->reviews)->avg('rating'),1)); ?>

                                                    (<?php echo e(optional($service->reviews)->count()); ?>)
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                    <h5 class="common-title"> <a href="<?php echo e(route('service.list.details',$service->slug)); ?>"> <?php echo e(Str::limit($service->title)); ?> </a> </h5>
                                    <p class="common-para"> <?php echo e(Str::limit(strip_tags($service->description,100))); ?> </p>
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
                    
                    <div class="col-lg-12">
                        <div class="blog-pagination margin-top-55">
                            <div class="custom-pagination mt-4 mt-lg-5">
                                <?php echo $services->links(); ?>

                            </div>
                        </div>
                    </div>

                <?php else: ?> 
                  <h2 class="text-warning"><?php echo e(__('Nothing Found...')); ?></h2>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Category Service area end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\service provider\@core\resources\views/frontend/partials/clickable-search-result.blade.php ENDPATH**/ ?>