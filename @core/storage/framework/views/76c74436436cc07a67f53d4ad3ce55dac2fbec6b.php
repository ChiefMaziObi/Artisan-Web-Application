

<?php $__env->startSection('site-title'); ?>
<?php echo e(__('Category')); ?>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('inner-title'); ?>
<?php echo e(__('All Category')); ?>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('content'); ?>
<section class="category-area padding-top-100 padding-bottom-100">
    <div class="container container-two">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-two">
                    <h3 class="title"><?php echo e(__('Categories')); ?></h3>
                </div>
            </div>
        </div>
        <div class="row margin-top-20">
            <?php $__currentLoopData = $all_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-2 col-lg-3 col-sm-6 margin-top-30 category-child">
                <div class="single-category style-02 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="icon">
                        <?php echo render_image_markup_by_attachment_id($cat->image,'','','thumb'); ?>

                    </div>
                    <div class="category-contents">
                        <h4 class="category-title"> <a href="<?php echo e(route('service.list.category',$cat->slug)); ?>"> <?php echo e($cat->name); ?> </a> </h4>
                        <span class="category-para"> <?php echo e($cat->services->count()); ?>+ <?php echo e(__('Service')); ?> </span>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $all_subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xl-2 col-lg-3 col-sm-6 margin-top-30 category-child">
                <div class="single-category style-02 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="icon">
                        <?php echo render_image_markup_by_attachment_id($sub_cat->image,'','','thumb'); ?>

                    </div>
                    <div class="category-contents">
                        <h4 class="category-title"> <a href="<?php echo e(route('service.list.category',$sub_cat->slug)); ?>"> <?php echo e($sub_cat->name); ?> </a> </h4>
                        <span class="category-para"> <?php echo e($sub_cat->services->count()); ?>+ <?php echo e(__('Service')); ?> </span>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\qixer_bytesed_laravel\@core\resources\views/frontend/pages/category/all-category.blade.php ENDPATH**/ ?>