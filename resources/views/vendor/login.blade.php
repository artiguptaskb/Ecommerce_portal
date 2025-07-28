@extends('vendor.layouts.main')
@push('title')
<title> Vendor Login</title>
@endpush
@section('content')

<!-- <div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-user"></i>User Login</h1>
</div> -->
<!-- Cart List Section -->

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

                    <div class="col-lg-6 mt-5 p-5">
                        <form>
                            <div class="row">

                                <div class="col-lg-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" placeholder="+91">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="Password" class="form-control" placeholder="********">
                                </div>


                                <a href="{{url('vendor/login')}}" type="btn" class="btn text-light form-control form-control-lg btn-primary">Login</a>
                                <div class="text-center py-2">Dont't Have an account? <a href="{{url('vendor/signup')}}" class="text-decoration-none">Signup</a></div>

                                <div class="text-center py-1"> <a href="{{url('vendor/forget')}}" class="text-decoration-none">Forgotten Password?</a></div>
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