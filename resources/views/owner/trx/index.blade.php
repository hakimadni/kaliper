
@extends('layout.master')
@section('title')
Transaction
@endsection
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            Sales
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <div class="input-group">
                <span class="input-group-text">Date Filter</span>
                <input type="text" id="dateRange" class="form-control w-250px" placeholder="{{ $startDate->format('Y/m/d') }} - {{$endDate->format('Y/m/d')}}">
            </div>     
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
            <canvas class="w-100 mh-600px" id="salesChart"></canvas>
    </div>
    <!--end::Card body-->
</div>

<div class="card mt-10">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
                <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers">
            </div>
            <!--end::Search-->
        </div>
        <!--begin::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Toolbar-->
            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                <!--begin::Filter-->
                <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z" fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->Filter</button>
                <!--begin::Menu 1-->
                <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true" id="kt-toolbar-filter">
                    <!--begin::Header-->
                    <div class="px-7 py-5">
                        <div class="fs-4 text-dark fw-bolder">Filter Options</div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Separator-->
                    <div class="separator border-gray-200"></div>
                    <!--end::Separator-->
                    <!--begin::Content-->
                    <div class="px-7 py-5">
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-5 fw-bold mb-3">Month:</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <select class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                            data-kt-select2="true" data-placeholder="Select option"
                            data-allow-clear="true" data-kt-customer-table-filter="month"
                            data-dropdown-parent="#kt-toolbar-filter" data-select2-id="select2-data-10-8i9y"
                            tabindex="-1" aria-hidden="true">
                                <option data-select2-id="select2-data-12-fh7c"></option>
                                <option value="jan">January</option>
                                <option value="feb">February</option>
                                <option value="mar">March</option>
                                <option value="apr">April</option>
                                <option value="may">May</option>
                                <option value="jun">June</option>
                                <option value="jul">July</option>
                                <option value="aug">August</option>
                                <option value="sep">September</option>
                                <option value="oct">October</option>
                                <option value="nov">November</option>
                                <option value="dec">December</option>
                            </select>
                            
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-5 fw-bold mb-3">Payment Type:</label>
                            <!--end::Label-->
                            <!--begin::Options-->
                            <div class="d-flex flex-column flex-wrap fw-bold" data-kt-customer-table-filter="payment_type">
                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                    <input class="form-check-input" type="radio" name="payment_type" value="all" checked="checked">
                                    <span class="form-check-label text-gray-600">All</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3 me-5">
                                    <input class="form-check-input" type="radio" name="payment_type" value="credit_card">
                                    <span class="form-check-label text-gray-600">Credit Card</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid mb-3">
                                    <input class="form-check-input" type="radio" name="payment_type" value="mastercard">
                                    <span class="form-check-label text-gray-600">Gopay</span>
                                </label>
                                <!--end::Option-->
                                <!--begin::Option-->
                                <label class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="radio" name="payment_type" value="american_express">
                                    <span class="form-check-label text-gray-600">American Express</span>
                                </label>
                                <!--end::Option-->
                            </div>
                            <!--end::Options-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button type="reset" class="btn btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true" data-kt-customer-table-filter="reset">Reset</button>
                            <button type="submit" class="btn btn-primary" data-kt-menu-dismiss="true" data-kt-customer-table-filter="filter">Apply</button>
                        </div>
                        <!--end::Actions-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Menu 1-->
                <!--end::Filter-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Group actions-->
            <div class="d-flex justify-content-end align-items-center d-none" data-kt-customer-table-toolbar="selected">
                <div class="fw-bolder me-5">
                <span class="me-2" data-kt-customer-table-select="selected_count"></span>Selected</div>
                <button type="button" class="btn btn-danger" data-kt-customer-table-select="delete_selected">Delete Selected</button>
            </div>
            <!--end::Group actions-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <div id="kt_customers_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="table-responsive">
                <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_customers_table">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="">
                                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1">
                                </div>
                            </th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Customer Name: activate to sort column ascending" style="width: 156.781px;">Customer Name</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 204.734px;">Email</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Payment Method: activate to sort column ascending" style="width: 156.781px;">Payment Method</th>
                            <!-- Add new table headers for the additional columns -->
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Amount: activate to sort column ascending" style="width: 156.781px;">Amount</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 156.781px;">Status</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Transaction Code: activate to sort column ascending" style="width: 156.781px;">Transaction Code</th>
                            <th class="text-end min-w-70px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 118.438px;">Actions</th>
                            <th class="min-w-125px sorting" tabindex="0" aria-controls="kt_customers_table" rowspan="1" colspan="1" aria-label="Created Date: activate to sort column ascending" style="width: 163.734px;">Updated Date</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="fw-bold text-gray-600">
                        @foreach ($Trx as $trx)
                        <tr>
                            <!--begin::Checkbox-->
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1">
                                </div>
                            </td>
                            <!--end::Checkbox-->
                            <!--begin::Name=-->
                            <td>
                                <a href="../../demo1/dist/apps/customers/view.html" class="text-gray-800 text-hover-primary mb-1">{{$trx->user->name}}</a>
                            </td>
                            <!--end::Name=-->
                            <!--begin::Email=-->
                            <td>
                                <a href="#" class="text-gray-600 text-hover-primary mb-1">{{$trx->user->email}}</a>
                            </td>
                            <!--end::Email=-->
                            <!--begin::Payment method=-->
                                @if ($trx->status_id==0)
                                <td>
                                    <div class="btn btn-sm btn-warning">Pending</div>
                                </td>
                                @else
                                <td data-filter="credit_card">
                                    @php
                                    $method = ucwords(str_replace('_', ' ', $trx->payment_method));
                                    if ($method == 'Qris') {
                                        $src = '/media/logos/qrcode-solid.svg';
                                    }else if($method == 'Gopay'){
                                        $src = '/media/logos/Gopay_logo.svg';
                                    }else{
                                        $src = '/media/svg/card-logos/mastercard.svg';
                                    }
                                    @endphp 
                                    <img src="{{$src}}" class="w-30px h-30px me-3 " alt="">
                                    {{$method}}
                                </td>        
                                @endif
                            <!--end::Payment method=-->
                            <!--begin::Amount=-->
                            <td >Rp. {{number_format($trx->amount)}}</td>
                            <!--end::Amount=-->
                            <!--begin::Status=-->
                            <td >
                                @if ($trx->status_id==0 || $trx->status_id==3)
                                    <div class="btn btn-sm btn-warning">Pending</div>
                                @elseif ($trx->status_id==2)
                                    <div class="btn btn-sm btn-danger">Canceled</div>
                                @else
                                    <div class="btn btn-sm btn-success">Paid</div>
                                @endif
                            </td>
                            <!--end::Status=-->
                            <!--begin::Code=-->
                            <td >{{($trx->trx_code)}}</td>
                            <!--end::Code=-->
                            <!--begin::Action=-->
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                <span class="svg-icon svg-icon-5 m-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon--></a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                    @if (auth()->user()->role_id!=1&&$trx->status_id==0)
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{ route('member.transaction.storeagain', ['code' => $trx->trx_code]) }}" class="menu-link px-3">Pay</a>
                                    </div>
                                    <!--end::Menu item-->
                                    @endif
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="{{route('trx.show', $trx->id)}}" class="menu-link px-3">View</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-customer-table-filter="delete_row">Delete</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </td>
                            <!--end::Action=-->
                            <td data-order="{{ $trx->updated_at }}">
                                {{ \Carbon\Carbon::parse($trx->updated_at)->format('d M Y, h:i a') }}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    <!--end::Table body-->
                </table>
            </div>
        </div>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>  
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/moment"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>

<script>
    $(function() {
        // Initialize the date range picker
        $('#dateRange').daterangepicker({
            autoUpdateInput: false, // Disable auto-updating the input field
            ranges: {
            'Today': [moment(), moment()],
            'Past 7 Days': [moment().subtract(6, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')],
            'This Year': [moment().startOf('year'), moment()],
            'Last Year': [moment().subtract(1, 'year').startOf('year'), moment().subtract(1, 'year').endOf('year')],
            },
            locale: {
                cancelLabel: 'Clear', // Customize the cancel button label
                applyLabel: 'Apply', // Customize the apply button label
                format: 'YYYY-MM-DD', // Specify the date format
            },
            startDate: '{{ $startDate }}', // Set the start date value
            endDate: '{{ $endDate }}', // Set the end date value
        });

        // When the date range changes, trigger an AJAX request to update the data
        $('#dateRange').on('apply.daterangepicker', function(ev, picker) {
            var startDate = picker.startDate.format('YYYY-MM-DD');
            var endDate = picker.endDate.format('YYYY-MM-DD');
            
            var url = '/adtrx?startDate=' + encodeURIComponent(startDate) + '&endDate=' + encodeURIComponent(endDate);
            window.location.href = url;
        });

        // Clear the date range and trigger an AJAX request to update the data
        $('#dateRange').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');

            var url = '/adtrx?startDate='+'&endDate=';
            window.location.href = url;
        });
    });
</script>

<script>
    var ctx = document.getElementById('salesChart').getContext('2d');
    var labels = {!! $labels !!};
    var data = {!! $data !!};

    var chart = new Chart(ctx, {
        type: 'bar',
        plugins: [ChartDataLabels],
        data: {
            labels: labels,
            datasets: [{
                label: 'Sales',
                data: data,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                datalabels: {
                    anchor: 'center',
                    align: 'center',
                    formatter: function(value) {
                        if (value === 0) {
                            return '0';
                        } else {
                            return 'Rp. '+value;
                        }
                    }
                }
            },
            scales: {
                x: {
                    grid: {
                        display: false
                    }
                },
                y: {
                    beginAtZero: true,
                    grid: {
                        drawBorder: false
                    },
                    ticks: {
                        callback: function(value) {
                            return value.toLocaleString('en-US', {
                                style: 'currency',
                                currency: 'IDR'
                            });
                        }
                    }
                }
            }
        }
    });
</script>


@endsection