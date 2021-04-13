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
                                <img class="card-img-top" class="d-block w-100" src="{{ asset('images/chips1.png') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top" class="d-block w-100" src="{{ asset('images/chips1.png') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="card-img-top" class="d-block w-100" src="{{ asset('images/chips1.png') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">{{ __('messages.Previous') }}</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">{{ __('messages.Next') }}  </span>
                        </a>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 pt-5">
                    <div class="pt-4">
                        <h4 class="product-details-border  mr- $spacer * 3" style =" border-bottom: 4px solid #FF0000" ><b>{{ __('messages.Description') }}</b></h4>
                        <span>This is some description about the content.</span>
                    </div>

                    <div class="pt-5">
                        <h4 class="product-details-border"  style =" border-bottom: 4px solid #FF0000; padding-left: ($spacer * .25) "><b>{{ __('messages.Nutrition Facts') }}</b></h4>
                        <span>{{ __('messages.Neutational Value per 100g of Product') }}</span>
                        <div class="pt-4">
                        <h5 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">{{ __('messages.Proteins(g)') }}
                        <div class="pull-right">7.9</div>
                        </h5>
                        </div>
                        <div class="pt-4">
                        <h5 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">{{ __('messages.Fat(g)') }}
                        <div class="pull-right">29.2</div>
                        </h5>
                        </div>
                         <div class="pt-4">
                        <h5 class="product-details-border" style =" border-bottom: 4px solid #D3D3D3">{{ __('messages.Carbohydrates(g)') }}
                        <div class="pull-right">47.3</div>
                        </h5>
                        </div>
                        <div class="pt-4">
                        <h5 >{{ __('messages.Energy(kcol)') }}
                        <div class="pull-right">4836</div></h5>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between mt-4 mb-4 p-2">
                        <div>
                        <img src="{{ asset('images/stamp1.jpeg') }}" alt="" width="150px"/>
                        </div>
                        <div>
                            <img src="{{ asset('images/stamp2.jpeg') }}" alt=""  width="150px"/>
                        </div>
                    </div>

                    <div class="pt-5">
                        <h4 class="product-details-border" style =" border-bottom: 4px solid #FF0000"><b>{{ __('messages.Ingredients') }}</b></h4>
                        <span>{{ __('messages.Potato Vegitable Oil(Sun Flower ,Corn and /or Canola Oil),Cheddar Jalapeno Seasoning (Chaddar Cheese[Milk Cheese Cultures ,Salt ,Enzymes],Salt,Maltodextrin[Made from Corn], Natural Flavours, Onion powder ,Whey,Spices ,Sugar ,Yeast Extract ,Lactose ,Garlic Powder , Sunflower Oil Gum Arabic, Jalapeno Pepper ,Buttermilk, Corn Oil ,Corn Syrup  Solids, Skim Milk ,Sodium Caseinate ,Sour Cream [Cultured Cream ,Skim Milk ] Paprika Extracts ,Annatto Extracts , Butter [Cream ,Salts] and Blue Cheese [Milk ,Cheese Cultures ,Salts ,Enzymes]).CONTAINS MILK INGRADIENTS') }}</span>
                        
                    </div>
                </div>
            </div>

            <div class="mt-5">
                <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.RELATED PRODUCTS') }}</h1>

                <div class="row">
                    <div class="column nature" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips1.png') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column nature" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips2.png') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column nature" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips3.png') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    
                    <div class="column cars" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips4.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column cars" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips5.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column cars" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips6.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>

                    <div class="column people" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips7.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips8.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips9.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips10.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips1.png') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people" style="display : block">
                        <div class="content">
                            <img class="card-img-top" src="{{ asset('images/chips12.jpg') }}" alt="Mountains" style="width:100%">
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                </div> 
            </div>

        </div>
    </div>
</section>

@endsection