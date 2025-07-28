

@extends('user.layouts.main')
@push('title')
<title>Dashboard - Users</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="my-4">Dashboard</h1>
            <!-- <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
            <div class="row">
                <div class="col-xl-6 col-md-6 ">
                    <div class="card bg-info text-white mb-4">
                        <div class="card-body mx-auto">
                            <img src="{{asset('dashboard/assets/img/user.png')}}" style="width: 160px;" alt="">
                        </div>

                        <div class="my-3">
                            <h5 class="text-center text-dark">Arti Gupta</h5>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 ">
                    <div class="card bg-info text-white mb-4" style="height: 250px;">
                        <div class="card-body mx-auto my-4">
                            <h5 class="text-dark ">Billing Address</h5>
                            <h6 class="text-dark"> maiores ratione illum sed amet laudantium nihil quo .</h6>

                            <span class="text-dark"> <strong>Email:</strong> artigupta781787@gmail.com</span> <br>

                            <span class="text-dark"> <strong>Phone:</strong> +91 542376898</span> <br>
                        </div>


                    </div>
                </div>


            </div>

            <div class="row">
                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4>Recent Orders</h4>
                            <div class=" ms-auto ">
                                <a href="{{url('user/order-history')}}" class="text-decoration-none btn btn-dark btn-sm ">View All</a>

                            </div>
                        </div>

                        <div class="mt-3">
                            <table id="example" class="display">

                                <thead>
                                    <tr>
                                        <th scope="col">Order Id</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>22-07-2025</td>
                                        <td>₹ 1499.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-warning">Processing</span>
                                            <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">002</th>
                                        <td>22-07-2025</td>
                                        <td>₹ 1499.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-info">On thhe way</span>
                                            <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">001</th>
                                        <td>22-07-2025</td>
                                        <td>₹ 1499.00</td>
                                        <td>
                                            <span class="badge rounded-pill text-bg-success">Delevered</span>
                                            <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                        </td>
                                    </tr>
                                </tbody>






                            </table>
                        </div>

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