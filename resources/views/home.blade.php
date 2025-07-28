@extends('layouts.main')
@push('title')
<title>Home Page</title>
@endpush
@section('content')
<!-- Craousel Section -->
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/images/slider1.png')}}" class="d-block w-100" alt="slider1">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slider2.png')}}" class="d-block w-100" alt="slider2">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/images/slider3.png')}}" class="d-block w-100" alt="slider3">
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Product Section -->
<section class="my-5">
    <div class="container">

        <div class="d-flex">
            <div class="flex-grow-1">
                <h2>Top Deals</h2>
            </div>
            <div><a href="{{url('category/electronics')}}" class="btn text-sm  rounded-pill theme-green-btn text-light  py-2 px-3">View All</a></div>

        </div>

        <div class="row theme-product">

            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/1.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Campus Shoes</a></h5></a>
                        <h6 class="card-title text-center">₹ 499.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple watch</a></h5>
                        <h6 class="card-title text-center">₹ 1499.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/3.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Nike Cap</a></h5>
                        <h6 class="card-title text-center">₹ 799.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/4.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Wodden Chair</a></h5>
                        <h6 class="card-title text-center">₹ 1399.00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Best Of Electronic -->

<section class="my-5">
    <div class="container">

        <div class="d-flex">
            <div class="flex-grow-1">
                <h2>Best Of Electronics</h2>
            </div>
            <div><a href="{{url('category/electronics')}}" class="btn rounded-pill text-sm theme-green-btn text-light  py-2 px-3">View All</a></div>

        </div>

        <div class="row theme-product">

            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Camera</a></h5></a>
                        <h6 class="card-title text-center">₹ 2499.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple watch</a></h5>
                        <h6 class="card-title text-center">₹ 1499.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h5>
                        <h6 class="card-title text-center">₹ 5999.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h5>
                        <h6 class="card-title text-center">₹ 1399.00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Popular Categories -->

<section class="my-5">
    <div class="container">

        <div class="d-flex">
            <div class="flex-grow-1">
                <h2>Popular Categories</h2>
            </div>
            <div><a href="{{url('category/electronics')}}" class="btn rounded-pill text-sm theme-green-btn text-light  py-2 px-3">View All</a></div>

        </div>

        <div class="row theme-product">

            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/9.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Hand Bag</a></h5></a>
                        <h6 class="card-title text-center">₹ 799.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/2.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Apple watch</a></h5>
                        <h6 class="card-title text-center">₹ 1499.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/10.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Laptop Bag</a></h5>
                        <h6 class="card-title text-center">₹ 599.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h5>
                        <h6 class="card-title text-center">₹ 1399.00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<!-- Recenty Viewed  -->
<section class="my-5">
    <div class="container">

        <div class="d-flex">
            <div class="flex-grow-1">
                <h2>Recently Viewed</h2>
            </div>
            <div><a href="{{url('category/electronics')}}" class="btn rounded-pill text-sm theme-orange-btn text-light  py-2 px-3">View All</a></div>

        </div>

        <div class="row theme-product">

            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/5.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Camera</a></h5></a>
                        <h6 class="card-title text-center">₹ 2499.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/6.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Women Shoes</a></h5>
                        <h6 class="card-title text-center">₹ 1099.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/7.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">LED TV</a></h5>
                        <h6 class="card-title text-center">₹ 5999.00</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 text-center">

                <div class="card">

                    <a href="#"><img src="{{asset('assets/images/products/8.jpg')}}" class="card-img-top" alt="..."></a>
                    <div class="card-body">
                        <h5 class="card-title text-center"><a href="#" class="text-dark text-decoration-none">Washing Machine</a></h5>
                        <h6 class="card-title text-center">₹ 13999.00</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



@endsection