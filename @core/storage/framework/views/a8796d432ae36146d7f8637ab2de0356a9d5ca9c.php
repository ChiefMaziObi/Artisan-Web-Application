

<?php $__env->startSection('site-title'); ?>
    <?php echo e($blog_post->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <?php 
    $page_info = request()->url();
    $str = explode("/",request()->url());
    $page_info = $str[count($str)-2];
    ?>  
    <?php echo e(ucfirst($page_info)); ?>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('inner-title'); ?>
    <?php echo e($blog_post->title); ?>

<?php $__env->stopSection(); ?> 

<?php $__env->startSection('page-meta-data'); ?>
    <?php echo render_page_meta_data($blog_post); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Blog Details area starts -->
    <section class="blog-details-area padding-top-100 padding-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-details-wrapper">
                        <div class="single-blog-details">
                            <div class="thumb">
                                <?php echo render_image_markup_by_attachment_id($blog_post->image,'','large'); ?>

                            </div>
                            <ul class="tags">
                                <li class="list">
                                    <a href="javascript:void(0)"> <i class="las la-clock"></i> <?php echo e(optional($blog_post->created_at)->diffForHumans()); ?> </a>
                                </li>
                                <li class="list">
                                    <a href="<?php echo e(route('frontend.blog.category',optional($blog_post->category)->slug)); ?>"> <i class="las la-tag"></i> <?php echo e(optional($blog_post->category)->name); ?> </a>
                                </li>
                            </ul>
                            <p class="details-para"><?php echo $blog_post->blog_content; ?></p>
                            <blockquote>
                                <div class="content">
                                    <h3 class="blackquote-title"><?php echo e($blog_post->excerpt); ?></h3>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Details Tag area starts -->
                        <div class="details-tag-area padding-top-10">
                            <div class="row align-items-center">
                                <div class="col-lg-6 margin-top-30">
                                    <div class="social-share">
                                        <h4 class="share-tiitle"><?php echo e(get_static_option('blog_share_title') ?? __('Share:')); ?> </h4>
                                        <ul>
                                            <?php echo single_post_share(route('frontend.blog.single',['id'=>$blog_post->id, 'slug'=> $blog_post->slug]),$blog_post->title,$blog_post->image); ?>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 margin-top-30">
                                    <div class="tag-list">
                                        <h4 class="tag-tiitle"><?php echo e(get_static_option('blog_tag_title') ?? __(' Tags:')); ?> </h4>
                                        <ul>
                                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li>
                                                <?php $__currentLoopData = json_decode($tag->tag_name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <a href="<?php echo e(route('frontend.blog.tags',$tag_name)); ?>"><?php echo e($tag_name); ?></a>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Details Tag area end -->

                      <!-- Related Blog area starts -->
                      <div class="related-blog-area padding-top-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="section-title-two">
                                        <h3 class="title"><?php echo e(get_static_option('related_blog_title') ?? __('Related Blog')); ?> </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="row padding-top-20">
                                <?php if(!empty($related_blog)): ?>
                                    <?php $__currentLoopData = $related_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-lg-4 col-md-6 margin-top-30">
                                        <div class="single-blog no-margin wow fadeInUp" data-wow-delay=".2s">
                                            <a href="<?php echo e(route('frontend.blog.single',$blog->slug)); ?>" class="blog-thumb service-bg-thumb-format" <?php echo render_background_image_markup_by_attachment_id($blog->image); ?>>

                                            </a>
                                            <div class="blog-contents">
                                                <ul class="tags">
                                                    <li>
                                                        <a href="javascript:void(0)"> <i class="las la-clock"></i><?php echo e(optional($blog_post->created_at)->diffForHumans()); ?> </a>
                                                    </li>
                                                    <li>
                                                        <a href="<?php echo e(route('frontend.blog.category',optional($blog->category)->slug)); ?>"> <i class="las la-tag"></i><?php echo e(optional($blog->category)->name); ?> </a>
                                                    </li>
                                                </ul>
                                                <h5 class="common-title"> <a href="<?php echo e(route('frontend.blog.single',$blog->slug)); ?>"> <?php echo e($blog->title); ?> </a> </h5>
                                                <p class="common-para"><?php echo Str::words(strip_tags($blog->blog_content),20); ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Related Blog area ends -->

                        <!-- Comment area Starts -->
                        <div class="comment-area padding-top-100">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title-two">
                                            <h3 class="title"><?php echo e(get_static_option('blog_comment_title') ?? __('Post Your Comments')); ?></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 padding-top-20">
                                       <?php if(Auth::guard('web')->check()): ?>
                                        <form action="" class="blog_comment_form" method="post">
                                            <?php echo csrf_field(); ?> 
                                            <input type="hidden" value="<?php echo e($blog_post->id); ?>" name="blog_id" id="blog_id">
                                            
                                            <div class="details-comment-content">
                                                <div class="comments-flex-item">
                                                    <div class="single-commetns">
                                                        <label class="comment-label"><?php echo e(get_static_option('blog_comment_name_title') ?? __('Your Name*')); ?> </label>
                                                        <input type="text" class="form--control" name="name" id="name"
                                                        value="<?php echo e(Auth::guard('web')->user()->name ?? ''); ?>"
                                                         placeholder="<?php echo e(__('Type Name')); ?>">
                                                    </div>
                                                    <div class="single-commetns">
                                                        <label class="comment-label"> <?php echo e(get_static_option('blog_comment_email_title') ?? __('Email Address*')); ?> </label>
                                                        <input type="text" class="form--control" name="email" id="email"
                                                        value="<?php echo e(Auth::guard('web')->user()->email ?? ''); ?>"
                                                         placeholder="<?php echo e(__('Type Email')); ?>">
                                                    </div>
                                                </div>
                                                <div class="single-commetns">
                                                    <label class="comment-label"> <?php echo e(get_static_option('blog_comment_message_title') ?? __('Comments*')); ?> </label>
                                                    <textarea name="message" id="message" class="form--control form--message" placeholder="<?php echo e(__('Post Comments')); ?>"></textarea>
                                                </div>
                                                <button type="submit"><?php echo e(get_static_option('blog_comment_button_title') ?? __('Post Comments')); ?> </button>
                                            </div>
                                        </form>
                                        <?php else: ?> 
                                        <a class="btn btn-sm btn-success text-white" data-toggle="modal" data-target="#commentModal"><?php echo e(__('Sign in for comment')); ?></a>
                                        <?php endif; ?>

                                        <?php $__currentLoopData = $blog_post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="comment-show-contents padding-top-30">
                                                <div class="about-seller-flex-content style-03">
                                                    <div class="about-seller-thumb">
                                                        <a href="javascript:void(0)"> 
                                                            <?php echo render_image_markup_by_attachment_id(optional($comment->user)->image,'','thumb'); ?>

                                                        </a>
                                                    </div>
                                                    <div class="about-seller-content">
                                                        <h5 class="title"> <a href="javascript:void(0)"> <?php echo e($comment->name); ?> </a> </h5>
                                                        <p class="about-review-para"><?php echo e($comment->message); ?></p>
                                                        <span class="review-date"><?php echo e(optional($comment->created_at)->diffForHumans()); ?> </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Comment area ends -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="commentModal" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="display:block">
                <h5 class="modal-title" id="commentModalLabel"><?php echo e(__('Sign In For Comment')); ?></h5>
                <p class="login_error_msg text-danger"></p>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('frontend.blog.comment.signin')); ?>" method="post">
                        <div class="form-group">
                            <label for="username"><?php echo e(__('User Name')); ?></label>
                            <input type="text" class="form-control" name="username" id="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password"><?php echo e(__('Password')); ?></label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                <button type="button" class="btn btn-primary" id="login_form_for_comment"><?php echo e(__('Sign In')); ?></button>
                </div>
            </div>
            </div>
        </div>

    </section>
    <!-- Blog Details area end -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('assets/frontend/js/rating.js')); ?>"></script>
    <script>
        (function($){
            "use strict";

            $(document).ready(function(){

                $(document).on('submit','.blog_comment_form',function(e){
                    e.preventDefault();
                    let blog_id = $('#blog_id').val();
                    let name = $('#name').val();
                    let email = $('#email').val();
                    let message = $('#message').val();

                    $.ajax({
                        url:"<?php echo e(route('frontend.blog.comment')); ?>",
                        method:"post",
                        data:{
                            blog_id:blog_id,
                            name:name,
                            email:email,
                            message:message,
                        },
                        success:function(res){
                            if (res.status == 'success') {
                                toastr.options = {
                                    "closeButton": true,
                                    "debug": false,
                                    "newestOnTop": false,
                                    "progressBar": true,
                                    "preventDuplicates": true,
                                    "onclick": null,
                                    "showDuration": "100",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "show",
                                    "hideMethod": "hide"
                                };
                                toastr.success('Success!! Thanks For Comments---');
                            }
                            $('.blog_comment_form')[0].reset();
                        }
                    });
                })

                $(document).on('click','#login_form_for_comment',function (e){
                e.preventDefault();
                $.ajax({
                    url: "<?php echo e(route('frontend.blog.comment.signin')); ?>",
                    type: "POST",
                    data: {
                        username : $('#username').val(),
                        password : $('#password').val(),
                    },
                    success:function (data){
                        if (data.status == 'success'){
                            location.reload();
                        }
                        if (data.status == 'error'){
                            $('.login_error_msg').text(data.msg);
                        }
                    }
                });
            });


            });
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/beta/@core/resources/views/frontend/pages/blog/blog-single.blade.php ENDPATH**/ ?>