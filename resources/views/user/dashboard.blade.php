@extends('layout.masterdash')
@section('title')
    Dashboard
@endsection
@section('content')
  

  <div class="floating-button btm ctr">
    <a href="/menu">
    <button class="btn btn-kaliper">Order Now</button>
    </a>
  </div>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-body">

      <div class="position-fixed top-0 end-0 p-3" style="width: 300px;">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Promo</h5>
          </div>
          <div class="card-body">
            <p class="card-text">No promo for today</p>
          </div>
        </div>
      </div>
      
    </div>

  @if(session('success'))
      <script>
          Swal.fire({
              icon: 'success',
              title: 'Success',
              text: '{{ session('success') }}',
              showCancelButton: false,
              confirmButtonText: 'OK',
              allowOutsideClick: false
          });
      </script>
  @endif
@endsection
