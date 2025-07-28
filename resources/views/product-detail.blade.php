@extends('layouts.main')
@push('title')
<title>Product Detail</title>
@endpush
@section('content')

<div class="container-fluid bg-light p-5">
    <h1 class="text-center"><i class="fa-solid fa-layer-group"></i> Product Details</h1>
</div>
<!-- Product Section -->
<section class="my-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

                <img src="{{asset('assets/images/products/1.jpg')}}" class="rounded img-fluid" alt="...">
            </div>
            <div class="col-lg-8">

                <div>
                    <h2>Women Shoes</h2>
                    <h5>₹ 499.00</h5>
                    <div>
                        <div class="d-flex flex-row mb-3">
                            <div>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <div class="p-1 mx-2">
                                <h6 href="">(2 Customer Rating)</h6>
                            </div>
                        </div>
                    </div>


                    <div class="d-flex flex-row mb-3">
                        <div class="p-1">
                            <h6>Quantity</h6>
                        </div>
                        <div class="p-1">
                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-minus"></i></span>
                            <span class="mx-2"> 01 </span>
                            <span class="btn btn-secondary btn-sm rounded-start-pill"><i class="fa-solid fa-plus"></i></span>


                        </div>

                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis sint dolor nihil soluta ratione ipsa suscipit? Ab accusantium netur dolore earum. Nesciunt, vero?
                        Dolorem ratione accusantium dolores nihil perferendis, suscipit fuga deleniti tenetur esse consectetur cupiditate laudantium deserunt? Perspiciatslestiae iusto, suscipit non odio. Obcaecati, animi?</p>
                </div>
                <div>
                    <a href="" class="btn theme-green-btn text-light rounded-pill me-1   py-2 px-3">Add to Cart</a>
                    <a href="" class=" btn theme-orange-btn text-light rounded-pill">Buy Now</a>

                </div>



            </div>

            <div class="my-4">
                <h4>Productss Description</h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi sed quod possimus provident ut odit temporibus. Necessitatibus facilis ipsum iure quidem vero cum totam omnis eaque! Quae facere eum in!
                    Ex quae incidunt eius. Quis libero molestias nisi ipsum voluptates aspernatur, totam quod quasi est, voluptatibus animi illum. Aperiam necessitatibus quas neque laudantium itaque perspiciatis et placeat laboriosam voluptatum earum.
                    Magnam nostrum, suscipit nihil hic ipsum corporis ad sit. Iusto quia eveniet itaque beatae numquam ea accusantium, quas voluptas praesentium nobis quam hic nihil nesciunt officia quibusdam fugit. Ea, eligendi.
                    Assumenda magnam, porro nulla maxime nobis ipsam error, saepe optio sint, unde praesentium harum numquam? Ducimus, vero aliquam. Assumenda dolor ea, rem provident qui perspiciatis quis vitae? Repudiandae, dolorum accusamus?
                    Velit nesciunt explicabo, incidunt dicta eveniet dolorum vel, nam tempore natus est sunt blanditiis ut, obcaecati dolor aspernatur ipsum. Nemo in laboriosam amet eum eos voluptatibus hic. Quidem, doloremque labore.</p>

            </div>
            <div class="">
                <!-- Related Products -->
                <section class="">
                    <div class="container">

                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <h2>Related Products</h2>
                            </div>
                            <div><a href="#" class="btn text-sm rounded-pill theme-orange-btn text-light  py-2 px-3">View All</a></div>

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
            </div>
            <hr>

            <!-- Review  -->
            <section>
                <h2>02 Review</h2>
                <div class="row mt-4">
                    <div class="col-lg-1">
                        <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid" alt="...">

                    </div>
                    <div class="col-lg-11">
                        <div>
                            <h4>Jon Doe</h4>
                            <div>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h6>16 July, 2025</h6>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>

                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores eius vel magnam incidunt eum qui maxime, quasi labore mollitia sint. Esse omnis iusto officia beatae in debitis laborum nostrum incidunt?
                                Hic sed, enim labore, esse voluptatem placeat dignissimos voluptate quasi eum aspernatur odio incidunt dolores unde, repellat veniam? Minima natus libero, omnis dolorem pariatur blanditiis ipsa tempora provident deleniti sint!
                                Explicabo saepe veritatis neque amet vitae quod inventore? Nam illum doloremque debitis? Qui molestias ratione sit voluptate temporibus dolorum rerum rem aliquid ipsa, non eveniet soluta animi blanditiis repellendus iste?</p>
                            <div>
                                <a href="" class="btn btn-sm theme-orange-btn text-light rounded-pill  py-2 px-3">Reply</a>

                            </div>
                        </div>
                    </div>



                    <div class="col-lg-1  mt-4">
                        <img src="{{asset('assets/images/review/user.png')}}" class="rounded-circle img-fluid" alt="...">

                    </div>
                    <div class="col-lg-11 mt-4">
                        <div>
                            <h4>Alen Musk</h4>
                            <div>
                                <div class="d-flex">
                                    <div class="flex-grow-1">
                                        <h6>20 July, 2025</h6>
                                    </div>
                                    <div>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>

                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores eius vel magnam incidunt eum qui maxime, quasi labore mollitia sint. Esse omnis iusto officia beatae in debitis laborum nostrum incidunt?
                                Hic sed, enim labore, esse voluptatem placeat dignissimos voluptate quasi eum aspernatur odio incidunt dolores unde, repellat veniam? Minima natus libero, omnis dolorem pariatur blanditiis ipsa tempora provident deleniti sint!
                                Explicabo saepe veritatis neque amet vitae quod inventore? Nam illum doloremque debitis? Qui molestias ratione sit voluptate temporibus dolorum rerum rem aliquid ipsa, non eveniet soluta animi blanditiis repellendus iste?</p>
                            <div>
                                <a href="" class="btn btn-sm rounded-pill theme-orange-btn text-light rounded-pill  py-2 px-3">Reply</a>

                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!-- Add a Review Section -->
            <section>
                <div class="container bg-light my-5 p-5">
                    <h2>Add a Review</h2>
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="">
                                <div class="form-text">Rate This Product? *
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                    <span class="fa fa-star "></span>
                                </div>
                                <div class="row my-3">
                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control form-control-lg" placeholder="Your Name">
                                    </div>

                                    <div class="col-lg-6 mb-3">
                                        <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-12 mb-3">
                                        <textarea class="form-control form-control-lg" id="" placeholder="Your Message" rows="4"></textarea>
                                    </div>

                                    <div>
                                        <a href="" class="btn  theme-orange-btn text-light rounded-pill  py-2 px-3">Post a Comment <i class="fa-solid fa-arrow-right"></i></a>

                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>


</section>


@endsection