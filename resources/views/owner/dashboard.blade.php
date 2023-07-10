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

      <div class="position-fixed top-0 end-0 p-3" style="width: 400px;">
        

        <div class="card mb-5">
          <div class="card-header">
            <h5 class="card-title">Top 10 Loyal Customer</h5>
          </div>
          <div class="card-body">
            @for ($i = 0; $i < 10; $i++)
                @if (isset($topUsers[$i]))
                    <div class="row mt-n1">
                        <div class="col-2 text-end">
                            <h5>
                              {{ $i+1 }}.
                            </h5>
                        </div>
                        <div class="col-5">
                          <h5>
                            {{ $topUsers[$i]->name }}
                          </h5>
                      </div>
                        <div class="col">
                            <h5>
                                : {{ $topUsers[$i]->total_amount/1000 }} Points
                            </h5>
                        </div>
                    </div>
                @else
                    <div class="row mt-n1">
                        <div class="col-2 text-end">
                            <h5>
                                {{ $i+1 }}.
                            </h5>
                        </div>
                        <div class="col-5">
                        </div>
                        <div class="col">
                            <h5>
                                :
                            </h5>
                        </div>
                    </div>
                @endif
            @endfor

            
          </div>
        </div>

        <div class="card mb-5">
          <div class="card-header">
            <h5 class="card-title">Operational Hours</h5>
          </div>
          <div class="card-body">
            @foreach ($hour as $item)
            <div class="row">
              <div class="col">
                {{ $item->day }}
              </div>
              <div class="col">
                {{ substr($item->open, 0, 5) }} - {{ substr($item->close, 0, 5) }}
              </div>
            </div>
            @endforeach
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
