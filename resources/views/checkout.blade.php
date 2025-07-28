@extends('layouts.main')
@push('title')
<title>Check out</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-cart-shopping"></i> Checkout </h1>
</div>
<!-- Billing infromation Section -->

<section>
    <div class="container my-5">
        <h2>Billing Details</h2>
        <div class="row">
            <div class="col-lg-12">
                <form action="">

                    <div class="row my-3">
                        <div class="col-lg-12 mb-3">
                            <select name="country" class="form-control form-select" aria-label="Default select example" id="">
                                <option value="">Select Your Country</option>
                                <option value="">India</option>
                                <option value="">Nepal</option>
                                <option value="">Australia</option>
                                <option value="">UK</option>
                                <option value="">USA</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control " placeholder="first Name">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control " placeholder="Last Name">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control " placeholder=" Your Phone">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control " placeholder="Your Email">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control " placeholder="Pin Code">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control" placeholder="Landmark">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <select name="city" class="form-control form-select " aria-label="Default select example" id="">
                                <option value="">Select Your City</option>
                                <option value="">Ludhina</option>
                                <option value="">Moga</option>
                                <option value="">Jalandhr</option>
                                <option value="">Phagwara</option>
                                <option value="">Malekotla</option>
                            </select>
                            <!-- <input type="text" class="form-control form-control-lg" placeholder="City"> -->
                        </div>
                        <div class="col-lg-6 mb-3">
                            <select name="state" class="form-control form-select " aria-label="Default select example" id="">
                                <option value="">Select Your State</option>
                                <option value="">Punjab</option>
                                <option value="">Gujrat</option>
                                <option value="">Goa</option>
                                <option value="">UP</option>
                                <option value="">Bihar</option>
                            </select>
                            <!-- <input type="text" class="form-control form-control-lg" placeholder="State"> -->
                        </div>
                        <div class="col-lg-12 mb-3">
                            <textarea class="form-control " id="" placeholder="Your Address" rows="4"></textarea>
                        </div>

                        <!-- <div>
                            <a href="" class="btn  theme-orange-btn text-light rounded-pill">Post a Comment <i class="fa-solid fa-arrow-right"></i></a>

                        </div> -->

                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<!-- Your Orders -->

<section>
    <div class="container ">
        <h3>Your Orders</h3>
        <div class="row  mb-5">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">
                                <h5>Product </h5>
                            </th>
                            <th scope="col">
                                <h5>Price</h5>
                            </th>
                            <th scope="col">
                                <h5>Quantity</h5>
                            </th>
                            <th scope="col">
                                <h5>Sub total</h5>
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{asset('assets/images/products/5.jpg')}}" class="rounded-3" style="width: 70px;">
                                    </div>
                                    <div class="p-3">
                                        <h5>Camera</h5>
                                    </div>
                                </div>

                            </th>
                            <th>₹ 599.00</th>
                            <td>
                                01
                            </td>
                            <td>₹ 599.00</td>
                        </tr>
                        <tr>
                            <th>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{asset('assets/images/products/9.jpg')}}" class="rounded-3" style="width: 70px;">
                                    </div>
                                    <div class="p-3">
                                        <h5>Handbag</h5>
                                    </div>
                                </div>

                            </th>
                            <th>₹ 599.00</th>
                            <td>
                                02
                            </td>
                            <td>₹ 599.00</td>
                        </tr>
                        <tr>
                            <th>
                                <div class="d-flex">
                                    <div>
                                        <img src="{{asset('assets/images/products/2.jpg')}}" class="rounded-3" style="width: 70px;">
                                    </div>
                                    <div class="p-3">
                                        <h5>Watch</h5>
                                    </div>
                                </div>

                            </th>
                            <th>₹ 799.00</th>
                            <td>
                                03
                            </td>
                            <td>₹ 799.00</td>
                        </tr>
                        <tr>
                            
                            <th colspan="3">
                                <h5> Total</h5>
                            </th>
                            <th><h5>₹ 799.00</h5></th>
                        </tr>

                    </tbody>
                </table>
            </div>


        </div>
    </div>
    </div>
</section>


<!-- Payment -->

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="form-check">
                    <input class="form-check-input" type="radio" checked name="radioDefault" id="radioDefault1">
                    <label class="form-check-label" for="radioDefault1">
                       <h4> UPI</h4>
                    </label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                    <label class="form-check-label" for="radioDefault2">
                        <h4>Credit/Debit Card</h4>
                    </label>
                </div>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2">
                <label class="form-check-label" for="radioDefault2">
                   <h4> Cash on Delivery</h4>
                </label>
            </div>
            <div>
                <a href="" class="btn  theme-orange-btn text-light rounded-pill my-4  py-2 px-3">Please Order <i class="fa-solid fa-arrow-right"></i></a>

            </div>
        </div>
    </div>
</section>


@endsection