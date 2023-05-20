
 <div class="card text-white bg-secondary mb-3 mt-2" style="border:none">
    <div class="card-body home_servie_serach_wrapper">
        <?php if($services->count() >0): ?>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('service.list.details',$service->slug)); ?>" class="search_servie_image_content text-left text-white">
                <div class="search_thumb bg-image" <?php echo render_background_image_markup_by_attachment_id($service->image,'','thumb'); ?>></div>
                  <span class="search-text-item">
                    <?php echo e($service->title); ?>

                    <br>
                    <?php echo e(float_amount_with_currency_symbol($service->price)); ?>

                  </span>
                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?> 
           <p class="text-left text-warning"><?php echo e(__("Nothing Found")); ?></p>
        <?php endif; ?>
    </div>
  </div><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/partials/search-result.blade.php ENDPATH**/ ?>