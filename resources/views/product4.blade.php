@extends("layouts.header")
@section('content')

<section id="body">
    <div class="container-fluid">
        <div class="my-content">
            <div class="row">
                <div class="col-md-5">
                    <div id="carouselExampleControls" class="carousel slide my-content" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="card-img-top" class="d-block w-100" src="{{ asset('images/Untitled4-.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top" class="d-block w-100" src="{{ asset('images/Untitled4-2.jpg') }}" alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 pt-5">
                    <div class="pt-4">
                        <h4 class="product-details-border  mr- $spacer * 3" style =" border-bottom: 4px solid #FF0000" ><b>{{ __('messages.description') }}</b></h4>
                        <span>{{ __('messages.p4.description') }}</span>
                    </div>

                    <div class="pt-5">
                        <h4 class="product-details-border"  style =" border-bottom: 4px solid #FF0000; padding-left: ($spacer * .25) "><b>{{ __('messages.neutational_header') }}</b></h4>
                        <span>{{ __('messages.neutational_subheader') }}</span>
                        <div class="pt-4">
                            <h6 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">
                                {{ __('messages.protiens') }}
                                <div class="pull-right">7.9</div>
                            </h6>
                        </div>
                        <div class="pt-4">
                            <h6 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">
                                {{ __('messages.fats') }}
                                <div class="pull-right">29.2</div>
                            </h6>
                        </div>
                        <div class="pt-4">
                            <h6 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">
                                {{ __('messages.carbohydrates') }}
                                <div class="pull-right">47.3</div>
                            </h6>
                        </div>
                        <div class="pt-4">
                            <h6 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">
                                {{ __('messages.energy') }}
                                <div class="pull-right">4836</div>
                            </h6>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-5 mb-2 p-2">
                        <div>
                            <img src="{{ asset('images/stamp1.jpeg') }}" width="120px" alt="Health Stamp"/>
                        </div>
                        <div>
                            <img src="{{ asset('images/stamp2.jpeg') }}" width="120px" alt="Health Stamp"/>
                        </div>
                    </div>

                    <div class="pt-5">
                        <h4 class="product-details-border" style =" border-bottom: 4px solid #FF0000"><b>{{ __('messages.ingredients_header') }}</b></h4>
                        <span>{{ __('messages.p4.ingredients') }}</span>
                        
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.related_products') }}</h1>

                <div class="row">
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips1') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips1.png') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p1.name') }} </b></h6>
                            <span>{{ __('messages.p1.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips2') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips2.png') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p2.name') }} </b></h6>
                            <span>{{ __('messages.p2.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips3') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips3.png') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p3.name') }} </b></h6>
                            <span>{{ __('messages.p3.short_description') }}.</span>
                        </div>
                    </div>
                    
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips5') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips5.jpg') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p5.name') }} </b></h6>
                            <span>{{ __('messages.p5.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips6') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips6.jpg') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p6.name') }} </b></h6>
                            <span>{{ __('messages.p6.short_description') }}.</span>
                        </div>
                    </div>
                    
                </div> 
            </div>

        </div>

        <div id="about" class="my-content  pb-4">
            <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.about_us') }}</h1>

            <div class="jumbotron container p-3 mb-4">
                <p>{{ __('messages.about_company') }}</p>
            </div>

            <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact">
                </div>
                <form class="p-5" method="post" action="{{ route('contactform.store') }}">
                @csrf
                    <h3 class="email-heading">{{ __('messages.contact_header') }}</h3>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="{{ __('messages.your_name') }} *" value="">
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="{{ __('messages.your_email') }} *" value="">
                            </div>
                            <div class="form-group">
                                <input type="text"  name="phone"  class="form-control" placeholder="{{ __('messages.your_ph') }} *" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="body" class="form-control" placeholder="{{ __('messages.your_message') }} *" style="width: 100%; height: 142px; margin-top: 0px; margin-bottom: 0px;"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 form-group">
                            <input type="submit" name="btnSubmit" class="btn btn-danger" value="{{ __('messages.send_message') }} ">
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div id="contact" class="my-content pb-4">
            <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.contact_us') }}</h1>

            <div class="row p-5 pb-2">
                <div class="col-lg-4">
                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        Garashsyzlyk d/b, Vekilbazar district, Mary province, Turkmenistan, 745405
                    </div>
                </div>
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +993 65 817525
                    </div>
                    <div>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        +993 558 64143
                    </div>
                    <div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        info@snackpelletchips.com
                    </div>
                    <div>
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        ishfaqkhattak@gmail.com
                    </div>
                </div>
            </div>

            <div class="p-4 pt-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6202.41542244911!2d61.85234657513251!3d37.6541451602106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzfCsDM5JzE4LjYiTiA2McKwNTEnMDguNCJF!5e1!3m2!1sen!2s!4v1618410986784!5m2!1sen!2s" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

@endsection