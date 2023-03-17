@extends('layouts.admin.main')
@section('content')
<body>
@if (Route::has('login'))
    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
        @auth
{{--            <a href="{{ url('/admin') }}" class="admins">Admin</a>--}}
        @else
            <a href="{{ route('login') }}" class="admins">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="admins">Register</a>
            @endif
        @endauth

    </div>
@endif
</body>
@endsection
