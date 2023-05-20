<div class="dashboard-left-content">
    <div class="dashboard-close-main">
        <div class="close-bars"> <i class="las la-times"></i> </div>
        <div class="dashboard-top padding-top-40">
            <div class="thumb">
                <?php if(!is_null(Auth::guard('web')->user()->image)): ?>
                <?php echo render_image_markup_by_attachment_id(Auth::guard('web')->user()->image); ?>

                <?php else: ?>
                <img src="<?php echo e(asset('assets/frontend/img/static/user_profile.png')); ?>" alt="No Image"> 
                <?php endif; ?>
            </div>
            <div class="author-content">
                <h4 class="title"> <?php echo e(Auth::guard('web')->user()->name); ?> </h4>
                <strong><a href="<?php echo e(route('homepage')); ?>"><?php echo e(__('Visit Site')); ?></a></strong>
            </div>
        </div>
        <div class="dashboard-bottom margin-top-35 margin-bottom-50">
            <ul class="dashboard-list ">
                <li class="list <?php if(request()->is('seller/dashboard*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.dashboard')); ?>"> <i class="las la-th"></i> <?php echo e(__('Dashboard')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/coupons*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.service.coupon')); ?>"> <i class="las la-gifts"></i> <?php echo e(__('Service Coupons')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/services*') || request()->is('seller/add-services*') || request()->is('seller/service-attributes*') || request()->is('seller/edit-services*') || request()->is('seller/edit-service-attributes*') || request()->is('seller/add-service-attributes-by-id*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.services')); ?>"> <i class="las la-cogs"></i><?php echo e(__('Services')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/days*') || request()->is('seller/add-day*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.days')); ?>"> <i class="las la-calendar-week"></i><?php echo e(__('Create Day')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/schedules*') || request()->is('seller/add-schedule*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.schedules')); ?>"> <i class="las la-clock"></i><?php echo e(__('Create Schedule')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/pending-orders')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.pending.orders')); ?>"> <i class="las la-tasks"></i> <?php echo e(__('Order Pending')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/orders*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.orders')); ?>"> <i class="las la-list-alt"></i> <?php echo e(__('All Orders')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/notification/all-notifications*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.notification.all')); ?>"> <i class="las la-bell"></i> <?php echo e(__('All Notifications')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/payout-request*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.payout')); ?>"> <i class="las la-dollar-sign"></i><?php echo e(__('Payout History')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/service-reviews*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.service.review')); ?>"> <i class="lar la-star"></i><?php echo e(__('Review')); ?></a>
                </li>
                <li class="list <?php if(request()->is('seller/all-tickets*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.support.ticket')); ?>"> <i class="las la-headset"></i><?php echo e(__('Support Ticket')); ?></a>
                </li>
                <li class="list <?php if(request()->is('seller/to-do-list*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.todolist')); ?>"> <i class="las la-list"></i><?php echo e(__('Todo List')); ?></a>
                </li>
                <li class="list <?php if(request()->is('seller/profile*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.profile')); ?>"> <i class="las la-user"></i> <?php echo e(__('Profile')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/seller-profile-verify*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.profile.verify')); ?>"> <i class="las la-user"></i> <?php echo e(__('Profile Verify')); ?> </a>
                </li>
                <li class="list <?php if(request()->is('seller/account-settings*')): ?> active <?php endif; ?>">
                    <a href="<?php echo e(route('seller.account.settings')); ?>"> <i class="las la-cog"></i> <?php echo e(__('Settings')); ?> </a>
                </li>
                <li class="list">
                    <a href="<?php echo e(route('seller.logout')); ?>"> <i class="las la-sign-out-alt"></i> <?php echo e(__('Log Out' )); ?> </a>
                </li>
            </ul>
        </div>
        <div class="dashboard-logo padding-top-100">
            <a href="<?php echo e(route('homepage')); ?>" class="logo"> 
                <?php echo render_image_markup_by_attachment_id(get_static_option('site_logo')); ?>

            </a>
        </div>
    </div>
</div><?php /**PATH C:\laragon\www\Artisanhelp\@core\resources\views/frontend/user/seller/partials/sidebar.blade.php ENDPATH**/ ?>