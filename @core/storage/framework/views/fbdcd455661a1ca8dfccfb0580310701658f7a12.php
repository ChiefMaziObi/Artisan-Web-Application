<li class="<?php if(request()->is('seller/orders/active-orders')): ?> active <?php endif; ?>">
    <a href="<?php echo e(route('seller.active.orders')); ?>"><?php echo e(__('Active')); ?>

        <span class="numbers">
            <?php if(!empty($active_orders)): ?><?php echo e($active_orders->count()); ?><?php endif; ?>
        </span>
    </a>
</li>

<li class="<?php if(request()->is('seller/orders/deliver-orders')): ?> active <?php endif; ?>">
    <a href="<?php echo e(route('seller.deliver.orders')); ?>"><?php echo e(__('Delivered')); ?>

        <span class="numbers">
            <?php if(!empty($deliver_orders)): ?><?php echo e($deliver_orders->count()); ?><?php endif; ?>
        </span>
    </a>
</li>

<li class="<?php if(request()->is('seller/orders/complete-orders')): ?> active <?php endif; ?>">
    <a href="<?php echo e(route('seller.complete.orders')); ?>"><?php echo e(__('Completed')); ?>

        <span class="numbers">
            <?php if(!empty($complete_orders)): ?><?php echo e($complete_orders->count()); ?><?php endif; ?>
        </span>
    </a>
</li>

<li class="<?php if(request()->is('seller/orders/cancel-orders')): ?> active <?php endif; ?>">
    <a href="<?php echo e(route('seller.cancel.orders')); ?>"><?php echo e(__('Cancelled')); ?>

        <span class="numbers">
            <?php if(!empty($cancel_orders)): ?><?php echo e($cancel_orders->count()); ?><?php endif; ?>
        </span>
    </a>
</li>

<li class="<?php if(request()->is('seller/orders')): ?> active <?php endif; ?>">
    <a href="<?php echo e(route('seller.orders')); ?>"><?php echo e(__('All')); ?>

        <span class="numbers">
            <?php if(!empty($orders)): ?><?php echo e($orders->count()); ?><?php endif; ?>
        </span>
    </a>
</li><?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/resources/views/frontend/user/seller/partials/tab-list.blade.php ENDPATH**/ ?>