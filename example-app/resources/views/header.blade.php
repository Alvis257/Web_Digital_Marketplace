<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> Responsiv Navbar </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script>
        $(document).ready(function() {
            $('#icon').click(function() {
                $('ul').toggleClass('show');
            });
        });
    </script>
</head>


<body>
    <nav> 
    <label class="logo" href={{url('/')}}><a class="logo-link" href={{url('/')}}>LOGO</a></label>
        <ul>
            <li><a clsas="active" href="{{ url('/home') }}">Home</a></li>
            <li><a clsas="active" href="{{ url('/Service') }}">Services</a></li>
            <li><a clsas="active" href="{{ url('/About') }}">About</a></li>
            <li><a clsas="active" href="{{ url('/Contact') }}">Contact</a></li>
            <li><a clsas="active" href="{{ url('/FAQ') }}">FAQ</a></li>
            @if (Route::has('login'))
                @auth
                    <li><a href="{{ url('/home') }}">Digital Marketing</a></li>
                @else
                <li><a class="btn" href="{{ route('login') }}" role="button">SIGN UP</a> <li>
                @endauth
            @endif
        </ul>
        <label id="icon">
            <i class="fa fa-bars"></i>
        </label>
    </nav>
</body>

