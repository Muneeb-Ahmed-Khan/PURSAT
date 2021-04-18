@extends("layouts.header")
@section('content')

<section id="body">
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide my-content" data-ride="carousel">
            <div class="carousel-inner" style=" max-height: 600px; ">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/001.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/002.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <iframe width="100%" height="600" src="https://www.youtube.com/embed/om3EaInTW5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/004.jpg') }}" alt="Third slide">
                </div>
                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


        <div id="products" class="my-content">
            <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.our_products') }}</h1>

            <div class="row">

                <div class="m-auto pl-3 pr-3 pb-2 text-center">
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('all')">{{ __('messages.all') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('cornwhite')">{{ __('messages.c1') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('potato')">{{ __('messages.c2') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('wheatcorn')">{{ __('messages.c3') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('sunflower')">{{ __('messages.c4') }}</a>
                </div>

                <br>
                
                <div class="row">
                    <div class="column cornwhite">
                        <div class="content">
                            <a href="{{ route('chips1') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips1.png') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p1.name') }} </b></h6>
                            <span>{{ __('messages.p1.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite">
                        <div class="content">
                            <a href="{{ route('chips2') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips2.png') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p2.name') }} </b></h6>
                            <span>{{ __('messages.p2.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite">
                        <div class="content">
                            <a href="{{ route('chips3') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips3.png') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p3.name') }} </b></h6>
                            <span>{{ __('messages.p3.short_description') }}.</span>
                        </div>
                    </div>
                    
                    <div class="column cornwhite">
                        <div class="content">
                            <a href="{{ route('chips4') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips4.jpg') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p4.name') }} </b></h6>
                            <span>{{ __('messages.p4.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite">
                        <div class="content">
                            <a href="{{ route('chips5') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips5.jpg') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p5.name') }} </b></h6>
                            <span>{{ __('messages.p5.short_description') }}.</span>
                        </div>
                    </div>
                    <div class="column cornwhite">
                        <div class="content">
                            <a href="{{ route('chips6') }}">
                                <img class="card-img-top all-products" src="{{ asset('images/chips6.jpg') }}" alt="Chips">
                            </a>
                            <h6 class="text-strong mb-1"><b> {{ __('messages.p6.name') }} </b></h6>
                            <span>{{ __('messages.p6.short_description') }}.</span>
                        </div>
                    </div>
                </div>
                
                <div class="w-100 column potato">
                    <h3 class="pl-4 mb-0 mt-3"><u>PTOATO CHIPS</u></h3>
                    <div class="row pt-0">
                        <div class="column potato pt-0">
                            <div class="content">
                                <a href="{{ route('chips7') }}">
                                    <img class="card-img-top all-products" src="{{ asset('images/chips7.jpg') }}" alt="Chips">
                                </a>
                                <h6 class="text-strong mb-1"><b> {{ __('messages.p7.name') }} </b></h6>
                                <span>{{ __('messages.p7.short_description') }}.</span>
                            </div>
                        </div>
                        <div class="column potato pt-0">
                            <div class="content">
                                <a href="{{ route('chips8') }}">
                                    <img class="card-img-top all-products" src="{{ asset('images/chips8.jpg') }}" alt="Chips">
                                </a>
                                <h6 class="text-strong mb-1"><b> {{ __('messages.p8.name') }} </b></h6>
                                <span>{{ __('messages.p8.short_description') }}.</span>
                            </div>
                        </div>
                    </div>
                </div>


                <br>
                <div class="w-100 column wheatcorn">
                    <h3 class="pl-4 mb-0 mt-3"><u>WHEAT CORN SNACKS</u></h3>
                    <div class="row pt-0">
                        <div class="column wheatcorn pt-0">
                            <div class="content">
                                <a href="{{ route('chips9') }}">
                                    <img class="card-img-top all-products" src="{{ asset('images/chips9.jpg') }}" alt="Chips">
                                </a>
                                <h6 class="text-strong mb-1"><b> {{ __('messages.p9.name') }} </b></h6>
                                <span>{{ __('messages.p9.short_description') }}.</span>
                            </div>
                        </div>
                        <div class="column wheatcorn pt-0">
                            <div class="content">
                                <a href="{{ route('chips10') }}">
                                    <img class="card-img-top all-products" src="{{ asset('images/chips10.jpg') }}" alt="Chips">
                                </a>
                                <h6 class="text-strong mb-1"><b> {{ __('messages.p10.name') }} </b></h6>
                                <span>{{ __('messages.p10.short_description') }}.</span>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="w-100 column sunflower">
                    <h3 class="pl-4 mb-0 mt-3"><u>SUNFLOWER SEEDS</u></h3>
                    <div class="row pt-0">
                        <div class="column sunflower pt-0">
                            <div class="content">
                                <a href="{{ route('chips11') }}">
                                    <img class="card-img-top all-products" src="{{ asset('images/chips11.jpg') }}" alt="Chips">
                                </a>
                                <h6 class="text-strong mb-1"><b> {{ __('messages.p11.name') }} </b></h6>
                                <span>{{ __('messages.p11.short_description') }}.</span>
                            </div>
                        </div>
                        <div class="column sunflower pt-0">
                            <div class="content">
                                <a href="{{ route('chips12') }}">
                                    <img class="card-img-top all-products" src="{{ asset('images/chips12.jpg') }}" alt="Chips">
                                </a>
                                <h6 class="text-strong mb-1"><b> {{ __('messages.p12.name') }} </b></h6>
                                <span>{{ __('messages.p12.short_description') }}.</span>
                            </div>
                        </div>
                    </div>
                </div>
                

                


                <div class="row w-100">
                    
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

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>
</section>

@endsection