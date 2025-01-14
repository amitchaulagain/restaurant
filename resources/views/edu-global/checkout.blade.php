
@extends('weblayouts.app')

@section('content_box')



        <!-- Start Checkout Area -->
        <div class="checkout-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="returning-customer">
                        <p>Returning Customer?<a href="login.html"> Click here to login</a></p>
                    </div>
                    <div class="col-lg-7">
                        <div class="checkout-from">
                            <form>
                                <h2>Billing details</h2>
                                <div class="row">

                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Phone</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="form-group group-contact">
                                            <textarea class="form-control" rows="5"  placeholder="Order Notes"></textarea>
                                        </div>
                                    </div>
                                </div>
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
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @if(empty($cart))
                                            <p>Your cart is empty.</p>
                                        @else

                                            @foreach($cart as $id => $item)
                                            <tr>
                                                <th scope="col"> {{ $item['name'] }}</th>
                                                <th scope="col"> {{ $item['price'] }}</th>
                                            </tr>

                                            @endforeach
                                        @endif



                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <form class="bg-albastor">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Checkout Area -->


@endsection
