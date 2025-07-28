@extends('user.layouts.main')

@push('title')
<title>Settings </title>
@endpush

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container p-4">
            <div class="card p-4">


                <div class="row">
                    <!-- Left Column: Form -->
                    <div class="col-xl-8 col-md-8">
                        <h4>Account Settings</h4>
                        <div class="row mt-3">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="Arti ">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="gupta">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="artigupta781787@gmail.com">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" placeholder="+91">
                            </div>
                            <div class="col-lg-4">
                                <button class="btn btn-primary btn-sm">Save Changes</button>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Image -->
                    <div class="col-xl-4 col-md-4 mt-5 text-center">
                        <div>
                            <img src="{{asset('dashboard/assets/img/user.png')}}" style="width:150px;" alt="User Image" class="img-fluid">
                        </div>
                        <div class="mt-3">
                            <label for="image" class="form-label  btn btn-primary">Choose Image</label>
                            <input type="file" class="form-control d-none" id="image">
                        </div>
                    </div>


                </div>


            </div>

        


        <div class="card p-4 mt-4">


            <div class="row">
                <!-- Left Column: Form -->
                <div class="col-xl-12 col-md-12">
                    <h4>Billing Address</h4>
                    <div class="row mt-3">
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Country</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select your Conutry</option>
                                <option value="1">India</option>
                                <option value="2">USa</option>
                                <option value="3">Nepal</option>
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="Arti ">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="gupta">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="artigupta781787@gmail.com">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" placeholder="+91">
                        </div>
                         <div class="col-lg-6 mb-3">
                            <label class="form-label">Pin Code</label>
                            <input type="text" class="form-control" placeholder="283136">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">LandMark</label>
                            <input type="text" class="form-control" placeholder="Inida Gate">
                        </div>
                         <div class="col-lg-12 mb-3">
                            <label class="form-label">City</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select your City</option>
                                <option value="1">Loghiyana</option>
                                <option value="2">Moga</option>
                                <option value="3">Jalandhar</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">State</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select your State</option>
                                <option value="1">Punjab</option>
                                <option value="2">Bihar</option>
                                <option value="3">UP</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-primary btn-sm">Save Changes</button>
                        </div>
                    </div>
                </div>





            </div>


     
        </div>
        </div>

    </main>


@endsection