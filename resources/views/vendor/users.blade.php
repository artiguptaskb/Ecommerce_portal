@extends('vendor.includes.main')
@push('title')
<title> Users</title>
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
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>







                                        <tr>
                                            <th>1</th>
                                            <th scope="row">006</th>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>

                                            <td>

                                                <a href="{{('order-detail')}}" class="btn btn-sm bg-warning"><i class="fa-solid fa-eye"></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th scope="row">006</th>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>

                                            <td>

                                                <a href="{{('order-detail')}}" class="btn btn-sm bg-warning"><i class="fa-solid fa-eye"></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th scope="row">006</th>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>

                                            <td>

                                                <a href="{{('order-detail')}}" class="btn btn-sm bg-warning"><i class="fa-solid fa-eye"></i></a>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>1</th>
                                            <th scope="row">006</th>
                                            <td>NIdhi@gmail.com</td>
                                            <td>Shikohabad</td>

                                            <td>

                                                <a href="{{('order-detail')}}" class="btn btn-sm bg-warning"><i class="fa-solid fa-eye"></i></a>

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