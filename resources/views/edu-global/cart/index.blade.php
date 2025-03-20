`@extends('weblayouts.app')

<style>
    .table th, .table td {
        border: none !important;
        text-align: center;
    }
    .table thead {
        border-bottom: 2px solid #ddd !important;
        text-align: match-parent;
    }
</style>

@section('content_box')



        <!-- Start Cart Area -->
        <div class="cart-area pt-100 pb-70" xmlns="http://www.w3.org/1999/html">
            <div class="container">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Product</th>
                            <th>Name</th>
                            <th>Unit Price</th>
                            <th >Quantity</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <div class="col-lg-12 col-md-12">
                            <div class="bottom" style="float: right">
                                <form id="clearCartForm" action="{{ route('cart.clear') }}" method="POST">
                                    @csrf
                                    <button type="button" id="clearCart" style="border: none; background: none; cursor: pointer;">
                                        <img src="assets/images/delete-bin-icon.svg" alt="Delete" style="width: 30px; height: 30px;">

                                    </button>
                                </form>
                            </div>
                        </div>

                        @php $cart = session('cart', []); @endphp

                        @if(empty($cart))
                            <tr>
                                <td colspan="6" class="text-center">
                                    <p>Your cart is empty.</p>
                                </td>
                            </tr>
                        @else
                            @foreach($cart as $id => $item)
                                <tr data-id="{{ $id }}">
                                    <td class="table-img">
                                        <a href="shop-single.html">
                                            <img src="assets/images/cart/cart-1.webp" alt="images">
                                        </a>
                                    </td>
                                    <td class="cart-text">
                                       {{ $item['name'] }}
                                    </td>
                                    <td class="item-price">{{ number_format($item['price'], 2) }}</td>
                                    <td class="cart-quantity">
                                        <div class="input-counter">
                                            <button type="button" class="minus-btn" data-id="{{ $id }}">
                                                <i class='bx bx-minus'></i>
                                            </button>
                                            <input type="text" class="quantity-input" value="{{ $item['quantity'] }}" data-id="{{ $id }}"  readonly>
                                            <button type="button" class="plus-btn" data-id="{{ $id }}">
                                                <i class='bx bx-plus'></i>
                                            </button>
                                        </div>
                                    </td>
                                    <td class="item-total">{{ number_format($item['quantity'] * $item['price'], 2) }}</td>
                                    <td>
                                        <form class="removeItemForm" action="{{ route('cart.remove', $id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="remove-item" data-id="{{ $id }}" style="border: none; background: none; cursor: pointer;">
                                                <img src="assets/images/delete-bin-icon.svg" alt="Delete" style="width: 20px; height: 20px;">
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>


                </div>

                <!-- jQuery for AJAX -->
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function () {
                        updateCartTotal();
                        function calculateCartItemCount() {
                            let totalItems = 0;

                            // Loop through all the quantity inputs and sum them up
                            $(".quantity-input").each(function() {
                                totalItems += parseInt($(this).val()) || 0; // If there's no value or it's not a valid number, default to 0
                            });

                            return totalItems;
                        }
                        function updateCartTotal() {
                            let subtotal = 0;
                            $(".item-total").each(function () {
                                subtotal += parseFloat($(this).text().replace('$', '').replace(',', ''));
                            });

                            let shipping = 30.00;  // Static shipping cost
                            let total = subtotal + shipping;

                            // Update the displayed values
                            $("#cartSubtotal").text( subtotal);
                            $("#cartShippingTotal").text(shipping);
                            $("#cartTotal").text( total);
                            $("#numberOfItems").text( calculateCartItemCount);


                        }

                        // Remove previous event listeners to prevent duplicate events
                        $(".plus-btn, .minus-btn, .remove-item, #clearCart").off("click");

                        // Increase quantity
                        $(".plus-btn").on("click", function () {
                            let id = $(this).data("id");
                            let input = $(".quantity-input[data-id='" + id + "']");
                            let newQuantity = parseInt(input.val()) + 1;

                            updateCart(id, newQuantity);
                        });

                        // Decrease quantity
                        $(".minus-btn").on("click", function () {
                            let id = $(this).data("id");
                            let input = $(".quantity-input[data-id='" + id + "']");
                            let newQuantity = parseInt(input.val()) - 1;

                            if (newQuantity < 1) return;

                            updateCart(id, newQuantity);
                        });

                        // Function to send AJAX request to update cart
                        function updateCart(id, quantity) {
                           var cart = @json(session('cart', []));
                            $.ajax({
                                url: "{{ route('cart.update') }}",
                                method: "POST",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    id: id,
                                    quantity: quantity,
                                    cart:cart

                                },
                                success: function (response) {
                                    if (response.success) {
                                        let row = $("tr[data-id='" + id + "']");
                                        let price = parseFloat(row.find(".item-price").text());
                                        row.find(".quantity-input").val(quantity);
                                        row.find(".item-total").text((price * quantity).toFixed(2));

                                        updateCartTotal();
                                    }
                                }
                            });
                        }



                        // Remove item from cart
                        $(".remove-item").on("click", function () {
                            let id = $(this).data("id");

                            $.ajax({
                                url: "{{ route('cart.remove', '') }}/" + id,
                                method: "POST",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    _method: "DELETE"
                                },
                                success: function (response) {
                                    if (response.success) {
                                        $("tr[data-id='" + id + "']").remove();
                                        updateCartTotal();
                                    }
                                }
                            });
                        });

                        // Clear cart
                        $("#clearCart").on("click", function () {
                            $.ajax({
                                url: "{{ route('cart.clear') }}",
                                method: "POST",
                                data: { _token: "{{ csrf_token() }}" },
                                success: function (response) {
                                    if (response.success) {
                                        $("tbody").html('<tr><td colspan="6" class="text-center"><p>Your cart is empty.</p></td></tr>');
                                        updateCartTotal();
                                    }
                                }
                            });
                        });



                            // Make AJAX request to the server
                            $('#checkoutButton').click(function(e) {
                                e.preventDefault();
                                var cart=null;
                                var subtotal = parseFloat($('#cartSubtotal').text());
                                var shipping = parseFloat($('#cartShippingTotal').text());
                                var total = parseFloat($('#cartTotal').text());
                                $.get('/getCart', function(response) {
                                     cart = response;
                                    console.log(cart);
                                    $.ajax({
                                        url: "{{ route('check') }}", // Ensure this route exists
                                        type: "POST",
                                        dataType: "JSON",
                                        data: {
                                            _token: "{{ csrf_token() }}",
                                            cart: cart,
                                            subtotal: subtotal,
                                            shipping: shipping,
                                            total: total
                                        },
                                        success: function(response) {
                                            if (response.redirect) {
                                                window.location.href = response.redirect; // Redirect based on server response
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.log("AJAX Error:", xhr.responseText);
                                            alert("Something went wrong: " + xhr.responseText);
                                        }
                                    });
                                });

                            });

                    });
                </script>
                             <div class="checkout">
                                 <div class="checkout-working">
                                     <h2>Cart Totals</h2>
                                     <ul>
                                         <li class="d-flex justify-content-between">
                                             <span>Subtotal</span>
                                             <span id="cartSubtotal" class="cart-number"></span>
                                         </li>
                                         <li class="d-flex justify-content-between">
                                             <span>Shipping</span>
                                             <span id="cartShippingTotal" class="cart-number"></span>
                                         </li>
                                         <li class="d-flex justify-content-between">
                                             <span>Total</span>
                                             <span id="cartTotal" class="cart-number-2"></span>
                                         </li>
                                     </ul>
                                     <a id ="checkoutButton"  class="default-btn">Proceed To Checkout<span></span></a>
                                 </div>

                                 <!-- jQuery for AJAX -->
                                 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                 <script>

                                 </script>

                             </div>
            </div>
        </div>





@endsection
`
