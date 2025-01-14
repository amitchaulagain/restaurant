@extends('weblayouts.app')

@section('content_box')



        <!-- Start Cart Area -->
        <div class="cart-area pt-100 pb-70" xmlns="http://www.w3.org/1999/html">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
							<tr>
                                <th>Product</th>
								<th scope="col" class="cart-text">Name </th>
								<th scope="col">Unit Price</th>
								<th scope="col" class="cart-quantity">Quantity</th>
								<th scope="col">Total</th>
								<th scope="col"></th>
							</tr>
                        </thead>

                        <tbody>

                        @if(empty($cart))
                            <p>Your cart is empty.</p>
                        @else

                         @foreach($cart as $id => $item)

                            <tr>
                                <th scope="col" class="table-img">
                                    <div class="table-icon">
                                        <a href="shop-single.html">
                                            <img src="assets/images/cart/cart-1.webp" alt="images">
                                        </a>
                                    </div>
                                </th>
                                <th scope="col" class="cart-text">
                                    <a href="cart.html">  {{ $item['name'] }}</a>
                                </th>
                                <th scope="col">
                                    {{ $item['price'] }}
                                </th>
                                <th scope="col" class="cart-quantity">
                                    <div class="pass-quantity">
                                        <div class="input-counter">
                                            <span class="minus-btn">
                                                <i class='bx bx-minus'></i>
                                            </span>
                                            <input type="text" value= {{ $item['quantity'] }}>
                                            <span class="plus-btn">
                                                <i class='bx bx-plus' ></i>
                                            </span>
                                        </div>
                                    </div>
                                </th>
                                <th scope="col">
                                   {{  $item['quantity']*$item['price'] }}
                                </th>
                                <th>
                                    <a href="#" class="delete-bin">
                                       {{-- <img src="assets/images/delete-bin-icon.svg" alt="images">--}}




                                            <form action="{{ route('cart.remove', $id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="image" src="assets/images/delete-bin-icon.svg" alt="Delete" style="width: 20px; height: 20px;">
                                            </form>
                                    </a>
                                </th>
                            </tr>
                         @endforeach
                        @endif



                        </tbody>

                    </table>

                    <div class="coupon-code">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <form class="coupon">
                                    <div class="mb-3">
                                        <div class="coupon-group-form">
                                            <input type="text" class="form-control" placeholder="Coupon-Code">
                                            <button type="submit" class="default-btn">
                                                Apply Coupon<span></span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="bottom">
                                    <form action="{{ route('cart.clear') }}" method="POST" >
                                        @csrf
                                        <input type="image" src="assets/images/delete-bin-icon.svg" alt="Delete" style="width: 20px; height: 20px;">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="checkout">
                    <div class="checkout-working">
                        <h2>Cart Totals</h2>
                        <ul>
                            <li class="d-flex justify-content-between">
                                <span>Subtotal</span>
                                <span class="cart-number">$150,00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Shipping</span>
                                <span class="cart-number">$30,00</span>
                            </li>
                            <li class="d-flex justify-content-between">
                                <span>Total</span>
                                <span class="cart-number-2">$180,00</span>
                            </li>
                        </ul>
                        <a href="/checkout" class="default-btn">Proceed To Checkout<span></span></a>
                    </div>
                </div>
            </div>
        </div>





@endsection
