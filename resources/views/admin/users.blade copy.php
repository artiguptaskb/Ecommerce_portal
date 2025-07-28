@extends('admin.includes.main')
@push('title')
<title>Admin Users</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="card p-4 mt-4">
                <div class="row">
                    <div class="row">
                        <div class="col-xl-12 col-md-12">
                            <div class="d-flex">
                                <h4>Users</h4>

                            </div>

                            <div class="mt-3">
                                <table id="example" class="display">
                                    <thead>
                                        <tr>
                                            <th scope="col">Sr. No</th>

                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Phone No.</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Arti gupta</td>
                                            <td>0068764765</td>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>
                                            <td><span class="badge text-bg-success">Unblock</span></td>
                                            <td>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-success "><i class="fa-solid fa-shield"></i></a>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-danger "><i class="fa-solid fa-ban"></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Arti gupta</td>
                                            <td>0068764765</td>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>
                                            <td><span class="badge text-bg-success">Unblock</span></td>
                                            <td>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-success "><i class="fa-solid fa-shield"></i></a>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-danger "><i class="fa-solid fa-ban"></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Arti gupta</td>
                                            <td>0068764765</td>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>
                                            <td><span class="badge text-bg-success">Unblock</span></td>
                                            <td>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-success "><i class="fa-solid fa-shield"></i></a>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-danger "><i class="fa-solid fa-ban"></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>Arti gupta</td>
                                            <td>0068764765</td>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>
                                            <td><span class="badge text-bg-danger text-center">Block</span></td>
                                            <td>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-success "><i class="fa-solid fa-shield"></i></a>
                                                <a href="{{('order-detail')}}" class="btn btn-sm text-bg-danger "><i class="fa-solid fa-ban"></i></a>

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