<html>
<head>
    <title><?php echo e(__('Payfast Payment Gateway')); ?></title>
</head>
<body>
<?php echo $submit_form; ?>

<script>
    (function($){
        "use strict";
        var submitBtn = document.querySelector('button[type="submit"]');
        submitBtn.innerHTML = "<?php echo e(__('Redirecting Please Wait...')); ?>";
        submitBtn.style.color = "#fff";
        submitBtn.style.backgroundColor = "#c54949";
        submitBtn.style.border = "none";
        document.addEventListener('DOMContentLoaded',function (){
            submitBtn.dispatchEvent(new MouseEvent('click'));
        },false);
    })();
</script>
</body>
</html>
<?php /**PATH /home/bytesed/public_html/laravel/qixer/@core/vendor/xgenious/paymentgateway/src/Providers/../../resources/views/payfast.blade.php ENDPATH**/ ?>