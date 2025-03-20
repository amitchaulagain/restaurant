
@extends('weblayouts.app')

@section('content_box')

<style>
    .order-summary {
        width: 100%;
        max-width: 400px;
        margin: auto;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
        font-size: 16px;
        color: #333;
    }

    .order-summary td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    .order-summary .subtotal {
        color: #007bff;
        font-weight: bold;
    }

    .order-summary .shipping {
        color: #28a745;
        font-weight: bold;
    }

    .order-summary .total {
        color: #d9534f;
        font-size: 18px;
        font-weight: bold;
    }

    .order-summary hr {
        border: none;
        height: 1px;
        background: #ddd;
        width: 100%;
    }

</style>

        <!-- Start Checkout Area -->
        <div class="checkout-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="returning-customer">
                        <p>Returning Customer?<a href="login.html"> Click here to login</a></p>
                    </div>
                    <div class="col-lg-7">

                        <div class="checkout-from">
                            <form class="row g-3" action="{{ route('processOrder') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <h2>Billing details</h2>
                                <div class="row">

                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" name="user_name"  class="form-control">
                                            <div class="text-danger">* @error('name') {{ $message }} @enderror</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address"  class="form-control">
                                            <div class="text-danger">* @error('address') {{ $message }} @enderror</div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email"  class="form-control">
                                            <div class="text-danger">* @error('email') {{ $message }} @enderror</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone"  class="form-control">
                                            <div class="text-danger">* @error('phone') {{ $message }} @enderror</div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="form-group group-contact">
                                            <textarea class="form-control" name="notes" rows="5"  placeholder="Order Notes"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn  btn-primary" type="submit">Submit </button>
                                </div>
                            </form>

                        </form>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="checkout-right">
                            <h2>Your Order Summary</h2>
                            <div class="single-checkout-cart">
                                <div class="table-responsive">
                                    <table class="table table-bordered">

                                        <thead>
                                            <tr>
                                                <th scope="col">Product  </th>
                                                <th scope="col">Per Unit</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(empty($cart))
                                            <p>Your cart is empty.</p>
                                        @else

                                            @foreach($cart as $id => $item)
                                            <tr>
                                                <th scope="col"> {{ $item['name'] }} ({{ $item['quantity'] }})</th>
                                                <th scope="col"> {{ $item['price'] }}</th>
                                                 <th scope="col"> {{ $item['quantity']* $item['price']}}</th>
                                            </tr>



                                            @endforeach


                                        @endif



                                        </tbody>
                                    </table>
<br>

                                    <table class="order-summary">
                                        <tr>
                                            <td>Subtotal:</td>
                                            <td class="subtotal">${{ $subtotal }}</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping:</td>
                                            <td class="shipping">${{ $shipping }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><hr></td>
                                        </tr>
                                        <tr>
                                            <td><strong>Total:</strong></td>
                                            <td class="total"><strong>${{ $total }}</strong></td>
                                        </tr>
                                    </table>


                                    </div>


                                </div>
                            </div>
                        </div>

                       {{-- <form class="bg-albastor">
                            <div class="bill-details">
                                <div class="bill-item-wrap">
                                    <div class="payment-box">
                                        <div class="payment-method">
                                            <p>
                                                <input type="radio" id="direct-bank-transfer" name="radio-group" checked="">
                                                <label for="direct-bank-transfer">Direct Bank Transfer</label>
                                                <p class="chack-text">There are many variations of passages of Lorem Ipsum available,
                                                but the majority have suffered alteration in some form, by injehu moand
                                                omised words which don't believable.</p>
                                            </p>
                                            <p>
                                                <input type="radio" id="paypal" name="radio-group">
                                                <label for="paypal">PayPal</label>
                                            </p>
                                            <p>
                                                <input type="radio" id="cash-on-delivery" name="radio-group">
                                                <label for="cash-on-delivery">Cash on Delivery</label>
                                            </p>
                                        </div>
                                        <button type="submit" class="default-btn">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </form>--}}


                </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Checkout Area -->
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
                $(document).ready(function () {
                    if (!sessionStorage.getItem("reloaded")) {
                        sessionStorage.setItem("reloaded", "true");
                        location.reload();
                    }
                });
            </script>


@endsection
