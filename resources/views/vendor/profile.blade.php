@extends('vendor.includes.main')

@push('title')
<title>Profiles</title>
@endpush

@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container p-4">
            <div class="card p-4">


                <div class="row">
                    <!-- Left Column: Form -->
                    <div class="col-xl-8 col-md-8">
                        <h4>Basic Infrormation</h4>
                        <div class="row mt-3">
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Identification Number</label>
                                <input type="text" class="form-control" placeholder="Pan number">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Business Name</label>
                                <input type="text" class="form-control" placeholder="Astha Animation pvt.ltd">
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">User Name</label>
                                <input type="text" class="form-control" placeholder=" arti gupta">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" placeholder="artigupta781787@gmail.com">
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Phone Number</label>
                                <input type="text" class="form-control" placeholder="+91">
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

        

        <div class="card p-4 mt-3">


            <div class="row mt-5">
                <!-- Left Column: Form -->
                <div class="col-lg-12 col-md-12">
                    <h4>Business Information</h4>
                    <div class="row mt-3">
                        <div class="col-lg-12 mb-3">
                            <label class="form-label">Business Type</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select Business Type</option>
                                <option value="1">Sole Proprietorship</option>
                                <option value="2">Partnership</option>
                                <option value="3">Corporation</option>
                            </select>
                        </div>


                        <div class="col-lg-6 mb-3">
                            <label class="form-label">GST No.</label>
                            <input type="text" class="form-control" placeholder="ABC123456">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Business Category</label>
                            <input type="text" class="form-control" placeholder="gupta">
                        </div>


                    </div>
                </div>





            </div>


        </div>


          <div class="card p-4 mt-3 ">


            <div class="row mt-5">
                <!-- Left Column: Form -->
                <div class="col-xl-12 col-md-12">
                    <h4>Payment Information</h4>
                    <div class="row mt-3">
                        <div class="col-lg-6 mb-3">
                            <label class="form-label">Bank Account Number.</label>
                            <input type="text" class="form-control" placeholder="869797987">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label"> Prefered Business Type</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected> Select Business method</option>
                                <option value="1">Paypal</option>
                                <option value="2">Bank Transfer</option>
                                <option value="3">E Wallet</option>
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