@extends('frontend.user.seller.seller-master')
@section('site-title')
    {{ __('Orders') }}
@endsection
@section('style')
    <style>
        .table-td-padding {
            border-collapse: separate;
            border-spacing: 10px 20px;
        }
    </style>
@endsection
@section('content')
   
    <x-frontend.seller-buyer-preloader/>

    <!-- Dashboard area Starts -->
    <div class="body-overlay"></div>
    <div class="dashboard-area dashboard-padding">
        <div class="container-fluid">
            <div class="dashboard-contents-wrapper">
                <div class="dashboard-icon">
                    <div class="sidebar-icon">
                        <i class="las la-bars"></i>
                    </div>
                </div>
                @include('frontend.user.seller.partials.sidebar')
                @if($orders->count() >= 1)
                <div class="dashboard-right">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="dashboard-settings margin-top-40">
                                <h2 class="dashboards-title">{{ __('Order Status') }}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 margin-top-40">
                            <div class="dashboard-status-list">
                                <ul class="tabs status-order-list margin-bottom-10">

                                    @include('frontend.user.seller.partials.tab-list')

                                </ul>
                            </div>
                            <div>
                                <div class="table-responsive table-responsive--md">
                                    <table id="all_order_table" class="custom--table table-td-padding">
                                        <thead>
                                            <tr>
                                                <th> {{ __('Order ID') }} </th>
                                                <th> {{ __('Customer Name') }} </th>
                                                <th> {{ __('Service Date') }} </th>
                                                <th> {{ __('Service Time') }} </th>
                                                <th> {{ __('Order Pricing') }} </th>
                                                <th> {{ __('Payment Status') }} </th>
                                                <th> {{ __('Order Status') }} </th>
                                                <th> {{ __('Order Type') }} </th>
                                                <th> {{ __('Order Complete Request') }} </th>
                                                <th> {{ __('Action') }} </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td data-label="Order ID"> {{ $order->id }} </td>
                                                    <td data-label="Customer Name"> {{ $order->name }} </td>
                                                    <td data-label="Service Date"> {{ Carbon\Carbon::parse($order->date)->format('d/m/y') }} </td>
                                                    <td data-label="Service Time"> {{ $order->schedule }}</td>
                                                    <td data-label="Order Pricing"> {{ float_amount_with_currency_symbol($order->total) }}</td>
                                                    <td data-label="Payment Status"> 
                                                        @if ($order->payment_status == 'pending')<span class="text-danger">{{ __('Pending') }}</span>@endif
                                                        @if ($order->payment_status == 'complete')<span class="text-success">{{ __('Complete') }}</span>@endif
                                                    </td>

                                                    @if ($order->status == 0) <td data-label="Order Status" class="pending"><span>{{ __('Pending') }}</span></td>@endif
                                                    @if ($order->status == 1) <td data-label="Order Status" class="order-active"><span>{{ __('Active') }}</span></td>@endif
                                                    @if ($order->status == 2) <td data-label="Order Status" class="completed"><span>{{ __('Completed') }}</span></td>@endif
                                                    @if ($order->status == 3) <td data-label="Order Status" class="order-deliver"><span>{{ __('Delivered') }}</span></td>@endif
                                                    @if ($order->status == 4) <td data-label="Order Status" class="canceled"><span>{{ __('Cancelled') }}</span></td>@endif

                                                    <td data-label="Order Pricing">
                                                        @if($order->is_order_online==1)
                                                        <span class="btn btn-success">{{ __('Online') }}</span>
                                                        @else
                                                        <span class="btn btn-info">{{ __('OffLine') }}</span>
                                                        @endif
                                                    </td>

                                                    @if ($order->order_complete_request == 0) <td data-label="Order Status" class="pending"><span>{{ __('No Request Create') }}</span></td>@endif
                                                        @if ($order->order_complete_request == 1) 
                                                        <td data-label="Order Status" class="pending">
                                                            <span>{{ __('Request Pending') }}</span>
                                                        </td>
                                                        @endif
                                                        @if ($order->order_complete_request == 2) <td data-label="Order Status" class="completed"><span>{{ __('Completed') }}</span></td>@endif

                                                    <td data-label="Action">
                                                        <a href="{{ route('seller.order.details', $order->id) }}">
                                                            <span class="icon eye-icon" data-toggle="tooltip" data-placement="top" title="{{ __('View Details') }}">
                                                                <i class="las la-eye"></i>
                                                            </span>
                                                        </a>
                                                       
                                                        @if($order->is_order_online != 1)
                                                             <a href="{{ route('seller.support.ticket.new', $order->id) }}">
                                                            <span class="icon eye-icon" data-toggle="tooltip" data-placement="top" title="{{ __('Create Ticket') }}">
                                                             <i class="las la-ticket-alt"></i>
                                                            </span>
                                                            </a>
                                                        @else 
                                                             <a href="{{ route('seller.support.ticket.view',optional($order->online_order_ticket)->id) }}">
                                                                <span class="icon eye-icon" data-toggle="tooltip" data-placement="top" title="{{ __('View Ticket') }}">
                                                                    <i class="las la-eye-slash"></i>
                                                                </span>
                                                            </a>
                                                        @endif
                                                        <a href="#0" class="edit_status_modal" 
                                                            data-toggle="modal"
                                                            data-target="#editStatusModal" 
                                                            data-id="{{ $order->id }}"
                                                            data-status="{{ $order->status }}"
                                                            >
                                                            <span class="dash-icon color-1" data-toggle="tooltip" data-placement="top" title="{{ __('Change Status') }}"> 
                                                                <i class="las la-edit"></i>
                                                            </span>
                                                        </a>
                                                        @if($order->payment_gateway === 'cash_on_delivery' && $order->payment_status === 'pending')
                                                                <a href="javascript:void(0)"
                                                                   class="edit_payment_status_modal"
                                                                   data-toggle="modal"
                                                                   data-target="#editPaymentStatusModal"
                                                                   data-id="{{ $order->id }}">
                                                                    <span class="dash-icon color-1" data-toggle="tooltip" data-placement="top" title="{{ __('Change Payment Status') }}">
                                                                        <i class="las la-money-check-alt"></i>
                                                                    </span>
                                                                </a>
                                                        @endif
                                                        <a href="{{ route('seller.order.invoice.details',$order->id) }}">
                                                            <span class="icon print-icon" data-toggle="tooltip" data-placement="top" title="{{ __('Print Pdf') }}"> 
                                                                <i class="las la-print"></i>
                                                            </span>
                                                        </a>
                                                        @if($order->status != 2)
                                                            <a href="#"
                                                               data-toggle="modal"
                                                               data-target="#reportModal"
                                                               data-buyer_id="{{ $order->buyer_id }}"
                                                               data-service_id="{{ $order->service_id }}"
                                                               data-order_id="{{  $order->id }}"
                                                               class="report_add_modal">
                                                                <span class="icon print-icon" data-toggle="tooltip" data-placement="top" title="{{ __('Report') }}">
                                                                    <i class="las la-file"></i>
                                                                </span>
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <div class="blog-pagination margin-top-55">
                                    <div class="custom-pagination mt-4 mt-lg-5">
                                        {!! $orders->links() !!}
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                @else 
                <h2 class="no_data_found">{{ __('No Orders Found') }}</h2>
                @endif
            </div>
        </div>
    </div>

    <!--Status Modal -->
    <div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
        aria-hidden="true">
        <form action="{{ route('seller.order.status') }}" method="post">
            <input type="hidden" id="order_id" name="order_id">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModal">{{ __('Change Status') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul class="mb-3 text-danger">
                            <li><strong>{{ __('Status Meaning:') }}</strong></li>
                            <li>{{ __('Pending: Did not start the job yet.') }}</li>
                            <li>{{ __('Active: Job already started.') }}</li>
                            <li>{{ __('Delivered: Order Deliverd For Checking.') }}</li>
                            <li>{{ __('Completed: Order is completed and closed.') }}</li>
                        </ul>

                        <div class="form-group">
                            <label for="up_day_id">{{ __('Select Status') }}</label>
                            <select name="status" id="status" class="form-control nice-select">
                                <option value="">{{ __('Select Status') }}</option>
                                <option value="0">{{ __('Pending') }}</option>
                                <option value="1">{{ __('Active') }}</option>
                                <option value="2">{{ __('Completed') }}</option>
                                <option value="3">{{ __('Delivered') }}</option>
                                <option value="4">{{ __('Cancelled') }}</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Save changes') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{--    edit payment status--}}
    <div class="modal fade" id="editPaymentStatusModal" tabindex="-1" role="dialog" aria-labelledby="editModal"
         aria-hidden="true">
        <form action="{{ route('seller.order.payment.status') }}" method="post">
            <input type="hidden"  name="order_id">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModal">{{ __('Change Payment Status') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="up_day_id">{{ __('Select Status') }}</label>
                            <select name="status" id="status" class="form-control nice-select">
                                <option value="">{{ __('Select Status') }}</option>
                                <option value="complete">{{ __('Completed') }}</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Save changes') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    {{--    Report modal --}}
    <div class="modal fade" id="reportModal" tabindex="-1" role="dialog" aria-labelledby="editReportModal"
         aria-hidden="true">
        <form action="{{ route('seller.order.report') }}" method="post">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModal">{{ __('Report') }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="comments-flex-item">
                            <input type="hidden" id="buyer_id" name="buyer_id" class="form-control form-control-sm">
                            <input type="hidden" id="service_id" name="service_id" class="form-control form-control-sm">
                            <input type="hidden" id="order_id" name="order_id" class="form-control form-control-sm">
                        </div>
                        <div class="form-group">
                            <label class="payout-request-note d-block pt-4" for="amount">{{ __('Report Us') }}</label>
                            <textarea id="report" rows="5" name="report" class="form-control form--message" placeholder="{{ __('Report Here') }}"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Close') }}</button>
                        <button type="submit" class="btn btn-primary">{{ __('Send Report') }}</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection


@section('scripts')
    <script src="{{ asset('assets/backend/js/sweetalert2.js') }}"></script>
    <script>
        (function($) {
            "use strict";

            $(document).ready(function() {

                $(document).on('click', '.edit_payment_status_modal', function(e) {
                    e.preventDefault();
                    let modalContainer = $('#editPaymentStatusModal');
                    let order_id = $(this).data('id');
                    modalContainer.find('input[name="order_id"]').val(order_id);
                    $('.nice-select').niceSelect('update');
                });


                $(document).on('click', '.edit_status_modal', function(e) {
                    e.preventDefault();
                    let order_id = $(this).data('id');
                    let status = $(this).data('status');

                    $('#order_id').val(order_id);
                    $('#status').val(status);
                    $('.nice-select').niceSelect('update');
                });

                //report us
                $(document).on('click', '.report_add_modal', function () {
                    let el = $(this);
                    let buyer_id = el.data('buyer_id');
                    let service_id = el.data('service_id');
                    let order_id = el.data('order_id');
                    let form = $('#reportModal');
                    form.find('#buyer_id').val(buyer_id);
                    form.find('#service_id').val(service_id);
                    form.find('#order_id').val(order_id);
                });

            });

        })(jQuery);

    </script>
@endsection
