@extends('layout.master')
@section('title')
Menu Detail
@endsection
@section('content')
<div class="floating-button btm ctr" >
  <div class="card bg-kaliper w-300px w-xl-400px rounded-3 shadow">
    <div class="my-2 mx-5">
      <div class="row align-items-center">
        <div class="col text-start d-flex">

          {{-- <!--begin::Svg Icon | path: assets/media/icons/duotune/ecommerce/ecm001.svg-->
          <span class="svg-icon svg-icon-dark svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path opacity="0.3" d="M18.041 22.041C18.5932 22.041 19.041 21.5932 19.041 21.041C19.041 20.4887 18.5932 20.041 18.041 20.041C17.4887 20.041 17.041 20.4887 17.041 21.041C17.041 21.5932 17.4887 22.041 18.041 22.041Z" fill="black"/>
            <path opacity="0.3" d="M6.04095 22.041C6.59324 22.041 7.04095 21.5932 7.04095 21.041C7.04095 20.4887 6.59324 20.041 6.04095 20.041C5.48867 20.041 5.04095 20.4887 5.04095 21.041C5.04095 21.5932 5.48867 22.041 6.04095 22.041Z" fill="black"/>
            <path opacity="0.3" d="M7.04095 16.041L19.1409 15.1409C19.7409 15.1409 20.141 14.7409 20.341 14.1409L21.7409 8.34094C21.9409 7.64094 21.4409 7.04095 20.7409 7.04095H5.44095L7.04095 16.041Z" fill="black"/>
            <path d="M19.041 20.041H5.04096C4.74096 20.041 4.34095 19.841 4.14095 19.541C3.94095 19.241 3.94095 18.841 4.14095 18.541L6.04096 14.841L4.14095 4.64095L2.54096 3.84096C2.04096 3.64096 1.84095 3.04097 2.14095 2.54097C2.34095 2.04097 2.94096 1.84095 3.44096 2.14095L5.44096 3.14095C5.74096 3.24095 5.94096 3.54096 5.94096 3.84096L7.94096 14.841C7.94096 15.041 7.94095 15.241 7.84095 15.441L6.54096 18.041H19.041C19.641 18.041 20.041 18.441 20.041 19.041C20.041 19.641 19.641 20.041 19.041 20.041Z" fill="black"/>
            </svg>
          </span>
          <!--end::Svg Icon--> --}}

          <div class="input-group input-group-sm">
            <button class="btn btn-icon h-30px w-30px h-xl-40px w-xl-40px btn-warning rounded-circle" type="button" id="minus-btn"><i class="fas fa-minus"></i></button>
            <input type="number" class="form-control text-center h-xl-40px w-xl-40px h-30px mw-50px mx-2 rounded no-border" id="Quantity" value="1">
            <button class="btn btn-icon h-30px w-30px h-xl-40px w-xl-40px btn-warning rounded-circle" type="button" id="plus-btn"><i class="fas fa-plus"></i></button>
          </div>
        </div>
        
        <div class="col text-end d-flex justify-content-end">
          <h3 class="my-auto me-3"><span id="subtotal"></span></h3>

          <div class="add-to-cart" data-product-id="{{ $product->id }}">
            <i class="fas fa-angle-right display-2 text-dark"></i>
          </div>

        </div>
        
      </div>
    </div>
  </div>
</div>

<div class="mx-xl-20">
  <div class="card">
    <div class="card-header">
      <div class="card-title">
        <a href="/menu" class="btn btn-icon btn-light-warning rounded-circle me-5">
          <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="">Menu Details</h1>
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-md-3 mb-3 mb-md-0">
          <div class="mw-125px mh-125px mw-lg-300px mh-lg-400px rounded"  style="position: relative; overflow: hidden;">
            <img class="img-fluid"
            src="{{ asset('storage/' . $product->image) }}" 
            alt="">
        </div>
        </div>
        <div class="col-md-9">
        <div class="row">
            <h2>{{ $product->name }}</h2>
        </div>
        <div class="row">
          <p class="fs-6">{{ $product->desc }}</p>
        </div>

        @if($product->category->id == 2)
          <div class="row">
            <div class="col-6 col-lg-2">
              <label for="myRadio" class="mb-2">
                <h3>Ice?</h3>
              </label>
              <div class="radio-group mb-5">
                <div class="radio">
                  <input type="radio" name="ice" value="0" class="radInput" id="myRadio1">
                  <label class="radLabel" for="myRadio1">Hot</label>
                  <input type="radio" name="ice" value="1" class="radInput" id="myRadio2">
                  <label class="radLabel" for="myRadio2">Iced</label>
                </div>
              </div>
            </div>
            <div class="col-6 col-xl-4">
              
            </div>
            
          </div>

          <div class="row">
              <label for="myRadio1" class="fs-4 mb-2">
                <h3>Sugar Level?</h3>
              </label>
              <div class="radio-group">
              <div class="radio">
                <input type="radio" name="Sugar" value="0" class="radInput" id="myRadio3">
                <label class="radLabel" for="myRadio3">None</label>
                <input type="radio" name="Sugar" value="1" class="radInput" id="myRadio4">
                <label class="radLabel" for="myRadio4">1</label>
                <input type="radio" name="Sugar" value="2" class="radInput" id="myRadio5">
                <label class="radLabel" for="myRadio5">2</label>
                <input type="radio" name="Sugar" value="3" class="radInput" id="myRadio6">
                <label class="radLabel" for="myRadio6">3</label>
                <input type="radio" name="Sugar" value="4" class="radInput" id="myRadio7">
                <label class="radLabel" for="myRadio7">4</label>
              </div>
            </div>
          </div>
        @endif
        </div>
      </div>
    </div>
  </div>

  
</div>

<script>
  
  $(document).ready(function () {
    // Function to format number as Indonesian Rupiah (IDR)
    function formatCurrency(number) {
      return new Intl.NumberFormat("id-ID", {
        style: "currency",
        currency: "IDR"
      }).format(number);
    }
    var customValue = {{ $product->harga }};
    $("#subtotal").text(formatCurrency(customValue));
    
    function sub() { 
      var quantity = $("#Quantity").val(); // Get quantity value
       // Custom value to multiply with quantity
      var subtotal = quantity * customValue; // Calculate subtotal
      $("#subtotal").text(formatCurrency(subtotal)); // Update subtotal element
    }

    // Increase quantity on plus button click
    $("#plus-btn").on("click", function() {
      var quantity = parseInt($("#Quantity").val()); // Get current quantity value
      quantity++; // Increment quantity
      $("#Quantity").val(quantity); // Update quantity input
      sub(); // Trigger input event to update subtotal
    });

    // Decrease quantity on minus button click
    $("#minus-btn").on("click", function() {
      var quantity = parseInt($("#Quantity").val()); // Get current quantity value
      if (quantity > 1) {
        quantity--; // Decrement quantity
        $("#Quantity").val(quantity); // Update quantity input
        sub() // Trigger input event to update subtotal
      }
    });

    $('.add-to-cart').click(function() {
      event.preventDefault();
        var quantity = $("#Quantity").val(); // You could also make this dynamic
        var productId = $(this).data('product-id');
        var ice = null // You could also make this dynamic
        var suga = null // You could also make this dynamic
        
        if ({{$product->category->id}} === 2) {
          ice = $('input[name="ice"]:checked').val();
          suga = $('input[name="Sugar"]:checked').val();
          if (typeof ice === 'undefined' && typeof suga === 'undefined') {
            toastr.warning('Please select an Iced/Hot option and a Sugar option');
            return;
          }
          if (typeof suga === 'undefined') {
            toastr.warning('Please select a Sugar level option');
            return;
          }
          if (typeof ice === 'undefined') {
            toastr.warning('Please select an Iced level option');
            return;
          }
          
        }
        console.log(ice);
        console.log(suga)
        console.log(quantity)
        console.log(productId)

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type: 'POST',
            url: '{{ route('cart.add') }}',
            data: {
                product_id: productId,
                quantity: quantity,
                iced: ice,
                sugar: suga,
            },
            success: function(response) {
              var message = response.message
                if (response.success) {
                  Swal.fire({
                      icon: 'success',
                      title: 'Success',
                      text: 'Product has been added to cart!',
                      showCancelButton: false,
                      confirmButtonText: 'OK',
                      allowOutsideClick: false
                  }).then((result) => {
                      if (result.isConfirmed) {
                          window.location.href = '/menu';
                      }
                  });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Failed to add product to cart! Message: '+ message,
                        showCancelButton: false,
                        confirmButtonText: 'OK',
                        allowOutsideClick: false
                    });
                }
            },
            error: function(xhr, status, error) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'An error occurred while adding product to cart! Message : '+ error,
                    showCancelButton: false,
                    confirmButtonText: 'OK',
                    allowOutsideClick: false
                });
            }
        });

    });
  });

</script>

@endsection
