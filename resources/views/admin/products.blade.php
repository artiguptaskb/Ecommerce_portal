@extends('admin.includes.main')
@push('title')
<title>Products</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="card p-4 mt-4">

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4> Products</h4>

                        </div>

                        <div class="mt-3">
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
                                            <h4>Category</h4>
                                        </th>
                                        <th scope="col">
                                            <h4>Stock</h4>
                                        </th>
                                        <th scope="col">
                                            <h4>status</h4>
                                        </th>
                                        <th scope="col">
                                            <h4>Action</h4>
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
                                        <td>₹ 599.00</td>
                                        <td>Electronics</td>
                                        <td>40</td>
                                        <td><span class="badge text-bg-success text-center">Approve</span></td>
                                        <td>
                                            <a href="{{url('vendor/edit-product')}}" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                            <a href="{{url('vendor/delete-product')}}" class="btn  btn-danger btn-sm"><i class="fa-solid fa-xmark"></i></a>
                                        </td>
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
                                        <td>₹ 599.00</td>
                                        <td>Fashion</td>
                                        <td>30</td>
                                        <td><span class="badge text-bg-success text-center">Approve</span></td>
                                        <td>
                                            <a href="{{url('vendor/edit-product')}}" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                            <a href="{{url('vendor/delete-product')}}" class="btn  btn-danger btn-sm"><i class="fa-solid fa-xmark"></i></a>
                                        </td>
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
                                        <td>₹ 599.00</td>
                                        <td>Electronics</td>
                                        <td>25</td>
                                       <td><span class="badge text-bg-danger text-center">Reject</span></td>
                                        <td>
                                            <a href="{{url('vendor/edit-product')}}" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>
                                            <a href="{{url('vendor/delete-product')}}" class="btn  btn-danger btn-sm"><i class="fa-solid fa-xmark"></i></a>
                                        </td>
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