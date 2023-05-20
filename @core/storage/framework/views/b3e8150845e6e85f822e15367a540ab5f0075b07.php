

<?php $__env->startSection('site-title'); ?>
    <?php echo e($service_details_for_book->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-title'); ?>
    <?php 
    $page_info = request()->url();
    $str = explode("/",request()->url());
    $page_info = $str[count($str)-2];
    ?>  
    <?php echo e(ucwords(str_replace("-", " ", $page_info))); ?>


<?php $__env->stopSection(); ?> 

<?php $__env->startSection('inner-title'); ?>
    <?php echo e($service_details_for_book->title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<style>
.schedule_loader {
  border: 10px solid #f3f3f3; /* Light grey */
  border-top: 10px solid var(--main-color-one); /* Blue */
  border-radius: 50%;
  width: 70px;
  height: 70px;
  animation: spin 2s linear infinite;
}

.flatpickr-months .flatpickr-month {
    background-color: var(--main-color-one) !important;
}
.flatpickr-current-month {
    color: #fff !important;
}
.flatpickr-current-month input.cur-year {
    color: #fff !important;
}
.numInputWrapper span.arrowUp,
.numInputWrapper span.arrowDown {
    color: #fff !important;
}
.flatpickr-current-month .numInputWrapper span.arrowUp:after {
    border-bottom-color: #fff !important;
}

.flatpickr-current-month .numInputWrapper span.arrowDown:after {
    border-top-color: #fff !important;
}
.flatpickr-months .flatpickr-prev-month, .flatpickr-months .flatpickr-next-month {
    padding: 5px 10px !important;
    color: rgb(255 255 255) !important;
    fill: #ffffff !important;
}
.flatpickr-day.today {
    border-color: var(--main-color-one) !important;
}
.flatpickr-day.today:hover,
.flatpickr-day.selected,
.flatpickr-day.today.selected {
    background-color: var(--main-color-one) !important;
    border-color: var(--main-color-one) !important;
}
.flatpickr-day:hover{
    background-color: var(--main-color-one) !important;
    border-color: var(--main-color-one) !important;
    color: #fff !important;
}
.flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month {
    background-color: #222222 !important;
}
.flatpickr-current-month .flatpickr-monthDropdown-months .flatpickr-monthDropdown-month:hover,
.flatpickr-current-month .flatpickr-monthDropdown-months:focus .flatpickr-monthDropdown-month,
.flatpickr-current-month .flatpickr-monthDropdown-months.selected .flatpickr-monthDropdown-month
{
    background-color: var(--main-color-one) !important;
}
@keyframes  spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
@media  only screen and (max-width:360px) {
    .flatpickr-calendar.inline {
        width: 100% !important;
    }
    .flatpickr-rContainer{
        width: 100% !important;
    }
    .flatpickr-days {
        width: 100% !important;
    }
    .dayContainer {
        width: 100% !important;
        min-width: auto !important;
        max-width: unset !important;
    }
}
</style>
<link rel="stylesheet" href="<?php echo e(asset('assets/common/css/flatpickr.min.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <!-- Location Overview area starts -->
    <section class="location-overview-area padding-top-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo e(route('service.create.order')); ?>" id="msform" class="msform ms-order-form" method="post" name="msOrderForm" enctype="multipart/form-data" novalidate>
                        <?php echo csrf_field(); ?>
                        <?php if(!empty($service_details_for_book)): ?>
                            <ul class="overview-list step-list">
                                <?php if($service_details_for_book->is_service_online !=1): ?>
                                <li class="list active" id="account">
                                    <a class="list-click" href="javascript:void(0)"> <span class="list-number">1</span><?php echo e(__('Location')); ?></a>
                                </li>
                                <li class="list">
                                    <a class="list-click" href="javascript:void(0)"> <span
                                            class="list-number">2</span><?php echo e(__('Service')); ?></a>
                                </li>
                                <li class="list">
                                    <a class="list-click" href="javascript:void(0)"> <span
                                            class="list-number">3</span><?php echo e(__('Date & Time')); ?></a>
                                </li>
                                <li class="list">
                                    <a class="list-click" href="javascript:void(0)"> <span
                                            class="list-number">4</span><?php echo e(__('Information ')); ?></a>
                                </li>
                                <li class="list">
                                    <a class="list-click" href="javascript:void(0)"> <span class="list-number">5</span> <?php echo e(__('Confirmation')); ?> </a>
                                </li>
                                <?php else: ?>
                                    <li class="list active">
                                        <a class="list-click" href="javascript:void(0)"> <span
                                          class="list-number">1</span><?php echo e(__('Service')); ?></a>
                                    </li>
                                    <li class="list">
                                        <a class="list-click" href="javascript:void(0)"> <span
                                          class="list-number">2</span><?php echo e(__('Information ')); ?></a>
                                    </li>
                                    <li class="list">
                                        <a class="list-click" href="javascript:void(0)"> <span
                                        class="list-number">3</span> <?php echo e(__('Confirmation')); ?> </a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                            <!-- Location -->
                            <div> <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.msg.error_for_service_book','data' => []]); ?>
<?php $component->withName('msg.error_for_service_book'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.session-msg','data' => []]); ?>
<?php $component->withName('session-msg'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?> </div>
                            <?php if($service_details_for_book->is_service_online !=1): ?>
                            <fieldset class="padding-top-20 padding-bottom-100 confirm-location">
                                <div class="overview-list-all">
                                    
                                    <div class="alert alert-info fade in alert-dismissible show">
                                     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true" style="font-size:20px">×</span>
                                      </button>
                                      <strong><?php echo e(__('Info!')); ?></strong> <?php echo e(__('This service is available only selected country and city')); ?>

                                    </div>
                                    
                                    <div class="overview-location">
                                        <div class="single-location active margin-top-30 wow fadeInUp" data-wow-delay=".3s">
                                            <span class="location"><?php echo e(__('Your Location')); ?> </span>
                                            <?php if(Auth::guard('web')->check()): ?>
                                              <span class="location loacation_add country_name"><?php echo e(optional(Auth::guard('web')->user()->country)->country); ?></span>
                                              <span class="location loacation_add city_name"><?php echo e(optional(Auth::guard('web')->user()->city)->service_city); ?></span>
                                              <span class="location loacation_add area_name"><?php echo e(optional(Auth::guard('web')->user()->area)->service_area); ?></span>
                                              
                                            <?php else: ?> 
                                              <span class="location loacation_add country_name"></span>
                                              <span class="location loacation_add city_name"></span>
                                              <span class="location loacation_add area_name"></span>
                                              
                                            <?php endif; ?>  
                                        </div>
                                        <div class="select_city_area_country">
                                            <label for="" class="location"><?php echo e(__('Service Country')); ?></label>
                                            <select name="choose_service_country" id="choose_service_country">
                                                <?php if(!empty($country)): ?>
                                                    <option value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?></option>
                                                <?php endif; ?> 
                                            </select>
                                        </div>
                                        <div class="select_city_area_country">
                                            <label for="choose_service_city"
                                                class="location"><?php echo e(__('Service City')); ?></label>
                                            <select name="choose_service_city" id="choose_service_city" class="get_service_city">
                                                <?php if(!empty($city)): ?>
                                                    <option value="<?php echo e($city->id); ?>"><?php echo e($city->service_city); ?></option>
                                                <?php endif; ?> 
                                            </select>
                                        </div>
                                        <div class="select_city_area_country">
                                            <label for="choose_service_area"
                                                class="location"><?php echo e(__('Choose Area')); ?></label>
                                            <select name="choose_service_area" id="choose_service_area"
                                                class="get_service_area">
                                                <option value=""><?php echo e(__('Select Area')); ?></option>
                                                <?php $__currentLoopData = $areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $area): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($area->id); ?>"><?php echo e($area->service_area); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                 <?php if(get_static_option('order_create_settings') == 'anyone'): ?>
                                    <input type="button" name="next" class="next action-button" value="<?php echo e(__('Next')); ?>" />
                                <?php else: ?>
                                    <?php if(Auth::guard('web')->check()): ?>
                                        <input type="button" name="next" class="next action-button" value="<?php echo e(__('Next')); ?>" />
                                    <?php else: ?>
                                        <div class="btn-wrapper">
                                            <a class="action-button text-white" data-toggle="modal" data-target="#exampleModal"><?php echo e(__('Sign In')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                <?php endif; ?>
                                
                            </fieldset>
                            <?php endif; ?>
                            <!-- Service -->
                            <fieldset class="padding-top-20 padding-bottom-100 confirm-service">
                                <div class="row">
                                    <div class="col-lg-8 margin-top-30">
                                        <div class="service-overview-wrapper padding-bottom-30">
                                            <div class="overview-author overview-author-border">
                                                <div class="overview-flex-author">
                                                    <div class="overview-thumb">
                                                        <?php echo render_image_markup_by_attachment_id($service_details_for_book->image); ?>

                                                    </div>
                                                    <div class="overview-contents">
                                                        <h4 class="overview-title"> <a
                                                                href="<?php echo e(route('service.list.details',$service_details_for_book->slug)); ?>"><?php echo e($service_details_for_book->title); ?></a>
                                                        </h4>
                                                        <?php if($service_details_for_book->reviews->count() >= 1): ?>
                                                        <span class="overview-review"> <?php echo e(__('Rating:')); ?> <?php echo e(round(optional($service_details_for_book->reviews)->avg('rating'),1)); ?>

                                                            <b>(<?php echo e(optional($service_details_for_book->reviews)->count()); ?>)</b> 
                                                        </span>
                                                        <?php endif; ?>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="overview-single padding-top-40">
                                                <h4 class="title"><?php echo e(get_static_option('service_main_attribute_title') ?? __('What\'s Included')); ?></h4>
                                                <div class="include-contents margin-top-30">
                                                    <?php $__currentLoopData = $service_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="single-include include_service_id_<?php echo e($include->id); ?>">
                                                            <ul class="include-list">
                                                                <li class="lists">
                                                                    <div class="list-single">
                                                                        <span class="rooms"><?php echo e($include->include_service_title); ?></span>
                                                                    </div>

                                                                    <?php if($service_details_for_book->is_service_online !=1): ?>
                                                                    <div class="list-single">
                                                                        <span class="values"
                                                                            id="include_service_unit_price_<?php echo e($include->id); ?>">
                                                                            <?php echo e(amount_with_currency_symbol($include->include_service_price)); ?>

                                                                        </span>
                                                                        <span class="value-input">
                                                                            <input type="number" min="1" 
                                                                                class="inc_dec_include_service"
                                                                                data-id="<?php echo e($include->id); ?>"
                                                                                data-price="<?php echo e($include->include_service_price); ?>"
                                                                                value="<?php echo e($include->include_service_quantity); ?>">
                                                                        </span>
                                                                    </div>
                                                                    <?php endif; ?>
                                                                </li>
                                                                <?php if($service_details_for_book->is_service_online !=1): ?>
                                                                <li class="lists remove-service-list"
                                                                    data-id="<?php echo e($include->id); ?>">
                                                                     <a class="remove"
                                                                        href="javascript:void(0)"><?php echo e(__('Remove')); ?>

                                                                    </a> 
                                                                </li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <div class="overview-single padding-top-60 extra-services">
                                                <h4 class="title"><?php echo e(get_static_option('service_additional_attribute_title') ?? __('Upgrade your order with extras')); ?>

                                                </h4>
                                                <div class="row">
                                                    <?php $__currentLoopData = $service_additionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-lg-6 margin-top-30">
                                                            <div class="overview-extra">
                                                                <div class="checkbox-inlines">
                                                                    <input class="check-input" type="checkbox"
                                                                        id="<?php echo e($additional->id); ?>" value="<?php echo e($additional->id); ?>">
                                                                    <label class="checkbox-label" for="<?php echo e($additional->id); ?>">
                                                                        <?php echo e($additional->additional_service_title); ?>

                                                                    </label>
                                                                </div>
                                                                <div class="overview-extra-flex-content">
                                                                    <div class="list-single">
                                                                        <span class="values" price="<?php echo e($additional->id); ?>">
                                                                            <?php echo e($additional->additional_service_price); ?>

                                                                        </span>
                                                                        <span class="value-input"> 
                                                                            <input type="number" min="1" class="inc_dec_additional_service" 
                                                                            id="additional_service_quantity_<?php echo e($additional->id); ?>"
                                                                            data-id="<?php echo e($additional->id); ?>"
                                                                            data-price="<?php echo e($additional->additional_service_price); ?>" 
                                                                            value="<?php echo e($additional->additional_service_quantity); ?>">
                                                                        </span>
                                                                    </div>
                                                                    <span class="price-value">
                                                                        <?php echo e(amount_with_currency_symbol($additional->additional_service_price)); ?>

                                                                    </span>
                                                                    <div class="overview-extra-thumb">
                                                                        <?php echo render_image_markup_by_attachment_id($additional->additional_service_image); ?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                            <div class="overview-single padding-top-60">
                                                <h4 class="title"><?php echo e(get_static_option('service_benifits_title') ?? __('Benifits of the Package:')); ?></h4>
                                                <ul class="overview-benefits margin-top-30">
                                                    <?php $__currentLoopData = $service_benifits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $benifit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li class="list"><?php echo e($benifit->benifits); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                            <?php if($service_details_for_book->is_service_online == 1): ?>
                                                <?php if($service_faqs): ?>


                                                    <div class="faq-area" data-padding-top="70" data-padding-bottom="100">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-lg-12 margin-top-30">
                                                                    <div class="faq-contents">

                                                                        <?php $__currentLoopData = $service_faqs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faq): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <div class="faq-item">
                                                                            <div class="faq-title">
                                                                                <?php echo e($faq->title); ?>

                                                                            </div>
                                                                            <div class="faq-panel">
                                                                                <p class="faq-para"><?php echo e($faq->description); ?></p>
                                                                            </div>
                                                                        </div>

                                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>















                                              <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 margin-top-30">
                                        <div class="service-overview-summery">
                                            <h4 class="title"> <?php echo e(get_static_option('service_booking_title') ?? __('Booking Summery')); ?> </h4>
                                            <div class="overview-summery-contents">
                                                <div class="single-summery">
                                                    <span class="summery-title">
                                                        <?php if($service_details_for_book->is_service_online != 1): ?>
                                                        <?php echo e(get_static_option('service_appoinment_package_title') ?? __('Appointment Package Service')); ?>

                                                         <?php else: ?>
                                                           <ul class='onlilne-special-list '>
                                                                <li><i class="las la-clock"></i> <?php echo e(__('Delivery Days').': '.$service_details_for_book->delivery_days); ?></li>
                                                                <li class="margin-bottom-30"><i class="las la-redo-alt"></i> <?php echo e(__('Revisions').': '.$service_details_for_book->revision); ?></li>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </span>
                                                    <div class="summery-list-all">
                                                        <?php if($service_details_for_book->is_service_online == 1): ?>
                                                        <span class="summery-title"><?php echo e(('Included Service')); ?></span>
                                                        <?php endif; ?>
                                                        <ul class="summery-list">
                                                            <?php $__currentLoopData = $service_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="list include_service_id_<?php echo e($include->id); ?>">
                                                                    <span
                                                                        class="rooms"><?php echo e($include->include_service_title); ?>

                                                                    </span>
                                                                    <?php if($service_details_for_book->is_service_online !=1): ?>
                                                                    <span class="value-count service_quantity_count"
                                                                        id="include_service_quantity_2_<?php echo e($include->id); ?>"><?php echo e($include->include_service_quantity); ?>

                                                                    </span>
                                                                    <span
                                                                        class="room-count"><?php echo e(amount_with_currency_symbol($include->include_service_price)); ?>

                                                                    </span>
                                                                    <?php endif; ?>
                                                                    
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                        <ul class="summery-result-list">
                                                            <li class="result-list">
                                                                <span class="rooms">
                                                                    <?php echo e(get_static_option('service_package_fee_title') ?? __('Package Fee')); ?></span>
                                                                <span class="value-count package-fee"><?php echo e(amount_with_currency_symbol($service_details_for_book->price)); ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-summery">
                                                    <span class="summery-title"><?php echo e(get_static_option('service_extra_title') ?? __('Extra Service')); ?></span>
                                                    <div class="summery-list-all">
                                                        <ul class="summery-list extra-service-list">
                                                            
                                                        </ul>
                                                        <ul class="summery-result-list result-border padding-bottom-20">
                                                            <li class="result-list">
                                                                <span class="rooms"><?php echo e(get_static_option('service_extra_title') ?? __('Extra Service')); ?></span>
                                                                <span class="value-count extra-service-fee"><?php echo e(amount_with_currency_symbol(0)); ?></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="summery-result-list result-border padding-bottom-20">
                                                            <li class="result-list">
                                                                <span class="rooms"><?php echo e(get_static_option('service_subtotal_title') ?? __('Subtotal')); ?></span>
                                                                <span class="value-count service-subtotal"><?php echo e(amount_with_currency_symbol(0)); ?></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="summery-result-list result-border padding-bottom-20">
                                                            <li class="result-list">
                                                                <span class="rooms"> <?php echo e(__('Tax(+)')); ?> <span class="service-tax"><?php echo e($service_details_for_book->tax); ?></span> %</span>
                                                                <span class="value-count tax-amount"><?php echo e(amount_with_currency_symbol(0)); ?></span>
                                                            </li>
                                                        </ul>
                                                        <ul class="summery-result-list">
                                                            <li class="result-list">
                                                                <span class="rooms"> <strong><?php echo e(get_static_option('service_total_amount_title') ?? __('Total')); ?></strong></span>
                                                                <span class="value-count total-amount"><?php echo e(amount_with_currency_symbol(0)); ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <?php if($service_details_for_book->is_service_online == 1): ?>
                                    <?php if(Auth::guard('web')->check()): ?>
                                      <input type="button" name="next" class="next action-button" value="<?php echo e(__('Next')); ?>" /> <input
                                    type="button" name="previous" class="previous action-button-previous"
                                    value="<?php echo e(__('Previous')); ?>" />
                                    <?php else: ?>
                                        <div class="btn-wrapper">
                                            <a class="action-button text-white" data-toggle="modal" data-target="#exampleModal"><?php echo e(__('Sign In')); ?></a>
                                        </div>
                                    <?php endif; ?>
                                    <?php else: ?>
                                      <input type="button" name="next" class="next action-button" value="<?php echo e(__('Next')); ?>" /> <input
                                    type="button" name="previous" class="previous action-button-previous"
                                    value="<?php echo e(__('Previous')); ?>" />
                                <?php endif; ?>
                              
                                    
                                    
                            </fieldset>
                            <!-- Date & Time -->
                            <?php if($service_details_for_book->is_service_online !=1): ?>
                            <fieldset class="padding-top-20 padding-bottom-100 confirm-date-time">
                                <div class="date-overview">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="single-date-overview margin-top-30">
                                                <h4 class="date-time-title"> <?php echo e(get_static_option('service_available_date_title') ?? __('Available Date')); ?> </h4>
                                                <div class="calendar-area margin-top-30">
                                                    <input type="date" name="service_available_dates" id="service_available_dates" class="d-none">
                                                    <ul class="date-time-list margin-top-20 show-date">
                                                        <span class="seller-id-for-schedule" style="display:none"><?php echo e($service_details_for_book->seller_id); ?></span>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="single-date-overview margin-top-30">
                                                <h4 class="date-time-title"> <?php echo e(get_static_option('service_available_schudule_title') ?? __('Available Schedule')); ?> </h4>
                                                <ul class="date-time-list margin-top-20 show-schedule">
                                                    
                                                </ul>
                                                <div class="schedule_loader"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="<?php echo e(__('Next')); ?>" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="<?php echo e(__('Previous')); ?>" />
                            </fieldset>
                            <?php endif; ?>
                            <!-- Information -->
                            <fieldset class="padding-top-20 padding-bottom-100 confirm-information">
                                <div class="Info-overview padding-top-30">
                                    <h3 class="date-time-title"><?php echo e(get_static_option('service_booking_information_title') ?? __(' Booking Information')); ?> </h3>
                                    <div class="single-info-overview margin-top-30">
                                        <div class="single-info-input">
                                            <label class="info-title"> <?php echo e(__('Your Name*')); ?> </label>
                                            <input class="form--control" type="text" name="name" id="name" placeholder="<?php echo e(__('Type Your Name')); ?>"
                                                <?php if(Auth::guard('web')->check()): ?> value="<?php echo e(Auth::user()->name); ?>" <?php else: ?> value="" <?php endif; ?>>
                                        </div>
                                        <div class="single-info-input">
                                            <label class="info-title"> <?php echo e(__('Your Email*')); ?> </label>
                                            <input class="form--control" type="email" name="email" id="email" placeholder="<?php echo e(__('Type Your Email')); ?>"
                                                <?php if(Auth::guard('web')->check()): ?> value="<?php echo e(Auth::user()->email); ?>" <?php else: ?> value="" <?php endif; ?>>
                                        </div>
                                    </div>
                                    <div class="single-info-overview margin-top-30">
                                        <div class="single-info-input">
                                            <label class="info-title"> <?php echo e(__('Phone Number*')); ?> </label>
                                            <input class="form--control" type="text" name="phone" id="phone" placeholder="<?php echo e(__('Type Your Number')); ?>" 
                                            <?php if(Auth::guard('web')->check()): ?> value="<?php echo e(Auth::user()->phone); ?>" <?php else: ?> value="" <?php endif; ?>>
                                        </div>
                                        <div class="single-info-input">
                                            <label class="info-title"> <?php echo e(__('Post Code*')); ?> </label>
                                            <input class="form--control" type="text" name="post_code" id="post_code" placeholder="<?php echo e(__('Type Post Code')); ?>"
                                            <?php if(Auth::guard('web')->check()): ?> value="<?php echo e(Auth::user()->post_code); ?>" <?php else: ?> value="" <?php endif; ?>>
                                        </div>
                                    </div>
                                    <div class="single-info-overview margin-top-30">
                                        <div class="single-info-input">
                                            <label class="info-title"> <?php echo e(__('Your Address*')); ?> </label>
                                            <input class="form--control" type="text" name="address" id="address" placeholder="<?php echo e(__('Type Your Address')); ?>"
                                            <?php if(Auth::guard('web')->check()): ?> value="<?php echo e(Auth::user()->address); ?>" <?php else: ?> value="" <?php endif; ?>>
                                        </div>
                                    </div>
                                    <div class="single-info-overview margin-top-30">
                                        <div class="single-info-input">
                                            <label class="info-title"><?php echo e(__('Order Note*')); ?> </label>
                                            <textarea class="form--control textarea--form" name="order_note" id="order_note" placeholder="<?php echo e(__('Type Order Note')); ?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" name="next" class="next action-button" value="<?php echo e(__('Next')); ?>" /> 
                                <input type="button" name="previous" class="previous action-button-previous" value="<?php echo e(__('Previous')); ?>" />
                            </fieldset>
                            <!-- Confirmation -->
                            <fieldset class="padding-top-20 padding-bottom-100">
                                <input type="hidden" id="service_id" value="<?php echo e($service_details_for_book->id); ?>">
                                <input type="hidden" id="seller_id" value="<?php echo e($service_details_for_book->seller_id); ?>">
                                <div class="confirm-overview padding-top-30">
                                    <div class="overview-author overview-author-border">
                                        <div class="overview-flex-author">
                                            <div class="overview-thumb confirm-thumb">
                                                <?php echo render_image_markup_by_attachment_id($service_details_for_book->image,'','thumb'); ?>

                                            </div>
                                            <div class="overview-contents">
                                                <h2 class="overview-title confirm-title"> <a
                                                        href="<?php echo e(route('service.list.details',$service_details_for_book->slug)); ?>"><?php echo e($service_details_for_book->title); ?></a> </h2>
                                                    <?php if($service_details_for_book->reviews->count() >= 1): ?>
                                                    <span class="overview-review"> <?php echo e(__('Rating:')); ?> <?php echo e(round(optional($service_details_for_book->reviews)->avg('rating'),1)); ?>

                                                        <b>(<?php echo e(optional($service_details_for_book->reviews)->count()); ?>)</b> 
                                                    </span>
                                                    <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="confirm-overview-left margin-top-30">
                                            <?php if($service_details_for_book->is_service_online != 1): ?>
                                            <div class="single-confirm-overview">
                                                <div class="single-confirm margin-top-30">
                                                    <h3 class="titles"><?php echo e(__('Your Location ')); ?></h3>
                                                    <?php if(Auth::guard('web')->check()): ?>
                                                      <span class="location details get_city_name"><?php echo e(optional(Auth::guard('web')->user()->city)->service_city); ?></span>
                                                    <?php else: ?> 
                                                      <span class="location details get_city_name"></span>  
                                                    <?php endif; ?>
                                                    
                                                    <?php if(Auth::guard('web')->check()): ?>
                                                      <span class="location details get_area_name"><?php echo e(optional(Auth::guard('web')->user()->area)->service_area); ?></span>
                                                    <?php else: ?> 
                                                      <span class="location details get_area_name"></span>  
                                                    <?php endif; ?>
                                                    
                                                    <?php if(Auth::guard('web')->check()): ?>
                                                      <span class="location details get_country_name"><?php echo e(optional(Auth::guard('web')->user()->country)->country); ?></span>
                                                    <?php else: ?> 
                                                      <span class="location details get_country_name"></span>  
                                                    <?php endif; ?>
                                                </div>
                                                <div class="single-confirm margin-top-30">
                                                    <h3 class="titles"><?php echo e(__('Order Location')); ?></h3>
                                                    <span class="details country_name_text"></span>
                                                    <span class="details city_name_text"></span>
                                                    <span class="details area_name_text"></span>
                                                </div>
                                            </div>
                                            <div class="single-confirm margin-top-30">
                                                <h3 class="titles"><?php echo e(__('Date & Time')); ?></h3>
                                                <span class="details available_date"></span>
                                                <span class="details available_schedule"></span>
                                            </div>
                                            <?php endif; ?>

                                            <div class="booking-info padding-top-60">
                                                <h2 class="title"><?php echo e(__('Booking Information')); ?></h2>
                                                <div class="booking-details">
                                                    <ul class="booking-list">
                                                        <li class="lists">
                                                            <span class="list-span"> <?php echo e(__('Name:')); ?> </span>
                                                            <span class="list-strong get_name"></span>
                                                        </li>
                                                        <li class="lists">
                                                            <span class="list-span"><?php echo e(__('Email:')); ?></span>
                                                            <span class="list-strong get_email"></span>
                                                        </li>
                                                        <li class="lists">
                                                            <span class="list-span"><?php echo e(__('Phone: ')); ?></span>
                                                            <span class="list-strong get_phone"></span>
                                                        </li>
                                                        <li class="lists">
                                                            <span class="list-span"><?php echo e(__('Post Code:')); ?></span>
                                                            <span class="list-strong get_post_code"></span>
                                                        </li>
                                                        <li class="lists">
                                                            <span class="list-span"><?php echo e(__('Address:')); ?></span>
                                                            <span class="list-strong get_address"></span>
                                                        </li>
                                                        <li class="lists">
                                                            <span class="list-span"><?php echo e(__('Order Note:')); ?></span>
                                                            <span class="list-strong get_order_note"></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 margin-top-60">
                                        <div class="service-overview-summery">
                                            <h4 class="title"><?php echo e(get_static_option('service_booking_title') ?? __('Booking Summery')); ?></h4>
                                            <div class="overview-summery-contents">
                                                <div class="single-summery">
                                                    <?php if($service_details_for_book->is_service_online != 1): ?>
                                                        <?php echo e(get_static_option('service_appoinment_package_title') ?? __('Appointment Package Service')); ?>

                                                    <?php else: ?>
                                                    <ul class='onlilne-special-list '>
                                                        <li><i class="las la-clock"></i> <?php echo e(__('Delivery Days').': '.$service_details_for_book->delivery_days); ?></li>
                                                        <li class="margin-bottom-30"><i class="las la-redo-alt"></i> <?php echo e(__('Revisions').': '.$service_details_for_book->revision); ?></li>
                                                    </ul>
                                                    <?php endif; ?>
                                                    <div class="summery-list-all">
                                                        <?php if($service_details_for_book->is_service_online == 1): ?>
                                                            <span class="summery-title"><?php echo e(__('Included Service')); ?></span>
                                                        <?php endif; ?>
                                                        <ul class="summery-list ">
                                                            <?php $__currentLoopData = $service_includes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $include): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <li class="list include_service_id_<?php echo e($include->id); ?> include_service_list">
                                                                    <input type="hidden" class="includeServiceID" value="<?php echo e($include->id); ?>">
                                                                    <span class="rooms"><?php echo e($include->include_service_title); ?></span>
                                                                    <?php if($service_details_for_book->is_service_online !=1): ?>
                                                                    <span class="value-count include_service_quantity service_quantity_count" id="include_service_quantity_3_<?php echo e($include->id); ?>"><?php echo e($include->include_service_quantity); ?></span>
                                                                    <span class="room-count"><?php echo e(amount_with_currency_symbol($include->include_service_price)); ?></span>
                                                                    <?php endif; ?>
                                                                </li>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </ul>
                                                        <ul class="summery-result-list">
                                                            <li class="result-list">
                                                                <span class="rooms">
                                                                    <?php echo e(get_static_option('service_package_fee_title') ?? __('Package Fee')); ?></span>
                                                                <span class="value-count package-fee"><?php echo e(amount_with_currency_symbol($service_details_for_book->price)); ?></span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="single-summery">
                                                    <span class="summery-title"><?php echo e(get_static_option('service_extra_title') ?? __('Extra Service')); ?></span>
                                                    <div class="summery-list-all">
                                                        <ul class="summery-list extra-service-list-2">
                                                            
                                                        </ul>
                                                        <ul class="summery-result-list result-border padding-bottom-20">
                                                            <li class="result-list">
                                                                <span class="rooms"><?php echo e(get_static_option('service_extra_title') ?? __('Extra Service')); ?></span>
                                                                <span class="value-count extra-service-fee">$00</span>
                                                            </li>
                                                        </ul>
                                                        <ul class="summery-result-list result-border padding-bottom-20">
                                                            <li class="result-list">
                                                                <span class="rooms"><?php echo e(get_static_option('service_subtotal_title') ?? __('Subtotal')); ?></span>
                                                                <span class="value-count service-subtotal">$00</span>
                                                            </li>
                                                        </ul>
                                                        <ul class="summery-result-list result-border padding-bottom-20">
                                                            <li class="result-list">
                                                                <span class="rooms"> <?php echo e(__('Tax(+)')); ?> <span><?php echo e($service_details_for_book->tax); ?></span> %</span>
                                                                <span class="value-count tax-amount">$00</span>
                                                            </li>
                                                        </ul>
                                                        <ul class="summery-result-list">
                                                            <li class="result-list">
                                                                <span class="rooms"> <strong><?php echo e(get_static_option('service_total_amount_title') ?? __('Total')); ?></strong></span>
                                                                <span class="value-count total-amount total_amount_for_coupon" id="total_amount_for_coupon">$00</span>
                                                            </li>
                                                        </ul>
                                                        <ul class="summery-result-list">
                                                            <li class="result-list coupon_amount_for_apply_code"></li>
                                                        </ul>
                                                        <ul class="summery-result-list coupon_input_field">
                                                            <li class="result-list">
                                                                <input type="text" name="coupon_code" class="form-control coupon_code" placeholder="<?php echo e(__('Enter Coupon Code')); ?>">
                                                                <button class="apply-coupon"><?php echo e(__('Apply')); ?></button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                
                                                
                                                <div class="confirm-bottom-content">
                                                    <div class="confirm-payment payment-border">
                                                        <div class="single-checkbox">
                                                            <div class="checkbox-inlines">
                                                                <label class="checkbox-label" for="check2">
                                                                    <?php if($service_details_for_book->is_service_online != 1): ?>
                                                                    <?php echo render_payment_gateway_for_form(); ?>

                                                                        <?php else: ?>
                                                                        <?php echo render_payment_gateway_for_form2(); ?>

                                                                    <?php endif; ?>
                                                                </label>     
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="order cart-total">
                                                            <div id="payment_method_input" class="manual_payment_transaction_field" style="display:none;">
                                                                <?php if(!empty(get_static_option('manual_payment_gateway'))): ?>
                                                                    <div class="form-group"> 
                                                                        <div class="label mt-3 mb-2"><?php echo e(get_static_option('site_manual_payment_name')); ?> <?php echo e(__('Receipt')); ?></div>
                                                                        <input type="file" name="manual_payment_image" class="form-control" style="line-height: 1.15">
                                                                    </div>
                                                                    <div class="manual_description">
                                                                        <?php echo get_static_option('site_manual_payment_description'); ?>

                                                                    </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div> 

                                                    <div class="checkbox-inlines bottom-checkbox terms-and-conditions">
                                                        <input class="check-input" type="checkbox" id="check3">
                                                        <label class="checkbox-label" for="check3"><?php echo e(__('I agree with')); ?>

                                                             <a href="<?php echo e(get_static_option('terms_and_conditions_link') ?? '#'); ?>" target="_blank"><?php echo e(__('terms and conditions *')); ?></a></label>
                                                    </div>
                                                </div>
                                                
                                               
                                                <input type="hidden" name="service_id" value="<?php echo e($service_details_for_book->id); ?>">
                                                <input type="hidden" name="seller_id" value="<?php echo e(optional($service_details_for_book->seller)->id); ?>">
                                                <?php if($service_details_for_book->is_service_online == 1): ?>
                                                <input type="hidden" name="is_service_online_" value="<?php echo e($service_details_for_book->is_service_online); ?>">
                                                <input type="hidden" name="online_service_package_fee" value="<?php echo e($service_details_for_book->price); ?>">
                                                <?php endif; ?>
                                                <input type="hidden" name="date">
                                                <input type="hidden" name="schedule">
                                                <input type="hidden" id="payment_form_services" name="services[]">
                                                <input type="hidden" id="payment_form_additionals" name="additionals[]">
                                                <div class="btn-wrapper">
                                                    <?php if($service_details_for_book->is_service_online == 1): ?>
                                                        <?php if(Auth::guard('web')->check()): ?>
                                                        <button type="submit" class="cmn-btn btn-appoinment btn-bg-1"><?php echo e(get_static_option('service_order_confirm_title') ?? __('Pay & Confirm Your Order')); ?> </button>
                                                        <?php else: ?>
                                                            <a class="cmn-btn btn-appoinment btn-bg-1" data-toggle="modal" data-target="#exampleModal"><?php echo e(__('Sign In')); ?></a>
                                                            <small class="text-danger"><?php echo e(__('Must login to create order for online services')); ?></small>
                                                        <?php endif; ?>
                                                        <?php else: ?>
                                                        <button type="submit" class="cmn-btn btn-appoinment btn-bg-1"><?php echo e(get_static_option('service_order_confirm_title') ?? __('Pay & Confirm Your Order')); ?> </button>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="signup-area padding-top-70 padding-bottom-100">
                        <div class="container">
                            <div class="signup-wrapper">
                                <div class="signup-contents">
                                    <h3 class="signup-title"> <?php echo e(get_static_option('login_form_title') ?? __('Sign In')); ?></h3>

                                    <?php if(Session::has('msg')): ?>
                                        <p class="alert alert-<?php echo e(Session::get('type') ?? 'success'); ?>"><?php echo e(Session::get('msg')); ?></p>
                                    <?php endif; ?>
                                    <div class="error-message"></div>

                                    <form class="signup-forms" action="<?php echo e(route('user.login.online')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <div class="single-signup margin-top-30">
                                            <label class="signup-label"> <?php echo e('User Name*'); ?> </label>
                                            <input class="form--control" type="text" name="username" id="username" placeholder="<?php echo e(__('Username')); ?>">
                                        </div>
                                        <div class="single-signup margin-top-30">
                                            <label class="signup-label"> <?php echo e(__('Password*')); ?> </label>
                                            <input class="form--control" type="password" name="password" id="password" placeholder="<?php echo e(__('Password')); ?>">
                                        </div>
                                        <div class="signup-checkbox">
                                            <div class="checkbox-inlines">
                                                <input class="check-input" name="remember" id="remember" type="checkbox" id="check8">
                                                <label class="checkbox-label" for="remember"> <?php echo e(__('Remember me')); ?></label>
                                            </div>
                                            <div class="forgot-btn">
                                                <a href="<?php echo e(route('user.forget.password')); ?>" class="forgot-pass"> <?php echo e(__('Forgot Password')); ?></a>
                                            </div>
                                        </div>
                                        <button id="signin_form" type="submit"><?php echo e(__('Login Now')); ?></button>
                                        <span class="bottom-register"> <?php echo e(__('Do not have Account?')); ?> <a class="resgister-link" href="<?php echo e(route('user.register')); ?>"> <?php echo e(__('Register')); ?> </a> </span>
                                    </form>

                                    <div class="social-login-wrapper">
                                        <?php if(get_static_option('enable_google_login') || get_static_option('enable_facebook_login')): ?>
                                            <div class="bar-wrap">
                                                <span class="bar"></span>
                                                <p class="or"><?php echo e(__('or')); ?></p>
                                                <span class="bar"></span>
                                            </div>
                                        <?php endif; ?>

                                        <div class="sin-in-with">
                                            <?php if(get_static_option('enable_google_login')): ?>
                                                <a href="<?php echo e(route('login.google.redirect')); ?>" class="sign-in-btn">
                                                    <img src="<?php echo e(asset('assets/frontend/img/static/google.png')); ?>" alt="icon">
                                                    <?php echo e(__('Sign in with Google')); ?>

                                                </a>
                                            <?php endif; ?>
                                            <?php if(get_static_option('enable_facebook_login')): ?>
                                                <a href="<?php echo e(route('login.facebook.redirect')); ?>" class="sign-in-btn">
                                                    <img src="<?php echo e(asset('assets/frontend/img/static/facebook.png')); ?>" alt="icon">
                                                    <?php echo e(__('Sign in with Facebook')); ?>

                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('Close')); ?></button>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.pages.services.service-book-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('frontend.frontend-page-master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bytesed/public_html/laravel/qixer/beta/@core/resources/views/frontend/pages/services/service-book.blade.php ENDPATH**/ ?>