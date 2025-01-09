@extends('weblayouts.app')

@section('content_box')

     <!-- Start Page Banner area -->
     
       <div class="pag-banner-area portfolio-pages-area jarallax" data-jarallax='{"speed": 0.3}'>
            <div class="container">
                <div class="page-banner-content">
                    <h1>Shop</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Shop</li>
                    </ul>
                </div>
            </div>
            <div class="page-banner-shape">
                <img src="assets/images/page/page-banner-shape-1.webp" alt="images">
            </div>
        </div>
        <!-- End Page Banner area -->

        <!-- Start Shop Area -->
        <div class="shop-area pt-100 pb-100">
            <div class="container">
                
                <div class="row">
                  @foreach($menuItems as $menuItem)
             
                    <div class="col-lg-4 col-sm-6 col-md-6" data-cue="slideInUp">
                        <div class="single-shop-cart"> 
                            <div class="shop-img">
                                <a href="shop-details.html">
                                    <img src="assets/images/shop/shop-1.webp" alt="images">
                                </a>
                                
                   
                         <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                        @csrf
                        <input type="hidden" name="menu_item_id" value="{{ $menuItem->id }}">
                        <input type="number" name="quantity" value="1" min="1" required>
                        
                                <div class="shop-btn">
                                <button class="default-btn" type="submit">Add to Cart</button>
                                 </div>
                                 </form>
                            </div>
                            <div class="shop-cart"> 
                                <a href="shop-details.html">
                                    <h2>{{ $menuItem->name }}</h2>
                                </a>
                                 <a href="shop-details.html">
                                    <h2>{{ $menuItem->description }}</h2>
                                </a>
                                <span>${{ $menuItem->price }}</span>
                            </div>
                        </div>
                    </div>
                    
            @endforeach
                    
                </div>
                <div class="pagination-area">

                    <a href="shop.html" class="next page-numbers">
                        <i class='bx bx-chevron-left'></i>
                    </a> 
                    
                    <span class="page-numbers current" aria-current="page">01</span>
                    <a href="shop.html" class="page-numbers">02</a>
                    <a href="shop.html" class="page-numbers">03</a>
                    
                    <a href="shop.html" class="next page-numbers">
                        <i class='bx bx-chevron-right' ></i>
                    </a> 

                </div>
            </div>
        </div>
        <!-- End Shop Area --> 

@endsection
