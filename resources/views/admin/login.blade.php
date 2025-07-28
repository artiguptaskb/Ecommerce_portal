@extends('admin.layouts.main')
@push('title')
<title> Admin Login</title>
@endpush
@section('content')



<section>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <div class="row">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <img src="{{asset('dashboard/assets/img/admin.jpg')}}" class="rounded-3 img-fluid">
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 p-5">
                        <form>
                            <div class="row">

                                <div class="col-lg-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                                    <input type="text" class="form-control" placeholder="Arti gupta">
                                </div>

                                <div class="col-lg-12 mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Password</label>
                                    <input type="Password" class="form-control" placeholder="********">
                                </div>


                                <a href="{{url('vendor/login')}}" type="btn" class="btn text-light form-control form-control-lg btn-primary">Login</a>

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