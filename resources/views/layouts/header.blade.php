<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>PURSAT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        
    </head>
    <body>

        <section id="header">
            <div class="container-fluid mobile-enable">
                
                <nav class="navbar navbar-expand-lg header navbar-light p-4 my-content mobile-enable">
                    <a class="navbar-brand ml-4 p-0"  href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-height: 45px" class="navbar-logo-size">
                    </a>
                    
                    <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                
                    <div class="collapse navbar-collapse mr-4" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item pl-3">
                                <a class="nav-link active"  href="/#products"><b>{{ __('messages.products') }}</b></a>
                            </li>
                            <li class="nav-item pl-3 ">
                                <a class="nav-link active" href="#about"><b>{{ __('messages.about') }}</b></a>
                            </li>
                            <li class="nav-item pl-3 ">
                                <a class="nav-link active" href="#contact"><b>{{ __('messages.contact') }}</b></a>
                            </li>

                            <li class="nav-item pl-3 ">
                                <select class="form-control changeLang" >
                                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="tr" {{ session()->get('locale') == 'tr' ? 'selected' : '' }}>Turkmen</option>
                                    <option value="rs" {{ session()->get('locale') == 'rs' ? 'selected' : '' }}>Russian</option>
                                </select>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div> 
        </section>

        @yield('content')


        <section id="footer" class="container-fluid">
            <div class="my-content pb-2" style=" padding-top: 36px; background-color: #2d2d2d; color: #ffffff; font-size: smaller; color: lightgray; border-radius: 0px ">
                <p style=" padding: 10px; margin: 0 auto; text-align: center; border-top: 1.5px solid #fbac2e; width: 80%; ">
                        ?? 2021 PURSAT - {{ __('messages.designed_by') }} <a href="https://galvonix.com" target="_blank">GALVONIX</a>
                </p>
            </div>
        </section>

    </body>
    <script type="text/javascript">
  
  var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

</script>
</html>