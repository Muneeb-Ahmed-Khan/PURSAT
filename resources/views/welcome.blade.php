@extends("layouts.header")
@section('content')

<section id="body">
    <div class="container-fluid">
        <div id="carouselExampleControls" class="carousel slide my-content" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_178b312c0de%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_178b312c0de%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22217.7609375%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_178b312c0de%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_178b312c0de%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22217.7609375%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22800%22%20height%3D%22400%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20800%20400%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_178b312c0de%20text%20%7B%20fill%3A%23333%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A40pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_178b312c0de%22%3E%3Crect%20width%3D%22800%22%20height%3D%22400%22%20fill%3D%22%23555%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22277%22%20y%3D%22217.7609375%22%3EThird%20slide%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Third slide">
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
            <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.OUR PRODUCTS') }}</h1>

            <div class="row">

                <div class="m-auto pl-3 pr-3 pb-2 text-center">
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('all')">{{ __('messages.ALL') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('cornwhite')">{{ __('messages.CORN WHITE CHIPS') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('potato')">{{ __('messages.PATATO CHIPS') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('wheatcorn')">{{ __('messages.WHEAT CORN SNACKS') }}</a>
                    <a type="button" class="btn btn-default filter-button" onclick="filterSelection('sunflower')">{{ __('messages.CORN WHITE CHIPS') }}</a>
                </div>

                <br>
                
                <div class="row">
                    <div class="column nature">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips1.png') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column nature">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips2.png') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column nature">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips3.png') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    
                    <div class="column cars">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips4.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column cars">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips5.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column cars">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips6.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>

                    <div class="column people">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips7.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips8.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips9.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips10.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips1.png') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                    <div class="column people">
                        <div class="content">
                            <a href="/product/name">
                                <img class="card-img-top" src="{{ asset('images/chips12.jpg') }}" alt="Mountains" style="width:100%">
                            </a>
                            <h6 class="text-strong mb-1"><b> Chips Name </b></h6>
                            <span>Text description of the chips.</span>
                        </div>
                    </div>
                </div> 
            </div>
        </div>


        <div id="about" class="my-content  pb-4">
            <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.ABOUT US') }}</h1>

            <div class="jumbotron container p-3 mb-4">
                <p>{{ __('messages.PURSAT company was established in Turkmenistan in 2014. From its start, it established itself as the market leader in the production of roasting and packaging of sunflower seeds. For several years, our company has been bringing seeds of various flavors to the consumers of our country, having won the love and trust of consumers. In 2019, it was one of the first in Central Asia to start producing potato, corn, corn wheat, wheat corn and semi-finished pellets for snacks, and also carrying out the production of roasting and packaging chips from them') }}
                </p>
            </div>

            <div class="container contact-form">
                <div class="contact-image">
                    <img src="https://image.ibb.co/kUagtU/rocket_contact.png" alt="rocket_contact">
                </div>
                <form class="p-5" method="post" action="send_email.php">
                    <h3 class="email-heading">{{ __('messages.To Get In Touch') }}</h3>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" name="txtName" class="form-control" placeholder="{{ __('messages.Your Name') }} *" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtEmail" class="form-control" placeholder="{{ __('messages.Your Email') }}*" value="">
                            </div>
                            <div class="form-group">
                                <input type="text" name="txtPhone" class="form-control" placeholder="{{ __('messages.Your PhoneNumber') }} *" value="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea name="txtMsg" class="form-control" placeholder="{{ __('messages.Your Message') }}*" style="width: 100%; height: 142px; margin-top: 0px; margin-bottom: 0px;"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12 form-group">
                            <input type="submit" name="btnSubmit" class="btn btn-danger" value="{{ __('messages.Send Message') }}">
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div id="contact" class="my-content pb-4">
            <h1 class="text-center pt-5 pb-3" style="font-weight: bold; font-size: 40px; color: black; ">{{ __('messages.CONTACT US') }}</h1>

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
                    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
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