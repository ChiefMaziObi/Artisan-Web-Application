<?php if(session()->has('msg')): ?>
    <div class="alert alert-<?php echo e(session('type')); ?>">
        <?php echo session('msg'); ?>

    </div>
<?php endif; ?>
<?php /**PATH D:\xampp\htdocs\qixer_bytesed_laravel\@core\resources\views/components/session-msg.blade.php ENDPATH**/ ?>