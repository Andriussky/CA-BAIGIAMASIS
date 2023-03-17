<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/headers.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

{{--    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">--}}
</head>
<body>
@include('layouts.header')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@yield('content')
<script src="{{ asset('js/search.js') }}"></script>
{{--@include('layouts.footer')--}}
</body>
</html>
