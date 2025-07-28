@extends('vendor.layouts.main')
@push('title')
<title> Vendor Signup</title>
@endpush
@section('content')



<section>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('dashboard/assets/img/vendor.jpg')}}" class="rounded-3 img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <form>
                            <div class="row">
                                <div class="col-lg-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" placeholder="Arti gupta">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="+91">
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" class="form-control" placeholder="Artigupta@gnaul.com">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="Password" class="form-control" placeholder="********">
                                </div>
                                <div class="col-lg-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <textarea class="form-control" placeholder="Enter Your Address" id="floatingTextarea2" style="height: 100px"></textarea>


                                </div>

                                <a href="{{url('vendor/login')}}" type="btn" class="btn text-light form-control form-control-lg btn-primary">Signup</a>
                                <div class="text-center py-2"> Have an account? <a href="{{url('vendor/login')}}" class="text-decoration-none">Login</a></div>
                        </form>
                    </div>

                    <div>

                    </div>
                </div>

            </div>

        </div>

    </div>
    </div>
</section>






@endsection