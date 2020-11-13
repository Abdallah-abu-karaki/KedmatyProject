@extends('layouts.vendorSide')

@section('content')


    <!--vendor-statistics-->
    <section class="statistics">
        <div class="container">
            <h4 class="statistics-head mb-3 text-center" style="color: #ffa600;">statistics</h4>

            <div class="row">
                <div class="col-lg-4">
                    <div class="statistics-card text-center">
                        <img src="{{asset('images/vendorImage/homeVendorImage/sta.jpg')}}" />
                        <h5>Added products</h5>
                        <br />
                        <p>product name</p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="statistics-card text-center">
                        <img src="{{asset('images/vendorImage/homeVendorImage/sta1.jpg')}}" />
                        <h5>out of stock</h5>
                        <br />
                        <p>product name</p>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="statistics-card text-center">
                        <img src="{{asset('images/vendorImage/homeVendorImage/sta3.jpg')}}" />
                        <h5>Best seller</h5>
                        <br />
                        <p>product name</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--products-->

    <div class="container">
        <h4 class="statistics-head mb-3 text-center" style="color: #ffa600;">Added products</h4>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card main-card">
                    <img src="{{asset('images/vendorImage/homeVendorImage/slick7.jpeg')}}" class="card-img-top" alt="#" />
                    <div class="card-body">
                        <h5 class="card-title pr-name">product name</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <p class="card-text car-text">Lorem ipsum dolor sit amet, consectetur.</p>

                        <span class="card-price">10.48 jd</span>
                        <br />
                        <button type="button" class="card-btn-update">Update</button>
                        <button type="button" class="card-btn-delete">Delete</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card main-card">
                    <img src="{{asset('images/vendorImage/homeVendorImage/slick1.jpeg')}}" class="card-img-top" alt="#" />
                    <div class="card-body">
                        <h5 class="card-title pr-name">product name</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <p class="card-text car-text">Lorem ipsum dolor sit amet, consectetur.</p>


                        <span class="card-price">10.48 jd</span>
                        <br />
                        <button type="button" class="card-btn-update">Update</button>
                        <button type="button" class="card-btn-delete">Delete</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card main-card">
                    <img src="{{asset('images/vendorImage/homeVendorImage/slick3.jpeg')}}" class="card-img-top" alt="#" />
                    <div class="card-body">
                        <h5 class="card-title pr-name">product name</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <p class="card-text car-text">Lorem ipsum dolor sit amet, consectetur.</p>


                        <span class="card-price">10.48 jd</span>
                        <br />
                        <button type="button" class="card-btn-update">Update</button>
                        <button type="button" class="card-btn-delete">Delete</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                <div class="card main-card">
                    <img src="{{asset('images/vendorImage/homeVendorImage/slick2.jpeg')}}" class="card-img-top" alt="#" />
                    <div class="card-body">
                        <h5 class="card-title pr-name">product name</h5>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <span class="fa fa-star n-cheched"></span>
                        <p class="card-text car-text">Lorem ipsum dolor sit amet, consectetur.</p>


                        <span class="card-price">10.48 jd</span>
                        <br />
                        <button type="button" class="card-btn-update">Update</button>
                        <button type="button" class="card-btn-delete">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
