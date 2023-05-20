<?php $__env->startSection('site-title'); ?>
    <?php echo e(__('Maintain Page Settings')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.css','data' => []]); ?>
<?php $component->withName('media.css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/bootstrap-tagsinput.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/common/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.success','data' => []]); ?>
<?php $component->withName('msg.success'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
              <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
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
<?php endif; ?>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title"><?php echo e(__('Maintain Page Settings')); ?></h4>
                        <form action="<?php echo e(route('admin.maintains.page.settings')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                                <div class="form-group">
                                    <label for="maintain_page_title"><?php echo e(__( 'Title')); ?></label>
                                    <input type="text" class="form-control"  id="maintain_page_title" value="<?php echo e(get_static_option('maintain_page_title')); ?>" name="maintain_page_title" placeholder="<?php echo e(__('Title')); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="maintain_page_description"><?php echo e(__( 'Description')); ?></label>
                                    <textarea name="maintain_page_description" id="maintain_page_description" class="form-control max-height-150" cols="30" rows="10"><?php echo e(get_static_option('maintain_page_description')); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label><?php echo e(__( 'Maintenance Duration')); ?></label>
                                    <input type="date" class="form-control" id="maintenance_duration" value="<?php echo e(get_static_option('maintenance_duration')); ?>" name="maintenance_duration" placeholder="<?php echo e(__('Maintenance Duration')); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="maintain_page_logo"><strong><?php echo e(__('Logo')); ?></strong></label>
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap">
                                            <?php
                                                $blog_img = get_attachment_image_by_id(get_static_option('maintain_page_logo'),null,true);
                                                $blog_image_btn_label = __('Upload Image');
                                            ?>
                                            <?php if(!empty($blog_img)): ?>
                                                <div class="attachment-preview">
                                                    <div class="thumbnail">
                                                        <div class="centered">
                                                            <img class="avatar user-thumb" src="<?php echo e($blog_img['img_url']); ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php  $blog_image_btn_label = __('Change Image'); ?>
                                            <?php endif; ?>
                                        </div>
                                        <input type="hidden" id="maintain_page_logo" name="maintain_page_logo" value="">
                                        <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="Select Maintains Logo Image" data-modaltitle="Upload Maintains Logo Image" data-toggle="modal" data-target="#media_upload_modal">
                                            <?php echo e(__($blog_image_btn_label)); ?>

                                        </button>
                                    </div>
                                    <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. Recommended image size 300x100')); ?></small>
                                </div>
                                <div class="form-group">
                                    <label for="maintain_page_background_image"><strong><?php echo e(__('Background Image')); ?></strong></label>
                                    <div class="media-upload-btn-wrapper">
                                        <div class="img-wrap">
                                            <?php
                                                $maintain_page_background_image = get_attachment_image_by_id(get_static_option('maintain_page_background_image'),null,true);
                                                $maintain_page_background_image_btn_label = __('Upload Image');
                                            ?>
                                            <?php if(!empty($maintain_page_background_image)): ?>
                                                <div class="attachment-preview">
                                                    <div class="thumbnail">
                                                        <div class="centered">
                                                            <img class="avatar user-thumb" src="<?php echo e($maintain_page_background_image['img_url']); ?>" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php  $maintain_page_background_image_btn_label = __('Change Image'); ?>
                                            <?php endif; ?>
                                        </div>
                                        <input type="hidden" id="maintain_page_background_image" name="maintain_page_background_image" value="">
                                        <button type="button" class="btn btn-info media_upload_form_btn" data-btntitle="<?php echo e(__('Select Background Image')); ?>" data-modaltitle="<?php echo e(__('Upload Background Image')); ?>" data-toggle="modal" data-target="#media_upload_modal">
                                            <?php echo e(__($maintain_page_background_image_btn_label)); ?>

                                        </button>
                                    </div>
                                    <small class="form-text text-muted"><?php echo e(__('allowed image format: jpg,jpeg,png. Recommended image size 1920x1000')); ?></small>
                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Settings')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.markup','data' => []]); ?>
<?php $component->withName('media.markup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/dropzone.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/common/js/flatpickr.js')); ?>"></script>
    <script>
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $("#maintenance_duration").flatpickr({
                    dateFormat: "Y-m-d",
                });
            });
        })(jQuery)
    </script>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.media.js','data' => []]); ?>
<?php $component->withName('media.js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/backend/pages/maintain-page/maintain-page-index.blade.php ENDPATH**/ ?>