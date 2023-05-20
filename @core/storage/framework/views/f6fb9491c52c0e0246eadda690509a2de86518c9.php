<!DOCTYPE html>
<html lang="<?php echo e(get_user_lang()); ?>" dir="<?php echo e(get_user_lang_direction()); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> <?php echo e(__('Order Invoice')); ?> </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">

    <?php if( get_user_lang_direction() === 'rtl'): ?>
        <style>
            
            [dir="rtl"] .item-description .table-title  {
                text-align: right;
            }
            [dir="rtl"] .custom--table tbody tr td {
                text-align: right;
            }
            [dir="rtl"] .custom--table thead tr th {
                text-align: right !important;
            }
            [dir="rtl"] footer {
                text-align: right;
            }
        </style>
    <?php endif; ?>
</head>

<body>


    <style>
        * {
            font-family: 'Roboto', sans-serif;
            line-height: 26px;
            font-size: 15px;
        }
        
        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        /*=========================================================
          [ Table ]
        =========================================================*/
        
        .custom--table {
            width: 100%;
            color: inherit;
            vertical-align: top;
            font-weight: 400;
            border-collapse: collapse;
            border-bottom: 2px solid #ddd;
            margin-top: 0;
        }
        .table-title{
            font-size: 24px;
            font-weight: 600;
            line-height: 32px;
            margin-bottom: 10px;
        }
        .custom--table thead {
            font-weight: 700;
            background: inherit;
            color: inherit;
            font-size: 16px;
            font-weight: 500;
        }
        
        .custom--table tbody {
            border-top: 0;
            overflow: hidden;
            border-radius: 10px;
        }
        .custom--table thead tr {
            border-top: 2px solid #ddd;
            border-bottom: 2px solid #ddd;
            text-align: left;
        }
        .custom--table thead tr th {
            border-top: 2px solid #ddd;
            border-bottom: 2px solid #ddd;
            text-align: left;
            font-size: 16px;
            padding: 10px 0;
        }
        .custom--table tbody tr {
            vertical-align: top;
        }
        .custom--table tbody tr td {
            font-size: 14px;
            line-height: 18px
            vertical-align: top;
        }
        .custom--table tbody tr td:last-child{
            padding-bottom: 10px;
        }
        .custom--table tbody tr td .data-span {
            font-size: 14px;
            font-weight: 500;
            line-height: 18px;
        }
        .custom--table tbody .table_footer_row {
            border-top: 2px solid #ddd;
            margin-bottom: 10px !important;
            padding-bottom: 10px !important;
            
        }
        /* invoice area */
        .invoice-area {
            padding: 10px 0;
        }
        
        .invoice-wrapper {
            max-width: 650px;
            margin: 0 auto;
            box-shadow: 0 0 10px #f3f3f3;
            padding: 0px;
        }
        
        .invoice-header {
            margin-bottom: 40px;
        }
        
        .invoice-flex-contents {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
        }
        
        .invoice-logo {}
        
        .invoice-logo img {}
        
        .invoice-header-contents {
            float: right;
        }
        
        .invoice-header-contents .invoice-title {
            font-size: 40px;
            font-weight: 700;
        }
        
        .invoice-details {
            margin-top: 20px;
        }
        
        .invoice-details-flex {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 24px;
            flex-wrap: wrap;
        }
        
        .invoice-details-title {
            font-size: 24px;
            font-weight: 700;
            line-height: 32px;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        .invoice-single-details {}
        
        .details-list {
            margin: 0;
            padding: 0;
            list-style: none;
            margin-top: 10px;
        }
        
        .details-list .list {
            font-size: 14px;
            font-weight: 400;
            line-height: 18px;
            color: #666;
            margin: 0;
            padding: 0;
            transition: all .3s;
        }
        .details-list .list strong {
            font-size: 14px;
            font-weight: 500;
            line-height: 18px;
            color: #666;
            margin: 0;
            padding: 0;
            transition: all .3s;
        }
        
        .details-list .list a {
            display: inline-block;
            color: #666;
            transition: all .3s;
            text-decoration: none;
            margin: 0;
            line-height: 18px
        }
        
        .item-description {
            margin-top: 10px;
        }
        
        .products-item {
            text-align: left;
        }
        
        .invoice-total-count {}
        
        .invoice-total-count .list-single {
            display: flex;
            align-items: center;
            gap: 30px;
            font-size: 16px;
            line-height: 28px;
        }
        
        .invoice-total-count .list-single strong {}
        
        .invoice-subtotal {
            border-bottom: 2px solid #ddd;
            padding-bottom: 15px;
        }
        
        .invoice-total {
            padding-top: 10px;
        }
        
        .terms-condition-content {
            margin-top: 30px;
        }
        
        .terms-flex-contents {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .terms-left-contents {
            flex-basis: 50%;
        }
        
        .terms-title {
            font-size: 18px;
            font-weight: 700;
            color: #333;
            margin: 0;
        }
        
        .terms-para {
            margin-top: 10px;
        }
        
        .invoice-footer {}
        
        .invoice-flex-footer {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }
        
        .single-footer-item {
            flex: 1;
        }
        
        .single-footer {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .single-footer .icon {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 30px;
            width: 30px;
            font-size: 16px;
            background-color: #000e8f;
            color: #fff;
        }
        
        .icon-details {
            flex: 1;
        }
        
        .icon-details .list {
            display: block;
            text-decoration: none;
            color: #666;
            transition: all .3s;
            line-height: 24px;
        }
        
        .icon-details .list:hover {
            color: #000e8f;
        }
        
        @media (min-width: 300px) and (max-width: 991px) {
            .single-footer-item {
                flex-basis: 45%;
            }
            .custom--table tr th {
                font-size: 16px;
            }
        }
        
        @media (min-width: 300px) and (max-width: 575px) {
            .products-item {
                text-align: right;
                width: 260px;
                margin-left: auto;
            }
        }
        
        @media (min-width: 300px) and (max-width: 520px) {
            .item-description-list .list:first-child {
                width: 160px;
            }
            .item-products-list .list:first-child {
                width: 160px;
            }
            .single-footer-item {
                flex-basis: 45%;
            }
        }
        
        @media (min-width: 300px) and (max-width: 500px) {
            .payment-flex-contents {
                flex-direction: column-reverse;
            }
            .invoice-total-count {
                margin-left: auto;
            }
        }
        
        @media (min-width: 300px) and (max-width: 420px) {
            .invoice-wrapper {
                box-shadow: none;
            }
            .terms-left-contents {
                flex-basis: 100%;
            }
            .products-item {
                width: 170px;
            }
        }
    </style>

    <!-- Invoice area Starts -->
    <div class="invoice-area">
        <div class="invoice-wrapper">
            <div class="invoice-header">
                <div class="invoice-flex-contents">
                    <div class="invoice-logo">
                        <?php echo render_image_markup_by_attachment_id(get_static_option('site_logo')); ?>

                    </div>
                    <div class="invoice-header-contents">
                        <h2 class="invoice-title"><?php echo e(__('INVOICE')); ?></h2>
                    </div>
                </div>
            </div>
            <div class="invoice-details">
                <div class="invoice-details-flex">
                    <div class="invoice-single-details">
                        <h4 class="invoice-details-title"><?php echo e(__('Bill To:')); ?></h4>
                        <ul class="details-list">
                            <li class="list"> <?php echo e($order_details->name); ?> </li>
                            <li class="list"> <a href="#"> <?php echo e($order_details->email); ?> </a> </li>
                            <li class="list"> <a href="#"> <?php echo e($order_details->phone); ?></a> </li>
                        </ul>
                    </div>
                    <div class="invoice-single-details" style="float:right">
                        <h4 class="invoice-details-title"><?php echo e(__('Ship To:')); ?></h4>
                        <ul class="details-list">
                            <li class="list"> <strong><?php echo e(__('City')); ?>: </strong> <?php echo e(optional($order_details->service_city)->service_city); ?> </li>
                            <li class="list"> <strong><?php echo e(__('Area')); ?>: </strong> <?php echo e(optional($order_details->service_area)->service_area); ?> </li>
                            <li class="list"> <strong><?php echo e(__('Address')); ?>: </strong><?php echo e($order_details->address); ?> </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="item-description">
                <h5 class="table-title"><?php echo e(__('Include Services')); ?></h5>
                <table class="custom--table">
                    <thead>
                        <tr>
                            <th><?php echo e(__('Title')); ?></th>
                            <th><?php echo e(__('Unit Price')); ?></th>
                            <th><?php echo e(__('Quantity')); ?></th>
                            <th><?php echo e(__('Total')); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $package_fee =0; ?>
                        <?php $__currentLoopData = $order_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($include->title); ?></td>
                            <td><?php echo e(float_amount_with_currency_symbol($include->price)); ?></td>
                            <td><?php echo e($include->quantity); ?></td>
                            <td><?php echo e(float_amount_with_currency_symbol($include->price * $include->quantity)); ?></td>
                            <?php $package_fee += $include->price * $include->quantity ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <tr class="table_footer_row">
                            <td colspan="3"><strong><?php echo e(__('Package Fee')); ?></strong></td>
                            <td><strong><?php echo e(float_amount_with_currency_symbol($package_fee)); ?></strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <?php if($order_additionals->count() >=1): ?>
            <div class="item-description">
                <div class="table-responsive">
                    <h5 class="table-title"> <?php echo e(__('Additional Services')); ?> </h5>
                    <table class="custom--table">
                        <thead class="head-bg">
                            <tr>
                                <th><?php echo e(__('Title')); ?></th>
                                <th><?php echo e(__('Unit Price')); ?></th>
                                <th><?php echo e(__('Quantity')); ?></th>
                                <th><?php echo e(__('Total')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $extra_service =0; ?>
                            <?php $__currentLoopData = $order_additionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($additional->title); ?></td>
                                <td><?php echo e(float_amount_with_currency_symbol($additional->price)); ?></td>
                                <td><?php echo e($additional->quantity); ?></td>
                                <td><?php echo e(float_amount_with_currency_symbol($additional->price * $additional->quantity)); ?></td>
                                <?php $extra_service += $additional->price * $additional->quantity ?>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="3"><strong><?php echo e(__('Extra Service')); ?></strong></td>
                                <td><strong><?php echo e(float_amount_with_currency_symbol($extra_service)); ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>

            <?php if(!empty($order_details->coupon_code)): ?>
            <div class="item-description page_break">
                <div class="table-responsive table-responsive--md">
                    <h5 class="table-title"> <?php echo e(__('Coupon Details')); ?> </h5>
                    <table class="custom--table">
                        <thead class="head-bg">
                            <tr>
                                <th><?php echo e(__('Coupon Code')); ?></th>
                                <th><?php echo e(__('Coupon Type')); ?></th>
                                <th><?php echo e(__('Coupon Amount')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo e($order_details->coupon_code); ?></td>
                                <td><?php echo e($order_details->coupon_type); ?></td>
                                <td>
                                    <?php if($order_details->coupon_amount >0): ?>
                                    <?php echo e(float_amount_with_currency_symbol($order_details->coupon_amount)); ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php endif; ?>

            <div class="item-description">
                <div class="table-responsive">
                    <h5 class="table-title"><?php echo e(__('Orders Details')); ?></h5>
                    <table class="custom--table">
                        <thead class="head-bg">
                            <tr>
                                <th><?php echo e(__('Buyer Details')); ?></th>
                                <th><?php echo e(__('Date & Schedule')); ?></th>
                                <th><?php echo e(__('Amount Details')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                   <span class="data-span"> <?php echo e(__('Name: ')); ?></span><?php echo e($order_details->name); ?> <br>
                                   <span class="data-span"> <?php echo e(__('Email: ')); ?></span><?php echo e($order_details->email); ?> <br>
                                   <span class="data-span"> <?php echo e(__('Phone: ')); ?></span><?php echo e($order_details->phone); ?> <br>
                                   <span class="data-span"> <?php echo e(__('Address: ')); ?></span><?php echo e($order_details->address); ?>

                                </td>
                                <td>
                                    <?php echo e($order_details->date); ?> <br>
                                    <?php echo e($order_details->schedule); ?>

                                </td>
                                <td>
                                   <span class="data-span"> <?php echo e(__('Package Fee:')); ?> </span><?php echo e(float_amount_with_currency_symbol($order_details->package_fee)); ?> <br>
                                   <span class="data-span"> <?php echo e(__('Extra Service:')); ?> </span><?php echo e(float_amount_with_currency_symbol($order_details->extra_service)); ?> <br> 
                                   <span class="data-span"> <?php echo e(__('Sub Total:')); ?> </span><?php echo e(float_amount_with_currency_symbol($order_details->sub_total)); ?> <br>
                                   <span class="data-span"> <?php echo e(__('Tax:')); ?> </span><?php echo e(float_amount_with_currency_symbol($order_details->tax)); ?> <br>
                                    <?php if(!empty($order_details->coupon_amount)): ?> 
                                   <span class="data-span"> <?php echo e(__('Coupon Amount:')); ?> </span><?php echo e(float_amount_with_currency_symbol($order_details->coupon_amount)); ?> <br>
                                    <?php endif; ?>
                                   <span class="data-span"> <?php echo e(__('Total:')); ?> </span><?php echo e(float_amount_with_currency_symbol($order_details->total)); ?> <br> 
                                   <span class="data-span"> <?php echo e(__('Payment Gateway:')); ?> </span <?php echo e(ucwords(str_replace("_", " ", $order_details->payment_gateway))); ?> <br> 
                                   <span class="data-span"> <?php echo e(__('Payment Status:')); ?> </span><?php echo e(ucfirst($order_details->payment_status)); ?>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <footer>
                <?php echo get_footer_copyright_text(); ?>

            </footer>

        </div>
    </div>
    
    <!-- Invoice area end -->

</body>

</html><?php /**PATH /home/bytesed/public_html/laravel/qixer/beta/@core/resources/views/frontend/user/buyer/order/order-invoice.blade.php ENDPATH**/ ?>