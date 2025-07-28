@extends('user.layouts.main')
@push('title')
<title>order-History</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="row my-5">
                <h6>Order Details: Dec 25, 2024. (3 products)</h6>
                <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3 ">
                    <h5 class="text-dark ">Billing Address</h5>
                    <h6 class="text-dark"> maiores ratione illum sed amet laudantium nihil quo .</h6>

                    <span class="text-dark"> <strong>Email:</strong> artigupta781787@gmail.com</span> <br>

                    <span class="text-dark"> <strong>Phone:</strong> +91 542376898</span>


                </div>
                <div class="col-xl-6 col-md-6 mt-3 border border-primary p-3">

                    <h5 class="text-dark ">Order Summary</h5>

                    <span class="text-dark"> <strong>Order Id:</strong> 001</span> <br>

                    <span class="text-dark"> <strong>Payment Method:</strong> Cash On Delivery</span> <br>
                    <span class="text-dark"> <strong>Subtotal:</strong> ₹ 1499.00</span> <br>
                    <span class="text-dark"> <strong>Discount:</strong> 20%</span> <br>
                    <span class="text-dark"> <strong>Shipping Fee:</strong> Free</span> <br> <br>
                    <span class="text-dark "> <strong>Total:</strong> ₹ 1499.00</span>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <div class="position-relative m-4">
                        <div class="progress" role="progressbar" aria-label="Progress" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="height: 5px;">
                            <div class="progress-bar" style="width: 80%"></div>
                        </div>

                        <!-- Button 1: 0% -->
                        <button type="button" class="position-absolute top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">1</button>

                        <!-- Button 2: 33% -->
                        <button type="button" class="position-absolute top-0 start-40 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem; left: 33%;">2</button>

                        <!-- Button 3: 66% -->
                        <button type="button" class="position-absolute top-0 start-70 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem; left: 66%;">3</button>

                        <!-- Button 4: 100% -->
                        <button type="button" class="position-absolute top-0 start-100 translate-middle btn btn-sm btn-primary rounded-pill" style="width: 2rem; height:2rem;">4</button>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="d-flex">
                    <div class="p-2 ms-5 flex-fill">Order Recived</div>
                    <div class="p-2 ms-5 flex-fill">Order Processing</div>
                    <div class="p-2 ms-5 flex-fill">On the Way</div>
                    <div class="p-2  flex-fill">Delivered</div>

                </div>
            </div>


            <div class="row my-5">
                <div class="col-lg-12">
                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <h4>Product </h4>
                                </th>
                                <th scope="col">
                                    <h4>Price</h4>
                                </th>
                                <th scope="col">
                                    <h4>Quantity</h4>
                                </th>
                                <th scope="col">
                                    <h4>Subtotal</h4>
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
                                    <div class="d-flex flex-row mb-3">
                                        <div class="p-1">

                                        </div>
                                        <div class="p-1">
                                            02


                                        </div>

                                    </div>
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
                                    <div class="d-flex flex-row mb-3">
                                        <div class="p-1">

                                        </div>
                                        <div class="p-1">
                                            01


                                        </div>

                                    </div>
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
                                    <div class="d-flex flex-row mb-3">
                                        <div class="p-1">

                                        </div>
                                        <div class="p-1">
                                            03


                                        </div>

                                    </div>
                                </td>
                                <td>₹ 799.00</td>
                            </tr>

                        </tbody>
                    </table>
                </div>

                <div class="col-lg-12 col-md-12 ms-auto my-3">

                    <div class="d-flex">
                        <div>
                            <h4>Total</h4>
                        </div>
                        <div class="ms-auto">
                            <h5>₹ 700.00</h5>
                        </div>

                    </div>
                    <hr>
                    <div class="mt-4">
                        <a href="{{url('checkout/product')}}" class=" btn theme-orange-btn text-light rounded-pill w-100  py-2 px-3">Proceed two Checkout <i class="fa-solid fa-arrow-right"></i></a>

                    </div>
                </div>
            </div>


        </div>
    </main>

      <script>
        new DataTable('#example', {
            order: [
                [3, 'desc']
            ]
        });
    </script>

    @endsection