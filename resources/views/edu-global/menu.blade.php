
@extends('weblayouts.app')

@section('content_box')

    @php


        $filter1 = $menuItems->filter(function ($menuItem)  {
         return $menuItem->type === "starter";
        });
         $filter2 = $menuItems->filter(function ($menuItem)  {
         return $menuItem->type === "mains";
        });
          $filter3 = $menuItems->filter(function ($menuItem)  {
         return $menuItem->type === "momo";
        });
           $filter4 = $menuItems->filter(function ($menuItem)  {
         return $menuItem->type ==="beverage";
        });
            $filter5 = $menuItems->filter(function ($menuItem)  {
         return $menuItem->type === "kids";
        });
    @endphp



        <!-- End Shop Area -->


     <!-- Start Special Menu Area -->
     <div class="special-menu-area pt-100 pb-100">
         <div class="container">
             <div class="section-title">
                 <span class="top-title">Special Menu</span>
                 <h2>The Junction Popular Menu</h2>
             </div>
             <div class="special-menu-tabs">
                 <ul class="nav nav-tabs" id="myTab" role="tablist">
                     <li class="nav-item" role="presentation">
                         <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Starter</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Mains</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Momo</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="coffee-tab" data-bs-toggle="tab" data-bs-target="#coffee-tab-pane" type="button" role="tab" aria-controls="coffee-tab-pane" aria-selected="false">Beverage</button>
                     </li>
                     <li class="nav-item" role="presentation">
                         <button class="nav-link" id="chocolate-tab" data-bs-toggle="tab" data-bs-target="#chocolate-tab-pane" type="button" role="tab" aria-controls="chocolate-tab-pane" aria-selected="false">Kids</button>
                     </li>
                 </ul>
                 <div class="tab-content" id="myTabContent">
                     <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                         <div class="single-special-menu-content">
                             <div class="row">
                                 @foreach($filter1 as $menuItem)
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card shop-area">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4 single-shop-cart" >
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-5.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>{{$menuItem->name}}</h3>
                                                     </a>
                                                     <p>{{$menuItem->description}}</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>{{$menuItem->price}}</span>
                                                 </div>
                                             </div>

                                             <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                                 @csrf
                                                 <input type="hidden" name="menu_item_id" value="{{ $menuItem->id }}">
                                                 <input type="hidden" name="quantity" value="1" required >

                                                 <div class="shop-btn">
                                                     <button class="default-btn" type="submit">Add to Cart</button>
                                                 </div>
                                             </form>
                                         </div>
                                     </div>
                                 </div>

                                 @endforeach

                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                         <div class="single-special-menu-content">
                             <div class="row">
                                 @foreach($filter2 as $menuItem)
                                     <div class="col-lg-6 col-md-6">
                                         <div class="special-card shop-area">
                                             <div class="row align-items-center">
                                                 <div class="col-lg-3 col-4 single-shop-cart" >
                                                     <div class="special-menu-img">
                                                         <a href="menu-details.html">
                                                             <img src="assets/images/menu/menu-page-img-5.webp" alt="images">
                                                         </a>
                                                     </div>
                                                 </div>
                                                 <div class="col-lg-6 col-6">
                                                     <div class="special-menu-text">
                                                         <a href="menu-details.html">
                                                             <h3>{{$menuItem->name}}</h3>
                                                         </a>
                                                         <p>{{$menuItem->description}}</p>
                                                     </div>
                                                 </div>
                                                 <div class="col-lg-3 col-2">
                                                     <div class="special-menu-number">
                                                         <span>{{$menuItem->price}}</span>
                                                     </div>
                                                 </div>
                                                 <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                                     @csrf
                                                     <input type="hidden" name="menu_item_id" value="{{ $menuItem->id }}">
                                                     <input type="hidden" name="quantity" value="1" required >

                                                     <div class="shop-btn">
                                                         <button class="default-btn" type="submit">Add to Cart</button>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>

                                 @endforeach

                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                         <div class="single-special-menu-content">
                             <div class="row">
                                 @foreach($filter3 as $menuItem)
                                     <div class="col-lg-6 col-md-6">
                                         <div class="special-card shop-area">
                                             <div class="row align-items-center">
                                                 <div class="col-lg-3 col-4 single-shop-cart" >
                                                     <div class="special-menu-img">
                                                         <a href="menu-details.html">
                                                             <img src="assets/images/menu/menu-page-img-5.webp" alt="images">
                                                         </a>
                                                     </div>
                                                 </div>
                                                 <div class="col-lg-6 col-6">
                                                     <div class="special-menu-text">
                                                         <a href="menu-details.html">
                                                             <h3>{{$menuItem->name}}</h3>
                                                         </a>
                                                         <p>{{$menuItem->description}}</p>
                                                     </div>
                                                 </div>
                                                 <div class="col-lg-3 col-2">
                                                     <div class="special-menu-number">
                                                         <span>{{$menuItem->price}}</span>
                                                     </div>
                                                 </div>
                                                 <form action="{{ route('cart.add') }}" method="POST" style="display: inline;">
                                                     @csrf
                                                     <input type="hidden" name="menu_item_id" value="{{ $menuItem->id }}">
                                                     <input type="hidden" name="quantity" value="1" required >

                                                     <div class="shop-btn">
                                                         <button class="default-btn" type="submit">Add to Cart</button>
                                                     </div>
                                                 </form>
                                             </div>
                                         </div>
                                     </div>

                                 @endforeach

                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="coffee-tab-pane" role="tabpanel" aria-labelledby="coffee-tab" tabindex="0">
                         <div class="single-special-menu-content">
                             <div class="row align-items-center">
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4">
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-1.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>Vieness Veal Cultech</h3>
                                                     </a>
                                                     <p>Fresh beware coffe</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>$32</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4">
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-2.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>Sea Bass Ceviche</h3>
                                                     </a>
                                                     <p>2/3 streamed milk, 1/3 espresso</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>$32</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4">
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-3.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>Grill Veal Fielt Mignon</h3>
                                                     </a>
                                                     <p>Fresh beware coffe</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>$38</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4">
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-4.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>Cafe Alatee</h3>
                                                     </a>
                                                     <p>1/3 milk foam, 1/3 hot milk, 1/3 espresso</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>$56</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="tab-pane fade" id="chocolate-tab-pane" role="tabpanel" aria-labelledby="chocolate-tab" tabindex="0">
                         <div class="single-special-menu-content">
                             <div class="row justify-content-center">
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4">
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-5.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>Cappucino</h3>
                                                     </a>
                                                     <p>1/2 milk, 1/2 espresso, ice, caramel</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>$28</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4">
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-1.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>Vieness Veal Cultech</h3>
                                                     </a>
                                                     <p>Fresh beware coffe</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>$32</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="col-lg-6 col-md-6">
                                     <div class="special-card">
                                         <div class="row align-items-center">
                                             <div class="col-lg-3 col-4">
                                                 <div class="special-menu-img">
                                                     <a href="menu-details.html">
                                                         <img src="assets/images/menu/menu-page-img-2.webp" alt="images">
                                                     </a>
                                                 </div>
                                             </div>
                                             <div class="col-lg-6 col-6">
                                                 <div class="special-menu-text">
                                                     <a href="menu-details.html">
                                                         <h3>Sea Bass Ceviche</h3>
                                                     </a>
                                                     <p>2/3 streamed milk, 1/3 espresso</p>
                                                 </div>
                                             </div>
                                             <div class="col-lg-3 col-2">
                                                 <div class="special-menu-number">
                                                     <span>$32</span>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- End Special Menu Area -->







@endsection
