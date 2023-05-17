@extends('layout.master')
@section('title')
Order 
@endsection
@section('content')

<div class="card">
    <div class="card-header">
        <div class="card-title">
            <h2>Order {{ $order->id }}</h2>
        </div>
    </div>
    <div class="card-body">
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Customer Name</div>
            <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="{{ $order->user->name }}" disabled></div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Customer Email</div>
            <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="{{ $order->user->email }}" disabled></div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Order Amount</div>
            <div class="col-6 col-lg-3"><input type="text" class="form-control" id="" value="Rp. {{ number_format($order->transaction->amount) }}" disabled></div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2 my-auto">Order Status</div>
            <div class="col-6 col-lg-3">
                                @if ($order->transaction->status_id==2)
                                  <div class="btn btn-sm btn-danger">Canceled</div>
                                @elseif ($order->status==0)
                                    <div class="btn btn-sm btn-warning">Pending</div>
                                @else
                                    <div class="btn btn-sm btn-success">Done</div>
                                @endif
            </div>
        </div>
        <div class="row fs-4 mb-5">
            <div class="col-6 col-lg-2">Order Items</div>
        </div>
        <ul>
            @foreach ($order->cartOrder as $cartItem)
            <li class="mw-200px mb-5">
                <div class="bg-light form-control">{{ $cartItem->product->name }} : {{ $cartItem->qty }}</div>
            </li>
            @endforeach
        </ul>
        @if (auth()->user()->role_id==1)
          @if ($order->transaction->status_id==1)
          <button id="updateStatusButton" class="btn btn-primary">Order Done</button>
          @endif
        @endif
        <p class="card-text">
            <strong>Updated At:</strong> {{ $order->updated_at }}
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
            orderId: '{{ $order->id }}'
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