<head>
    <meta charset="utf-8">
    <title> Digital Marketing </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
 
 <section>
        {{ View::make('header') }}
        @yield('content')
    </section>
    <section class="section-wraper">
        <div class="text-wraper">
            <h6 class = "title">Digital</h6>
            <h6 class = "sub-title">Marketing</h6>
            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing.
                Vestibulum rutrum metus at enim congue scelerisque.
                Sad suscipit metu non iaculis semper consectetur adipiscing elit</p>
                    <button class="btn-lernmore btn-link" onclick="window.location.href='{{ url('/Learn_More') }}'">LEARN MORE</button>
        </div>
        <div class="image-wraper" >
            <img class="image" src="css\illustration.jpg">
        </div>
</section>