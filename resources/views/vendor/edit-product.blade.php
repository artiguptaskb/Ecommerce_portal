@extends('vendor.includes.main')
@push('title')
<title>Dashboard - Vendor</title>
@endpush
@section('content')

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">

            <div class="card p-4 mt-4">


                <div class="row">
                    <!-- Left Column: Form -->
                    <div class="col-xl-8 col-md-8">
                        <h4>Add Product</h4>
                        <div class="row mt-3">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" value="watch">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" placeholder="₹ 1499.00">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select">
                                    <option selected>Select Category</option>
                                    <option selected value="1">Electronics</option>
                                    <option value="2">Grocery</option>
                                    <option value="3">Furniture</option>
                                    <option value="4"></option>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-3 ">
                                <label class="form-label">Stock Quantity</label>
                                <input type="text" class="form-control" value="25 pcs">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Product Description</label>

                                <textarea class="form-control" placeholder="Fill Product Description here" id="floatingTextarea2" style="height: 100px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos tenetur laborum quaerat assumenda. Soluta nisi et reprehenderit? Quisquam totam animi minima natus, non debitis quia delectus impedit explicabo, error repellat!
                                Pariatur maiores natus ducimus enim! Quas optio molestiae mollitia a neque, eos earum facilis facere possimus eum rerum recusandae labore voluptatibus suscipit tempore inventore cum reiciendis, necessitatibus sit dignissimos officia?
                                Ipsam ad ipsa eos a id fuga iste veniam blanditiis reprehenderit molestiae, minima nesciunt facere obcaecati deserunt temporibus eius consequatur explicabo. Odio natus nisi, aut mollitia modi et minima numquam.</textarea>
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-primary btn-sm">Edit Product</button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Image -->
                    <div class="col-xl-4 col-md-4 mt-5 text-center">
                        <div>
                            <img src="{{asset('dashboard/assets/img\products\2.jpg')}}" style="width:150px;" alt="User Image" class="rounded-circle">
                        </div>
                        <div class="mt-3">
                            <label for="image" class="form-label  btn btn-dark">Choose Image</label>
                            <input type="file" class="form-control d-none" id="image">
                        </div>
                    </div>


                </div>


            </div>


        </div>
    </main>






    @endsection