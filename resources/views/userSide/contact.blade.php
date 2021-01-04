@extends('layouts.app')
@section('content')

    <section class="formcontact mb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="item">
                        <span>Do not hesitate to <br>contact us</span><br><p>if you face any problem or If you are looking<br> for additional information .</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <form action="{{route('send')}}" method="POST" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" id="c-name" placeholder="Your Name">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <input type="email" name="email" id="c-email" placeholder="Your Email">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <input type="tel" name="phone" id="c-phone" placeholder="Your Phone">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <textarea id="c.message" name="message" placeholder="Write something.." style="height:200px"></textarea>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-12">
                                <input type="submit" value="Submit">
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
