@extends('layouts.app')
@section('content')



<h1>{{$user->profile->description}}</h1>
<h1>{{$user->profile->number}}</h1>
<img src="{{asset('images/vendorImage/profileUserImage/'.$user->profile->image)}}" style="width:70px;height:70px"/>
<h2>{{$item->name}}</h2>
<h2>{{$item->description}}</h2>
<h2>{{$item->price}}</h2>
<img src="{{asset('images/vendorImage/addItemProductImage/'.$item->image)}}" style="width:70px;height:70px"/>


            <!--product start-->
            <div class="container-fluid  justify-content-center ">
                <h1 id="" class="row shadow-sm mb-5 p-3 text-capitalize font-weight-light justify-content-center text_pink bg-light border-bottom border-left border-right">product and seller information</h1>
                <div class="row  bg-light rounded shadow-sm mx-5 mt-5">
                    <img id="" src="https://ae01.alicdn.com/kf/HTB1250xB2iSBuNkSnhJq6zDcpXao.jpg?width=800&height=800&hash=1600"
                     alt="product" class="col-md-4 col-sm-12 p-0 rounded-left img-thumbnail" width="100px">
                    <div class="col-md-8 col-sm-12 p-5 border rounded">

                        <h2 class="row text-capitalize mb-2 text-dark-blue" id="">{{$item->name}}</h2>
                        <div class="d-flex justify-content-between mr-5">
                        <div  id="" class="lead font-weight-normal text-dark-blue mb-1">20.00<span class="font-weight-bolder"> $</span>

                        </div>
                        <ul class=" list-inline mb-0 mt-2">
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text-muted"></i></li>
                          </ul>
                    </div>
                        <hr>
                        Product Describtion :
                        <p id="" class="mt-3 text-dark">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                        </p>
                    </div>
                </div>
            </div>
            <!--/.product end-->

            <!--seller start-->
            <div class="container-fluid my-5">
                <div class="row p-2 justify-content-center">

                  <div class="col-md-5 col-sm-12 " >
                    <div class="row col-12 mb-2 justify-content-center">
                        <h2 class="text-capitalize text-dark-blue mr-5 ml-5" id="">{{$user->name}}</h2>
                        <ul class=" list-inline mb-0 mt-2">
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                            <li class="list-inline-item mr-0"><i class="fa fa-star text_pink"></i></li>
                          </ul>
                        </div>
                        <div class="text-center mx-5">
                          <img id="" src="https://webeminence.com/wp-content/uploads/2017/05/personal-photos-website-1.jpg" width="350px" class="mb-2 img-thumbnail bg-light" alt="product">
                        </div>
                  </div>

                      <div class="col-md-7 col-sm-12 justify-content-center mt-md-5 mt-sm-2">
                        <div class="mt-1 text-dark  ">
                            <div class="row pl-4 ">
                                <div class="col-sm-3 p-2">
                                  <h6 class="mb-1"><i class="far fa-envelope"></i> Email: </h6>
                                </div>
                                <div id="" class="col-sm-8 text-secondary p-2 border-bottom">
                                  {{$user->email}}
                                </div>
                              </div>
                              <div class="row pl-4">
                                <div class="col-sm-3 p-2">
                                  <h6 class="mb-1"><i class="fas fa-mobile-alt"></i> Mobile: </h6>
                                </div>
                                <div id="" class="col-sm-8 text-secondary p-2 border-bottom">
                                  {{$user->profile->number}}
                                </div>
                              </div>
                              <div class="row pl-4">
                                <div class="col-sm-3 p-2">
                                  <h6 class="mb-1"><i class="fas fa-map-marker-alt"></i> Address: </h6>
                                </div>
                                <div id="" class="col-sm-8 text-secondary  p-2 border-bottom">
                                  {{$user->profile->location}}
                                </div>
                              </div>
                              <div class="row pl-4">
                                <div class="col-sm-3 p-2">
                                  <h6 class="mb-1">Describtion: </h6>
                                </div>
                                <div id="" class="col-sm-8 text-secondary p-2">
                                    I am a seller of clothes .I start it from 5 years, i am goning to make it bigger .
                                    all my clients become happy of our product, I hope you will be one of our clients .
                                </div>
                              </div>
                        </div>
                      </div>

                </div>
            </div>
@endsection
