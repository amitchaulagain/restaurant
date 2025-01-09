
@extends('weblayouts.app')

@section('content_box')


        <!-- Start Page Banner area -->
        <div class="pag-banner-area shop-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content">
                    <h1>Checkout</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>
            </div>
            <div class="page-banner-shape">
                <img src="assets/images/page/page-banner-shape-1.webp" alt="images">
            </div>
        </div>
        <!-- End Page Banner area -->

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
                                    <div class="col-lg-12 col-sm-6 col-md-6"> 
                                        <div class="form-group">
                                            <label class="form-label">Country</label> 
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>United Arab Emirates</option>
                                                <option value="1">united States</option>
                                                <option value="2">Austria</option>
                                                <option value="3">Italy</option>
                                                <option value="3">Spain</option>
                                                <option value="3">Japan</option>
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">First name</label> 
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Last name</label> 
                                            <input type="text" class="form-control">
                                        </div>
                                    </div> 
                                    <div class="col-lg-12 col-sm-6 col-md-6"> 
                                        <div class="form-group">
                                            <label class="form-label">Company Name</label> 
                                            <input type="text" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6"> 
                                        <div class="form-group">
                                            <label class="form-label">Address</label> 
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Town / City</label>  
                                            <input type="text" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">State / County</label>   
                                            <input type="text" class="form-control"> 
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Postcode / Zip</label>  
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
                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="payment-method">
                                            <p> 
                                                <input type="radio" id="create" name="radio-group">
                                                <label for="create">Create an account.</label>
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-6 col-md-6">
                                        <div class="payment-method">
                                            <p>
                                                <input type="radio" id="different" name="radio-group">
                                                <label for="different">Ship to a different address?</label>
                                            </p>
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
                                                <th scope="col">Product Name </th>   
                                                <th scope="col">Total</th>  
                                            </tr> 
                                        </thead> 
                                        <tbody>
                                            <tr>
                                                <th scope="col">Black Router</th>
                                                <th scope="col">$14.00</th>
                                            </tr> 
    
                                            <tr>
                                                <th scope="col">Wireless Router</th>
                                                <th scope="col">$20.00</th>
                                            </tr>
    
                                            <tr>
                                                <th scope="col">Remote Router</th> 
                                                <th scope="col">$244.00</th>
                                            </tr>
                                                        
                                            <tr class="black">
                                                <th scope="col">Black Remote</th>
                                                <th scope="col">$25.00</th>
                                            </tr>
    
                                            <tr class="card-subtotal">
                                                <th scope="col"> Cart Subtotal</th>
                                                <th scope="col">$125.00</th>
                                            </tr>
    
                                            <tr class="card-subtotal">
                                                <th scope="col">Shipping</th>
                                                <th scope="col">$5.00</th>
                                            </tr>
    
                                            <tr class="card-subtotal">
                                                <th scope="col">Order Total	</th>
                                                <th scope="col">$130.00</th>
                                            </tr>
    
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
