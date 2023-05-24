@extends('layout.master')
@section('title')
Transaction 
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h2>Transaction {{ $trx->trx_code }}</h2>
        </div>
    </div>
    <div class="card-body">
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Customer Name</div>
            <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="{{ $trx->user->name }}" disabled></div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Customer Email</div>
            <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="{{ $trx->user->email }}" disabled></div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Payment Method</div>
            <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="{{ $trx->payment_method }}" disabled></div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Payment Amount</div>
            <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="Rp. {{ number_format($trx->amount) }}" disabled></div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Payment Status</div>
            <div class="col-6 col-lg-3">
                                @if ($trx->status_id==2)
                                  <div class="btn btn-sm btn-danger">Canceled</div>
                                @elseif ($trx->status_id==3 ||$trx->status_id==null)
                                    <div class="btn btn-sm btn-warning">Pending</div>
                                @elseif ($trx->status_id==1)
                                    <div class="btn btn-sm btn-success">Done</div>
                                @endif
            </div>
        </div>
        <p class="card-text">
            <strong>Updated At:</strong> {{ $trx->updated_at }}
          </p>
    </div>
  </div>

  <script>
    $(document).ready(function() {
      $('#updateStatusButton').click(function() {
        $.ajax({
          type: 'POST',
          url: '{{ route('order.updateStatus') }}',
          data: {
            _token: '{{ csrf_token() }}',
            orderId: '{{ $trx->id }}'
          },
          success: function(response) {
            if (response.success) {
              toastr.success('Status updated successfully.');
            } else {
              toastr.error('Failed to update status.');
            }
          },
          error: function(xhr, status, error) {
            // Show an error message
            toastr.error('An error occurred while updating status.');
          }
        });
      });
    });
  </script>
  

@endsection