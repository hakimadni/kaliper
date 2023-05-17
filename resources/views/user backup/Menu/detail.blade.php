@extends('layout.master')
@section('title')
Menu Detail
@endsection
@section('content')
<div href="/cart" class="floating-button">
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
        </div>
        <div class="col text-end d-flex justify-content-end">
          <h3 class="my-auto me-3">Rp. 75,000</h3>
          <i class="fas fa-angle-right display-2 text-dark"></i>
        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="mx-xl-20">
  <div class="card">
    <div class="card-header">
      <h2 class="card-title">Menu details</h2>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3 mb-3 mb-md-0">
          {{-- <img src="/media/DSC00360.JPG" class="img-fluid rounded mh-500px" alt="..."> --}}
          <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/media/DSC00360.JPG" class="img-fluid rounded" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/media/DSC00337.JPG" class="img-fluid rounded" alt="...">
              </div>
              <div class="carousel-item">
                <img src="/media/DSC00324.JPG" class="img-fluid rounded" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-md-9">
        <div class="row">
            <h2>Milky Way - Banana</h2>
        </div>
        <div class="row">
          <p class="fs-6">Milk based beverages, Banana flavoured</p>
        </div>
        <div class="row">
          <div class="col-6 col-lg-2">
            <div class="radio-group mb-5">
              <div class="radio">
                <input type="radio" name="myRadio" class="radInput" id="myRadio1">
                <label class="radLabel" for="myRadio1">Hot</label>
                <input type="radio" name="myRadio" class="radInput" id="myRadio2">
                <label class="radLabel" for="myRadio2">Iced</label>
              </div>
            </div>
          </div>
          <div class="col-6 col-xl-4">
            <div class="input-group mb-5 mt-2">
                <button class="btn btn-icon btn-primary radius-start" type="button" id="minus-btn"><i class="fas fa-minus"></i></button>
              
              <input type="text" class="form-control text-center mw-50px" value="1" aria-label="Quantity" aria-describedby="quantity-selector">
              
                <button class="btn btn-icon btn-primary radius-end" type="button" id="plus-btn"><i class="fas fa-plus"></i></button>
              
            </div>
          </div>
          
        </div>

        <div class="row">
          
          <div class="radio-group">
            <div class="radio">
              <input type="radio" name="myRadio1" class="radInput" id="myRadio3">
              <label class="radLabel" for="myRadio3">None</label>
              <input type="radio" name="myRadio1" class="radInput" id="myRadio4">
              <label class="radLabel" for="myRadio4">1</label>
              <input type="radio" name="myRadio1" class="radInput" id="myRadio5">
              <label class="radLabel" for="myRadio5">2</label>
              <input type="radio" name="myRadio1" class="radInput" id="myRadio6">
              <label class="radLabel" for="myRadio6">3</label>
              <input type="radio" name="myRadio1" class="radInput" id="myRadio7">
              <label class="radLabel" for="myRadio7">4</label>
            </div>
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </div>

  
</div>

<script>
  var minusButton = document.getElementById("minus-btn");
  var plusButton = document.getElementById("plus-btn");
  var quantityInput = document.querySelector('input[type="text"][aria-label="Quantity"]');

  minusButton.addEventListener("click", function() {
    if (quantityInput.value > 1) {
      quantityInput.value--;
    }
  });

  plusButton.addEventListener("click", function() {
    quantityInput.value++;
  });
</script>

@endsection
