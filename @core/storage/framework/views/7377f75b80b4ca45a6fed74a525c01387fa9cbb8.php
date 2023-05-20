

<?php $__env->startSection('site-title'); ?>
    <?php echo e($seller->name); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
<style>
    .profile-flex-content {
        flex-wrap: nowrap !important;
    }
    .seller-social-links {
        display: flex;
        align-items: center;
        gap: 7px;
        flex-wrap: wrap;
    }
    .seller-social-links a {
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 25px;
        width: 25px;
        background-color: #fff;
        color: var(--main-color-one);
        border-radius: 50%;
        transition: all .3s;
    }
    .seller-social-links a:hover{
        background-color: var(--main-color-one);
        color: #fff;
    }
    .seller-verified{
        font-size: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 20px;
        width: 20px;
        background-color: var(--main-color-one);
        color: #fff;
        border-radius: 50%;
    }
    .profile-flex-content .profile-contents .title {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    /* Tooltip container */
    .tooltip {
      position: relative;
      display: inline-block;
      border-bottom: 1px dotted black;
    }
    
    .tooltip .tooltiptext {
      visibility: hidden;
      width: 120px;
      background-color: black;
      color: #fff;
      text-align: center;
      padding: 5px 0;
      border-radius: 6px;
      position: absolute;
      z-index: 1;
    }
    .tooltip:hover .tooltiptext {
      visibility: visible;
    }
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!-- Banner Inner area Starts -->
    <?php if(!empty($seller)): ?>
    <div class="banner-inner-area section-bg-2 padding-top-40 padding-bottom-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 margin-top-30">
                    <div class="profile-author-contents">
                        <div class="profile-flex-content">
                            <div class="thumb">
                                <?php echo render_image_markup_by_attachment_id($seller->image); ?>

                            </div>
                            <div class="profile-contents">
                                <h4 class="title"> 
                                    <a href="<?php echo e(route('about.seller.profile',$seller->username)); ?>"> <?php echo e($seller->name); ?> </a>
                                    <?php if(optional($seller->sellerVerify)->status==1): ?> 
                                    <div data-toggle="tooltip" data-placement="top" title="This seller is verified by the site admin according his national id card.">
                                        <span class="seller-verified"> <i class="las la-check"></i> </span>
                                    </div>
                                    <?php endif; ?>
                                </h4>
                                <?php if($service_rating >=1): ?>
                                <div class="profiles-review">
                                    <span class="reviews">
                                        <b><?php echo ratting_star(round($service_rating,1) ); ?> </b>
                                        (<?php echo e($service_reviews->count()); ?>)
                                    </span>
                                </div>
                                <?php endif; ?>
                                <div class="seller-social-links mt-3">
                                    <?php if(!is_null($seller->fb_url)): ?><a href="<?php echo e($seller->fb_url); ?>"><i class="lab la-facebook-f"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->tw_url)): ?><a href="<?php echo e($seller->tw_url); ?>"><i class="lab la-twitter"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->go_url)): ?><a href="<?php echo e($seller->go_url); ?>"><i class="lab la-google"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->yo_url)): ?><a href="<?php echo e($seller->yo_url); ?>"><i class="lab la-youtube"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->li_url)): ?><a href="<?php echo e($seller->li_url); ?>"><i class="lab la-linkedin-in"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->in_url)): ?><a href="<?php echo e($seller->in_url); ?>"><i class="lab la-instagram"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->dr_url)): ?><a href="<?php echo e($seller->dr_url); ?>"><i class="lab la-dribbble"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->twi_url)): ?><a href="<?php echo e($seller->twi_url); ?>"><i class="lab la-twitch"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->pi_url)): ?><a href="<?php echo e($seller->pi_url); ?>"><i class="lab la-pinterest-p"></i></a><?php endif; ?>
                                    <?php if(!is_null($seller->re_url)): ?><a href="<?php echo e($seller->re_url); ?>"><i class="lab la-reddit"></i></a><?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 margin-top-30">
                    <div class="profile-author-contents">
                        <ul class="profile-about">
                            <li> <?php echo e(__('From:')); ?> <span> <?php echo e(optional($seller->country)->country); ?> </span> </li>
                            <li> <?php echo e(__('Seller Since:')); ?> <span> <?php echo e(Carbon\Carbon::parse($seller_since->created_at)->year); ?>  </span> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 margin-top-30">
                    <div class="profile-author-contents">
                        <div class="profile-single-achieve">
                            <div class="single-achieve">
                                <div class="achieve-inner">
                                    <div class="icon">
                                        <i class="las la-check"></i>
                                    </div>
                                    <div class="contents margin-top-10">
                                        <h3 class="title"><?php if(!empty($completed_order)): ?><?php echo e($completed_order); ?> <?php endif; ?></h3>
                                        <span class="ratings-span"> <?php echo e(__('Order Completed')); ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-achieve">
                                <div class="achieve-inner">
                                    <div class="icon">
                                        <i class="las la-star"></i>
                                    </div>
                                    <div class="contents margin-top-10">
                                        <h3 class="title"><?php if(!empty($seller_rating_percentage_value)): ?> <?php echo e(ceil($seller_rating_percentage_value)); ?>% <?php endif; ?></h3>
                                        <span class="ratings-span"><?php echo e(__('Seller Rating')); ?> </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Banner Inner area end -->

    <!-- Featured Service area starts -->
    <?php if(!empty($services)): ?>
    <section class="services-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-two">
                        <h3 class="title"><?php echo e(__('Services of this Seller')); ?> </h3>
                    </div>
                </div>
            </div>
            <div class="row margin-top-50">
                <div class="col-lg-12">
                    <div class="services-slider dot-style-one">
                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-services-item">
                            <div class="single-service">
                                <a href="<?php echo e(route('service.list.details',$service->slug)); ?>" class="service-thumb service-bg-thumb-format"  <?php echo render_background_image_markup_by_attachment_id($service->image); ?>>

                                    <?php if($service->featured == 1): ?>
                                    <div class="award-icons">
                                        <i class="las la-award"></i>
                                    </div>
                                    <?php endif; ?>
                                    <div class="country_city_location">
                                        <span class="single_location"> <i class="las la-map-marker-alt"></i> <?php echo e(optional($service->serviceCity)->service_city); ?>, <?php echo e(optional(optional($service->serviceCity)->countryy)->country); ?> </span>
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
                                                    <span class="author-title"><?php echo e(optional($service->seller)->name); ?> </span>
                                                </div>
                                            </a>
                                        </li>
                                        <?php if($service->reviews->count() >= 1): ?>
                                        <li class="tag-list">
                                            <a href="javascript:void(0)">
                                                <span class="reviews">
                                                    <?php echo ratting_star(round(optional($service->reviews)->avg('rating'),1)); ?>

                                                    (<?php echo e(optional($service->reviews)->count()); ?>)

                                                </span>
                                            </a>
                                        </li>
                                        <?php endif; ?>
                                    </ul>
                                    <h5 class="common-title"> <a href="<?php echo e(route('service.list.details',$service->slug)); ?>"><?php echo e($service->title); ?> </a> </h5>
                                    <p class="common-para"> <?php echo e(Str::limit(strip_tags($service->description),100)); ?> </p>
                                    <div class="service-price">
                                        <span class="starting"><?php echo e(__('Starting at')); ?> </span>
                                        <span class="prices"> <?php echo e(amount_with_currency_symbol( $service->price)); ?> </span>
                                    </div>
                                    <div class="btn-wrapper">
                                        <a href="<?php echo e(route('service.list.book',$service->slug)); ?>" class="cmn-btn btn-appoinment btn-bg-1"><?php echo e(__('Book Appoinment')); ?> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- Featured Service area ends -->
    
    <!-- Review seller area Starts -->
    <?php if($service_reviews-> count() >= 1): ?>
    <div class="review-seller-area padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title-two">
                        <h3 class="title"><?php echo e(get_static_option('service_reviews_title') ?? __('Reviews as Seller')); ?></h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="review-seller-wrapper">
                        <div class="about-review-tab">
                            <?php $__currentLoopData = $service_reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="about-seller-flex-content style-02">
                                <div class="about-seller-thumb">
                                    <?php echo render_image_markup_by_attachment_id(optional($review->buyer)->image); ?>

                                </div>
                                <div class="about-seller-content">
                                    <h5 class="title"> <?php echo e($review->name); ?> </h5>
                                    <div class="about-seller-list">
                                        <span class="icon">  <i class="las la-star"></i>  </span>
                                        <span class="icon">  <i class="las la-star"></i>  </span>
                                        <span class="icon">  <i class="las la-star"></i>  </span>
                                        <span class="icon">  <i class="las la-star"></i>  </span>
                                        <span class="icon">  <i class="las la-star"></i>  </span>
                                    </div>
                                    <p class="about-review-para"><?php echo e($review->message); ?></p>
                                    <span class="review-date"> <?php echo e(optional($review->created_at)->toFormattedDateString()); ?> </span>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="blog-pagination margin-top-55">
                    <div class="custom-pagination mt-4 mt-lg-5">
                        <?php echo $service_reviews->links(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    <!-- Review seller area ends -->
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/pages/seller/profile.blade.php ENDPATH**/ ?>