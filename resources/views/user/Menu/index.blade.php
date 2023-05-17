@extends('layout.master')
@section('title')
Menu
@endsection
@section('content')
<a href="/cart" class="floating-button btm ctr" id="indexToCart">
  <div class="card bg-kaliper w-300px w-xl-400px rounded-3 shadow">
    <div class="my-2 mx-5">
      <div class="row align-items-center">
        <div class="col text-start d-flex">
          <!--begin::Svg Icon | path: assets/media/icons/duotune/ecommerce/ecm001.svg-->
          <span class="svg-icon svg-icon-dark svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path opacity="0.3" d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z" fill="black"/>
            <path opacity="0.3" d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z" fill="black"/>
            <path opacity="0.3" d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z" fill="black"/>
            <path d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z" fill="black"/>
            </svg>
          </span>
          <!--end::Svg Icon-->
          <h3 class="my-auto ms-3"><span>{{$totalItem}}</span> Items</h3>
        </div>
        <div class="col text-end d-flex justify-content-end">
          <h3 class="my-auto me-3">Rp. {{number_format($totalPrice) }}</h3>
          <i class="fas fa-angle-right display-2 text-dark"></i>
        </div>
        
      </div>
    </div>
  </div>
</a>

<div class="card">
  <div class="card-header">
    <div class="card-title">
      Menu
    </div>
  </div>
  <div class="card-body">
    @foreach($categories as $category)

    <h2 class="mb-5">{{ $category->name }}</h2>
    {{-- <ul>
        @foreach($productsByCategory[$category->id] as $product)
            <li>{{ $product->name }}</li>
        @endforeach
    </ul> --}}
    <div class="row row-cols-2 row-cols-md-5 row-cols-lg-6">
      @foreach($productsByCategory[$category->id] as $product)
      <div class="col mb-4 mh-200px mw-200px">
          <a href="/menu/{{ $product->id }}">
              <div class="card position-relative mw-150px mh-150px mw-lg-200px mh-lg-200px">
                <div class="mw-150px mh-150px mw-lg-200px mh-lg-200px rounded"  style="position: relative; overflow: hidden;">
                    <img class="img-fluid"
                    src="{{ asset('storage/' . $product->image) }}" 
                    alt="">
                </div>
                  <div class="card-img-overlay d-flex align-items-end">
                    <div class="bottom-10 w-100 text-center">
                      <h5 class="card-title text-light">{{ $product->name }}</h5>
                      <p class="card-text fs-6 btn-light rounded">Rp. {{number_format($product->harga) }}</p>
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



  
  
@endsection