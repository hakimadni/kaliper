@extends('layout.master')
@section('title')
Menu
@endsection
@section('content')
<div class="mx-auto mt-5">
    <div class="row">
      <div class="col-12">
        <div class="card border">
            <div class="card-header">
                <div class="card-title">
                    <a href="/menu" class="btn btn-icon btn-light-warning rounded-circle me-5">
                      <i class="fas fa-arrow-left"></i>
                    </a>
                    <h1 class="">Cart</h1>
                </div>
                <div class="card-toolbar">
                </div>
            </div>
          <div class="card-body">
            {{-- <div class="row">
                <div class="col-auto mw-50px">
                    <img class="mw-50px mh-50px rounded" src="{{asset("media/avatars/blank.png")}}" alt="">
                </div>
                <div class="ms-4 ms-xl-10 col-7">
                    <div class="row">
                        <p class="fs-4">
                            Kopi susu Aren
                        </p>
                    </div>
                    <div class="row">
                        <p class="fs-6 mt-n2">
                            Iced | Sugar <span>3</span>
                        </p>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm">
                            <button class="btn btn-icon h-30px w-30px h-xl-40px w-xl-40px btn-light rounded-circle" type="button" id="minus-btn"><i class="fas fa-minus"></i></button>
                            <input type="number" class="form-control text-center h-xl-40px w-xl-40px h-30px mw-50px mx-2 rounded no-border" id="Quantity" value="1">
                            <button class="btn btn-icon h-30px w-30px h-xl-40px w-xl-40px btn-light rounded-circle" type="button" id="plus-btn"><i class="fas fa-plus"></i></button>
                          </div>
                    </div>
                </div>
                <div class="col ">
                    <div class="row">
                        <p class="fs-4 text-end">
                            13.000
                        </p>
                    </div>
                    <div class="row h-30px"></div>
                    <div class="row text-end">
                        <i class="fas fa-trash fs-2x"></i>
                    </div>
                </div>
            </div> --}}
            @foreach($cartItems as $cartItem)
              <div class="row cart-item mb-5" data-cart-id="{{ $cartItem->id }}">
                <div class="col-auto ">
                    <div class="mw-50px mh-50px mw-lg-100px mh-lg-100px rounded"  style="position: relative; overflow: hidden; ">
                        <img class="img-fluid"
                        src="{{ asset('storage/' . $cartItem->product->image) }}" 
                        alt="">
                    </div>
                    
                </div>
                <div class="col-7">
                    <div class="row">
                        <p class="fs-4">{{ $cartItem->product->name }}</p>
                    </div>
                    <div class="row">
                        <p class="fs-6 mt-n2">
                            @if ($cartItem->iced == 1)
                                Iced
                            @else
                                Hot
                            @endif | Sugar Level {{ $cartItem->sugar_level }}
                        </p>
                    </div>
                    <div class="row">
                        <div class="input-group input-group-sm">
                            <button class="btn btn-icon h-30px w-30px h-xl-40px w-xl-40px btn-light rounded-circle minus-btn" type="button">
                                <i class="fas fa-minus"></i>
                            </button>
                            <input type="number" class="form-control text-center h-xl-40px w-xl-40px h-30px mw-50px mx-2 rounded no-border qty-input" value="{{ $cartItem->qty }}">
                            <button class="btn btn-icon h-30px w-30px h-xl-40px w-xl-40px btn-light rounded-circle plus-btn" type="button">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="col ">
                    <div class="row">
                        <p class="fs-4 text-end">Rp. <span class="subt">{{ number_format($cartItem->product->harga * $cartItem->qty) }}</span></p>
                    </div>
                    <div class="row h-30px"></div>
                    <div class="row">
                        <div class="col text-end">
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-icon delete-cart-item"><i class="fas fa-trash fs-1"></i></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
          
            @endforeach

          </div>
        </div>
      </div>
    </div>
  </div>
@if ($cartItems->isEmpty())
<a href="" class="floating-button ctr btm">
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
            <h3 class="ms-5 my-auto">Checkout</h3>

        </div>
        <div class="col text-end d-flex justify-content-end">
            <h3 class="my-auto me-3 ">Cart Empty!</span></h3>
            <i class="fas fa-angle-right display-2 text-dark"></i>
        </div>
        
        </div>
    </div>
    </div>
</a>
@else
<a href="{{ route('member.transaction.store') }}" class="floating-button ctr btm">
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
            <h3 class="ms-5 my-auto">Checkout</h3>

        </div>
        <div class="col text-end d-flex justify-content-end">
            <h3 class="my-auto me-3 ">Rp. <span class="total">{{number_format($totalPrice) }}</span></h3>
            <i class="fas fa-angle-right display-2 text-dark"></i>
        </div>
        
        </div>
    </div>
    </div>
</a>
@endif
  

      <script>
        // $(document).ready(function () {
        //   // Function to format number as Indonesian Rupiah (IDR)
        //   function formatCurrency(number) {
        //     return new Intl.NumberFormat("id-ID", {
        //       style: "currency",
        //       currency: "IDR"
        //     }).format(number);
        //   }
        //   var customValue = 5000;
        //   $("#subtotal").text(formatCurrency(customValue));
          
        //   function sub() { 
        //     var quantity = $("#Quantity").val(); // Get quantity value
        //      // Custom value to multiply with quantity
        //     var subtotal = quantity * customValue; // Calculate subtotal
        //     $("#subtotal").text(formatCurrency(subtotal)); // Update subtotal element
        //   }
      
        //   // Increase quantity on plus button click
        //   $("#plus-btn").on("click", function() {
        //     var quantity = parseInt($("#Quantity").val()); // Get current quantity value
        //     quantity++; // Increment quantity
        //     $("#Quantity").val(quantity); // Update quantity input
        //     sub(); // Trigger input event to update subtotal
        //   });
      
        //   // Decrease quantity on minus button click
        //   $("#minus-btn").on("click", function() {
        //     var quantity = parseInt($("#Quantity").val()); // Get current quantity value
        //     console.log(quantity);
        //     if (quantity > 1) {
        //       quantity--; // Decrement quantity
        //       $("#Quantity").val(quantity); // Update quantity input
        //       sub() // Trigger input event to update subtotal
        //     }
        //   });
        // });
      


      </script>

      <script>
        $('.delete-cart-item').on('click', function() {
            var cartItemId = $(this).closest('.cart-item').data('cart-id');
    
            $.ajax({
                url: '{{ route('cart.delete') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}', 
                    itemId: cartItemId
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: response.message
                    }).then(function() {
                        // Perform any additional actions after success if needed
                        // For example, you can reload the page or update the cart summary
                        location.reload();
                    });
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to delete cart item'
                    });
                }
            });
        });
        <!-- Update cart item quantity -->
        $(document).on('click', '.minus-btn, .plus-btn', function(e) {
            e.preventDefault();
            var input = $(this).closest('.input-group').find('.qty-input');
            var subt = $(this).closest('.cart-item').find('.subt');
            var totalc = $('.total');
            var currentQty = parseInt(input.val());
            var newQty = currentQty;
            if ($(this).hasClass('minus-btn')) {
                if (currentQty > 1) {
                    newQty = currentQty - 1;
                } else {
                    return false;
                }
            } else {
                newQty = currentQty + 1;
            }
            
            var cartItemId = $(this).closest('.cart-item').data('cart-id');

            $.ajax({
                url: '/cart/update',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    cartItemId: cartItemId,
                    qty: newQty
                },
                success: function(response) {
                    if (response.success) {
                        input.val(newQty);
                        toastr.success(response.message +' quantity updated successfully!');
                        subt.text(response.subtotal.toLocaleString());
                        totalc.text(response.total.toLocaleString());
                    } else {
                        toastr.error('Failed to update cart item quantity!');
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('An error occurred while updating cart item quantity!');
                }
            });
        });

        <!-- Remove cart item -->
        $(document).on('click', '.remove-btn', function(e) {
            e.preventDefault();
            var cartItemId = $(this).closest('.cart-item').data('cart-id');
            $.ajax({
                url: '/cart/delete',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    cartItemId: cartItemId
                },
                success: function(response) {
                    if (response.success) {
                        $('.cart-item[data-cart-id="' + cartItemId + '"]').remove();
                        updateCartTotal(response.total);
                        toastr.success('Cart item removed successfully!');
                    } else {
                        toastr.error('Failed to remove cart item!');
                    }
                },
                error: function(xhr, status, error) {
                    toastr.error('An error occurred while removing cart item!');
                }
            });
        });

      </script>
    

@endsection