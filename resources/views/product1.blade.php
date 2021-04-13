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
                                <img class="card-img-top" class="d-block w-100" src="{{ asset('images/Untitled1-.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top" class="d-block w-100" src="{{ asset('images/Untitled1-2.jpg') }}" alt="Second slide">
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
                        <span>{{ __('messages.p1.description') }}</span>
                    </div>

                    <div class="pt-5">
                        <h4 class="product-details-border"  style =" border-bottom: 4px solid #FF0000; padding-left: ($spacer * .25) "><b>{{ __('messages.neutational_header') }}</b></h4>
                        <span>{{ __('messages.neutational_subheader') }}</span>
                        <div class="pt-4">
                        <h5 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">{{ __('messages.protiens') }}
                        <div class="pull-right">7.9</div>
                        </h5>
                        </div>
                        <div class="pt-4">
                        <h5 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">{{ __('messages.fats') }}
                        <div class="pull-right">29.2</div>
                        </h5>
                        </div>
                         <div class="pt-4">
                        <h5 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">{{ __('messages.carbohydrates') }}
                        <div class="pull-right">47.3</div>
                        </h5>
                        </div>
                        <div class="pt-4">
                        <h5 >{{ __('messages.energy') }}
                        <div class="pull-right">4836</div></h5>
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
                        <span>{{ __('messages.p1.ingredients') }}</span>
                        
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.related_products') }}</h1>

                <div class="row">
                <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips1') }}">
                                <img class="card-img-top" src="{{ asset('images/chips1.png') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p1.name') }} </b></h6>
                            <span>{{ __('messages.p1.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips2') }}">
                                <img class="card-img-top" src="{{ asset('images/chips2.png') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p2.name') }} </b></h6>
                            <span>{{ __('messages.p2.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips3') }}">
                                <img class="card-img-top" src="{{ asset('images/chips3.png') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p3.name') }} </b></h6>
                            <span>{{ __('messages.p3.short_description') }}.</span>
                        </div>
                    </div>
                    
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips4') }}">
                                <img class="card-img-top" src="{{ asset('images/chips4.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p4.name') }} </b></h6>
                            <span>{{ __('messages.p4.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips5') }}">
                                <img class="card-img-top" src="{{ asset('images/chips5.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p5.name') }} </b></h6>
                            <span>{{ __('messages.p5.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips6') }}">
                                <img class="card-img-top" src="{{ asset('images/chips6.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p6.name') }} </b></h6>
                            <span>{{ __('messages.p6.short_description') }}.</span>
                        </div>
                    </div>

                    <div class="column potato" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips7') }}">
                                <img class="card-img-top" src="{{ asset('images/chips7.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p7.name') }} </b></h6>
                            <span>{{ __('messages.p7.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column potato" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips8') }}">
                                <img class="card-img-top" src="{{ asset('images/chips8.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p8.name') }} </b></h6>
                            <span>{{ __('messages.p8.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column wheatcorn" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips9') }}">
                                <img class="card-img-top" src="{{ asset('images/chips9.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p9.name') }} </b></h6>
                            <span>{{ __('messages.p9.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column wheatcorn" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips10') }}">
                                <img class="card-img-top" src="{{ asset('images/chips10.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p10.name') }} </b></h6>
                            <span>{{ __('messages.p10.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column sunflower" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips11') }}">
                                <img class="card-img-top" src="{{ asset('images/chips11.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p11.name') }} </b></h6>
                            <span>{{ __('messages.p11.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column sunflower" style="display: block">
                        <div class="content">
                            <a href="{{ route('chips12') }}">
                                <img class="card-img-top" src="{{ asset('images/chips12.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p12.name') }} </b></h6>
                            <span>{{ __('messages.p12.short_description') }}.</span>
                        </div>
                    </div>
                </div> 
            </div>

        </div>
    </div>
</section>

@endsection