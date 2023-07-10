@extends('layout.master')
@section('title')
Menu
@endsection
@section('content')
<div class="card">
  <div class="card-header">
    <div class="card-title">
      Menu Report
    </div>
    <div class="card-toolbar">
        <div class="input-group">
            <span class="input-group-text">Date Filter</span>
            <input type="text" id="dateRange" class="form-control w-250px" placeholder="{{ $startDate->format('d/m/Y') }} - {{$endDate->format('d/m/Y')}}">
        </div>          
  </div>  
  </div>
  <div class="card-body">
      @foreach($categories as $category)
        <h2 class="mb-5">{{ $category->name }}</h2>
        <div class="row row-cols-2 row-cols-md-5 row-cols-lg-6">
            @foreach($productsByCategory[$category->id]->sortByDesc('totalSold') as $product)
                @php
                @endphp
                <div class="col mb-4 mh-200px mw-200px">
                    <a href="/menu/{{ $product->id }}">
                        <div class="card position-relative mw-150px mh-150px mw-lg-200px mh-lg-200px">
                            <div class="mw-150px mh-150px mw-lg-200px mh-lg-200px rounded" style="position: relative; overflow: hidden;">
                                <img class="img-fluid" src="{{ asset('storage/' . $product->image) }}" alt="">
                            </div>
                            
                            <div class="card-img-overlay d-flex align-items-start">
                                <div class="bottom-10 w-100 text-center">
                                    <h5 class="card-title text-dark btn-light rounded">{{ $product->name }}</h5>
                                </div>
                            </div>
                            <div class="card-img-overlay d-flex align-items-end">
                                <div class="bottom-10 w-100 text-center">
                                    <p class="card-text bg-light text-dark rounded bg-opacity-75">Sales Amount: <br> Rp. {{ number_format($product->totalAmount, 2)}}</p>
                                    <p class="card-text bg-light text-dark rounded bg-opacity-75">Qty Sold: {{ $product->totalSold }}</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
      @endforeach

    
  </div>
</div>
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
            
            var url = '/admenu?startDate=' + encodeURIComponent(startDate) + '&endDate=' + encodeURIComponent(endDate);
            window.location.href = url;
        });

        // Clear the date range and trigger an AJAX request to update the data
        $('#dateRange').on('cancel.daterangepicker', function(ev, picker) {
            $(this).val('');

            var url = '/admenu?startDate='+'&endDate=';
            window.location.href = url;
        });
    });
</script>


@endsection