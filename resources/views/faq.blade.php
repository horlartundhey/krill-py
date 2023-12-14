
@extends('layouts.layout')

@section('content')
    

        <!-- About Hero Warp Start -->
        <div class="inner-hero-warp">
            <div class="container">
                <div class="inner-hero-content">
                    <h1>Some Frequently Asked Questions</h1>
                    
                </div>
            </div>
        </div>
        <!-- About Hero Warp End -->
       
        <!-- Inner Accordion Warp Start -->
        <div class="inner-accordion-warp ptb-100">
            <div class="container">
                <div class="inner-accordion-widget">
                    <div class="accordion accordion-content" id="accordionExample">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is Krillpay Digital Account
                                      </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                        <p>KrillPay digital account is your main account, for daily use. Your debit card is issued with this account. With this account you can:</p>
                                        <p>
                                          <ul>
                                            <li>Pay bills</li>
                                            <li>Transfer money, receive a money transfer</li>
                                            <li>Mobile top-up</li>
                                            <li>Send P2P transfers</li>
                                            <li>Send Payment Requests</li>
                                            <li>Check transaction history</li>
                                            <li>Receive International money transfers (for those outside the US)</li>
                                            <li>Send International money transfers (for those in the US)</li>
                                          </ul>
                                        </p>

                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How to open a KrillPay account
                                      </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                      <div class="accordion-body">
                                          <p class="text-danger">Since KrillPay is still under development, you will not be able to open an account at the moment.</p>

                                          <p>After KrillPay is launched, you will be able to open a KrillPay account via the KrillPay mobile app on your smartphone or on the web. To be eligible to open a KrillPay account, the following criteria apply:</p>

                                          <ul>
                                            <li>You're at least 18 years old</li>
                                            <li>You're a resident of a supported country</li>
                                            <li>You have a compatible smartphone</li>
                                            <li>You don't already have a KrillPay account</li>
                                            <li>You have a supported ID document, applicable to the country you're resident in. </li>
                                          </ul>
                                      </div>
                                    </div>
                                  </div>
                                  
                            </div>


                            <div class="col-lg-6">
                                <div class="accordion-item">
                                  <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      I don't have the required documents, can I still proceed?
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                      <p>To verify your identity, we ask you to take a photo of your physical identity document. We accept a variety of documents, depending on your nationality and the country you're signing up in.</p>

                                      <p>After KrillPay is launched, the list of accepted documents will be provided based on the country of your residence.
                                      </p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Inner Accordion Warp End -->
        @endsection




