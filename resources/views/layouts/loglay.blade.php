<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Final Project</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />

    <script src={{"https://unpkg.com/feather-icons"}}></script>

    <link rel="shortcut icon" href="{{asset ("assets/icon/logo.ico")}}" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        feather.replace();

    </script>

    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

    <!-- jQuery 1.7.2+ or Zepto.js 1.0+ -->
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script src="{{ asset('assets/js/magnific.js') }}"></script> --}}

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 200
            , });
        });

    </script>

    <script>
        const navEl = document.querySelector('.navonscroll');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navEl.classList.add('nav-onscroll');
                navEl.classList.add('navbar-dark');
                navEl.classList.add('shadow');
                navEl.classList.add('shadow');
            } else if (window.scrollY <= 50) {
                navEl.classList.remove('nav-onscroll');
                navEl.classList.remove('navbar-dark');
                navEl.classList.remove('shadow');
            }
        })

        $(document).ready(function() {
            $('.image-link').magnificPopup({
                type: 'image',

                retina: {
                    ratio: 1
                    , replaceSrc: function(item, ratio) {
                        return item.src.replace(/\.\w+$/, function(m) {
                            return '@2x' + m;
                        });
                    }
                }
            });
        });

    </script>
</body>
</html>
