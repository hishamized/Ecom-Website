<!-- Shopping Cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20" >Shopping Cart</h5>

        <!-- Shopping Cart Items -->
        <div class="row">
            <div class="col-sm-9">
                <!-- Cart Item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/products/1.png" alt="Cart 1" class="img-fluid" style="height: 120px;">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                        <small>By Samsung</small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14"> 20,054 Ratings </a>
                        </div>
                        <!-- Product Ratings  -->

                        <!-- Product Qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button data-id="pro1" class="qty-up border bg-light"> <i class="fas fa-angle-up"></i> </button>
                                <input data-id="pro1" type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button data-id="pro1" class="qty-down border bg-light"> <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right" >Delete</button>
                            <button type="submit" class="btn font-baloo text-danger" >Save For Later</button>
                        </div>
                        <!-- !Product Qty -->

                        <!-- !Product Ratings  -->
                    </div>
                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $ <span class="product_price" >152</span>
                        </div>
                    </div>
                </div>
                <!-- !Cart Item -->

                <!-- Cart Item -->
                <div class="row border-top py-3 mt-3">
                    <div class="col-sm-2">
                        <img src="./assets/products/2.png" alt="Cart 1" class="img-fluid" style="height: 120px;">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="font-baloo font-size-20">Samsung Galaxy 10</h5>
                        <small>By Samsung</small>
                        <div class="d-flex">
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <a href="#" class="px-2 font-rale font-size-14"> 20,054 Ratings </a>
                        </div>
                        <!-- Product Ratings  -->

                        <!-- Product Qty -->
                        <div class="qty d-flex pt-2">
                            <div class="d-flex font-rale w-25">
                                <button class="qty-up border bg-light" data-id="pro2"> <i class="fas fa-angle-up"></i> </button>
                                <input data-id="pro2"  type="text" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                <button class="qty-down border bg-light" data-id="pro2" > <i class="fas fa-angle-down"></i> </button>
                            </div>
                            <button type="submit" class="btn font-baloo text-danger px-3 border-right" >Delete</button>
                            <button type="submit" class="btn font-baloo text-danger" >Save For Later</button>
                        </div>
                        <!-- !Product Qty -->

                        <!-- !Product Ratings  -->
                    </div>
                    <div class="col-sm-2 text-right">
                        <div class="font-size-20 text-danger font-baloo">
                            $ <span class="product_price" >152</span>
                        </div>
                    </div>
                </div>
                <!-- !Cart Item -->
            </div>

            <!-- Subtotal Section -->
            <div class="col-sm-3">
                <div class="sub-total border text-center mt-2">
                    <h6 class="font-rale font-size-12 text-success py-3"> <i class="fas fa-check"></i> Your order is eligible for free delivery </h6>
                    <div class="border-top py-4">
                        <h5 class="font-size-20 font-baloo " >Subtotal (2 item) : &nbsp; <span class="text-danger"> $  <span class="text-danger" id="deal-price"> 152.00 </span> </span> </h5>
                        <button type="submit" class="btn btn-warning mt-3">Proceed To Buy</button>
                    </div>
                </div>
            </div>
            <!-- !Subtotal Section -->

        </div>
        <!-- !Shopping Cart Items -->
    </div>
</section>
<!-- !Shopping Cart -->