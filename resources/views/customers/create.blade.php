@extends('layouts.classfied-layout')
@section('page-title')
Contact Us
@endsection
@section('page-body')
    
<section id="content" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-xs-12">

                <form method="POST" action="{{route('customers.store')}}">
                    @csrf
                    <h2 class="contact-title">
                        Send Message Us
                        @if (Session('success'))
                            <p>{{session('success')}}</p>
                        @endif
                    </h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name" value="{{old('name')}}" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" id="email" value="{{old('email')}}" name="email" placeholder="Email"
                                            required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="msg_subject" value="{{old('phone')}}" name="phone"
                                            placeholder="Phone" required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" id="submit" class="btn btn-common">Submit Now</button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</section>
@endsection