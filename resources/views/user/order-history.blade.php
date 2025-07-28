@extends('user.layouts.main')
@push('title')
<title>order-History</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4 mt-5">


            <div class="card p-4">
                <div class="row">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="d-flex">
                                <h4>Order History</h4>

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
                                            <td>₹ 1499.00 (5 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-warning">Processing</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">002</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (2 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-info">On thhe way</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">003</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">004</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">005</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">006</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">006</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">006</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">006</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">006</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
                                            <td>
                                                <span class="badge rounded-pill text-bg-success">Delevered</span>
                                                <a href="{{url('user/detail')}}" class="text-decoration-none mx-2">View Details</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">006</th>
                                            <td>22-07-2025</td>
                                            <td>₹ 1499.00 (1 products)</td>
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