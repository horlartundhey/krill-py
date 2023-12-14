@extends('layouts.layout')

@section('content')
    
        <!-- Contact Warp Start -->
        <div class="contact-warp ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-content single-section">
                            <span class="features-title">Contact Us</span>
                            <h2>Get In Touch With Us</h2>                            
                            <div class="contact-widget d-flex align-items-center ">
                                <div class="icon-style">
                                    <div class="icon">
                                        <img src="{{url('public/assets/images/svgs/contact1.svg')}}" class="contact1" alt="contact1">
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Connect With Email</h5>
                                    <a href="mailto:hello@rible.com">support@krillpay.com</a>
                                </div>
                            </div>
                            <div class="contact-widget d-flex align-items-center ">
                                <div class="icon-style">
                                    <div class="icon">
                                        <img src="{{url('public/assets/images/svgs/contact2.svg')}}" class="contact1" alt="contact1">
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Connect With Call</h5>
                                    <a href="tel:+19387773303">+1 938-777-3303</a>
                                </div>
                            </div>
                            <div class="contact-widget d-flex align-items-center ">
                                <div class="icon-style">
                                    <div class="icon">
                                        <img src="{{url('public/assets/images/svgs/contact3.svg')}}" class="contact1" alt="contact1">
                                    </div>
                                </div>
                                <div class="content">
                                    <h5>Connect With Locations</h5>
                                    <span>Birmingham, AL, United States, Alabama</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="massage-warp">
                            <!-- <h3>Send A Message</h3> -->
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label for="exampleFormControlInput1" class="form-label">First Name</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label for="exampleFormControlInput1" class="form-label">Last Name</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <label for="exampleFormControlInput1" class="form-label">Phone</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label for="exampleFormControlInput1" class="form-label">Your Message</label>
                                            <textarea type="email" class="form-control" placeholder="Type Your Text Here......."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button class="default-btn heading-color" type="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Warp End -->
        
        
        <!-- Experience Warp End -->
        @endsection