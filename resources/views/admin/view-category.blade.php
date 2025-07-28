@extends('admin.includes.main')
@push('title')
<title>View Category</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="card p-4 mt-4">

                <div class="row">
                    <div class="col-xl-12 col-md-12">
                        <div class="d-flex">
                            <h4>View Categories</h4>

                        </div>

                        <div class="mt-3">
                            <table id="example" class="display">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h5>Sr. No.</h5>
                                        </th>
                                        <th scope="col">
                                            <h5>Category Name</h5>
                                        </th>
                                        <th scope="col">
                                            <h5>Action</h5>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>01</td>
                                        <td>Fashion</td>
                                        <td>
                                            <a href="{{url('admin/edit-category')}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{url('admin/delete-category')}}" class="btn  btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>

                                        <td>02</td>
                                        <td>Fashion</td>

                                        <td>
                                            <a href="{{url('admin/edit-category')}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{url('admin/delete-category')}}" class="btn  btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>03</td>

                                        <td>Fashion</td>
                                        <td>
                                            <a href="{{url('admin/edit-category')}}" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                                            <a href="{{url('admin/delete-category')}}" class="btn  btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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